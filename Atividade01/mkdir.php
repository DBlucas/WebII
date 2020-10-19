<?php
$dirname = $_POST['txt_dir'];
$dir = "Arquivos/$dirname"; 

if(is_dir($dir)){
    echo "A pasta com o código \"$dirname\" ja existe. ";
    echo '<br/>';
    echo '<a href="javascript:history.back()">Voltar<a/>';
}else {
mkdir($dir,0777);
echo '<br/>';
echo '<a href="javascript:history.back()">Voltar<a/>';
}
?>