DROP TABLE campers_tb IF EXISTS;
DROP TABLE registration_tb IF EXISTS;
DROP TABLE camp_tb IF EXISTS;
DROP TABLE store_tb IF EXISTS;
DROP TABLE order_tb
DROP TABLE forum_tb IF EXISTS;
DROP TABLE gallery_tb IF EXISTS;

CREATE TABLE campers_tb(
    camper_id int AUTO_INCREMENT,
    cname varchar(255),
    birthday date,
    school varchar(255),
    grade int,
    pname varchar(255),
    pemail varchar(255),
    PRIMARY KEY (camper_id)
);

CREATE TABLE registration_tb(
    registration_id int AUTO_INCREMENT,
    camper_id int,
    camp_id int,
    duration int,
    section varchar(255),
    PRIMARY KEY (registration_id)
);

CREATE TABLE camp_tb(
    camp_id int AUTO_INCREMENT,
    name varchar(255),
    location varchar(255),
    activities varchar(255),
    camp_status int,
    capacity int,
    PRIMARY KEY (camp_id)
);

CREATE TABLE store_tb(
    item_id int AUTO_INCREMENT,
    name varchar(255),
    price float(6,2),
    PRIMARY KEY (item_id)
);

CREATE TABLE order_tb(
    order_id int AUTO_INCREMENT,
    name varchar(255),
    address varchar(255),
    email varchar(255),
    PRIMARY KEY (order_id)
);

CREATE TABLE forum_tb(
    post_id int AUTO_INCREMENT,
    name varchar(255),
    email varchar(255),
    stars int,
    post_date datetime DEFAULT NOW(),
    content varchar(255),
    PRIMARY KEY (post_id)
);

CREATE TABLE gallery_tb(
    image_id int AUTO_INCREMENT,
    filename varchar(255),
    caption varchar(255),
    name varchar(255),
    upload_date datetime DEFAULT NOW(),
    PRIMARY KEY (image_id)
);