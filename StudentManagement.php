<?php
class Student
{
    //Propperties
    public $id;
    public $name;
    public $address;

    //Contructor
    public function __contruct($id,$name,$address)
    {
        $this->id =$id;
        $this->name =$name;
        $this->address =$address;
    }
}

class StudentManager
{

}
