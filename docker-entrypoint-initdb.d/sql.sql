ALTER USER 'teste'@'%' IDENTIFIED WITH mysql_native_password BY 'teste';
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';
FLUSH PRIVILEGES;
