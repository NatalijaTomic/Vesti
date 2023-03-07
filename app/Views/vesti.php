<h2>Vesti:</h2>

<?php foreach ($vesti as $vest){
    echo "<p>";
    echo $vest->id.". ".$vest->naslov;
    echo "</p>";
    echo anchor("Gost/vest/".$vest->id, "Detalji vesti");

}
?>