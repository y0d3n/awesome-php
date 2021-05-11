<?php
require('flag.php');

if(isset($_GET['input'])){
    if(!preg_match('/[A-Za-z]/is',$_GET['input'])) {
        eval($_GET['input']);
    }else{
        die('Try harder!');
    }
}else{
    highlight_file(__FILE__);
}
