<?php
session_start();



function announce ($g,$n) {
    if ( empty($g) ) {
        return "<div class='announce' id='waiting'>What are you Waiting for?</div>";
    } elseif ( $g == $n ) {
        $_SESSION['num'] = rand(1,100);
        return "<div class='announce' id='right'>That's Right!</div>";
    } elseif ( $g > $n ) {
        return "<div class='announce' id='high'>Too High!</div>";
    } elseif ( $g < $n ) {
        
        return "<div class='announce' id='low'>Too Low!</div>";
    } 
};

if ( isset($_POST['guess'] ) ) {
    $_SESSION['announce'] = announce($_POST['guess'], $_SESSION['num']);
}

    header('Location: index.php');
?>