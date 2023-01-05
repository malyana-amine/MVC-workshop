<form method="post">

<input type="text" name="joke1">
<button name="submit" type="submit">add my joke</button>

</form>

<?php 

if(isset($_POST['submit'])){

    $joke =new jokes($_POST['joke1']);


    $joke->insertjoke();
}

?>