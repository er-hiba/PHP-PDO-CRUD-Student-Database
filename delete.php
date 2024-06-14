<?php
include 'db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    if(isset($_POST['confirm'])) {
        $sqlState = $conn->prepare('DELETE FROM student WHERE ID = ?');
        $sqlState->execute([$id]);
        
        header('Location: index.php');
    
    } elseif (isset($_POST['cancel'])) {
        header('Location: index.php');
    }

} else {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container{
            margin-top: 20px;
        }
        input[type='submit']{
            width: 70px;
            margin-left: 30px;
            padding: 7px;
            font-weight: bold;
            font-size: 18px;
        }

        input[name='confirm']{color: blue; margin-left: 10%}
        input[name='cancel']{color: red;}
        
        body{
            background-color: #c4c4c4 !important;
        }
    </style>
</head>
<body>
    <?php 
        $currentPage = '';
        include 'header.php' 
    ?>
    <div class="container">
        <h2> Are you sure you want to delete this student?</h2>
        <br>
        <form method="post">
            <input type="submit" name="confirm" value="Yes">
            <input type="submit" name="cancel" value="No">
        </form>
    </div>
</body>
</html>
