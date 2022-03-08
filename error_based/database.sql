drop database if exists error_based;

create database error_based;
use error_based;

create table users (id int(3) auto_increment primary key, username varchar(255) not null, password varchar(255) not null);
insert into users (username, password) value("admin", "password_admin");
insert into users (username, password) value("guest", "guest");

create table products (id int(3) auto_increment primary key, name varchar(255) not null, price int(6) not null,type varchar(255) not null);
insert into products (name, type, price) value("Thinkpad", "May tinh", 23000000);
insert into products (name, type, price) value("Iphone", "Dien thoai", 23130000);