use cs20155236;

create table restaurant (
	ID INT PRIMARY KEY,
	Name VARCHAR(20) NOT NULL,
	Phone_number INT,
	Address VARCHAR(30));

create table menu (
	ID INT PRIMARY KEY,
	Name VARCHAR(20) NOT NULL,
	Price INT,
	Restaurant_ID INT NOT NULL);

create table category (
  ID INT PRIMARY KEY,
  Category VARCHAR(10));

create table review (
  ID INT PRIMARY KEY,
  menu_id INT NOT NULL,
  user_id INT NOT NULL,
  grade INT NOT NULL,
  comment VARCHAR(200),
  image BLOB);

create table point (
  ID INT PRIMARY KEY,
  point INT NOT NULL,
  reason VARCHAR(20) NOT NULL,
  data INT NOT NULL,
  user_id INT NOT NULL);

create table user (
  ID INT PRIMARY KEY,
  name VARCHAR(10) NOT NULL,
  nickname VARCHAR(20) NOT NULL,
  credit INT NOT NULL);

create table location (
  ID INT PRIMARY KEY,
  city VARCHAR(10) NOT NULL,
  state VARCHAR(10) NOT NULL);
