<?php

$d = dir("./uploads");

$dirs = [];
while (($dir = $d->read()) !== false){
    if ( !in_array($dir,['.','..']) ){
        //echo "<hr>pasta: " . $dir . "<br>";
        $dirs[]=$dir;
    }

}
$d->close();
echo "<hr>";

$arquivos = [];
foreach($dirs as $dir){
    $f = dir("./uploads/$dir");
    while (($file = $f->read()) !== false){
        if ( !in_array($file,['.','..']) ){
            echo "pasta: $dir, arquivo: " . $file . "<br>";
            $arquivos[]=$file;
        }
    }
    $f->close();  
}

echo "<hr>";
foreach ($dirs  as $p){
    echo $p."<br>";
}
echo "<hr>";

foreach ($arquivos  as $a){
    echo $a."<br>";
}

?>

