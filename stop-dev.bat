@echo off
xcopy /s /Y mysql\initdb mysql\AutoBackup\
del /s/q mysql\initdb\*
docker exec laravel-db /usr/bin/mysqldump -u root --password=123456 --databases laravel --default-character-set=utf8mb4 > mysql\initdb\mydb-backup.sql
docker-compose down