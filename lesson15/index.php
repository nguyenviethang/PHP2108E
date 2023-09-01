<?php 

///trong trương hợp này không dùng đến thẻ đóng php
//khi nào không cần dùng thẻ đóng php
// trog trường hợp không có thẻ đóng php thì ngầm hiểu trong một file code này chỉ chứa mã code php thôi

echo "<h1>Hi you!</h1>"; //bản chất php vãn hiểu là String(chuỗi) trong khi phía client hiểu là đoạn html

//bên phía client sẽ nhận được thì sẽ đọc dịch và hiện thị 

//trên web server xampp - file có tên là inde.php: hiểu đây là file mặc định chạy ( khi không rõ truy cập chínhh xác là file nào)

/*** khai báo biến trong PHP */
// sự dụng kí tự $ để khai báo biến
//các kí tự đứng đằng sau $ được gọi la tên biến
$name = 'Teo';
//một biến được coi là hợp lệ thì phải đáp ứng uêy cầu sau:
//1 - bắt đầu là kí tự $
//2 - theo sau $ không phải là khoảng trắng hay là số
// $ age = 20; sai
// $if; $else; hop le
// tiêu chuẩn đặt tên biến: camel
$myName = 'teo'; //camel
//nhất quán sự dụng 1 kiểu cho toàn bộ ứng dụng

/***khai báo hằng số */
define('PI', 3.14);
const MY_NAME = 'BAC';
//Hằng số viết hoa hết và dùng dấu gạch dưới để ngăn cách
echo MY_NAME;
echo "<br/>";
echo PI;
///////////////////////////////////////////////////
$test = "hello";
$a = "test"; //giá trị của một biến lại là một biến khác
echo $$a; //tham chiếu đến giá trị của biến kia
// $$: không phải đung để khai báo biến
//--> kết quả: hiện thị ra hello

/**1 số điều lưu ý */
//php không quy đinh sẵn kiểu dữ liệu cho biến - chỉ nhân kiểu dữ liệu khi gán giá trị cho biến

$myName = "teo"; // không giống như từ khóa let như js
//được phép định nghĩa lại biến đã tồn tại(trong thực tế thì nên tránh)
$myEmail = 'teo@gmail.com';
echo gettype($myEmail);//kiểm tra kiểu dữ liệu cho biến
$myAge = 20;
echo gettype($myAge);//int
$cheking = true;
echo gettype($cheking);//boolean
$money = 10.12;
echo gettype($money);//double

$demo; //trong php: không bao giờ khai báo biến mà không gán giá trị cho nó(gây ra lỗi Notice)
//Error
//1: Notice
//2: warning
//3: fatal error ( buộc phải fix)
echo gettype($demo);

// khi khai báo một biến trong php - mà chưa cần sự dụng ngay, hay gán giá trị bằng nul cho nó - khi gan bằng null, trình hông dịch sẽ hiểu là biến đố chưa tồn tại - chưa cần cấp phát vùng nhớ để lưu trữ

$a = '10'; /* number string: trông chuõi chỉ chữa số -> khi thực hiện phép toán học thì php tự đông convert sang dạng số để thực thi phép toán, điều này cũng xảy ra tương tự dối với js*/
$b = 20;
$c = $a + $b;
echo $c; // kết quả: 30 lý do: trong js kết quả này là 30 vì dấu cộng trong js cho phép ghép chuỗi trong khi php thì dấu + ưu tiên là phép toán học còn muốn ghép chuỗi thì dùng dấu chấm
