<?php

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Add</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    </head>
    <body>

    <div class="container py-5">
            <div class="row">
        
        <form action="index.php" method="get">
            <h2>Add</h2>
            <label>Name:</label>
            <input type="text" name="name" required="" />
            <br>
            
            <label>Surname:</label>
            <input type="text" name="surname" required="" />
            <br>
            
            <label>Email:</label>
            <input type="email" name="email" required="" />
            <br>
            
            <label>Phone:</label>
            <input type="number" name="phone" required="" />
            <br>
            
            <label>Address:</label>
            <input type="text" name="address" required="" />
            <br>
            
            <label>City:</label>
            <input type="text" name="city" required="" />
            <br>
            
            <label>Posta code:</label>
            <input type="text" name="postal" required="" />
            
            <br>
            <button type="submit" name="add">Save</button>
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
