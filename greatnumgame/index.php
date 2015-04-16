<?php 
session_start();

if ( !isset($_SESSION['num']) ) {
    $_SESSION['num'] = rand(1,100);
} 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Great Number Game</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="container">

        <h1>Welcome to the Great Number Game!</h1>
        <h3>I am thinking of a number between 1 and 100...</h3>
        <h4>Take a guess!</h4>
        
        <?php 
            if ( isset($_SESSION['announce'] ) ) {
               echo $_SESSION['announce']; 
            }
        ?>

        
        <form action="process.php" method="post">
            <input type="number" name='guess'>
            <input type="submit" value='Take a Guess'>
        </form>

    </div>
    
</body>
</html>