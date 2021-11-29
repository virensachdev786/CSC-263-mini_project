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
    studentid INT NOT NULL AUTO_INCREMENT, 
    lastname CHAR(100), 
    firstname CHAR(100), 
    dob DATE,
    PRIMARY KEY(studentid)
);

CREATE TABLE COURSES(
    courseid INT NOT NULL, 
    coursename VARCHAR(12), 
    credits INT,
    PRIMARY KEY(courseid)
);

CREATE TABLE GRADES(
    courseid INT NOT NULL, 
    studentid INT NOT NULL, 
    term VARCHAR(12), 
    grade VARCHAR(2),
    PRIMARY KEY(courseid, studentid),
    FOREIGN KEY(courseid) REFERENCES COURSES(courseid),
    FOREIGN KEY(studentid) REFERENCES STUDENTS(studentid)
);