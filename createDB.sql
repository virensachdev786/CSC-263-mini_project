-- THIS FILE WILL BE USED TO SAVE SCRIPT FOR CREATING DATABASE AND TABLES
-- STUDENTS (studentid, lastname, firstname, dob)
-- studentid is primary key
-- COURSES (courseid, coursename, credits)
-- courseid id primary key
-- GRADES (courseid, studentid, term, grade)
-- the combination of courseid, studentid and term is primary key 
-- courseid is a foreign key to courses(courseid)
-- studentid is a foreign key to students(studentid)

-- https://www.tutorialspoint.com/mysql/mysql-create-tables.htm
CREATE DATABASE STUDENTGRADES;
USE STUDENTGRADES;

CREATE TABLE STUDENTS(
    studentid INT NOT NULL, 
    lastname CHAR(100), 
    firstname CHAR(100), 
    dob DATE,
    PRIMARY KEY(studentid)
);

-- dummy inserted data
insert into STUDENTS values("1", "Sachdev", "Viren", "2000-11-13");
insert into STUDENTS values("2", "Ansari", "Arham", "2000-11-1");
insert into STUDENTS values("3", "Pacheo", "Andy", "2000-11-2");
insert into STUDENTS values("4", "Singh", "Jaskaran", "2000-11-3");


CREATE TABLE COURSES(
    courseid INT NOT NULL, 
    coursename VARCHAR(12), 
    credits INT,
    PRIMARY KEY(courseid)
);

-- dummy inserted data
insert into courses values("1", "CSC-171-001", "3");
insert into courses values("2", "CSC-175-001", "3");
insert into courses values("3", "CSC-272-001", "3");
insert into courses values("4", "CSC-344-001", "3");

CREATE TABLE GRADES(
    courseid INT NOT NULL, 
    studentid INT NOT NULL, 
    term VARCHAR(12), 
    grade VARCHAR(2),
    PRIMARY KEY(courseid, studentid),
    FOREIGN KEY(courseid) REFERENCES COURSES(courseid),
    FOREIGN KEY(studentid) REFERENCES STUDENTS(studentid)
);
