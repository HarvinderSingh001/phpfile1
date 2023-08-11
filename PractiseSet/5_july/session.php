<?php
  ini_set('session.gc_maxlifetime',3);
  session_start();
  $_SESSION["lala"]="jarodi yamunanagar";$_SESSION['name']="harvinder singh";
  
  print_r($_SESSION['name']);
  echo ini_get('session.gc_maxlifetime');
 $n= $_SESSION['time']=time();
//  $n= $_SESSION['logintime']=time();

/*
insert into  tablename('name','age')
values('harvinder','21');
 
create database hello;

create table hi(
  name varchar(32) primary ,
  age int(10)
);

alter table hi
set name=demo;

drop table hi;

truncate hi;
select * from hi;
database connection
folder                                 include,require , requireonce
connection file
test file

database
table 
insert 
update 
delete
truncate
;

?>
