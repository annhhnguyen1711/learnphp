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
    //Array to store student objects
    private $student =array();

    //Method to add a new student to the array
    public function addStudent($id,$name,$address)
    {
        $student = new Student($id,$name,$address);
        $this->students[$id] =$student;
        echo "Student with ID $id added successfully.\n";
        echo "<br>";
    }

    //Method to retrieve a student by ID
    public function getStudent($id)
    {
        if (isset($this->students[$id])){
            return $this->students[$id];
        }else{
            return null;
        }
    }

    //Method to update a student's information
    public function updateStudent($id,$name,$address)
    {
        if (isset($this->students[$id])){
            $this->students[$id]->name = $name;
            $this->students[$id]->address = $address;
            echo "Student with ID $id updated successfully.\n";
            echo "<br>";
        }else{
            echo "Student with ID $id not found.\n";
            echo "<br>";
        }
    }

    //Method to delete a studenr by ID
    public function deleteStudenr($id)
    {
        if (isset($this->students[$id])){
            unset($this->students[$id]);
            echo "Student with ID $id deleted successfully.\n";
            echo "<br>";
        }else{
            echo "Student with ID $id not found.\n";
            echo "<br>";
        }
    }

}
