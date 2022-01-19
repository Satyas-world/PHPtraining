<?php




$conn=mysqli_connect('localhost','root', '','myDB'); 
$id = $_GET['id'];
$qry = mysqli_query($db,"select * from userdata where id='$id'"); 

$data = mysqli_fetch_array($qry); 

if(isset($_POST['update'])) 
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Email=$_POST['Email'];
	
    $edit = mysqli_query($conn,"update userdata set firstname='$firstname', lastname='$lastname', Email='$Email',  where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); 
        header("location:data.php"); 
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="firstname" value="<?php echo $data['firstname'] ?>" placeholder="firstname" Required>
  <input type="text" name="lastname" value="<?php echo $data['lastname'] ?>" placeholder="lastname" Required>
  <input type="text" name="Email" value="<?php echo $data['Email'] ?>" placeholder="Email" Required>
  <input type="submit" name="update" value="Update">
</form>