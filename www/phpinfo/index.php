<?php
//echo PHP_MAJOR_VERSION.'-'.preg_match( '/\/v\d+/', $_SERVER['REQUEST_URI'] );
//echo '<pre>'.print_r($_SERVER,1).'</pre>';

//var_dump(opcache_get_status()['jit'] );

$version = phpversion();
$uri = preg_replace('/\/v\d+/', '', $_SERVER['REQUEST_URI']);

$classd = $class5 = $class7 = $class8 = $classd = '';

if( preg_match( '/\/v\d+/', $_SERVER['REQUEST_URI'] )){
    switch( PHP_MAJOR_VERSION ){
        case 5 : $class5='active'; break;
        case 7 : $class7='active'; break;
        case 8 : $class8='active'; break;
        default: $classd='active';
    }
}
else $classd='active';

print '	<html>
<head>
    <title>phpinfo &bull; v'.PHP_MAJOR_VERSION.'</title>
    <style>
        .vlink {color:darkslategray;padding:2px 10px;margin:0}
        .active {background-color:#ccf;;color:black}
        a:link {color:darkslategray !important}
    </style>
</head>
    <div style="display:flex;margin:20px auto 0 auto;width:934px;">
        <div style="margin-right:auto;color:gray">
            <a class="vlink ' .$classd. '" href="' .$uri. '">Def</a>
            <a class="vlink ' .$class5. '" href="' .$uri. 'v5">v5</a>
            <a class="vlink ' .$class7. '" href="' .$uri. 'v7">v7</a>
            <a class="vlink ' .$class8. '" href="' .$uri. 'v8">v8</a>
        </div>
        <div style="margin-left:auto">';
            if( PHP_MAJOR_VERSION >= 8 ) print '
                <a class="vlink" href="'. str_replace('phpinfo', 'opcache1', $_SERVER['REQUEST_URI']) .'">Opcache1</a>
                <span style="color:lightgrey">|</span>
                <a class="vlink" href="'. str_replace('phpinfo', 'opcache2', $_SERVER['REQUEST_URI']) .'">Opcache2</a>
                <span style="color:lightgrey">|</span>';
            else print '
                <a class="vlink" href="'. str_replace('phpinfo', 'opcache1', $_SERVER['REQUEST_URI']) .'">Opcache</a>
                <span style="color:lightgrey">|</span>';
            print '
            <a class="vlink" href="bench.php">Bench</a>
        </div>
    </div>
    <hr/>
</html>	';

phpinfo();
?>