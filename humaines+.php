<?php

$con = mysqli_connect('localhost', 'sad', '1234', 'basam art site');

if(!$con){
    die(mysqli_error($con));
} 

$sql = "SELECT * FROM `humaines+`";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html>
<head>
<title>Basam Art Site</title>
<!-- Bootsrap 5 CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Index CSS-->
<link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
</head>
<body>

    <div class="overlay hidden"></div>
    <div class="img-zoom-in hidden"></div>

<div class="nav-bar">
    <div class="header mt-4 me-1">
        <h1>Basam Sharif</h1>
        <p class="text-muted">Character Designer/Vis Dev</p>
    </div>
    <ul class="nav-links-container me-3">
        <li class="nav-link help"><a href="humaines+.php" class="link active">Humaines+</a></li>
        <li class="nav-link 2"><a href="theschoolhour.php" class="link"> The school hour</a></li>
        <li class="nav-link"><a href="hitman.php" class="link"> HITMAN</a></li>
        <li class="nav-link 3"><a href="sketches.php" class="link">Sketches</a></li>
        <li class="nav-link 4"><a href="personalstuff.php" class="link">Personal stuff</a></li>
    </ul>
    <ul class="personal-nav-links-container me-3">
        <li class="nav-link 1">About me</li>
        <li class="nav-link 2">Clients</li>
        <li class="nav-link 3">Other links</li>
    </ul>
</div>

<div class="art-space">
    <div class="all-img-container">
    <?PHP foreach($row as $value){ ?>
    <div class="img-wrapper">
            <img src="<?PHP echo $value['img'] ?>" alt="hi" class="file-img">
    </div>
<?PHP } ?>  
    </div>
</div>

<!-- Bootsrap 5 JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Index JS-->
<script src="index.js?v=<?php echo time(); ?>"></script>
</body>
</html>   


