<?php

//Lớp Sinh viên
class Student
{
    public $id;
    public $name;
    public $address;
    //Hàm khởi tạo: Constructor: sử dụng trong 1 Class để tạo ra 1 đối tượng cụ thể trong class
    // Đặc điểm của hàm Khỏi tạo(Constructor) trong PHP có keyword __constructor
    public function __construct($id,$name,$address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
    }
}
//class: Triển khai chương trình
class MainApplication{
    //Khai báo 1 Mảng sinh viên(tạo ra nhiều đối tượng sv và lưu vào trong mảng này)
    public $students = array();
    public function addStudent($id, $name, $address)
    {
        $student = new Student($id,$name,$address);
        $this->students[$id] = $student;
    }
    public function getStudent($id)
    {
        if(isset($this->students[$id])){
            return $this->students[$id];//chỉ trả về nếu có dữ liệu trong Mảng
        }else{
            return null;
        }
    }
    public function updateStudent($id,$name,$address)
    {
        if(isset($this->students[$id])){
            $this->students[$id]->name = $name;
            $this->students[$id]->address = $address;
            echo "Update thanh cong!\n";
        }else{
            echo "Khong tim thay sv co is $id\n";
        }

    }
    public function deleteStudent($id)
    {
        if(isset($this->students[$id])){
            unset($this->students[$id]);
            echo "Xoa sv co id $id thanh cong";
        }else{
            echo "Khong tim thay sv co $id ";
        }
    }
    //Dùng vòng lặp foreach để hiện thị toàn bộ sinh viên trong chương trình
    public function displayAllStudents() {
        echo "All Students Information:\n";
        foreach ($this->students as $student) {
            echo "ID: {$student->id}\n";
            echo "Name: {$student->name}\n";
            echo "Address: {$student->address}\n\n";
        }
    }
}
//Tạo 5 đối tượng sinh viên từ Hàm addStudent(), hàm này gọi đến __construct($id,$nam,$address)

$mainApplication = new MainApplication();
$mainApplication->addStudent(1,"Thao","Ha Noi");
$mainApplication->addStudent(2,"Thu","Ha Noi");
$mainApplication->addStudent(3,"Vinh","Ha Noi");
$mainApplication->addStudent(4,"Ngoc","Ha Noi");
$mainApplication->addStudent(5,"Hai","Ha Noi");
//Tìm kiếm thông tin của sinh viên
$student1 = $mainApplication->getStudent(6);
if($student1 !==null){
    echo "Student information\n";
    echo "ID: {$student1->id}";
    echo "Name: {$student1->name}";
    echo "Address: {$student1->address}";
}else{
    echo "Khong tim thay sv";
}
//Dùng hàm foreach để lặp trong 1 tập hợp đối tượng(Mảng)
$mainApplication->updateStudent(10,"Hiep","Nam Dinh");
$mainApplication->deleteStudent(10);

$mainApplication->displayAllStudents();
