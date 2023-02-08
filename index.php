<?php
session_start();

if (isset($_SESSION["records"])) {
    $records = $_SESSION["records"];
} else {
    $records = array();
}

if (filter_has_var(INPUT_GET, "delete")) {
    $id = filter_input(INPUT_GET, "delete-id");

    for ($i = 0; $i < count($records); $i++) {
        if ($records[$i][0] == $id) {
            unset($records[$i]);
            $records = array_values($records);
            $_SESSION["records"] = $records;
        }
    }
} else if (filter_has_var(INPUT_GET, "add")) {
    $item = array();

    $item[] = uniqid();
    $item[] = filter_input(INPUT_GET, "name");
    $item[] = filter_input(INPUT_GET, "surname");
    $item[] = filter_input(INPUT_GET, "email");
    $item[] = filter_input(INPUT_GET, "phone");
    $item[] = filter_input(INPUT_GET, "address");
    $item[] = filter_input(INPUT_GET, "city");
    $item[] = filter_input(INPUT_GET, "postal");

    $records[] = $item;
    $_SESSION["records"] = $records;
} else if (filter_has_var(INPUT_GET, "edit")) {
    $id = filter_input(INPUT_GET, "edit-id");

    for ($i = 0; $i < count($records); $i++) {
        if ($records[$i][0] == $id) {
            $records[$i][1] = filter_input(INPUT_GET, "name");
            $records[$i][2] = filter_input(INPUT_GET, "surname");
            $records[$i][3] = filter_input(INPUT_GET, "email");
            $records[$i][4] = filter_input(INPUT_GET, "phone");
            $records[$i][5] = filter_input(INPUT_GET, "address");
            $records[$i][6] = filter_input(INPUT_GET, "city");
            $records[$i][7] = filter_input(INPUT_GET, "postal");

            $_SESSION["records"] = $records;
        }
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    </head>
    <body>
        
        <div class="container py-5">
            <div class="row">
            <table id="example" class="table table-striped" style="width:100%">
        <thead>    
        <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal code</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($records as $item) {
                ?>
                <tr>
                    <td><?php echo $item[1]; ?></td>
                    <td><?php echo $item[2]; ?></td>
                    <td><?php echo $item[3]; ?></td>
                    <td><?php echo $item[4]; ?></td>
                    <td><?php echo $item[5]; ?></td>
                    <td><?php echo $item[6]; ?></td>
                    <td><?php echo $item[7]; ?></td>
                    <td>
                        <form action="edit.php" method="get">
                            <input type="hidden" name="edit-id" value="<?php echo $item[0]; ?>" />
                            <button type="submit" name="edit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="get">
                            <input type="hidden" name="delete-id" value="<?php echo $item[0]; ?>" />
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <a href="add.php">
            <button>Add</button>
        </a>
            </div>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
        <script src="./js/app.js"></script>
    </body>
</html>
