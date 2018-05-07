CREATE TABLE users (
	userID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	loginID varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	firstName varchar(128) NOT NULL,
	lastName varchar(128) NOT NULL
);
