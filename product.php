<?php require "./includes/header.inc.php" ?>
<?php
$door_id = $_GET['id'];
if (!isset($door_id)) {
    header("Location: /");
    die();
}
$q = "SELECT * FROM doors WHERE door_id=?";
$stmt = $conn->prepare($q);
$stmt->bind_param("i", $door_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows < 1) {
?>
    <h1 style="text-align: center;">No such product!</h1>
<?php
} else {
    $row = $result->fetch_assoc();
?>
    <style>
        html,
        body {
            height: 100%;
        }

        .details {
            height: 90%;
        }
    </style>
    <div class="details">
        <img src=<?php echo "assets/images/door" . $row["door_id"] . ".png" ?> alt="" class="product-detail-img" />
        <div>
            <h2>
                Name: <?= $row["door_name"] ?>
            </h2>
            <p>
                Description: <?= $row["door_desc"] ?>
            </p>
            <p>
                <b>Price: <?= "Rp." . $row["door_price"] ?></b>
            </p>
            <form action="./controller/buyController.php" method="POST">
                <input type="hidden" value="<?= $row["door_id"] ?>" name="door_id">
                <input type="hidden" value="<?= $row["door_name"] ?>" name="door_name">
                <button type="submit" class="btn btn-success">Buy</button>
            </form>
        </div>
    </div>
<?php
}


// print_r($row);


?>


<?php require "./includes/footer.inc.php" ?>