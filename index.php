<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change</title>
</head>

<body>
    <?php
        $texto = "Lo que me da la real gana";
        $php_var = $_COOKIE['js_var'];
        echo $php_var;
    ?>
    <script>
        document.cookie = "js_var = " + "This is used to chang js to php " + '<?php echo $texto; ?>'
    </script>

    <?php
    $php_var = "This is used to change php values to js";
    ?>
    <script>
        var js_var = '<?php echo $php_var; ?>';
        document.write(js_var);
    </script>
</body>

</html>