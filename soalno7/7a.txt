C:\>cd xampp\mysql\bin

C:\xampp\mysql\bin>mysql -u root -p
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 404
Server version: 10.1.34-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> show databases
    -> show databases;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'show databases' at line 2
MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| ci_crud            |
| crud               |
| db_cat             |
| diasnetdb          |
| faculty            |
| grosirtasjogja     |
| grosirtaskerajinan |
| information_schema |
| lms                |
| mysql              |
| pegawai            |
| performance_schema |
| perpustakaan       |
| phpmyadmin         |
| test               |
| tokolaravel        |
| ujian_cat          |
+--------------------+
17 rows in set (0.61 sec)

MariaDB [(none)]> use perpustakaan
Database changed
MariaDB [(none)]> use perpustakaan
Database changed
MariaDB [perpustakaan]> SELECT * FROM books;
+----+-------------------+------+-------+------------------------------------------+-------------+
| id | name              | stok | image | deskripsi                                | category_id |
+----+-------------------+------+-------+------------------------------------------+-------------+
|  1 | Php dasar         |    5 |       | belajar pemrograman php dasar            |           1 |
|  2 | Indonesia Merdeka |    4 |       | Sejarah perjuangan Kemerdekaan indonesia |           2 |
|  3 | Aqidah Islam      |    7 |       | Tentang Aqidah Islam                     |           3 |
|  4 | Biologi           |   10 |       | Pelajaran biologi                        |           4 |
+----+-------------------+------+-------+------------------------------------------+-------------+
4 rows in set (0.14 sec)

MariaDB [perpustakaan]>