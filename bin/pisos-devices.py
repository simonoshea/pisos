#!/usr/bin/python
import RPi.GPIO as GPIO
import time, MySQLdb, subprocess
while(True):
  subprocess.Popen(["sudo","i2cset","-y","0","0x20","0x00","0x00"])#Set Bank A Outputs
  subprocess.Popen(["sudo","i2cset","-y","0","0x20","0x01","0x00"])#Set Bank B Outputs
  db = MySQLdb.connect(host="localhost", user="dbuser", passwd="dbpass", db="dbname")
  cur = db.cursor()
  cur.execute("SELECT dev_state FROM sos_devices WHERE dev_id < 9 ORDER BY dev_id DESC")
  db.commit()
  numrows = int(cur.rowcount)
  row = cur.fetchall()

  devstr = ""
  for i in range(0,numrows):
    if(row[i][0]==1):
      devstr += "1"
    else:
      devstr += "0"

  print devstr
  hex_val=hex(int(devstr,2))
  print hex_val

  subprocess.Popen(["sudo","i2cset","-y","0","0x20","0x13",hex_val])

  cur.execute("SELECT dev_state FROM sos_devices WHERE dev_id > 8 ORDER BY dev_id DESC")
  db.commit()
  numrows = int(cur.rowcount)
  row = cur.fetchall()

  devstr = ""
  for i in range(0,numrows):
    if(row[i][0]==1):
      devstr += "1"
    else:
      devstr += "0"

  print devstr
  hex_val=hex(int(devstr,2))
  print hex_val

  subprocess.Popen(["sudo","i2cset","-y","0","0x20","0x12",hex_val])

  cur.close()
  db.close()
