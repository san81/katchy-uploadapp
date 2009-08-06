
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
foreign key(userid) references users(sno) on delete cascade,
foreign key(hospitalid) references users(sno) on delete cascade
)engine=InnoDB;

create table documents(
docid integer auto_increment primary key,
hospital_id integer,
document_name varchar(200),
uploaded_date timestamp default now(),
download_status boolean default false,
downloaded_by_user integer,
delete_status boolean default false, 
foreign key(downloaded_by_user) references users(sno),
foreign key(hospital_id) references users(sno) on delete cascade
)engine=InnoDB;