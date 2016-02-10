CREATE TABLE client
(
client_id INTEGER NOT NULL AUTO_INCREMENT,
fname VARCHAR(25),
lname VARCHAR(25),
phone VARCHAR(25),
email VARCHAR(50),
address VARCHAR(50),
nation VARCHAR(25),
dob DATE,
education VARCHAR(25),
cntct_mode VARCHAR(25),
PRIMARY KEY (client_id)
);
