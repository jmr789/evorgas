import gc
import urllib2
from bs4 import SoupStrainer
from bs4 import BeautifulSoup
import re
from uritools import uricompose, urijoin, urisplit, uriunsplit
import urlparse
import requests
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver import ActionChains
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import contextlib
import cookielib
import mechanize

#STEP 3 : LOOKING AT THE SPECS OF EACH CAR AND SAVING WHAT WE WANT


def getSpecsWithSelenium(file):
	print 'LOOKING AT SPECS'
	count = 0
	#OPENS 1 URL AT A TIME
	with open(file, 'r') as line:
		for link in line:
			driver = webdriver.Firefox()
			driver.get(link)	
			table = driver.find_element_by_id('specs-data-table')
			#COOKIES
			#cookies = {'temp_userProvince':'QC'; no_show_lang=true; session-in-progress=true; localStorage=true; JSESSIONIDTOY=0000VjZWkn9xypOPQYSaSCLbK4G:1agdd685r; userLanguage=en; userProvince=QC; _ga=GA1.2.1062917963.1487608975; _gat=1; dtPC=-; dtLatC=11; dtCookie=02C5319A05B7E9568F7AED51111B6079|X2RlZmF1bHR8MQ
			driver.add_cookie(cookie)

#http://selenium-python.readthedocs.io/navigating.html#cookies

#getSpecsWithSelenium('good_urls.txt')




def getSpecs(file):
	print 'LOOKING AT SPECS'
	count = 0
	#OPENS 1 URL AT A TIME
	with open(file, 'r') as line:
		for link in line:
			print 'Opening '+str(link)
			#CREATE OUTPUT FILE FOR THIS MODEL
			print 'Creating export file'
			outputFile = open(str(count)+'.txt', 'w')
			page = urllib2.urlopen(link)
			print 'Parsing page'
			soup = BeautifulSoup(page, "html.parser")
			table = soup.find('table', id='specs-data-table')
			#prettySoup = table.prettify().encode('UTF-8')
			print 'Saving parsed page to file'
			outputFile.write(str(table))
			outputFile.close()
			print str(count)+' exported'
			count += 1
	print 'SPECS EXPORTED'

#getSpecs('good_urls.txt')

def getSpecsWithMechanize(file):
	print 'LOOKING AT SPECS'
	count = 0
	#OPENS 1 URL AT A TIME
	with open(file, 'r') as line:
		for link in line:
			print 'Opening '+str(link)
			#CREATE OUTPUT FILE FOR THIS MODEL
			print 'Creating export file'
			outputFile = open(str(count)+'.txt', 'w')
			print 'Opening browser'
			#mech = Browser()
			print 'Emulation browser'
			# Browser
			br = mechanize.Browser()

			# Cookie Jar
			cj = cookielib.LWPCookieJar()
			br.set_cookiejar(cj)

			# Browser options
			br.set_handle_equiv(True)
			br.set_handle_gzip(True)
			br.set_handle_redirect(True)
			br.set_handle_referer(True)
			br.set_handle_robots(False)

			# Follows refresh 0 but not hangs on refresh > 0
			br.set_handle_refresh(mechanize._http.HTTPRefreshProcessor(), max_time=1)

			# Want debugging messages?
			#br.set_debug_http(True)
			#br.set_debug_redirects(True)
			#br.set_debug_responses(True)

			# User-Agent (this is cheating, ok?)
			br.addheaders = [('User-agent', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.1) Gecko/2008071615 Fedora/3.0.1-1.fc9 Firefox/3.0.1')]


			print 'Accessing web page'
			page = br.open(link)
			html = page.read()
			print 'Parsing page'
			soup = BeautifulSoup(html)
			food = soup.prettify().encode('UTF-8')
			print 'Saving parsed page to file'
			outputFile.write(food)
			outputFile.close()
			print str(count)+' exported'
			count += 1

#getSpecsWithMechanize('good_urls.txt')
