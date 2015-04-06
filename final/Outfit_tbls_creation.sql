CREATE TABLE product(
 id int NOT NULL AUTO_INCREMENT,
 /*type varchar(255) NOT NULL*/
 PRIMARY KEY(id)
 ) ENGINE=InnoDB;

CREATE TABLE shirts(
 id int NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
 neck varchar(255) NOT NULL,
 sleeve varchar(255) NOT NULL,
 color varchar(255) NOT NULL,
 size varchar(255) NOT NULL,
 PRIMARY KEY(id)
 ) ENGINE=InnoDB;

CREATE TABLE pants(
 id int NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
 material varchar(255) NOT NULL,
 cut varchar(255) NOT NULL,
 color varchar(255) NOT NULL,
 size varchar(255) NOT NULL,
 PRIMARY KEY(id),
 ) ENGINE=InnoDB;

CREATE TABLE shoes(
 id int NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
 style varchar(255) NOT NULL,
 uses text(255) NOT NULL,
 color varchar(255) NOT NULL,
 size varchar(255) NOT NULL,
 PRIMARY KEY(id)
 ) ENGINE=InnoDB;

CREATE TABLE outfits(
 id int NOT NULL AUTO_INCREMENT,
 shirtid int NOT NULL,
 pantid int NOT NULL,
 shoeid int NOT NULL,
 PRIMARY KEY(id),
 FOREIGN KEY(shirtid) REFERENCES shirts(id),
 FOREIGN KEY(pantid) REFERENCES pants(id),
 FOREIGN KEY(shoeid) REFERENCES shoes(id),
 UNIQUE KEY(id, shirtid, pantid, shoeid)
 ) ENGINE=InnoDB;

CREATE TABLE customer(
 id int NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL
 PRIMARY KEY(id)
 ) ENGINE=InnoDB;

CREATE TABLE liked(
 cid int NOT NULL,
 otfid int NOT NULL,
 FOREIGN KEY(cid) REFERENCES customer(id),
 FOREIGN KEY(otfid) REFERENCES outfits(id),
 UNIQUE KEY(cid, otfid)
 ) ENGINE=InnoDB;



