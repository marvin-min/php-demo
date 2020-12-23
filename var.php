<?php 
echo $_SERVER['HTTP_USER_AGENT'], '<br/>'; 
echo __LINE__,'<br/>';
echo __FILE__;


function go(){
    static $num =1;
    $num++;
    echo "{$num}\r\n";
}
go();
go();
go();
go();
go();
?>