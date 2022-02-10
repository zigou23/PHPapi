<?php
    $str=file_get_contents('https://www.bing.com/HPImageArchive.aspx?idx=0&n=1');
if (preg_match("/<url>(.+?)<\/url>/ies", $str, $matches)) {
    $imgurl='https://www.bing.com'.$matches[1];
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
