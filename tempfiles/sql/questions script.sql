create table questions_ds ( question_no varchar(5) primary key , question varchar(200), answer_no varchar(5));
create table questions_oj ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_co ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_ld ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_cn ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_dbms ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));
create table questions_eng ( question_no varchar(5) primary key , question varchar(200),answer_no varchar(5));

create table answer_ds ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_oj ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_co ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_ld ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_cn ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_dbms ( option_no varchar(5) primary key ,  options_name varchar(200));
create table answer_eng ( option_no varchar(5) primary key ,  options_name varchar(200));