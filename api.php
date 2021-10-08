<?php 
//获取句子文件的绝对路径
$path = dirname(__FILE__);
$file = file($path."/hitokoto.txt");

//随机读取一行
$arr  = mt_rand( 0, count( $file ) - 1 );
$content  = trim($file[$arr]);

//格式化判断，输出js或纯文本
if ($_GET['encode'] === 'js') {
    echo "function hitokoto(){document.write('" . $content ."');}";
} else {
    echo $content;
}
?>
