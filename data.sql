CREATE TABLE restaurants (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(20),
	description VARCHAR(255),
	city VARCHAR(50),
	country VARCHAR(50)
	--photo	
);

CREATE TABLE users (
  username VARCHAR(25) PRIMARY KEY,
  email VARCHAR(100),
  password VARCHAR(25)
);

CREATE TABLE reviews(
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	user_username VARCHAR REFERENCES users,
	score INTEGER,
	coment VARCHAR(255)
);