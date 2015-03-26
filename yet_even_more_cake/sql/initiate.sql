CREATE TABLE users
(
   id         INT AUTO_INCREMENT PRIMARY KEY,
   email      VARCHAR(255) NOT NULL,
   password   VARCHAR(255) NOT NULL,
   name       VARCHAR(20) NOT NULL,
   created    DATETIME,
   updated    DATETIME
);

CREATE TABLE phones
(
   id          INT AUTO_INCREMENT PRIMARY KEY,
   user_id     INT NOT NULL,
   area_code   CHAR(3) NOT NULL,
   number      CHAR(7) NOT NULL,
   provider    VARCHAR(25),
   created     DATETIME,
   updated     DATETIME,
   FOREIGN KEY user_key(user_id) REFERENCES users(id)
);

CREATE TABLE addresses
(
   id               INT AUTO_INCREMENT PRIMARY KEY,
   street_address   VARCHAR(128),
   city             VARCHAR(64),
   state            CHAR(2),
   zip              INT(5)
);

CREATE TABLE emails
(
   id        INT AUTO_INCREMENT PRIMARY KEY,
   user_id   INT NOT NULL,
   email     VARCHAR(255) NOT NULL,
   FOREIGN KEY user_key(user_id) REFERENCES users(id)
);

CREATE TABLE addresses_users
(
   address_id   INT NOT NULL,
   user_id      INT NOT NULL,
   PRIMARY KEY(address_id, user_id),
   INDEX user_idx (user_id, address_id),
   FOREIGN KEY user_key(user_id) REFERENCES users(id),
   FOREIGN KEY address_key(address_id) REFERENCES addresses(id)
);