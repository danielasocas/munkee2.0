/* [LTW] Web Languages and Technologies
   2016/2017 FEUP  
   Daniela Socas Gil 	up201601894 
   Katja Cornelia Hader	up201602072 

   Munkee Advisor Database 
*/

/********************************************** CONFIG *********************************************/

PRAGMA foreign_keys = ON;

/********************************************** DROP TABLES *********************************************/

DROP TABLE IF EXISTS reply;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS rating;
DROP TABLE IF EXISTS rest_image;
DROP TABLE IF EXISTS owner;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS restaurant;
DROP TRIGGER IF EXISTS update_rat;


/********************************************** CREATE TABLES *********************************************/

CREATE TABLE user (
	username	TEXT PRIMARY KEY,
	email 		TEXT,
	name		TEXT,
	password 	TEXT NOT NULL,
	birthday 	TEXT,
	UNIQUE(email)
);

CREATE TABLE restaurant (
	id	 			INTEGER PRIMARY KEY AUTOINCREMENT,
	name 			TEXT NOT NULL,
	address 		TEXT,
	postcode 		TEXT,
	type		 	TEXT,
	timetable		TEXT,
	food_rat		REAL,	/*Average*/
	service_rat		REAL,	/*Average*/
	ambient_rat		REAL	/*Average*/
 );

CREATE TABLE owner (
	id_owner 		TEXT REFERENCES user(username),
	id_rest			INTEGER REFERENCES restaurant(id)
);

CREATE TABLE review (
  	id 			INTEGER PRIMARY KEY AUTOINCREMENT,
  	username 	TEXT REFERENCES user(username),
  	id_rest		INTEGER REFERENCES restaurant(id),
  	comment 	TEXT
);

CREATE TABLE reply (
	id 			INTEGER PRIMARY KEY AUTOINCREMENT,
	id_review 	INTEGER REFERENCES review(id),
	id_user 	TEXT REFERENCES user(username),
	comment 	TEXT
);

CREATE TABLE rating (
	id_rest		INTEGER REFERENCES restaurant(id),
	username 	TEXT REFERENCES user(username),
	food_rat	REAL,
	service_rat	REAL,
	ambient_rat	REAL
);

CREATE TABLE rest_image(
  	id 		INTEGER PRIMARY KEY AUTOINCREMENT,
  	id_rest INTEGER REFERENCES restaurant(id),
  	link	TEXT
);

/************************************************* INSERTS ************************************************/

INSERT INTO user VALUES('danisocas', 'ds@gmail.com', 'Daniela Socas', '6ca13d52ca70c883e0f0bb101e425a89e8624de51db2d2392593af6a84118090', '1993-12-27');
INSERT INTO user VALUES('haderka', 'kh@hotmail.com','Katja Hader', '6ca13d52ca70c883e0f0bb101e425a89e8624de51db2d2392593af6a84118090', '1994-03-22');
INSERT INTO user VALUES('skirma', 'skirma@hotmail.com', 'Skirmante Stankeviciute', '6ca13d52ca70c883e0f0bb101e425a89e8624de51db2d2392593af6a84118090', '1990-05-01');
INSERT INTO user VALUES('ccolombo', 'cc@gmail.com', 'Carla Colombo', '6ca13d52ca70c883e0f0bb101e425a89e8624de51db2d2392593af6a84118090', '1983-08-20');
INSERT INTO user VALUES('clau', 'c_p@yahoo.com', 'Claudia Pellegrini', '6ca13d52ca70c883e0f0bb101e425a89e8624de51db2d2392593af6a84118090', '1973-03-04');

INSERT INTO restaurant VALUES(1, 'Adega', 'Rua da Conceição 63', '4050-213', 'Brewery', '22:00/0:00', 3.0,5.0,5.0);
INSERT INTO restaurant VALUES(2, 'Ode Porto Wine House', 'Largo do Terreiro 7', '4050-603', 'Mediterranean','11:30/00:00', 4.5,5.0,5.0);
INSERT INTO restaurant VALUES(3, 'Ravioli', 'Cais da Ribeira 39','4050-510', 'Italian', '10:30/23:30', 5.0,5.0,5.0);

INSERT INTO owner VALUES('danisocas', 1);
INSERT INTO owner VALUES('haderka', 2);
INSERT INTO owner VALUES('clau', 3);

INSERT INTO review VALUES(1, 'haderka', 1, 'BEST PLACE FOR ERASMUS');
INSERT INTO review VALUES(2, 'clau', 3, 'Bravissimo!');
INSERT INTO review VALUES(3, 'skirma', 1, 'Very crowded but good pries');
INSERT INTO review VALUES(4, 'skirma', 2,  'Worth the wait');
INSERT INTO review VALUES(5, 'ccolombo', 3, 'Best lasagna in Porto');
INSERT INTO review VALUES(6, 'ccolombo', 2, 'Amazing atmosphere with delicious wines');

INSERT INTO reply VALUES(1, 1, 'danisocas', 'Next tuesday half price for Erasmus, do not miss it!');
INSERT INTO reply VALUES(2, 5, 'haderka', 'So true! It is a must ');

INSERT INTO rating VALUES(1,'haderka', 2, 5,5);
INSERT INTO rating VALUES(2,'clau', 5, 5,3.6);
INSERT INTO rating VALUES(2, 'ccolombo', 4.3, 5,3.9);
INSERT INTO rating VALUES(3,'haderka', 5, 5,5);
INSERT INTO rating VALUES(1,'skirma', 4.5, 4,4.3);
INSERT INTO rating VALUES(3,'skirma', 4.7, 5,3.1);

INSERT INTO rest_image VALUES(1,3,'adega.jpg');
INSERT INTO rest_image VALUES(2,2,'ode.jpg');
INSERT INTO rest_image VALUES(3,1,'revioli.png');

/************************************************* TRIGGERS ***********************************************/

CREATE TRIGGER update_rat 
AFTER INSERT ON rating
  BEGIN
    UPDATE restaurant
        SET food_rat =  ( SELECT AVG(food_rat) FROM rating
                          WHERE restaurant.id = NEW.id_rest
                        );
	UPDATE restaurant
        SET service_rat =  ( SELECT AVG(service_rat) FROM rating
                          WHERE restaurant.id = NEW.id_rest
                        );    
    UPDATE restaurant
        SET ambient_rat =  ( SELECT AVG(ambient_rat) FROM rating
                          WHERE restaurant.id = NEW.id_rest
                        );    
  END;

