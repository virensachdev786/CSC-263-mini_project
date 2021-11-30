# CSC-263-mini_project

Embedding SQL in Web Applications
Develop a web-based application with a database backend that can be used for posting course grades and for retrieving transcripts.

One page must allow a professor to post grades.
One page must allow a student to retrieve a transcript.
You must implement and use the following database schema:

STUDENTS (studentid, lastname, firstname, dob)
studentid is primary key
COURSES (courseid, coursename, credits)
courseid id primary key
GRADES (courseid, studentid, term, grade)
the combination of courseid, studentid and term is primary key
courseid is a foreign key to courses(courseid)
studentid is a foreign key to students(studentid)
Note that you do not have to verify if somebody is a valid user, or what role they are in.
