use library;
CREATE TABLE  `customers` (
`id` bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 100 ) NOT NULL ,
`price` bigint(20) NOT NULL ,
`available` VARCHAR( 100 ) NOT NULL,
`edition` bigint(20) NOT NULL,
`Page` bigint(20) NOT NULL,
`ISBN` bigint(20)  NOT NULL
) ENGINE = INNODB;

INSERT INTO `customers` VALUES (1,'Aerosol Science and Technology','20','yes','2','349','97877700705'),
(2,'Applied mathemetics for database professional','50','yes','1','802','97800654705'),
(3,'Game programming in C++','120','no','2','399','91247800705'),
(4,'Algorithm in Java','80','no','2','674','97899900705');
