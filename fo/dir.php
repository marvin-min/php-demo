<?php
// mkdir("./aa/bb",0777,true);
// rmdir("./aa")
// rename("./aa","./cc");
// is_dir("./cc");
// touch("./cc/bb/hello.php");
// $folder = opendir("../");
// var_dump($folder);
// while($f = readdir($folder)) {
//     echo $f,"<br>";
// }

function tree(string $directory): array
{
    static $array = [];

    if ($dir = opendir($directory)) {
        while (false !== $file = readdir($dir)) {
            if (is_dir("$directory/$file") && $file !== '.' && $file !== '..') {
                tree("$directory/$file");
            } else {
                if ($file !== '.' && $file !== '..') {
                    $array[] = $file;
                }
            }
        }
        closedir($dir);
    }

    return $array;
}

print_r(tree("../"));
echo '<br>';

function dir_list(string $directory): array
{
    static $array = [];

    $dir = scandir($directory);
    foreach ($dir as $file) {
        if (is_dir("$directory/$file") && $file !== '.' && $file !== '..') {
            dir_list("$directory/$file");
        } else {
            if ($file !== '.' && $file !== '..') {
                $array[] = "$directory$file";
            }
        }
    }

    return $array;
}

print_r(dir_list("../"));

?>