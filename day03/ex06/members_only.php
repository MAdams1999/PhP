<?php
    if ($_SERVER[PHP_AUTH_USER] === "madams" && $_SERVER[PHP_AUTH_PW] === "Marcha11")
    {
?>
<html><body>Hello madams<br />
<img src='data=image/png;base64,
<?php
    echo base64_encode(file_get_contents("../img/42.png"));
?>
'>
</body></html>
<?php
        exit;
    }
    else if ($_SERVER[PHP_AUTH_USER] === NULL && $_SERVER[PHP_AUTH_PW] === NULL)
        header('www-Authenticate: Basic realm="The Fortress"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<html><body>I don't know what your trying but it won't work buddy TRAP HOLE</body></html>\n";
    exit ;
?>