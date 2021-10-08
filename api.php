<?php
// 存储数据的文件
$filename = 'data.dat';        
 
// 指定页面编码
header('Content-type: text/html; charset=utf-8');
 
if(!file_exists($filename)) {
    die($filename . ' 数据文件不存在');
}
 
$data = array();
 
// 打开文档
$fh = fopen($filename, 'r');
 
// 逐行读取并存入数组中
while (!feof($fh)) {
    $data[] = fgets($fh);
}
 
// 关闭文档
fclose($fh);
 
// 随机获取一行索引
$result = $data[array_rand($data)];

//直接输出结果
//echo $result; 

//网页直接js调用，参考 https://www.17kafei.net/archives/14/ 
//方式 <script src="http://你的网址/api.php"></script>
echo 'document.write("'.htmlspecialchars($result).'");';


//echo "<script  type='text/javascript'>(function zigouapi(){var zigouapi="'.htmlspecialchars($result).'";var dom=document.querySelector('#zigouapi');Array.isArray(dom)?dom[0].innerText=zigouapi:dom.innerText=zigouapi;})()</script>"
