<?php
$proxys=array();
if($h=opendir('proxys')){
  while(false!==($file=readdir($h))){
    if($file!='.'&&$file!='..'){
      $l=file('proxys\\'.$file);
      foreach($l as $v){$proxys[]='\''.$v.'\'';}
    }
  }
}
$c='<?php $proxys=array('."\r\n".implode(','."\r\n",$proxys)."\r\n".'); ?>';
$fh=fopen('proxys.php','w');
fwrite($fh,$c);
fclose($fh);
?>
