<?php 
//null coalescing operator
 $n = isset($a) ? $a : 1; // ???
//echo $n; ///?
//kiểm tra điều kiện đúng hay sai. Đúng thì trả về giá trị đằng sau dấu ?, sai thì trả về đăng sau  dầu  hai chấm
//một biến được gọi là tồn tại là khi mình khai báo nó và không gán giá trị bằng null
//từ php7 trở lên, thì nó hộ trợ toán tử nullcoalescing operator

$a = 100;
$m = $a ?? 10; //isset($a) ? $a : 1;
// echo $m;

//spaceship operator

//$n = 1;
//$m = 100;
$compare = $n <=> $m;
//nếu kêt quả trả vè là -1 thì biểu thức bên tay trái nhỏ hơn bên tay phải
//nếu kêt quả trả vè là 0 thì biểu thức bên tay trái bằng hơn bên tay phải
//nếu kêt quả trả vè là 1 thì biểu thức bên tay trái lớn hơn bên tay phải
// echo $compare;
echo "<br/>";

//vong lặp do while (vòng lặp kiểm tra điều kiến sau)
//luôn luôn thưc thi ít nhát 1 vòng lặp rồi sau đó kiểm tra điều kiện để có tiếp tục thực thi các vòng lặp sau hay không

// $i = 1;
// do {
//      echo $i;
//      $i++;
// }while($i < 10);
// echo "<br/>";
//1 - n (điều kiện luôn đúng- vòng lặp vô hạn)

/***hàm tự đinh nghĩa trong php */
$k = 10; // biến global
function sumNumber($a, $b = null) {
    //để sự dụng được biến toàn cục từ ngoài hàm vào thì
    // khai báo biến là biến toàn cục cho hàm biết
    global $k;
    return $a + $b + $k;// không hiểu biến $k ở đây;// $k này là biến scope(được định nghĩa trong hàm)

}
//1- tù khóa (function) bắt buộc phải khai báo và viết đúng
//2 - sumNumber : tên hàm(do LTV tự định nghĩa)
//3 - $a, $b; tham số( tham số bắt buộc - hay tham số không bắt buộc)
//4 - từ khóa  - trả về kết quả cho hàm và thoát khỏi hàm

$res = sumNumber(3,4);
// echo $res;

//biến static trong hàm sẽ lưu lại được giá trị sau mỗi lần gọi hàm ra sự dụng(sau khi thoát ra khỏi hàm) -- không giống như biến cục bộ thông thường
// function checkStatic()
// {
//     static $count = 0;
//     $count++;
//     echo $count;
// }
// checkStatic(); // goi ham ra su dung 
// checkStatic();
// checkStatic();
// checkStatic();

//tham chiếu và tham trị(truyền tham số vào trong hàm)
//1- tham trị: truyền biến vào hàm, khi ra khỏi hàm , biên đó không bị thay đổi theo logic trong hàm.(chiếm 90% trường hợp sự dụng so với tham chiếu)
$thamTri =  10;
function hamThamTri($thamTriThamSo)
{
$thamTriThamSo +=10;
}
echo $thamTri;
hamThamTri($thamTri); //biến truyền vào hàm không bị thay đổi theo logic trong thân hàm
echo "<br/>";
echo $thamTri;
echo "<br/>";


$thamChieu = 20;
function hamThamChieu(& $thamSo)
{
 // $thamSo : biến truyền vào hàm theo kiểu tham chiếu
 $thamSo += 30;
}
echo $thamChieu;
echo "<br/>";
hamThamChieu($thamChieu); //truyền biến vào hàm theo kiêu tham chiếu - giá trị của biến sẽ bị thay đổi theo logic trong thân hàm
echo "<br/>";
echo $thamChieu;
echo "<br/>";


/***lamda function php */
 $kiemTraChanLe = function ($n)
 {
    if($n % 2 === 0) {
        return true;
    }
    return false;
 }; //phải có chấm phẩy vì đây bản chất là hàm thông qua một biến.
 $result = $kiemTraChanLe(5);
 var_dump($result); //hiện thị kêt quả và kiểu dữ liệu của biến
 echo "<br/>";