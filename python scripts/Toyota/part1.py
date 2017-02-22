import gc
import urllib2
from bs4 import SoupStrainer
from bs4 import BeautifulSoup
import re
from uritools import uricompose, urijoin, urisplit, uriunsplit
import urlparse
import requests

#STEP 1 : OPENING THE ROOT URL AND LOOKING FOR LINKS
file = open('urls.txt', 'w')
web_page = "https://www.toyota.ca/toyota/en/vehicles"
page = urllib2.urlopen(web_page)
soup = BeautifulSoup(page, "html.parser")

#DELETE DUPLICATES FUNCTION FOR TEXT FILE
def deleteDuplicates(infilename, outfilename):
	lines_seen = set()
	outfile = open(outfilename, 'w')
	for line in open(infilename, 'r'):
		if line not in lines_seen:
			outfile.write(line)
			lines_seen.add(line)
	outfile.close()
	print 'DUPLICATES DELETED'

#GATHERING THE LINKS IN ROOT URL
for link in soup.findAll('a', href=True):
	url = link.get('href')
	if str(url)[0] != '#':
		#request = requests.get(url)
		#if request.status_code == 200:
		file.write(str(url)+'\n')
		print str(url)

#DELETING DUPLICATES
deleteDuplicates('urls.txt','unique_urls.txt')
file.close()

#LETS FREE UNREFERENCED MEMORY
gc.collect()

#STEP 2 : LOOKING AT ALL URLS FOUND AND KEEPING ONLY THOSE POINTING TO CARS PAGES
#THE FUNCTION THAT DOES IT
def OpenLinks(file):
	#OPEN NEW FILE TO STORE DE GOOD URLS
	endfile = open('good_urls.txt', 'w')
	print str(endfile)+' OPENED'
	#OPENS 1 URL AT A TIME
	with open(file, 'r') as line:
		for link in line:	
			print 'Opening '+str(link)
			try:
				page = urllib2.urlopen(link)
				soup = BeautifulSoup(page, "html.parser")
				a = ['2017', '2016']
				if any(x in soup.title.text for x in a):
					#NOW THAT WE KNOW THE LINK IS GOOD...LETS MODIFY IT FOR LATER USAGE
					editedLink = link[:-9]
					toAddPart = 'models-specifications'
					endLink = editedLink + toAddPart
					#endfile.write(link)
					endfile.write(endLink+'\n')
					print 'GOOD LINK : '+str(soup.title.text)
					print 'MODIFYING...'
					print 'FINAL LINK IS '+str(endLink)+'\n'
			except:
				print 'Error when opening url'
	endfile.close()
	print 'FILE CLOSED'

#LETS CALL THE FUNCTION
OpenLinks('unique_urls.txt')

