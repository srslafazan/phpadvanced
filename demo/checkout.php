<?php

var_dump($_POST);

?>

<p>Hi, <?= $_POST['name'] ?>! Thanks for purchasing <?= $_POST['quantity'] ?> of <?= $_POST['item'] ?>(s).<p>
<p></p>
<p>An email will be sent to <?= $_POST['email'] ?>.</p>