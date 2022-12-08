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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Niya's Blog</title>
</head>
<style>
    body{
        background: url('images/wallpaper-01.png') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

nav{
    background-color: rgba(31, 28, 28, 0.384);
}
.nav{
    height: 80px;
    margin: 0 auto;
    display: table;
}

.img{
    text-align:center;
    display:table-cell;
    vertical-align: middle;
}

.nav img{
    display: inline-block;
    width: 300px;
    height: auto;
}
</style>
<body>

<nav>
    <div class="nav">
        <div class="img"><a href="index.php"><img src="images/niyasdiary.png" alt="logo"></a></div>
    </div>
</nav>

<div class="container mt-5">

    <?php foreach($query as $q){?>
        <div class="bg-dark p-5 rounded-lg text-white text-center">
            <h1><?php echo $q['title'];?></h1>

            <div class="d-flex mt-2 justify-content-center align-items-center">
                <a href="edit.php?id=<?php echo $q['id'];?>" class="btn btn-light btn-sm">Редактирай</a>

                <form method="POST">
                    <input type="text" hidden name="id" value="<?php echo $q["id"];?>">
                    <button class="btn btn-danger btn-sm ml-2" name="delete">Изтрий</button>
                </form>
            </div>
        </div>
        <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
    <?php }?>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>