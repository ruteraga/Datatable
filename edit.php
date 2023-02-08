<?php
session_start();

if (isset($_SESSION["records"])) {
    $records = $_SESSION["records"];
} else {
    $records = array();
}

$editRow = array();

if (filter_has_var(INPUT_GET, "edit")) {
    $id = filter_input(INPUT_GET, "edit-id");

    for ($i = 0; $i < count($records); $i++) {
        if ($records[$i][0] == $id) {
            $editRow = $records[$i];
        }
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    
    </head>
    <body>

    <div class="container py-5">
            <div class="row">
        <form action="index.php" method="get">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $editRow[1]; ?>" required="" />
            <br>

            <label>Surname:</label>
            <input type="text" name="surname" value="<?php echo $editRow[2]; ?>" required="" />
            <br>

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $editRow[3]; ?>" required="" />
            <br>

            <label>Phone:</label>
            <input type="number" name="phone" value="<?php echo $editRow[4]; ?>" required="" />
            <br>

            <label>Address:</label>
            <input type="text" name="address" value="<?php echo $editRow[5]; ?>" required="" />
            <br>

            <label>City:</label>
            <input type="text" name="city" value="<?php echo $editRow[6]; ?>" required="" />
            <br>

            <label>Posta code:</label>
            <input type="text" name="postal" value="<?php echo $editRow[7]; ?>" required="" />

            <br>
            <input type="hidden" name="edit-id" value="<?php echo $editRow[0]; ?>" />
            <button type="submit" name="edit">Save</button>
        </form>

        <a href="index.php" method="get">
            <button>Cancel</button>
        </a>
</div>
</div>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
        <script src="./js/app.js"></script>
    </body>
</html>
