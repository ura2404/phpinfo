<?php
$version = phpversion();

print '	<html>
<head>
    <title>phpinfo &bull; '.$version.'</title>
</head>
    <div style="display:flex;margin-top:20px;">
        <div style="margin:auto">
            <a href="'. str_replace('phpinfo', 'opcache', $_SERVER['REQUEST_URI']) .'">Opcache</a>
            <span style="color:lightgrey">|</span>
            <a href="bench.php">Bench</a>
        </div>
    </div>
    <hr/>
</html>	';

phpinfo();
?>