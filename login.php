<?php
session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="admin" && $password=="admin123"){
        $_SESSION['login']=true;
        header("Location: dashboard.php");
    }else{
        $error="Username atau Password Salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    
<div class="card">

    <div class="card-header bg-primary text-white text-center">
        <h3>UNIVERSITAS TRUNODJOYO MADURA</h3>
    </div>

    <div class="card-body">

        <div class="text-center mb-3">
           <img src="images/logo.png" width="180">
        </div>

        <h4 class="text-center">
            SISTEM PENDATAAN MAHASISWA
        </h4>

        <!-- Form Login -->

<title>Login Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center mt-5">

<div class="col-md-4">

<div class="card">

<div class="card-header bg-primary text-white">

</div>

<div class="card-body">

<?php
if(isset($error)){
?>

<div class="alert alert-danger">

<?php echo $error; ?>

</div>

<?php
}
?>

<form method="POST">

<label>Username</label>

<input type="text" name="username" class="form-control" required>

<br>

<label>Password</label>

<input type="password" name="password" class="form-control" required>

<br>

<button class="btn btn-primary w-100" name="login">

Login

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>

</html>
