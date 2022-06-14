<?php

    $nome = $_REQUEST["nome"];
    $logradouro = $_REQUEST["logradouro"];
    $numero = $_REQUEST["numero"];
    $cep = $_REQUEST["cep"];
    $complemento = $_REQUEST["complemento"];
    $bairro = $_REQUEST["bairro"];
    $cidade = $_REQUEST["cidade"];
    $estado = $_REQUEST["estado"];
    
    echo "Olá $nome pelo que lembramos você morar no $estado na cidade de $cidade dentro do bairro $bairro, CEP $cep no numero $numero";

    echo"<hr></hr>";
    
    echo "nome :" . $_FILES["upload"]["name"] ."<br>";
    echo "tipo :" . $_FILES["upload"]["type"] ."<br>";  
    echo "tamanho :" . $_FILES["upload"]["size"] ."<br>";
    echo "error :" . $_FILES["upload"]["error"] ."<br>"; //0 até 8(exceto 5);
    echo "diretorio temporario :" . $_FILES["upload"]["tmp_name"] ."<br>";
    
    //arquivo temporario diretorio 
    $tmp = $_FILES["upload"]["tmp_name"] ;
    // destino do arquivo no site a ser definitivo
    $upload = "IMAGEM/" . $_FILES["upload"]["name"] ;

    if (move_uploaded_file( $tmp,   $upload )){
        echo "<br><br>";
        echo "arquivo enviado com sucesso para o servidor!!";
        a

    }

?>