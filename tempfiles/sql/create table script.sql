create table userdata ( 
	username varchar(50),
    semester varchar(6),
	usn varchar(20) primary key,
    mobile_no numeric(10) unique,
    email varchar(20) unique,
    passwd varchar(20)
    );

create table user_scores (
	usn varchar(20),
    quiz_score numeric(2),
    program_score int,
    quiz_no int unique,
    program_no int unique,
    primary key(usn, quiz_no, program_no),
    foreign key(usn) references userdata(usn));