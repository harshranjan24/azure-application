/* Update below script in DB  */

CREATE DATABASE azuredb;

CREATE TABLE `cloud_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `login_id` varchar(50) NOT NULL DEFAULT '',
  `user_pwd` varchar(50) NOT NULL DEFAULT '',
  `emailid` varchar(50) NOT NULL DEFAULT '',
  `phone_no` varchar(50) NOT NULL DEFAULT '',
  `status` char(1) NOT NULL DEFAULT '',
  `createdby` int(11) NOT NULL DEFAULT '0',
  `created_date` date NOT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*  Insert Statement  */

INSERT INTO cloud_users(user_name,login_id,user_pwd,emailid,phone_no,status,createdby,created_date)
values('Administrator','admin','4e8033b7006fc171d12b9ee4ef299b64','admin@azure.com','9090909090','A',1,'2023-09-21');


Application Username & Password:
----------------------------------------
username: admin
password: dell!@#$987