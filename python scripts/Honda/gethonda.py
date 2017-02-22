import gc
import urllib2
from bs4 import SoupStrainer
from bs4 import BeautifulSoup
import re
from uritools import uricompose, urijoin, urisplit, uriunsplit
import urlparse
import requests
_digits = re.compile('\d')

#HONDA VEHICULES WEB SCRAPER

#OPEN THE ROOT URL AND PARSE IT
def openRootUrl():
	web_page = "http://www.honda.ca/vehicles"
	print 'Opening root url'
	page = urllib2.urlopen(web_page)
	print 'Parsing root web page'
	soup = BeautifulSoup(page, "html.parser")
	return soup

def deleteDuplicates(infilename, outfilename):
	lines_seen = set()
	outfile = open(outfilename, 'w')
	for line in open(infilename, 'r'):
		if line not in lines_seen:
			outfile.write(line)
			lines_seen.add(line)
	outfile.close()
	print 'DUPLICATES DELETED'

#FIND ALL CAR MODELS IN PARSED PAGE
def findCars(parsedPage):
	carList = open('car_list_raw.txt', 'w')
	print 'Looking for car models'
	counter = 0
	for car in parsedPage.findAll('div', class_='model-card'):
	    	print 'Found car '+str(counter)
		car_link = car.find('a')
		car_url = car_link.get('href')
		car_name = car.find('h3').text
		price_container = car.find('div', class_='price-container')
		car_price = price_container.find('span').next_sibling
		print 'Saving car '+str(car_name) + ' in file'
		carList.write(str(car_name)+'\n')
		carFile = open(str(car_name)+'.txt', 'w')
		carFile.write(str(car_name))
		carFile.write(str(car_price)+'\n')
		carFile.write(str(car_url)+'\n')
		carFile.close()
		counter += 1
	print 'Found '+str(counter)+' cars'
	carList.close()


#FOR EVERY CAR, MODIFY URL FOR MORE DATA
def creatingDataUrls():
    	print 'Opening car list'
    	with open('car_list.txt', 'r') as cars:
		carList = cars.readlines()
		carList = [x.strip() for x in carList] 
    		for car in carList:
    			car_file = open(str(car)+'.txt', 'r')
			car_data = car_file.readlines()
			car_file.close()
			car_data = [x.strip() for x in car_data]
			print 'Creating data url'
			car_link = 'http://www.honda.ca' + car_data[-1] + '/specs'
			car_file = open(str(car)+'.txt', 'a')
			print 'Saving data url'
			car_file.write(car_link)
			print car_link
			car_file.close()

#FOR EVERY CAR, FIND MORE DATA
def findMoreData():
    	print 'Opening car list'
    	with open('car_list.txt', 'r') as cars:
		carList = cars.readlines()
		carList = [x.strip() for x in carList] 
    		for car in carList:
    			car_file = open(str(car)+'.txt', 'r')
			car_url = car_file.readlines()[-1]
			car_file.close()
			print 'Opening data url'
			page = urllib2.urlopen(car_url)
			print 'Parsing web page'
			soup = BeautifulSoup(page, "html.parser")
			year_container = soup.find('div', class_='model-year-container')
			print 'Looking for car year'
			car_year = year_container.find('a', class_='active active-item').text
			print 'Saving car year in file'
			car_file = open(str(car)+'.txt', 'a')
			car_file.write('\n'+car_year)
			data_container = soup.find('ul', class_='accordion-list')
			all_sections = data_container.find_all('li')
			print 'Looking for fuel specs'
			fuel_section = ''
			for s in all_sections:
    				if s.find('div', class_='accordion-heading-text') is not None:
    					title = s.find('div', class_='accordion-heading-text').text
					if title[0:4] == 'FUEL':
    						print 'Fuel specs found'
    						fuel_section = s
			if fuel_section != '':
				print 'Retrieving fuel data'
				a = fuel_section.find('table', class_='model-spec-table')
				car_fuel_details = a.find_all('td')[0].find('div').text.encode('UTF-8')
				car_fuel_data = a.find_all('td')[1].text.encode('UTF-8')
				print 'Sanitizing fuel data'
				car_fuel_details = car_fuel_details.strip()
				car_fuel_details = car_fuel_details[:-19]
				car_fuel_data = car_fuel_data.strip()
				if bool(_digits.search(car_fuel_data)):
	    				car_fuel_data = car_fuel_data[-3:]
				else:
    					car_fuel_data = ''
				print 'Saving car fuel data'
				car_file.write('\n'+car_fuel_details)
				car_file.write('\n'+car_fuel_data)
			print 'Looking for tank size specs'
			tank_section = ''
			for s in all_sections:
    				if s.find('div', class_='accordion-heading-text') is not None:
    					title = s.find('div', class_='accordion-heading-text').text
					if title[0:10] == 'DIMENSIONS':
    						print 'Tank size specs found'
    						fuel_section = s
			if fuel_section != '':
				print 'Retrieving tank size data'
				a = fuel_section.find('table', class_='model-spec-table')
				b = a.find_all('tr')[3]
				#car_tank_details = b.find_all('td')[0].find('div').text.encode('UTF-8')
				car_tank_data = b.find_all('td')[1].text.encode('UTF-8')
				print 'Sanitizing tank size data'
				#car_fuel_details = car_tank_details.strip()
				car_tank_data = car_tank_data.strip()
				print 'Saving car tank size data'
				#car_file.write('\n'+car_tank_details)
				car_file.write('\n'+car_tank_data)
				car_file.close()



#DO ALL THE STUFF HERE
#OPEN MAIN URL
parsedPage = openRootUrl()
#FIND CARS IN WEB PAGE ET EXTRACT FIRST DATA
findCars(parsedPage)
#DELETE DUPLICATES IN CAR LIST
deleteDuplicates('car_list_raw.txt', 'car_list.txt')
#FREE UNREFERENCED MEMORY
gc.collect()
#FIND URLS FOR MORE DATA
creatingDataUrls()
#FIND YEAR, FUEL ECONOMY AND TANK SIZE OF CARS
findMoreData()
#FREE UNREFERENCED MEMORY
gc.collect()
print 'FINISHED !!!!'



