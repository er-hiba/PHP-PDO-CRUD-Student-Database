<?php
include 'db.php';

$stmt = $conn->query("SELECT ID, name, email FROM student"); 
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table a{
            text-decoration: none;
            color: white;
        }
        .container{
            margin-top: 30px;
            background-color: white;
            padding: 30px !important;
        }
        .table{
            width: fit-content;
            margin-top: 18px;
        }
        table button {
            padding:5px;
            border:0;
            border-radius: 15px;
            width: 80px;
        }
        table button:hover{
            box-shadow: 1px 2px 10px 2px #b9b9b9;
        }
        .edit{
            background-color: #b16cb1;
            margin-right: 10px;
        }
        .delete{
            background-color: #e83e8c;
        }
        body{
            background-color: #c4c4c4 !important;
        }
        th{
            background-color: #343a40 !important;
            color: white !important;
        }

    </style>
</head>
<body>
    <?php 
    $currentPage = 'home';
    include 'header.php' 
    ?>
    
    <div class="container">
        <h2>All students </h2>
        <table class="table table-bordered">
            <tr id="r1" align='center'>
                <th> ID </th> 
                <th> Name </th>
                <th> Email </th>
                <th> Action </th>
            </tr>
            <?php foreach ($data as $record): ?>
            <tr>
            <td valign="middle" align='center' style="width: 100px"><?php echo $record['ID']; ?></td>
            <td valign="middle" align='center' style="width: 150px"><?php echo $record['name']; ?></td>
            <td valign="middle" align='center' style="width: 250px"><?php echo $record['email']; ?></td>
            <td valign="middle" align='center' style="width: 200px"> 
            <button class="edit"><a href="edit.php?id=<?php echo $record['ID']?>">Edit</a></button> 
            <button class="delete"><a href="delete.php?id=<?php echo $record['ID']?>">Delete</a></button>
            </td> 
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
</body>
</html>
