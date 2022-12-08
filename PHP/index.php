<?php

    include "logic.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Niya's Diary</title>
</head>

<style>
    body{
        background: url('images/wallpaper-01.png') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    
</style>
<body>

<nav>
    <div class="nav">
        <div class="img"><a href="index.php"><img src="images/niyasdiary.png" alt="logo"></a></div>
    </div>
</nav>

<div class="container mt-5">

    <?php if(isset($_REQUEST['info'])){?>
        <?php if($_REQUEST['info'] == "added"){?>

            <div class="alert alert-success" role="alert">
                Бележката е добавена успешно.
            </div>
        <?php }else if($_REQUEST['info'] == "updated"){?>
            <div class="alert alert-success" role="alert">
                Бележката е обновена успешно.
            </div>
            <?php }else if($_REQUEST['info'] == "deleted"){?>
            <div class="alert alert-danger" role="alert">
                Бележката е изтрита успешно.
            </div>
        <?php }?>
    <?php }?>

    <div class="text-center">
        <a href="create.php" class="btn btn-dark">+ Създай нова бележка</a>
    </div>

            <div class="row">
                <?php foreach($query as $q){?>
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card text-black bg-light mt-5">
                            <div class="card-body" style="width: 18rem;">
                                <h5 class="card-title"><?php echo $q['title'];?></h5>
                                <p class="card-text"><?php echo $q['content'];?></p>
                                <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-dark">Към бележката <span class="text-light">&rarr;</span></a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</div>
</body>
</html>