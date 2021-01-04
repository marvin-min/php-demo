<?php
    $file = finfo_open(FILEINFO_MIME_TYPE);
    echo time(),"<br>";
    // var_dump(file("dir.php"));
    echo finfo_file($file,"1.png"),'<br>';
    echo finfo_file($file,"demo.html.png");

?>