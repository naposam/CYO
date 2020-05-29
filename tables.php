CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `login_date` varchar(50) NOT NULL,
  `logout_date` varchar(50) NOT NULL,
  `Login_attempt_per_id` INT NOT NULL,
  `crusader_id` varchar(50) NOT NULL,
  PRIMARY KEY (`user_log_id`)
) ;





CREATE TABLE `activity_log` (
  `activity_log_id` int(11) NOT NULL DEFAULT '1',
  `Name` varchar(50) NOT NULL,
  `Crusader_id` varchar(50) Not null,
  `date` varchar(25) NOT NULL,
  `action` varchar(50) NOT NULL
);

CREATE TABLE CRUSADERS(
id int not null PRIMARY key AUTO_INCREMENT,
crusader_id varchar(50) not null unique,
fname varchar(50) not null,
mname varchar(50),
lname varchar(50) not null,
DOB varchar(50) not null,
age int(11) not null,
unit varchar(50) not null,
parish varchar(50) not  null,
deanery varchar(50) not null,
diocese varchar(50) not null,
contact varchar(50),
email_address varchar(50),
residential_address varchar(50) not null,
section varchar(50) not null,
region varchar(50) not null,
office_title varchar(50) not  null,
office_level varchar(50) not null,
gender varchar(50) not null,
date_joined varchar(50) not null,
date_initiated varchar(50),
picture blob

);
create table region(
reg_id int not null PRIMARY key AUTO_INCREMENT,
name varchar(50) not null unique
);

create table Diocese(
diocese_id int(11) not null PRIMARY key AUTO_INCREMENT,
diocese_name varchar(50) not null unique,
reg_id int
);

create table deanery(
 deanery_id int not null PRIMARY key AUTO_INCREMENT,
 deanery_name varchar(50) not null,
 diocese_id int,
 reg_id int

);
create table parish(
parish_id int not null PRIMARY key AUTO_INCREMENT,
parish_name varchar(50),
diocese_id int,
deanery_id int,
reg_id int

);
create table unit(
unit_id int(11) not null PRIMARY key AUTO_INCREMENT,
unit_name varchar(50) not null,
parish_id int,
diocese_id int,
deanery_id int,
reg_id int

);

create table Login_tb(
 user_id int not null PRIMARY key AUTO_INCREMENT,
`crusader_id` varchar(50) NOT NULL ,
  fname varchar(50) not null,
  lname varchar(50) not null,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
);


create table amount(
amount_id int not null PRIMARY key AUTO_INCREMENT,
amount decimal(10,2)
);

create table Annual_registration_paymenttbl(
id int not null PRIMARY key AUTO_INCREMENT,
crusader_id varchar(50) not null,
amount decimal(10,2),
date_payment varchar(50),
Time_paid varchar(50)
);

