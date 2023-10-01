<?php
//các kiến thưc về mảng trong php
//1 - kiểu dữ liệu: array

//2 - định nghĩa / khai báo
$arrNumber = array(); // mảng rỗng(chưa có phần tử bên trong)
$arrNumber2 = []; // mảng rỗng(từ php 5.3 trở lên)

//3 - mảng 1 chiều(mảng đơn) (các phần tử trong mảng là cá giá trị đơn)
$numbers1 = [1,2,3,4,5,6,7,8,9];

//4 - mảng đa chiều(phần tử trong mảng lại là một giá trị là một mảng)
$numbers2 = [1,2,3,[100,200,300],4,5,6];

//5 - mảng tuần tự(key: tự động được sắp sếp theo thứ tự nào đó(tăng dần) - key sẽ là số)(mảng đó sẽ không cần khai báo key)
$numbers3 = [1,2,3,4,5,6,7,8,9];//mảng này không cần khai báo key(key cảu các phần tử nằm trong mảng sẽ được tự động tạo ra(sẽ là số) và sắp xếp tăng dần)
echo "<pre/>";
print_r($numbers3); //không sự dụng echo để hiện thị mảng

//6 - mảng không tuần tự(mảng sẽ được khai báo key và index và nó không tuân theo một trật tự săp xếp nào cả)
$student = ['name' => 'van teo', 'age' => 18, 'email' => 'vanteo@gmail.com'];
echo "<pre/>";
print_r($student);

//7 - truy cập một phần tử nằm trong mảng
//cú pháp: nameArray(key):
$nameStudent = $student['name']; //ten sinh vien
echo $nameStudent;
echo '<br/>';
echo $numbers3[8]; //9
echo'<br/>';
echo $numbers2[3][1]; //200

// 8 - thêm phần tử vào mảng ban đầu
$student ['address'] = 'Ha noi';
echo "<pre>";
print_r($student);
$arrNumber[0]=10;
$arrNumber[1]=20;
echo "<pre>";
print_r($arrNumber);

//9 - dùng hàm count để kiểm tra số lượng phàn tử trong mảng(đếm từ 1)
echo '<br/>';
echo count($student);//4
echo '<br/>';
echo '<br/>';

//10 - duyệt tất cà các phần tử nằm trong mảng
$arrNumber1 = [1,2,3,4,5,6,7,8,9,10];
//for ..
for($i = 0; $i < count($arrNumber1); $i++) { // vì sao không phải là $i <= count($arrNumber1)? là vì count đếm từ 1, còn array đếm từ không, hiển nhiên count lớn array.
    //$i đại diện cho index - key cảu phần tử đầu tiên trong mảng
    echo "key: {$i} - value : {$arrNumber1[$i]}";
    echo "<br/>";
}

//foreach ...
foreach($arrNumber1 as $k => $item ) {
    //$k : biến đại diện cho index - key của phần tử
    //$item : biến đại diện cho các giá trị của phần tử nằm trong mảng
    // as : từ khóa phải khai báo
    // => : ký tự cú pháp phải khai báo khi muốn sự dụng key ở trong mảng
    echo "key of array: {$k} - value of array: {$item}";
    echo "<br/>";
}

foreach($numbers1 as $val) {
    //trong trường hợp này không cần quan tâm đến key của mảng
    //trong trường hợp này không thể biết index - key của mảng(vì không khai báo)
    echo "val of array: {$val}";
    echo"<br/>";
}

//mảng đa chiều
$infoStudents = [
    [
        'msv' => 1,//lưu ý key nằm trong mảng thì phải dưới dang string(tức là thêm dâu nháy đơn) còn key dưới dạng số thì không cần dấu nháy đơn và không nên viết koảng trắng thay vì đó là thêm dấu gạch dưới
        'name' => 'van teo',
        'age' => 20,
        'email' => 'vanteo@gmail.com',
        'gender' => 1,
        'phone' => '0123456789',
        'money' => 2000000
    ],//đại diện thông tin cho một sinh viê
    [
        'msv' => 2,
        'name' => 'van ty',
        'age' => 21,
        'email' => 'vanty@gmail.com',
        'gender' => 1,
        'phone' => '0132456789',
        'money' => 4000000
    ],
    [
        'msv' => 3,
        'name' => 'van tu',
        'age' => 23,
        'email' => 'vantu@gmail.com',
        'gender' => 0,
        'phone' => '0223456789',
        'money' => 3000000
    ]

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>