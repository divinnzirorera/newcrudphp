CREATE DATABASE STUDENT_DB;

USE STUDENT_DB;

CREATE TABLE User(
    id int(11)   AUTO_INCREMENT PRIMARY KEY,
    fname varchar(255) not null,
    lname varchar(255) not null,
    password varchar(255) not null,
    GENDER VARCHAR(255) not null,
    email varchar(255) not null,
);
