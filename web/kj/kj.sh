#!/bin/bash
nodePid = netstat -anp|grep 8800|awk '{printf $7}'|cut -d/ -f1
kill -9 $nodePid
/usr/bin/node /www/wwwroot/web.jdswzc.com/web/kj/data.js
