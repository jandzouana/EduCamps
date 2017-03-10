CREATE TABLE campers(
    camper_id int AUTO_INCREMENT,
    cname varchar(255),
    birthday date,
    school varchar(255),
    grade int,
    pname varchar(255),
    email varchar(255),
    PRIMARY KEY (camper_id)
);

CREATE TABLE account(
    account_id int AUTO_INCREMENT,
    pemail varchar(255),
    password varchar(255),
    PRIMARY KEY (account_id)
);

CREATE TABLE registration(
    registration_id int AUTO_INCREMENT,
    pemail varchar(255),
    cname int,
    duration int,
    section varchar(255),
    location varchar(255),
    PRIMARY KEY (registration_id)
);

CREATE TABLE camp(
    camp_id int AUTO_INCREMENT,
    camp_name varchar(255),
    location varchar(255),
    address varchar(255),
    activities varchar(255),
    active varchar(255),
    season_winter int,
    season_summer int,
    capacity int,
    comments varchar(255),
    PRIMARY KEY (camp_id)
);

CREATE TABLE store(
    item_id int AUTO_INCREMENT,
    name varchar(255),
    price float(6,2),
    image_file varchar(255),
    category varchar(255),
    PRIMARY KEY (item_id)
);


CREATE TABLE orders(
    order_id int AUTO_INCREMENT,
    account varchar(255),
    address varchar(255),
    email varchar(255),
    PRIMARY KEY (order_id)
);

CREATE TABLE forum(
    post_id int AUTO_INCREMENT,
    name varchar(255),
    email varchar(255),
    stars int,
    post_date datetime DEFAULT NOW(),
    content varchar(255),
    PRIMARY KEY (post_id)
);

CREATE TABLE gallery(
    image_id int AUTO_INCREMENT,
    filename varchar(255),
    caption varchar(255),
    name varchar(255),
    upload_date datetime DEFAULT NOW(),
    camp_id int,
    PRIMARY KEY (image_id)
);

INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery1.jpg", "First Sample Image", "Walter Liu",2);
INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery2.jpg", "Second Sample Image", "Walter Liu",2);
INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery3.jpg", "Third Sample Image", "Walter Liu",2);
<<<<<<< HEAD
INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery4.jpg", "Fourth Sample Image", "Walter Liu",2);
INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery4.jpg", "Fourth Sample Image", "Walter Liu",2);
INSERT INTO forum (name, email, stars, content) VALUES("Sam", "stopp@gmail.com", 4, "The camp was great, the environment was great, but it was too short!");
INSERT INTO forum (name, email, stars, content) VALUES("Juan", "juan@gmail.com", 5, "Best Camp Ever!");
INSERT INTO forum (name, email, stars, content) VALUES("Jimmy", "jm@aol.com", 3, "I guess it was ok");
INSERT INTO forum (name, email, stars, content) VALUES("Chad", "ilikemeat@chad.com", 1, "Sucked man");
INSERT INTO forum (name, email, stars, content) VALUES("Brad", "idontlikechad@icloud.com", 4, "At least it was better than hanging out with my brother all summer");


