SET PASSWORD FOR 'root'@'localhost' = PASSWORD('');

USE test;
DROP TABLE IF EXISTS users;
create table users (
id int primary key auto_increment,
username varchar(50) not null unique,
password varchar(50) not null,
type varchar(10) not null
);

INSERT INTO users (username, password, type) VALUES('test', 'pass', 'admin');


select * from users;
