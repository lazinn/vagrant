 #!/bin/bash
mysql -u root <<-EOSQL
CREATE DATABASE studentendb;
CREATE USER 'webuser'@'192.168.60.10' IDENTIFIED BY 'sicheres_passwort';
GRANT ALL PRIVILEGES ON studentendb.* TO 'webuser'@'192.168.60.10';
FLUSH PRIVILEGES;
EOSQL