#!/bin/bash

# Script produced by Ben Lavery
# Date modified: 13/01/2010
# Superceedes the script modified 07/09/08
# Superceedes the script created 13/02/07

echo
echo
echo "****************************************************"

echo Start of script
echo Changing permisions on ALL files to allow acces EXCEPT blog files
echo The following will be given:
echo rwx---r-x

for each in "`find ../ | grep -v blog | grep -v piwik`"; do 
	chmod 705 $each
done

chmod 702 misc/audit/stats.txt

echo Finished changing ALL permisions

echo "****************************************************"
echo
echo
echo
