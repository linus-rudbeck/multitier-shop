<?php
require_once __DIR__ . "/../../Template.php";

Template::header("Bible home");
?>

<h1>Welcome bible home</h1>

<form action="" method="get">
    <input type="number" name="chapter" placeholder="Chapter"> <br>
    <input type="number" name="verse" placeholder="Verse"> <br>
    <input type="submit" value="Show" class="btn">
</form>


<?= $this->model ?>

<?php Template::footer(); ?>