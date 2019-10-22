CREATE TABLE ft_table
(
    ID  INT  AUTO_INCREMENT NOT NULL,
    LOGIN VARCHAR(11) DEFAULT 'toto' NOT NULL,
    `group` ENUM('staff', 'student', 'other') NOT NULL,
    creation_date DATE NOT NULL,
    PRIMARY KEY (ID)
 );