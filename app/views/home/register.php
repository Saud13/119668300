<?php require_once '../app/views/templates/headerPublic.php' 
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
   background-color: goldenrod;
}
</style>
<style> 
input[type=text],[type=password] {
    width: 15%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
</style>
<style> 
button[type=submit] {
    background-color: whitesmoke;
    border: none;
    color: black;
    padding: 10px 20px;
    text-decoration: none;
    margin: 2px 1px;
}
</style>

</head>
<body>

</body>
</html>
<body> 
<p class="lead"> <?= date("F jS, Y"); ?></p>
    
<h1> Create a new account!</h1>

    <form method="post" action="<?=LOGIN_REGISTER?>">
        Email:<br/>
        <input type="text" name="Email"><br/>
        Username:<br/>
        <input type="text" name="Username"><br/>
        Password<br/>
        <input type="password" name="Password"><br/>
        <br/>
        <button type="submit" > submit </button> <br/>
        <br/>
    </form>
</body>
</html>
        <a href="<?=LOGIN_INDEX?>"> Go to login page  </a>
    <?php require_once '../app/views/templates/footer.php' ?>
