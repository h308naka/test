#!/usr/bin/php
<?php
  foreach(file('/usr/share/dict/linux.words') as $line){
    $a = 'abc';
    $pos = strpos($line, $a);

    if($pos !== false){
      echo "$line";
    }
  }
?>
