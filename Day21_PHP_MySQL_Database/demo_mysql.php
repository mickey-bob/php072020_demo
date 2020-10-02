<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 9/29/2020
 * Time: 7:37 PM
 */
// demo_mysql
// cach su dung mysql.
// khi cai xampp, mac dinh da cai apache, php vs csdl: mysql.
// tuong tac vs csdl thong qua viec gui cac cau truy van - cau sql.
// co 2 cach thao tac vs mysql, dung command line or UI: USER Interface,
// demo dungf UI - su dung phpmyadmin de qua ntri csdl mysql.
// truy cap phpmyadmiin theo link:
// http://localhost/phpmyadmin
// mac dinh xampp tu dong dang nhap khi truy cap vao phpadmin vs username = root, pass: "";
// hoc mysql voi php: hoc cach viet cau truy van SQL, chu ko dua hoan toan vao giao dien phpmyadmin.
// thuat ngu trong CSDL:
// + DAtabase: ten csdl
// + table: cac bang dung de chua data.
// + trong table se co: cot/truong: mo ta t.tin cho table.
// + ban ghi/ record: cac data cu the cua doi tuong.
// vd: csdl: quanlybanhang, co the co chuc nang quan ly laptop, user, news ...>
// th phan tich bang user xem co cac truong gi: name, age , job, addr, marred, gender, ....
// t.tin 1 ban ghi/record:
// name = khanhnt, age=20, addr = ha noio, married = true.
// + khoa chinh 1 bang (primary key):phan biet record vs nhau, giua 2 bat ky ko the trung primary key.
// + khoa phu: foreign key: la primary cua table khac --> la su lien ket giua cac table.

/*
 * 3- hoc cau truy van de tuong tac vs Mysql
 * de test cua sql, su dung phpyadmin de viet code vs chay truc tiep thong qua tab SQL
 * cua phpmyadmin.
 * + sql ko phan biet hoa thuong, nhung nen viet hoa:
 * 1 - tao csdl: CREATE DATEBASE php0720_test1;
 * + tao csdl day du:
 *  CREATE DATABASE IF NOT EXISTS php0720e_mysql  CHARACTER SET uft8 COLLATE utft_general_ci;
 * 2 - xoa csdl:
 * DROP DATABASE php072020_test1;
 * 3- su dung csdl, muon tao bang phai dung trong csdl do thi moi tao dc,
 * trong phpmyadmin phai click truc tiep vao csdl.
 * USE php072020_mysql;
 * CREATE TABLE categories(
id INT(11) AUTO_INCREMENT,
name VARCHAR(100)DEFAULT NULL, # cho phep name rong van dc luu.
# nguoc la la NOT NULL
    description TEXT,
    status TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    # SAU KHI KHAI BAO CAC truong, set primary key, foreign key cho table.
    PRIMARY KEY (id)
);
# 6 : xoa tables;
DROP TABLE abc;

 * */

?>