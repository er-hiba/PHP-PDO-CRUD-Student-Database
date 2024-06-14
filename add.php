<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #d2 {
            width: 400px;
            box-shadow: 5px 5px 10px;
            padding: 30px;
            margin-left: 50px;
            margin-top: 30px;
        }
        .form-control{
            border: 1px solid #6f6d74;
        }
        form button{
            margin-top: 20px;
            background-color: #5712c5;
            color: white;
            padding:5px;
            border:0;
            border-radius: 15px;
            width: 100px;
            margin-right: 10px;
        }
        form button:hover{
            box-shadow: 1px 3px 7px 1px gray;
        }
    </style>
</head>
<body>
<?php 
    $currentPage = 'add';
    include 'header.php' 
    ?>
<div id='d2'>
    <form method="POST" action="">
    <label for="name" class="form-label"> Name: </label>
    <input type="text" id="name" name="name" class="form-control">
    <br>
    <label for="email" class="form-label"> Email : </label>
    <input type="email" id="email" name="email" class="form-control">
    <button type="submit" name="add">Add</button>
    </form>
</div>
</body>
</html>

<?php
include 'db.php';

if (isset($_POST['add'])) {
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);

if ((!empty($name)) && (!empty($email))){
    $sqlState = $conn -> prepare('INSERT INTO student VALUES (null, ?, ?)');
    $sqlState->execute([$name, $email]);
    
    header('Location: index.php');
} else {
    ?>
        <div class="alert alert-danger" role="alert" style="width: 400px; margin: 15px 0 0 50px">
            Required fields 
        </div>
    <?php
}
}
?>
