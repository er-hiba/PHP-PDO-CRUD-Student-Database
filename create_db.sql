mysql> create database mydb;
Query OK, 1 row affected (0.75 sec)

mysql> use mydb;
Database changed
mysql> create table student (
    -> ID int primary key auto_increment,
    -> name varchar(50),
    -> email varchar(100) unique);
Query OK, 0 rows affected (0.32 sec)

mysql> insert into student
    -> values
    -> (null, 'Student 1', 'email1@gmail.com'),
    -> (null, 'Student 2', 'email2@gmail.com'),
    -> (null, 'Student 3', 'email3@gmail.com');
Query OK, 3 rows affected (0.02 sec)
Records: 3  Duplicates: 0  Warnings: 0

mysql>
