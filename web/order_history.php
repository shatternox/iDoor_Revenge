<?php require "./includes/header.inc.php" ?>
<style>
    html,
    body {
        height: 100%;
    }

    .search-form {
        margin-top: 30px;
        margin-left: 30px;
        margin-bottom: 20px;
        display: inline-block;
    }
</style>

<form action="order_history.php" method="POST" class="search-form">

    <input type="text" name="order_id" id="order_id" placeholder="Order Id">
    <button type="submit" class="btn btn-success">Search</button>

</form>

<?php
$q = "SELECT * FROM order_history WHERE username = ?";
$username = $_SESSION['username'];

$stmt = $conn->prepare($q);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if (isset($_POST['order_id'])) {
    $q = "SELECT * FROM order_history WHERE order_id = ? and username = ?";
    $theParam = $_POST['order_id'];

    $stmt = $conn->prepare($q);
    $stmt->bind_param("ss", $theParam, $username);
    $stmt->execute();

    $result = $stmt->get_result();
}




if ($result->num_rows < 1) {
?>
    <div>
        <h1 style="text-align: center; margin-top: 50px;">No Order Yet</h1>
    </div>
<?php
    die();
}

while ($row = $result->fetch_assoc()) {

?>

    <div style="margin: auto;">

        <ul class="list-group">
            <li class="list-group-item disabled">Username: <?= $row['username'] ?></li>
            <li class="list-group-item">Order ID: <?= $row['order_id'] ?></li>
            <li class="list-group-item">Item Id: <?= $row['item_purchased'] ?></li>
            <li class="list-group-item">Item Name: <?= $row['item_name'] ?></li>
        </ul>
 
    </div>
    <br>


<?php
}
?>



<?php require "./includes/footer.inc.php" ?>