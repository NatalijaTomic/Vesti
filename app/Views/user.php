Dobrodosli <?= $name?>
<?php foreach ($vesti as $vest){
    echo "<p>";
    echo $vest->id.". ".$vest->naslov."autor:".$vest->autor;
    echo "</p>";
}
?>
<?= anchor("user/logout", "Log out"); ?>