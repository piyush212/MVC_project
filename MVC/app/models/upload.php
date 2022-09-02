<?php
class Upload extends Database{
    public function insert(){
        $id = $_POST['user'];
        $number = $_POST['num'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        echo $id,'<br>'.$number,'<br>'.$email;
   
        $this->query("INSERT INTO login (User_name, number, Email,password) values('$id','$number','$email','$password')");
      $this->execute();
    }
    public function fetchsingleData(){
        $id = $_POST['one'];
        $this->query("select User_name,password from login where User_name = '$id'");
        return $this->single();
    }
    public function singledata(){
        $id = $_POST['fuser'];
        $number = $_POST['fnum'];
        $email = $_POST['femail'];
        // echo "hello piyush";
        $this->query("select * from login where User_name = '$id' and number = '$number' and Email = '$email' ");
        //and number = '$number' and Email = '$email'
        
        $values =  $this->single();
     return $values;
   
    }
    public function update(){
        $id = $_POST['user2'];
        $post = $_POST['comm'];
        echo $id,'<br>'.$post,'<br>';
        $date = date('d/m/Y');
   
        $this->query("INSERT INTO login (User_name,Post,Date) values('$id','$post','$date')");
      $this->execute();
    }
    public function AllData(){
      $piy = $_POST['old'];
      $this->query("select * from login where User_name = '$piy'");
      return $this->resultSet();
      
  }
}
