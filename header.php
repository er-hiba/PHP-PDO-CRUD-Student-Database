<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        li {
            margin-left: 20px;
        }
        li a{
            text-decoration: none;
            color: #969393;
            font-size: 18px
        }

        li a.active{
            color: white;
        }
        nav{
            height: 60px;
        }

        li a:hover{
            text-decoration: underline;
        }
    </style>
</head>    
<body>
<nav class="navbar navbar-expand-sm bg-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>" href="index.php"> Home </a>
      </li>
     <li class="nav-item" id="i2">
     <a class="<?php echo ($currentPage == 'add') ? 'active' : ''; ?>" href="add.php"> Add a student </a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>