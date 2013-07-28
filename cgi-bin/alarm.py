#!/usr/bin/env python
import subprocess
print "Content-type: text/html\n\n"
#launch subprocess to open audio file for alarm
subprocess.Popen(["sudo","mplayer","/var/www/pathtowebroot/htdocs/core/alarm/alarm.mp3"])
print ""
