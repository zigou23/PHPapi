<?php
    $str=file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
if (preg_match("/<urlBase>(.+?)<\/urlBase>/ies", $str, $matches)) {
    $imgurl = 'https://www.bing.com'.$str['images'][0]['url'];
}
if ($imgurl) {
    header('Content-Type: image/JPEG');
    @ob_end_clean();
    @readfile($imgurl);
    @flush();
    @ob_flush();
    exit();
} else {
    exit('error');
}
?>
