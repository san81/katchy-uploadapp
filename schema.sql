
use database katchy;

create table users(
sno integer auto_increment primary key,
username varchar(100) unique,
password varchar(255),
usertype varchar(20)
)engine=InnoDB;

create view hospitals as select * from users where usertype='HOSPITAL';

create table link(
userid integer,
hospitalid integer,
primary key(userid,hospitalid),
foreign key(userid) references users(sno),
foreign key(hospitalid) references users(sno)
)engine=InnoDB;