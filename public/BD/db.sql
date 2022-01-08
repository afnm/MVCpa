CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quiz`;

drop table if exists USER;
drop table if exists USERQ;
drop table if exists QUESTIONS;
drop table if exists ANSWER;

create table USER (
  uid integer primary key auto_increment,
  username varchar(250) not null,
  PASSWORD varchar(250) not null
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table USERQ (
  uqid int(250) auto_increment not null primary key,
  username varchar(250),
  totalques int(250),
  anscorrect int(250)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table QUESTIONS (
  qid int(250) auto_increment not null primary key,
  question varchar(250),
  ans_id int(250)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

create table ANSWER(
  aid int(250) auto_increment not null primary key,
  answer varchar(250),
  ans_id int(250)
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

insert into USER(USERNAME, PASSWORD) values
('user', 'user');