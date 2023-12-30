<?php

class ClassExample
{
    //khai báo thuộc tính (propertis)
    //thuộc tiính dùng để định nghĩa đói tượng
    //VD: thuộc tính để định nghĩa ra Hình chữ nhật
    public $length = 0;
    public $width = 0;
    //Method aka Hành vi HCN
    //Hành vi tính diện tích
    public function getArea()
    {
        return ($this->length * $this->width);
    }

    //vd thuộc tính định nghĩa sv
    public $id;
    public $name;
    public $phone;
    public $rmail;


//Hành vi:Method():Định nghĩa hành vi của đối tượng
    public function setName($nameParam)
    {
        return $name = $nameParam;
    }
}