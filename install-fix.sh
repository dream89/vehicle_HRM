rm -rf app/cache/*
rm -rf app/logs/*

chmod -R 777 app/cache
chmod -R 777 app/logs

#sudo chmod +a "www-data allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
#sudo chmod +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs

#sudo setfacl -R -m u:www-data:rwX -m u:`whoami`:rwX app/cache app/logs
#sudo setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache app/logs
