
CREATE TABLE Contact (
	idC INT AUTO_INCREMENT PRIMARY KEY,
	firstName VARCHAR(30) NOT NULL,
	lastName VARCHAR(30) NOT NULL,
	telefone VARCHAR(30) NOT NULL,
	mail VARCHAR(50) NOT NULL,
	comment TEXT
);

CREATE TABLE Menu(
	idM  INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	day INT(1) NOT NULL,
	week INT(1) NOT NULL,
	name VARCHAR(20) NOT NULL,
	price INT(5) NOT NULL
);

CREATE TABLE Order(
	idO INT AUTO_INCREMENTNOT NULL PRIMARY KEY,
	FOREIGN KEY(idM) REFERENCES Menu(idM),
	FOREIGN KEY(idC) REFERENCES Contact(idC),
	quantity INT(2) NOT NULL,
	total INT(5) NOT NULL
);



INSERT INTO Users(firstName, lastName, username, pass, mail)
VALUES  ('Name', 'LastName', 'testUser', 'testPassword', 'testmail@hotmail.com')


