<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";
$content = file_get_contents($link);

$parse = parse_url($link);


#var_dump(($parse)); #dados do array retornado pelo parse_url
#var_dump($parse["path"]); # caminho completo
#var_dump(basename($parse["path"])); # apenas o o nome base do arquivo sem o caminho completo

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);


?>

<img src="<?=$basename?>" >