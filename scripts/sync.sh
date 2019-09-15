#!/bin/sh
#Created 13/01/2010
#Edited 20/12/2011

UNAME=`uname`

if [[ $UNAME == "Darwin" ]]; then
	DIR=/Users/benlavery/Dropbox/Sites/hashbang0
fi

SAVEDIFS=$IFS
IFS="
"

cd $DIR

DAY=`date "+%d"`
MONTH=`date "+%B"`
YEAR=`date "+%Y"`

if [[ $DAY == "01" || $DAY == "21" || $DAY == "31" ]]; then
	DAY=`echo $DAY'st'`
elif [[ $DAY == "02" || $DAY == "22" ]]; then
	DAY=`echo $DAY'nd'`
elif [[ $DAY == "03" || $DAY == "23" ]]; then
	DAY=`echo $DAY'rd'`
else
	DAY=`echo $DAY'th'`
fi

echo "$DAY $MONTH $YEAR" > $DIR/misc/modified
chmod 755 $DIR/misc/modified

SEARCH_PATH=`find "$DIR"`
for EACH in $SEACH_PATH; do 
	if [[ $EACH =~ ".DS_Store" || $EACH =~ "~" ]]; then 
		rm $EACH
	fi
done

rsync -avuplt -e ssh --stats --progress --delete-after --delete $DIR/ hashbang0@hashbang0.com:./public_html