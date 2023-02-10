<?php

class CrudApp{
    private $conn;
    public function __construct(){
        $this->conn = mysqli_connect('localhost', 'root', '', 'kader_db');
    }

    public function addData($data){
        $name = $data['name'];
        $roll = $data['roll'];
        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];

        $sql = "INSERT INTO students (name, roll, img) VALUES ('$name', $roll, '$img_name')";

        if(mysqli_query($this->conn, $sql)){
            move_uploaded_file($tmp_name, 'upload/' . $img_name);
            echo "data inserted successfully";
        }
    }

    public function displayData(){
        $sql = "SELECT * FROM students";
        $result = mysqli_query($this->conn, $sql);
        //$row = mysqli_fetch_assoc($result);
        return $result;
    }

    public function deleteData($id){
        $sql = "DELETE FROM students WHERE id=$id";
        mysqli_query($this->conn, $sql);
    }

    public function displayDataByID($id){
        $sql = "SELECT * FROM students WHERE id=$id";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function updateData($data){
        $id = $data['id'];
        $name = $data['name'];
        $roll = $data['roll'];
        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];

        $sql = "UPDATE students SET name='$name', roll=$roll, img='$img_name' WHERE id=$id";

        if(mysqli_query($this->conn, $sql)){
            move_uploaded_file($tmp_name, 'upload/' . $img_name);
            echo "update successful";
        }
    }


}

?>