
#SAVING THE DATA SCRAPED IN PYTHON IN THE DATABASE
import MySQLdb

# Open database connection
db = MySQLdb.connect("localhost","python","XJzrOrByvgwx9mAR","app" )

# prepare a cursor object using cursor() method
cursor = db.cursor()

# Prepare SQL query to INSERT a record into the database.
sql = """INSERT INTO veh_ess_scraped(name, tank_size, planned_autonomy, avg_consumption_rate, base_price, after_tax_price) VALUES ('test',2,22,22.25,22,443)"""
try:
   # Execute the SQL command
	cursor.execute(sql)
   # Commit your changes in the database
	db.commit()
except Warning, e:
	print cursor._last_executed 
	print e
   # Rollback in case there is any error
	db.rollback()

# disconnect from server
db.close()

