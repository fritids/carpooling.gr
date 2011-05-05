#!/bin/bash

BASE_DIR="/var/www/vhosts/carpooling.gr"
DB_BACKUP_DIR=$BASE_DIR"/httpdocs/log/backup/db"
NOW=`/bin/date '+%Y%m%d_%H%M%S'`

#* MySQL login and pwd *#
DB_NAME=comewithme2
MYSQLHOTCOPY=/usr/bin/mysqlhotcopy


USER=`whoami`
if [ $USER != "root" ]; then

  echo "You must be root to run that script"
  exit 1

fi

if [ ! -d $DB_BACKUP_DIR ]
then
	mkdir $DB_BACKUP_DIR
fi

$MYSQLHOTCOPY $DB_NAME --addtodest $DB_BACKUP_DIR

TAR_DB_NAME=$DB_NAME"_DB_"$NOW.tgz

if [ $? = "0" ]; then

  cd $DB_BACKUP_DIR

  if [ $? = "0" ]; then

    tar -czf $TAR_DB_NAME $DB_NAME

    chown veriftp $TAR_DB_NAME

    rm -rf $DB_BACKUP_DIR$DB_NAME

  fi
else

  exit 1

fi

echo "Done"

exit 0


