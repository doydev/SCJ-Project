<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Config</title>
</head>
<body>
    <?php 
        $databaseHost = 'localhost';
        $databaseName = 'perpustakaan';
        $databaseUsername = 'root';
        $databasePassword = '';
        
        $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
        
    ?>
</body>
</html>