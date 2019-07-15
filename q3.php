<?php
//echo "iniciando processo...";
$STDIN = @fopen("ceasarcipher.txt", "r");
if ($STDIN) {
	/*******************************************/

while ($i = fgets(STDIN)){
    $linha = trim($i);
    //ignora a primeira linha numerica
    if (!is_numeric($linha)) {
        //valor criptografado
        $ceasar = "";
        //numero de casas a andar no alphabeto
        $offset = 3%26;
        if ($offset < 0) { $offset += 26; }
        //percorre frase, letra por letra
        $i=0;
        while ($i < strlen($linha)) {
            $p = $linha{$i};
            //verifica se o caracter atual esta entre A e Z
            if ( ($p>="A") && ($p<="Z") ) {
                //altera o caracter - criptografa
                if ( (ord($p) + $offset) > ord("Z") ) {
                    $ceasar .= chr(ord($p) + $offset - 26);
                } else {
                    $ceasar .= chr(ord($p) + $offset);
                }
            //senao atribui um espaco em branco
            } else {
                $ceasar .= " ";
            }
            $i++;
        }
        echo $ceasar."\xA";
    }
}

	/*******************************************/
	fclose($handle);
}
//echo "finalizando processo...";
?>
