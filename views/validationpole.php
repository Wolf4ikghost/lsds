<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $name_zadachi = $_POST['string_input'];
        $date_time = $_POST['date_input'];
    }
    ?>
</body>
</html>
