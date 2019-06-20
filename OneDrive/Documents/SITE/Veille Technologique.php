<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM tableveille";
$result = $conn->query($sql);
?>

<?php include './topbar.css'; ?>

<div class="tableveille">
    <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                <div class="veilletech">
                    <h4><?php echo $row["titre"] ?></h4>
                    <?php echo '<button onclick="location.href=\'' . $row["url"] . '\';">'; ?>Cliquer ici</button>
                </div>
    <?php } } ?>
</div>