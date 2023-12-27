<?php
//lập trình hướng đối tượng là phương pháp viết code cho phép nhóm các action tương tự nhau vào class--> giúp code không lặp lại--> dễ bảo trì
//object là các vật thể, thực thê
//class là gom nhóm các đối tượng chung đặc tính, ví dụ: đặc tính đi bằng 4 chân, có đuôi được gom vào class động vật, --> các object ở đây có thể là chó, mèo...
//từ bài toán thưc thể thì phải trừu tượng hóa dữ liệu để máy tính hiểu thông qua, đặc tính, tính chất và hành động của object

//dinh nghia class php
class Student
{
//khai báo thuộc tính
    private $money = 100;//khai báo thuộc tính và gán giá trị(có thể hiểu là đinh nghĩa biến)
    //chỉ sự dụng nội bộ trong class

    protected $lovely = 'single';
    //protected: chỉ sự dụng nội bộ trong class và những class được kế thừa
    public $name = 'thắng';
    // public: có thể sự dụng bát kì nơi đâu
    //một thuộc tính mà không khai báo phạm vi truy cập thì xác đinh là public( không nên làm như vậy - vi phạm quy tắc(tiêu chuẩn) lập trình.
    //khai báo về phương thúc: hành động của đối tượng, miêu tả qua động tu

    //thuộc tính khai báo là static
    public static $age = 20;
    private static $point = 1;
    protected static $girlFrend = 'tieu hy';
    private function tronhocdichoi()
    {
        return "aoe -LOL";
    }
    protected function dichoibangai()
    {
        return "ABC";
    }
    public function dihoc()
    {
        //var_dump($this);//xem $this đó là gì
        //object(Student)#3 (3) { ["money":"Student":private]=> int(100) ["lovely":protected]=> string(6) "single" ["name"]=> string(7) "thắng" }
        // $this trong phương thức này chính là class đang khai bao
        // bản thân trong chính trong class này chúng ta không cần khởi tạo đối tượng thì ta lấy $this(chính là class) trỏ thẳng vào các thuộc tính hay phương thúc ở đây. Nếu bên ngoài class thì ta phải khởi tạo đối tượng để trỏ vào các thuộc tính hay phương thức nếu không phải là "static"
        //die();
        //để truy cập thuộc tính hay là phương thức trong class mà không phải "static" thì dùng từ khóa $this
//        $name = $this->name;
//        $money = $this->money;
//        $lovely = $this->lovely;
//        //$this chính là OBJECT chúng ta đang khai báo, định nghĩa
//        $game = $this->tronhocdichoi();
//        return "{$name} hoc o giang duong C -{$money} -{$lovely}-{$game}";

        //từ một phương thức không phải static - truy cập vào 1 thuộc tính là static
        return $this->girlFrend;
    }

}
//tao doi tuong(object) thuoc class
$cdt = new Student();
$kt = new Student();
$cntt = new Student();

//truy cập vào thuộc tính hay là phương thúc bên ngoài class
//nếu các thuộc tính hay là phương thức không phải là " static"  thì dùng đối tượng thuộc class truy cập
//muốn truy cập vào thuộc tính hay phương thức thì cần phụ thuộc vào phạm vi hoạt động của chung
//$money = $cntt->money; //truy cập vào thuộc tính money. nhưng không truy cập được vì private
//echo $money;
//$lovely = $kt->lovely; //không truy cập được vì là protected
//echo $lovely;
$name = $cdt->name;
//echo $name;
//$learning = $cntt->dihoc();//(): dáu ngoặc dùng để thực thi phương thức
//echo $learning;

//truy cập thuộc tính static bên ngoài class
//$age = $cntt->age;
//echo $age;
$age = Student::$age;//các thuộc tính static dùng thẳng class để truy cập, không cần thông qua đối tượng khởi tạo ngoài class
echo $age;

//các tính chất của lập trình hướng đối tượng
// tính đóng gói: các biến, dât, trang thái, code thành một class--> dễ quản lý, bảo mật
//tính trừu tượng: rút tia ra nhưng đặc trưng của đối tượng, trừu tượng hóa thành các interface
//tính kế thừa: lớp cha chia sẻ dữ liệu và phương thức cho lớp con--> lớp con không cần đinh nghĩa lại logic chung--> code ngắn gọn
//tính đa hình: lớp con viết lại phương thức của lớp cha(overwrite).
//một ngôn ngữ hướng đối tượng thì phải có ít nhất 4 tính chất trên(đóng gói, kế thừa, đa hình, trừu tượng)
//khi nói về đối tượng (object) thì cần quan tâm đến hai khía cảnh:thuộc tính và phương thức
//thuộc tính là các đặc điểm tính chất, miêu tả qua danh từ, tính từ ví dụ bông hoa có màu đỏ, hương thơm, thuộc tính là các biến(variable-property)
//phương thúc là hành đông, miêu tả qua động từ. phương thức là các hàm(function- method)
//phạm vi hoạt động của thuộc tính và phương thức
//private: đây là thành phần chỉ danh riêng cho nội bộ class. ra ngoài class thì không hoạt động nữa
//protected: Các thành phần được đánh dấu là protected cũng giống như private, nhưng chúng có thể được truy cập từ các lớp con (subclass) kế thừa từ lớp đó.
//public: khai báo phạm vi hoạt động bất kì nơi đâu
//static:giúp truy câp, vào các thuộc tính và các phương thức mà không cần khởi tạo đối tượng(object)
