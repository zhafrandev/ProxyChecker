<?php
set_time_limit(0);
$md5='';
$website='';
if($_GET['l']==$_GET['s']){die;}
$list=file('proxylst.txt');
$wlist=array();
for($i=$_GET['s'];$i<$_GET['s']+5;$i++){
  if(isset($list[$i])){
  $ch=curl_init();
  curl_setopt($ch,CURLOPT_URL,$website);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  curl_setopt($ch,CURLOPT_HTTPPROXYTUNNEL,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,8);
  curl_setopt($ch,CURLOPT_PROXY,$list[$i]);
  $content=curl_exec($ch);
  curl_close($ch);
  if(md5($content)==$md5){$wlist[]=$list[$i];}
  }
}
if(count($wlist)){
  $fh=fopen('proxys\p-'.$_GET['s'].'-'.($_GET['s']+5).'.php','w');
  fwrite($fh,implode('',$wlist));
  fclose($fh);
}
echo ($_GET['s']+5).'/'.$_GET['l'].'<script>parent.r("'.$_GET['f'].'","'.($_GET['s']+5).'","'.$_GET['l'].'");</script>';
?>
