
use youcontact ;

CREATE Table user(
    id int PRIMARY KEY AUTO_INCREMENT;
    username VARCHAR(255),
    email VARCHAR(255),
    PASSWORD VARCHAR(255),
)

CREATE Table contacts(
    id int PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255),
    iduser int,
    Foreign Key (iduser) REFERENCES user(id)
);
