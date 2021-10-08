<?php
header("Content-type: text/html; charset=utf-8"); 

$path = dirname(__FILE__);
 
if (isset($_GET['type']) && !empty($_GET['type'])) {
    $type = $_GET['type'];
    $file = file($path."/".$type.".txt");
} else {
    $file = file($path."/hitokoto.txt");
}
 
 
$arr  = mt_rand( 0, count( $file ) - 1 );
$content  = trim($file[$arr]);

if (isset($_GET['charset']) && !empty($_GET['charset'])) {
    $charset = $_GET['charset'];
    if (strcasecmp($charset,"gbk") == 0 ) {
        $content = mb_convert_encoding($content,'gbk', 'utf-8');
    }
} else {
    $charset = 'utf-8';
}

if ($_GET['encode'] === 'js') {
    echo "function zigouapi1(){document.write('" . $content ."');}";
} else {
    echo $content;
}


if ($_GET['encode'] === 'js2') {
    echo "(function zigouapi1(){var zigouapi1='" . $content ."';var dom=document.querySelector('#zigouapi1');Array.isArray(dom)?dom[0].innerText=zigouapi1:dom.innerText=zigouapi1;})()";
} else {
    echo $content;
}

//(function hitokoto(){var hitokoto="我在最没有能力的年纪，遇见了最想照顾一生的人。";var dom=document.querySelector('#hitokoto');Array.isArray(dom)?dom[0].innerText=hitokoto:dom.innerText=hitokoto;})()
