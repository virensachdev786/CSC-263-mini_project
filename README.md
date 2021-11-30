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

LOCAL SETUP INSTRUCTIONS
1) Create a local folder
2) Using terminal / git bash navigate inside the folder
3) run "git init"
4) run "git pull https://github.com/virensachdev786/CSC-263-mini_project"
5) Start mySQL database locally "mysql -u "username" -p" to make sure DB works
6) run "mysql -u "your DB username" -p < createDB.sql"
7) run "mysql -u "your DB username" -p"
8) run CREATE USER 'username'@'127.0.0.1' IDENTIFIED WITH mysql_native_password BY 'password';
9) GRANT ALL PRIVILEGES ON * . * TO 'username'@'127.0.0.1';
10) run "php -S localhost:3306"
11) go to browser and go to url "localhost:3306/menu.html"

Basic troubleshooting for:
if port is already in use:
run "sudo lsof -i:3306"
run "sudo killall $(lsof -i:3306)"
run "apachectl restart"