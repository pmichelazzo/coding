MyUSER="admin"     # USERNAME
MyPASS="UzYSR9q4"       # PASSWORD
MyHOST="localhost"          # Hostname
 
MYSQL="$(which mysql)"
MYSQLDUMP="$(which mysqldump)"
MYSQLCHECK="$(which mysqlcheck)"
CHOWN="$(which chown)"
CHMOD="$(which chmod)"
GZIP="$(which gzip)"

DEST="/mnt/disco2/backups"
MBD="$DEST/mysql"
HOST="localhost"
NOW="$(date +"%Y%m%d-%H%M")"
FILE=""
DBS=""
IGGY="atmail horde phpmyadmin_bEGuUNa9tH0X psa sitebuilder3 test billing urchin"
EMAILMESSAGE="/tmp/emailmessage.txt"
echo "Backup OK dos bancos de dados com os seguintes arquivos:"> $EMAILMESSAGE
DBS="$($MYSQL -u $MyUSER -h $MyHOST -p$MyPASS -Bse 'show databases')"

rm /mnt/disco2/backups/mysql/*gz

for db in $DBS
do
	skipdb=-1
	if [ "$IGGY" != "" ];
	then
		for i in $IGGY
		do
			[ "$db" == "$i" ] && skipdb=1 || :
		done
	fi
	if [ "$skipdb" == "-1" ] ; then
		$MYSQLCHECK -o -s -u $MyUSER -h $MyHOST -p$MyPASS $db
		FILE="$MBD/$db.$NOW.sql.gz"
		$MYSQLDUMP -c -e -u $MyUSER -h $MyHOST -p$MyPASS $db | $GZIP -9 > $FILE
		echo $FILE >>$EMAILMESSAGE
	fi
done

tar czf /var/www/vhosts/michelazzo.com.br/subdomains/bkp/httpdocs/bd/fulldatabase.$NOW.tar.gz $DEST/*

SUBJECT="Backup de banco de dados"
# Email To ?
EMAIL="michelazzo@me.com"
# Email text/message
echo "" >> $EMAILMESSAGE
echo "O backup esta disponivel em http://bkp.michelazzo.com.br/bd/fulldatabase.$NOW.tar.gz" >>$EMAILMESSAGE
# send an email using /bin/mail
/bin/mail -s "$SUBJECT" "$EMAIL" < $EMAILMESSAGE