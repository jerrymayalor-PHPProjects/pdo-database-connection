<?php  include 'includes/class-autoloader.inc.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <center>
                <?php 
                    $testObj = new Test();
                    $testObj->setUsersStmt("Muela");
                    $testObj-> getUsers();
                
                ?>
            </center>
        </div>
    </div>

    
</body>
</html>