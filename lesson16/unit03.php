<?php 
// tìm hiểu và sử lý chuỗi trong php
//chuỗi phải đặt trong dấu nháy đơn hoặc nháy kép
//khai báo số, chữ cái, cá kí tự đặc biệt ... nằm trong chuỗi
$title = 'php';
$str = 'dang học $title cơ bản'; //$title được hiểu không phải là biến, chỉ là kí tự bình thường thôi
$str2 = "dang hoc {$title} basic"; //{$title} được hiểu là một biến, nó thường được bao bằng ngoặc nhọn để áp chỉ là biến để dễ phân biệt dễ nhận diện
//dùng nháy kép thì sự dưng biến ngay trong chuỗi
// echo $str;
echo '<br/>';
// echo $str2;
$str3 = 'dang hoc'. $title .'co ban';
// . : dấu chấm này là toán tử nối chuỗi
//echo $str3;
$str4 = 'dang hoc \'JS\' co ban';
$str5 = "dang hoc \"JS\" co ban";
// lồng - ghếp nháy đơn(kép) trong nháy đơn(kép) khác--> phải thêm dấu \ bên cạnh dấu nháy đơn(kép) như ví dụ bên trên
echo $str4;
echo "<br/>";
echo $str5;

// riêng trường hợp lồng nháy đơn trong cặp nháy kép hoặc ngược lại thì không cần xử lý như trên
$str6 = 'dang hoc "JS" co ban';
echo '<br/>';
echo $str6;
echo '<br/>';

/***các hàm sử lý với chuỗi(các hàm php đã đĩnh nghĩa sẵn- giống như hàm xử lý với biến) */
$myStr = 'hoc php khong kho'; //đém bao nhiêu kí tự
echo strlen($myStr); //các ký tự chuẩn theo bảng mã english
//mb_strlen(): dùng hàm  nay cho các đinh dạng ký tự đặc biệt
//md5 
echo '<br/>';
$pass = '123456789';
$pass2 = '123456789';
echo md5($pass);
echo'<br/>';
echo md5($pass2);
echo '<br/>';

$myStr2 = "cac ban di choi thi nghi som nhe";
//di choi = di ngu : tìm kiếm và thay thế ký tự nằm trong chuỗi
$myStr3 = str_replace('di choi', 'di ngu', $myStr2);
echo $myStr2;
echo '<br/>';
echo $myStr3;
echo '<br/>';

$fruits = 'cam, quyt, mit, dua';
$arrFruits = explode(',',$fruits);//chia một chuỗi thành một mạng dựa trên ký tự dấu phẩy(phân cách) trong mảng fruits
//mảng không echo được, echo chỉ dành cho string
var_dump($arrFruits);

$scription = "<script> alert('hi you') </script>";// php hiểu là string nhưng trình duyệt đọc dịch và hiểu là js
// echo $scription;
echo htmlentities($scription); //bây giờ trình duyệt hiểu đoạn mã lênh <script> alert('hi you') </script> là đoạn mã bất bình thường và không thực thi như là một đoạn code js nữa, php sẽ chuyển hết các cú pháp html, css, js về thành cá text bình thường--> trình sẽ không hiểu đó là html,css,js-->tránh bị hacker phá db.


