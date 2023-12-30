<?php

//Lớp sinh viên
class Student
{
    public  $id;
    public $name;
    public $address;
    //Hàm khởi tạo:Constructor:sử dụng trong 1 Class để tạo ra 1 đối tượng cụ thể trong Class
    //Đặc điểm của hàm Khởi tạo (Constructor) trong PHP có keyword __contrutor
    public function __contructor($id,$name,$address)
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
    public function updateStudent()
    {

    }
    public function dellStudent()
    {

    }
}