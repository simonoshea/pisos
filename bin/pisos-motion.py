#!/usr/bin/python
import RPi.GPIO as GPIO
import time, MySQLdb
#use BCM GPIO
GPIO.setmode(GPIO.BCM)
GPIO_PIR = 17
#ret sensor ID
sen_id = 1
#set zone for PIR sensor
zone_id = 1
db = MySQLdb.connect(host="localhost", user="dbuser", passwd="dbpass", db="dbname")
# Set pin as input
GPIO.setup(GPIO_PIR,GPIO.IN)
Current_State  = 0
Previous_State = 0
try:
  #loop until PIR output is 0
  while GPIO.input(GPIO_PIR)==1:
    Current_State  = 0
  while True :
    #read PIR state
    Current_State = GPIO.input(GPIO_PIR)
    if Current_State==1 and Previous_State==0:
      #PIR is triggered
      cur = db.cursor()
      try:
         cur.execute("INSERT INTO sos_motion( sen_id, zone_id) VALUES( %s, %s)", (sen_id, zone_id))
         db.commit()
      cur.close()
      db.close()
      #record previous state
      Previous_State=1
    elif Current_State==0 and Previous_State==1:
      print "  Ready"
      Previous_State=0 
    time.sleep(0.01)
except KeyboardInterrupt:
  GPIO.cleanup()
