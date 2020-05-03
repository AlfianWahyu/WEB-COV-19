<?php
require_once('Koneksi.php');
$user="";
$pass="";
$usereror="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST['Username'];
    $query = "SELECT * FROM relo WHERE Username = '$user'";
    $result = $koneksi->query($query);
    $row = $result->fetch_assoc();
    if ($row['username'] != ""){
        $usereror = "Username Kejupuk";
    }else{
        $user = $_POST ['Username'];
        $pass = $_POST ['Password'];
        $query = "insert into relo (Username,Password) values ('$user','$pass')";
        $koneksi->query($query);
        header("Location: Login.php");
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
</head>
<body style="background-image:url('back.jpg'); background-size:auto;">
<div class="container bg-light" style="width:30%; margin-top:11%; box-shadow: 0 3px 20px rgba(0,0,0,0.5); padding:40px;">
<h4 class="text-center" >-Form Register-</h4>
<hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
<div class="form-grup">
<label>Username</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-user"></i></div>
</div>
<input type="text" class="form-control" name="Username" value="<?php echo $user?>">
</div>
</div>
<div class="form-grup">
<label>Password</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
<input type="password" name="Password" class="form-control" value="<?php echo $pass?>">
</div>
</div>
<br/>
<button type="submit" class="btn btn-primary" style="width:30%;">DAFTAR</button>
<a href="Login.php" style="font-size:12px">Sudah mempunyai akun?Login Sekarang!</a>
</form>
</div>
</body>
</html>