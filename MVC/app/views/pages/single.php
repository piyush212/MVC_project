<?php
echo "working";


foreach($data as $values)
{   
    echo "<br>";
    echo "Your user name is -".$values->User_name;
     echo "<br>";
     echo "Your Number is - ".$values->number;
     echo "<br>";
     echo "Your Email-id - ".$values->Email;
     echo "<br>";
     echo "Your password is -".$values->password;
     echo "<br>";
}
?>
<a href="<?php echo URLROOT . '/pages/logout'?>">logout <br></a>