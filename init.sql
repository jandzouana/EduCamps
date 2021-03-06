CREATE TABLE campers(
    camper_id int AUTO_INCREMENT,
    cname varchar(255),
    birthday date,
    school varchar(255),
    grade int,
    phone varchar(255),
    pname varchar(255),
    email varchar(255),
    special varchar(255),
    PRIMARY KEY (camper_id)
);

CREATE TABLE account(
    account_id int AUTO_INCREMENT,
    pemail varchar(255),
    password varchar(255),
    cname varchar (255),
    PRIMARY KEY (account_id)
);

CREATE TABLE registration(
    registration_id int AUTO_INCREMENT,
    pemail varchar(255),
    cname varchar(255),
    duration int,
    section date,
    location varchar(255),
    PRIMARY KEY (registration_id)
);

CREATE TABLE camp(
    camp_id int AUTO_INCREMENT,
    camp_name varchar(255),
    location varchar(255),
    address varchar(255),
    activities varchar(255),
    active int,
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
    address varchar(255),
    email varchar(255),
    items varchar(255),
    PRIMARY KEY (order_id)
);

CREATE TABLE forum(
    post_id int AUTO_INCREMENT,
    name varchar(255),
    email varchar(255),
    stars int,
    post_date datetime DEFAULT NOW(),
    content text(65535),
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

CREATE TABLE sections(
    section_id int AUTO_INCREMENT,
    section date,
    PRIMARY KEY (section_id)
);
INSERT INTO `sections` (`section_id`, `section`) VALUES (NULL, '2017-06-05');
INSERT INTO `sections` (`section_id`, `section`) VALUES (NULL, '2017-06-12');
INSERT INTO `sections` (`section_id`, `section`) VALUES (NULL, '2017-12-03');
INSERT INTO `sections` (`section_id`, `section`) VALUES (NULL, '2017-12-10');

INSERT INTO store (name, price, image_file, category) VALUES ("Red shirt", 14.5, "red_shirt.jpg", "Shirts");
INSERT INTO store (name, price, image_file, category) VALUES ("Orange shirt", 11.5, "orange_shirt.png", "Shirts");
INSERT INTO store (name, price, image_file, category) VALUES ("Blue shirt", 12.5, "blue_shirt.jpg", "Shirts");
INSERT INTO store (name, price, image_file, category) VALUES ("Elephant", 19.9, "plush-toy-elephant.jpg", "Gifts");
INSERT INTO store (name, price, image_file, category) VALUES ("Mouse", 12.5, "mouse.jpg", "Gifts");
INSERT INTO store (name, price, image_file, category) VALUES ("Headphones", 18.9, "headphones.jpg", "Gifts");
INSERT INTO store (name, price, image_file, category) VALUES ("Herschel", 13.9, "herschel.jpg", "Backpacks");
INSERT INTO store (name, price, image_file, category) VALUES ("Rucksack", 17.9, "rucksack.jpg", "Backpacks");
INSERT INTO store (name, price, image_file, category) VALUES ("Voltaic", 11.9, "Voltaic.jpg", "Backpacks");

INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery1.jpg", "First Sample Image", "Walter Liu",1);
INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery2.jpg", "Second Sample Image", "Walter Liu",2);
INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery3.jpg", "Third Sample Image", "Walter Liu",5);
INSERT INTO gallery (filename, caption, name, camp_id) VALUES ("gallery4.jpg", "Fourth Sample Image", "Walter Liu",8);

INSERT INTO registration (location, section) VALUES ("Apaches", "2016-12-1");
INSERT INTO registration (location, section) VALUES ("Apaches", "2016-12-2");
INSERT INTO registration (location, section) VALUES ("Eureka", "2016-12-1");
INSERT INTO registration (location, section) VALUES ("Chesapeake", "2016-1-1");
INSERT INTO registration (location, section) VALUES ("Santa Clara", "2016-2-15");
INSERT INTO registration (location, section) VALUES ("Tahoe South", "2016-1-17");
INSERT INTO registration (location, section) VALUES ("Boulder","2016-12-4");
INSERT INTO registration (location, section) VALUES ("Chesapeake", "2016-5-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort", "2016-6-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort", "2016-7-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort 2", "2016-8-1");
INSERT INTO registration (location, section) VALUES ("Sweet Bayou", "2016-9-1");
INSERT INTO registration (location, section) VALUES ("Nestor Camp", "2016-10-1");
INSERT INTO registration (location, section) VALUES ("Lewis and Clark", "2016-1-1");
INSERT INTO registration (location, section) VALUES ("Lewis and Clark", "2016-2-1");
INSERT INTO registration (location, section) VALUES ("Lewis and Clark", "2016-3-1");
INSERT INTO registration (location, section) VALUES ("Robotics Village", "2016-4-1");
INSERT INTO registration (location, section) VALUES ("Salt Camp", "2016-5-1");
INSERT INTO registration (location, section) VALUES ("Federal Camp", "2016-6-1");
INSERT INTO registration (location, section) VALUES ("Apaches", "2016-12-1");
INSERT INTO registration (location, section) VALUES ("Apaches", "2016-12-2");
INSERT INTO registration (location, section) VALUES ("Eureka", "2016-12-1");
INSERT INTO registration (location, section) VALUES ("Chesapeake", "2016-1-1");
INSERT INTO registration (location, section) VALUES ("Santa Clara", "2016-2-15");
INSERT INTO registration (location, section) VALUES ("Tahoe South", "2016-1-17");
INSERT INTO registration (location, section) VALUES ("Boulder","2016-12-4");
INSERT INTO registration (location, section) VALUES ("Chesapeake", "2016-5-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort", "2016-6-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort", "2016-7-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort 2", "2016-8-1");
INSERT INTO registration (location, section) VALUES ("Sweet Bayou", "2016-9-1");
INSERT INTO registration (location, section) VALUES ("Nestor Camp", "2016-10-1");
INSERT INTO registration (location, section) VALUES ("Lewis and Clark", "2016-1-1");
INSERT INTO registration (location, section) VALUES ("Lewis and Clark", "2016-2-1");
INSERT INTO registration (location, section) VALUES ("Lewis and Clark", "2016-3-1");
INSERT INTO registration (location, section) VALUES ("Robotics Village", "2016-4-1");
INSERT INTO registration (location, section) VALUES ("Salt Camp", "2016-5-1");
INSERT INTO registration (location, section) VALUES ("Federal Camp", "2016-6-1");
INSERT INTO registration (location, section) VALUES ("Apaches", "2016-12-1");
INSERT INTO registration (location, section) VALUES ("Apaches", "2016-12-2");
INSERT INTO registration (location, section) VALUES ("Eureka", "2016-12-1");
INSERT INTO registration (location, section) VALUES ("Chesapeake", "2016-1-1");
INSERT INTO registration (location, section) VALUES ("Santa Clara", "2016-2-15");
INSERT INTO registration (location, section) VALUES ("Tahoe South", "2016-1-17");
INSERT INTO registration (location, section) VALUES ("Boulder","2016-12-4");
INSERT INTO registration (location, section) VALUES ("Chesapeake", "2016-5-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort", "2016-6-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort", "2016-7-1");
INSERT INTO registration (location, section) VALUES ("Grapefruit Resort 2", "2016-8-1");
INSERT INTO registration (location, section) VALUES ("Sweet Bayou", "2016-9-1");
INSERT INTO registration (location, section) VALUES ("Nestor Camp", "2016-10-1");
INSERT INTO registration (location, section) VALUES ("Lewis and Clark", "2016-1-1");
INSERT INTO registration (location, section) VALUES ("Lewis and Clark", "2016-2-1");
INSERT INTO registration (location, section) VALUES ("Little Derby", "2016-3-1");
INSERT INTO registration (location, section) VALUES ("Robotics Village", "2016-4-1");
INSERT INTO registration (location, section) VALUES ("Salt Camp", "2016-5-1");
INSERT INTO registration (location, section) VALUES ("Federal Camp", "2016-6-1");
INSERT INTO registration (location, section) VALUES ("Federal Camp", "2016-12-1");

INSERT INTO forum (name, email, stars, content) VALUES("Sam", "stopp@gmail.com", 4, "The camp was great, the environment was great, but it was too short!");
INSERT INTO forum (name, email, stars, content) VALUES("Juan", "juan@gmail.com", 5, "Best Camp Ever!");
INSERT INTO forum (name, email, stars, content) VALUES("Jimmy", "jm@aol.com", 3, "I guess it was ok");
INSERT INTO forum (name, email, stars, content) VALUES("Chad", "ilikemeat@chad.com", 1, "Sucked man");
INSERT INTO forum (name, email, stars, content) VALUES("Brad", "idontlikechad@icloud.com", 4, "At least it was better than hanging out with my brother all summer");

INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Apaches', 'Arizona', 'Maker 12, Phoenix Road, Liberty','0','0','1','35');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Eureka', 'California', 'Avenue of the Giants Road 11548, Eureka','1','0','1','55');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Santa Clara', 'California', 'University Circle 5, Santa Clara','1','0','1','80');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Tahoe South', 'California', 'Squaw Park 45, Tahoe','1','0','1','105');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Boulder', 'Colorado', 'Sierra Pine Ranch, 86 North, Boulder','1','0','1','80');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Chesapeake', 'Delaware', 'Grant Ave 115, Dover','1','1','1','45');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Grapefruit Resort', 'Florida', 'Beach Road 450, Orlando','1','1','1','50');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Grapefruit Resort 2', 'Florida', 'Beach Road 950, Orlando','0','1','1','100');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Little Derby', 'Kentucky', 'Bourbon Corridor 3rd, Louisville','1','0','1','58');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Sweet Bayou', 'Louisiana', 'Mount Crawfish Street 45, Baton Rouge','1','1','1','35');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Nestor Camp', 'Massachusetts', 'Lincoln Ave 124, Cambridge','1','0','1','52');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Lewis and Clark', 'Oregon', 'M50 Eugene Road, Portland','1','0','1','60');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Robotics Village', 'Texas', 'VEX Valley, Tech Park 15, Austin','1','0','1','82');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Salt Camp', 'Utah', 'NaCl Lake, M 575','1','1','1','75');
INSERT INTO camp (camp_name, location, address, active, season_winter, season_summer, capacity) VALUES ('Federal Camp', 'Washington, D.C.', 'George\'s Ave 14555, Herdon','1','0','1','90');
