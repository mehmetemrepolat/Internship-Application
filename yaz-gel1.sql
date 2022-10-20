CREATE database stajdurumlari;
use stajdurumlari;


Create Table Admin(
	Admin_ID			INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Admin_UserName		varchar(40),
    Admin_Password		varchar(50),
    Admin_Mail			varchar(100)
);

create TABLE TEACHERS_INFORMATIONS(
	Teacher_ID				INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Teacher_Number			varchar(6) NOT NULL UNIQUE KEY,
    Teacher_Name			varchar(25),
    Teacher_SurName 		varchar(25),
    commission_memberShip	varchar(1)
);


CREATE TABLE students (
    st_id int 		NOT NULL AUTO_INCREMENT UNIQUE KEY,
    st_name 		varchar(25)  NOT NULL,
    st_lastName 	varchar(25)  NOT NULL,
	st_TC_No 		varchar(11)  NOT NULL	UNIQUE KEY,
    st_PhoneNumber 	varchar(11)  NOT NULL	UNIQUE KEY,
    st_mailAdress	varchar(120) NOT NULL,
    st_class 		varchar(1)   NOT NULL,
    st_adress 		varchar(300) NOT NULL,
    st_city			varchar(25)  NOT NULL,
    st_town			varchar(25)  NOT NULL,
    st_postCode		varchar(5)   NOT NULL,
    st_citizenship	varchar(15)	 NOT NULL,
    st_Teacher_ID	INT NOT NULL ,
    FOREIGN KEY(st_Teacher_ID) REFERENCES TEACHERS_INFORMATIONS(Teacher_ID)
);


create TABLE students_loginInformation(
    st_password 	varchar(25) NOT NULL,
    st_id			int NOT NULL,
    FOREIGN KEY (st_id) REFERENCES students(st_id)
)ENGINE=INNODB;


create TABLE Company_Informations(
	Company_ID				INT not NULL AUTO_INCREMENT UNIQUE KEY,
    Company_Name			varchar(150),
    Activity_Field			varchar(50),
	Company_adress 			varchar(300) NOT NULL,
    Company_city			varchar(25)  NOT NULL,
    Company_town			varchar(25)  NOT NULL,
    Company_postCode		varchar(5)   NOT NULL,
	Company_PhoneNumber 	varchar(15)  NOT NULL	UNIQUE KEY,
	Company_FAX				varchar(50) NOT NULL,
    Company_mailAdress		varchar(120) NOT NULL,
	Responsible_Title 		varchar(1)   NOT NULL,
    `3308`					varchar(1)
);


create TABLE Internship_Informations(
	IS_ID 				INT not NULL AUTO_INCREMENT UNIQUE KEY,
    Company_ID			INT not NULL,
	FOREIGN KEY(Company_ID)	REFERENCES Company_Informations(Company_ID),
	st_id				INT NOT NULL,
    FOREIGN KEY (st_id) REFERENCES students(st_id),
    starting_date		date,
    finish_date			date,
    working_day			varchar(2),
    saturday_working 	varchar(1),
    healt_care			varchar(1),
    GSS					varchar(1),
    `25`			varchar(1)
);





create TABLE teachers_logininformations(
	Teacher_password text not null,
    Teacher_ID		 INT NOT NULL,
    FOREIGN KEY(Teacher_ID) REFERENCES TEACHERS_INFORMATIONS(Teacher_ID)
);

Create Table Commissions(
	Commission_ID		INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Teacher_Number		varchar(25),
	FOREIGN KEY(Teacher_Number) REFERENCES TEACHERS_INFORMATIONS(Teacher_Number),
    Teacher_ID			INT NOT NULL,
	FOREIGN KEY(Teacher_ID) REFERENCES TEACHERS_INFORMATIONS(Teacher_ID)

);

Create Table Commissions_logininformations(
	COMISSION_ID		INT NOT NULL AUTO_INCREMENT,
	FOREIGN KEY(COMISSION_ID) REFERENCES Commissions(Commission_ID),
    COMISSION_PASSWORD	varchar(50)
);



