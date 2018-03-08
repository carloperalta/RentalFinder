
CREATE TABLE unit(
    Unit_ID int PRIMARY KEY AUTO_INCREMENT,
    Unit_Lat double,
    Unit_Long double,
    Unit_Price double,
    Unit_Type varchar(15) NOT NULL,
    Owner_ID int
);

CREATE TABLE user(
    user_id int NOT NULL,
    username varchar(20) NOT NULL,
    password varchar(20) NOT NULL,
    user_type varchar(6) NOT NULL
);

CREATE TABLE tenant(
    Tenant_ID int PRIMARY KEY AUTO_INCREMENT,
    Tenant_FN varchar(50) NOT NULL,
    Tenant_MI varchar(2) NOT NULL,
    Tenant_LN varchar(50) NOT NULL,
    Tenant_EMAIL varchar(50) NOT NULL,
    Tenant_CN varchar(11) NOT NULL,
    Tenant_BirthDate DATETIME
);


CREATE TABLE owner(
    Owner_ID int PRIMARY KEY AUTO_INCREMENT,
    Owner_FN varchar(50) NOT NULL,
    Owner_MI varchar(2) NOT NULL,
    Owner_LN varchar(50) NOT NULL,
    Owner_EMAIL varchar(50) NOT NULL,
    Owner_CN varchar(11) NOT NULL,
    Owner_BirthDate DATETIME
);

CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);

CREATE TABLE `rentalfinder`.`unit_type` ( `type_id` INT NOT NULL , `type_name` INT NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `owner` CHANGE `Owner_MI` `Owner_MI` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `tenant` CHANGE `Tenant_MI` `Tenant_MI` VARCHAR(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `unit` ADD `Unit_Description` VARCHAR(255) NOT NULL AFTER `Unit_Type`;

ALTER TABLE `tenant` ADD `Tenant_Gender` VARCHAR(10) NOT NULL AFTER `Tenant_LN`;

ALTER TABLE `owner` ADD `Owner_Gender` VARCHAR(10) NOT NULL AFTER `Owner_LN`;

ALTER TABLE `unit` ADD `Unit_Capacity` INT NOT NULL AFTER `Unit_Description`;

ALTER TABLE `user` CHANGE `password` `password` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE ci_sessions ADD PRIMARY KEY (id);
