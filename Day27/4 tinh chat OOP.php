<?php
/**
 * Created by PhpStorm.
 * User: khanhnt
 * Date: 10/22/2020
 * Time: 6:51 PM
 */
// 4 tinh chat cua OOP
// 4.1 Tinh truu tuong: the hien cua cac abstract class
abstract class Persion {
    abstract public function getName();
}
// abstract dc dung cho muc dinh ke thua: cac class con cua abstracct buoc phai khai
// bao lai cac attribute/method.

//4.2 Tinh dong goi: the hien cho su che giau t.tin trong OOP, chinh la cac pham vi
// truy cap: private, protectd, public

//4.3 Tinh ke thua: the hien cua tu khoa: extends
// class con ke thua dc tat ca attribute/method cua class cha co p.vi truy cap
// protected vs public.
// PHP ho tro don ke thua, chi ke thua 1 class

//4.4: Tinh da hinh: the hien cua cac interface.
// 1 method khi dc implement tu class cu the co the override theo muc dich rieng cua tung class do.
interface Config1 {
    // ko the khai bao dc attribute trong interface
    // method phai kahi bao giong method truu tuong --> ko co n.dung ben trong
    public function sendMail ();
    public function getMail ();
}
class A implements Config1 {

    public function sendEmail()
    {
        // TODO: Implement sendEmail() method.
    }

    public function getEmail()
    {
        // TODO: Implement getEmail() method.
    }

    public function sendMail()
    {
        // TODO: Implement sendMail() method.
    }

    public function getMail()
    {
        // TODO: Implement getMail() method.
    }
}

// khac nhau abtract vs interface:
// + hay day interface vao independence abtraction
// + abtract : khai bao dc function co n.dung vs attribute/t.tinh
// + interface: ko khai bao function co n.dung vs atribute, only function with none code, none info.
// + abtract: kieu don ke thua, interface kiểu giống đa kế thừa (tuy về bản chất thì chưa chuẩn).
// + ... nhieu nua, ve tim hieu