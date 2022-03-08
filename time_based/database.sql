drop database if exists time_based;

create database time_based;
use time_based;

create table users (id int(3) auto_increment primary key, username varchar(255) not null, password varchar(255) not null);
insert into users (username, password) value("admin", "password_admin");
insert into users (username, password) value("guest", "guest");

