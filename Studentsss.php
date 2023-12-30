<?php

//Lớp sinh viên
class Student
{
    public  $id;
    public $name;
    public $address;
    //Hàm khởi tạo:Constructor:sử dụng trong 1 Class để tạo ra 1 đối tượng cụ thể trong Class
    //Đặc điểm của hàm Khởi tạo (Constructor) trong PHP có keyword __contrutor
    public function __construct($id,$name,$address)
    {
        $this->id =$id;
        $this->name =$name;
        $this->address = $address;
    }
}
//class:triển khai chương trình
class MainApplication
{
    //Khai báo 1 mảng sinh viên(tạo ra nhiều đối tượng sv và lưu vào trong mảng nayf)
    public $students = array();

    public function addStudent($id,$name,$address)
    {
        //Tạo 1 đối tượng sinh viên cụ thể thông qua tên của classlaf studenr và __construct của student
        //Toán tử "new" thông báo cho HĐH cấp phát bộ nhớ cho đối tượng $student
        $studen =new Student($id,$name,$address);
        //Gán đối tượng vừa tạo xong vào Aray. Phân biệt các đối tượng thông qua id(duy nhất)
        //phải truyền thêm id vào cho mảng
        $this->students[$id] =$studen;
    }
    //Để đọc được chính xác thông tin của 1 đối tượng cụ thể
    //phải biết id là gì
    public function getStudent($id)
    {
        if (isset($this->students[$id])){
            return $this->students[$id];//chỉ trả về nếu có dữ liệu trong mảng
        }else{
            return null;
        }
    }
    public function updateStudent($id,$name,$address)//id ko đổi chỉ sửa name và address
    {
        if(isset($this->students[id])){
            $this->students[$id]->name =$name;
            $this->students[$id]->address =$address;
            echo"Update thanh cong!\n";
        }else{
            echo"ko tim thay sinh vien co id $id\n";
        }
    }
    public function deleteStudent($id)
    {
        if(isset($this->students[id])){
            unset($this->students[id]);
            echo "Xoa sinh vien cos id $id thanh cong";
        }else{
            echo"ko tim thay sinh vien co id $id";
        }
    }
    public function displayAllStudent()
    {
        echo "All Students Information:\n";
        foreach ($this->students as $student) {
            echo "ID: {$student->id}\n";
            echo "Name: {$student->name}\n";
        echo "Address: {$student->address}\n";
}
    }
}
//Dùng vòng lặp foreach để hoeenj thị toàn bộ sinh viên trong chương trình
//Tạo 4 đối tượng sinh viên từ Hàm addstuden(), hàm này gọi đến __contruct($id,$name,$address)
$mainApplication = new MainApplication();
$mainApplication->addStudent(1,"Anh","Nghe An");
$mainApplication->addStudent(2,"Manh","Ha Noi");
$mainApplication->addStudent(3,"Thanh","Ha Nam");
$mainApplication->addStudent(4,"Hoang","Thai Nguyen");
//Tìm kiếm thông tin sinh viên
$studen1=$mainApplication->getStudent(3);
if($studen1 !==null){
    echo"Student information\n";
    echo"ID:{$studen1->id}";
    echo"Name:$studen1->name}";
    echo"Address:{$studen1->address}";
}else{
    echo "khôn tìm thấy sinh viên";
}
//Dùng vòng lặp foreach để hoeenj thị toàn bộ sinh viên trong chương trình


$mainApplication->updateStudent(1,"Viet Anh","Quynh Luu");
$mainApplication->deleteStudent(1);
$mainApplication->displayAllStudent();

