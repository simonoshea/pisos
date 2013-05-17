#!/usr/bin/python3
#Pisos Temperature by Simon O'Shea
#Reads temperature of DS18B20 Temperature sensor on W1 bus and Inserts value to DB
import sys, string, time, MySQLdb
db = MySQLdb.connect(host="localhost", user="dbuser", passwd="dbpass", db="dbname")
#set sensor id
senid='1'
#Open the sensor file.
tfile = open("/sys/bus/w1/devices/28-0000043ad5c5/w1_slave")
#Read sensor file
text = tfile.read()
# Close the file now that the text has been read.
tfile.close()
#Split text and select second line. Split the line into words seperated by spaces. Select 10th word.
tempdata = text.split("\n")[1].split(" ")[9]
#The first two characters are "t=", so get rid of those and convert the temperature from a string to a number.
temp = float(tempdata[2:])
# Divide by 1000 for decimal point
temp = temp / 1000
cur = db.cursor()
try:
	cur.execute("INSERT INTO sos_senval(sen_type, sen_id, sen_val) VALUES('TEMP', '1', %s)", (temp))
#print "Number of rows updated: %d" % cur.rowcount
	db.commit()
except:
	db.rollback()
cur.close()
db.close()
print temp
sys.exit()
