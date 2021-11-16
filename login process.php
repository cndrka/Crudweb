<?php session_start();

include('koneksi.php');

if(isset($_POST['login']));
{
	$user_unsafe=$_POST['username'];
	$pass_unsafe=$_POST['password'];

	$user = mysqli_real_escape_string($koneksi,$user_unsafe);
	$pass = mysqli_real_escape_string($koneksi,$pass_unsafe);

	$query=mysqli_query($koneksi, "select * from login where username='$user'
		and password='$pass'");

	$row=mysqli_fetch_array($query);

	     $name= $row['username'];
	     $counter= mysqli_num_rows($query);
	     $id= $row['id'];

	     if ($counter == 0)
	     {
	     	echo "<script type='text/javascript'>alert('invalid Username or Password!'); document.location='login.php'</script>";
	     }
	     else
	     {
	     	$_SESSION['id']=$id;
	     	$_SESSION['username']=$name;

	     	echo "<script type='text/javascript'> document.location='index.php' </script>";
	     }
}

?>