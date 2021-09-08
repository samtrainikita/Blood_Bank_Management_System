create table receiver (
r_fname varchar(30),
r_lname varchar(30),
r_email varchar(30),
r_phone_number bigint,
r_address varchar(100),
r_gender enum('male','female','other'),
r_blood_type enum('B+','B-','A+','A-','O+','O-','AB+','AB-'),
r_quantity decimal(2,1) 
);