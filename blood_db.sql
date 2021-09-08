use blood_db;
create table user(
u_id int primary key auto_increment,
u_fname varchar(30),
u_lname varchar(30),
u_email varchar(30) not null,
u_phone_number bigint,
u_address varchar(60),
u_age int,
u_gender enum('Male','Female','Other'),
u_blood_type enum('A+','B+','AB+', 'O+','A-','B-','AB-','O-'),
u_password varchar(30) not null
);


