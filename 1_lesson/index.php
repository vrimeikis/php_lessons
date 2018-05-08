<form action="" method="post">
    <label for="name">Enter your name:</label>
    <input type="text" name="name" value="">
    <br>
    <label for="lastname">Enter your lastname:</label>
    <input type="text" name="lastname" value="">
    <br>
    <input type="submit" value="Submit">
</form>

<?php

if (isset($_POST['name']) && !empty($_POST['name'])) {
    echo "Hello {$_POST['name']}";
}

if (isset($_POST['lastname']) && !empty($_POST['lastname'])) {
    echo ' ' . $_POST['lastname'];
}

?>

http://phppamokos.test/1_lesson/index.php?name=petras&lastname=petraitids
http://phppamokos.test/1_lesson/index.php



<!--http://localhost:8080/your_folder-->
