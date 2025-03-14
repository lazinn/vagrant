 #!/bin/bash
2 mysql -u root <<-EOSQL
3 CREATE DATABASE studentendb;
4 CREATE USER 'webuser'@'192.168.60.10' IDENTIFIED BY
'sicheres_passwort';
5 GRANT ALL PRIVILEGES ON studentendb.* TO
'webuser'@'192.168.60.10';
6 FLUSH PRIVILEGES;
7 EOSQL