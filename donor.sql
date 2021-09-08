create table donor
(
donor_id int unsigned primary key auto_increment,
d_fname varchar(30),
d_lname varchar(30),
d_email varchar(30),
d_phone_number bigint,
d_address varchar(100),
d_city enum('thane','mumbai','chembur','mulund','kalyan'),
d_gender enum('male','female','other'),
d_age enum('less than 18','18-50','greater than 50'),
d_blood_type enum('B+','B-','A+','A-','O+','O-','AB+','AB-'),
d_weight enum('less than 50','greater than or equal to 50'),
d_haemo enum('less than 12.5','greater than or equal to 12.5'),
d_bp enum('yes','no'),
d_health enum('yes','no')
);
