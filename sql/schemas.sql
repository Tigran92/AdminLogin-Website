DROP TABLE IF EXISTS `admin`,`blog_entry` ;
CREATE TABLE `blog_entry` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT NULL,
  `entry_text` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`entry_id`)
); 

-- this will create a table for admin users
CREATE TABLE admin (
    admin_id INT NOT NULL AUTO_INCREMENT,
    email TEXT,
    password VARCHAR( 40 ),
    PRIMARY KEY ( admin_id )
)
