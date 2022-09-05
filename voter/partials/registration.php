<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System-Registration Form</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">VOTING SYSTEM</h1>
    <div class="bg-info py-4">
    <h2 class ="text-center" >Register Accout</h2>
    <div class="container text-center">
        <form action="../actions/register.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" placeholder="Enter Your Username"
                 required="required" name="Username">
</div>
<div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" placeholder="Enter Your Mobile number"
                 required="required" name="mobile number">
</div>
<div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" placeholder="password"
                 required="required" name="password">
</div>
<div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" placeholder="Conform password "
                 required="required" name="cpassword">
</div>
<div class="mb-3">
                <input type="file" class="form-control w-50 m-auto" 
                 name="photo">
</div>
<div class="mb-3">
               <select name="std" class="form-select w-50 m-auto">
                <option value="group">Group</option>
                <option value="voter">Voter</option>
</select>
<button type="submit" class="btn btn-dark my-4"> Register</button>
<p> Already Have an Account?<a href="../" class="text-white">LogIn</a></p>
</div>
</form>
</div>
</div>
    
</body>
</html>