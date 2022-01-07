CREATE DATABASE IF NOT EXISTS `mvcpa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mvcpa`;

drop table if exists USER;

create table USER (
  ID integer primary key auto_increment,
  USERNAME varchar(255) not null,
  EMAIL varchar(255) not null,
  PASSWORD varchar(255) not null,
  ADMIN TINYINT(1) DEFAULT 0
  
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;


INSERT INTO `USER` (`USERNAME `, `EMAIL`, `PASSWORD`) VALUES
('mvcpa', 'user@mvcpa.com', 'mvcpa');
INSERT INTO `USER` (`USERNAME `, `EMAIL`, `PASSWORD`) values
('admin', 'admin@mvcpa.com', 'admin',1);
