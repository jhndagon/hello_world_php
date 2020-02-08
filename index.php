<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello world with PHP</title>
</head>
<body>
    <?php 
        $data = htmlspecialchars($_GET['name']);
        if(!$data){
            $data = 'John';
        }
        echo 'Hello, '. $data;
    ?>
</body>
</html>