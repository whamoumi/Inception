#!/bin/bash
if [ -f /var/lib/mysql/init.txt ]; 
then
    mysqld_safe
else 
    service mysql start 
    mysql -u root -e "CREATE DATABASE IF NOT EXISTS $DATABASE_MYSQL;
    CREATE USER '$USER_MYSQL'@'localhost' IDENTIFIED BY '$PASSWORD_MYSQL';
    GRANT ALL PRIVILEGES ON wordpress.* TO '$USER_MYSQL'@'localhost' IDENTIFIED BY '$PASSWORD_MYSQL';
    GRANT ALL ON wordpress.* to '$USER_MYSQL'@'%' IDENTIFIED BY '$PASSWORD_MYSQL'; FLUSH PRIVILEGES;"
    mysql -u root -e "use $DATABASE_MYSQL; source sauvegarde.sql;"
    echo "ALTER USER 'root'@'localhost' IDENTIFIED BY 'pass'; 
    GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' IDENTIFIED BY 'pass'; 
    GRANT ALL ON *.* to 'root'@'%' IDENTIFIED BY 'pass'; 
    FLUSH PRIVILEGES;" > init.txt
    cp init.txt /var/lib/mysql 
    service mysql stop && mysqld_safe --init-file=/init.txt
fi

