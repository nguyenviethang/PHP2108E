<?php
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
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">thong tin sinh vien</h1>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Ma sv</th>
                            <th>ten sinh vien</th>
                            <th>tuoi</th>
                            <th>email</th>
                            <th>gioi tinh</th>
                            <th>sdt</th>
                            <th>hoc bong</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(): ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>