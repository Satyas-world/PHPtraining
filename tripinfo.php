<?php
if (isset($_REQUEST['name'])){ 
    $name =$_REQUEST['name'];
    echo $name."<br>";
}
else{
    echo "";
}
if (isset($_REQUEST['age'])){
    $age=$_REQUEST['age'];
    echo $age."<br>";
}
else{
    echo "";
}
if (isset($_REQUEST['gender'])){
    $gender=$_REQUEST['gender'];
    echo $gender."<br>";
}
else{
    echo "";
}
if (isset($_REQUEST['email'])){
    $email=$_REQUEST['email'];
    echo $email."<br>";
}
else{
    echo "";
}
if (isset($_REQUEST['phone'])){
    $phone=$_REQUEST['phone'];
    echo $phone."<br>";
}
else{
    echo "";
}
die("Form submitted successfully");
?>
