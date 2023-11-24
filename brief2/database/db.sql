use youcontact;

CREATE Table contact(
    id int PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    email varchar(255),
    phone int,
    iduser int ,
    Foreign Key (iduser) REFERENCES user(id)
);



