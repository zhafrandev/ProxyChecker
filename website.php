<?php
$website='';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$website);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$content=curl_exec($ch);
curl_close($ch);
echo $proxy.'<br>MD5: '.md5($content).'<br>website: '.$website.'<br>Content:'.$content;
?>
