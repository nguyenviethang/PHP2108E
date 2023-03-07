<?php
//trong truong hop nay khong dung the dong php   
/*khi nao can dung va khi nao khong dung the dong php
khong co the dong php: ngam hieu file do chi chua ma lenh php thoi 
*/
echo "<h1>hi you</h1>"; //ban chat php van hieu la string, nhuwng ben fia trinh duyet laij hieu la html nen no van dich duoc 
//ben fia client se nhan duoc, se dc va dich - hien thi  
// tren web server xampp - file co dinh dang index.php se mac dinh chay
// trong js khong co kieu du lieu array ma co doi tuong array thoi, con kieu du lieu van goi la object, tieng trong php khac kieu array laf araay, va kieu obiject laf kieu obiject
// trong php khong co kieu undefine

/**khai bao bien trong php 
 * su dung ki tu $ de khai bao bien
 * cac ki tu dung sau $ duoc goi la ten bien
 * 
 * 
 */
$name = 'teo';
//mot bien duoc goi la hop le:
// 1 co ki tu $
// 2 theo sau ki tu $ khong co khoang trang hay la so 
// $ age = '20'; sai
//@1email = 'nguyenvietthang@gmailcom'; sai
// $if ; hop le
// $else; hop le
// tieu chuan de dat ten bien
//camel- under score, case study
$myName = 'teo'; //hay dung 
$MyName = 'teo';
$my_name = 'teo';
// nhat quan chi su dung mot loai trong toan bo project

/** khai bao hang so  */
// 1 define 
define('PI', 3.14);

const MY_NAME = 'teo';
//hang so phai viet hoa het va dung dau gach duoi ngan cach(quy uoc)
//khong co tu khoa $
// define khac const o cho nao
/**const dung trong class oop con define khong dung duoc */
echo MY_NAME;
echo "<br/>";
echo PI;
////////////////////////////////////
echo "<br/>";
$test = 'hello';
$a = 'test'; //gia tri cua mot bien lai la mot bien khac, thang $a duoc gan cho mot gia tri maf ban chat gia tri day lai la mot bien khac thi $$a tham chieu den gia tri cua bien do
echo $$a; // tmham chieu den bien kia
// luu y: $$a khong dung de khai bao bien, no chi dung tham chieu gia tri cua  mot bien
echo "<br/>";
/**** mot so luu y */
// php khong quy dinh san kieu du lieu cho bien  - chi nhan kieu du lieu duoc khi gan gia tri cho bien
$myName = 'Thang'; // khong giong tu khoa let trong js
// duoc phep dinh nghia lai bien da ton tai(trong thuc te thi nen tranh)
$myEmail = 'nguyenvietthang@gmail.com';
echo gettype($myEmail); // hien thi kieu du lieu cua bien(trong js hay dung typeof)  //
echo "<br/>";
$myAge = 20;
echo gettype($myAge); //interger
echo "<br>";
$checking = true;
echo gettype($checking); // boolean
echo "<br/>";

$money = 10.12;
echo gettype($money); //double

$demo; // trong php, kgong bao gio khia bao bien ma khong gan gia tri
echo gettype($demo); // NULL 

/**cac Error trong php 
 * 1: Notice
 * 2: Warning
 * 3: 
 * 
 */
