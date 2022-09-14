<?php

require_once("./banco.php");

$id = $_GET['id'];

$delete = $conn->prepare("DELETE FROM veiculos WHERE id = $id");

$delete->execute();

?>

<script>
window.location.href = "http://127.0.0.1:5500/index.html";
</script>