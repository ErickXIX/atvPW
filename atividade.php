<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Processa2.php" method="post" enctype="multipart/form-data">
      
    <div>
            <label> Nome: </label>
            <br>
             <input type="text" name="nome" id="nome">
        </div>
    <br>

        <div>
            <label> Logradouro: </label>
            <br>
             <input type="text" name="logradouro" id="logradouro">
        </div>
    <br>
    
        <div>
            <label> Numero: </label>
            <br>
             <input type="number" name="numero" id="numero">
        </div>
    <br>

        <div>
            <label> CEP: </label>
            <br>
             <input type="number" name="cep" id="cep">
        </div>
    <br>

        <div>
            <label> Complemento: </label>
            <br>
             <input type="text" name="complemento" id="complemento">
        </div>
    <br>

        <div>
            <label> Bairro: </label>
            <br>
             <input type="text" name="bairro" id="bairro">
        </div>
    <br>
        
        <div>
            <label> Cidade: </label>
            <br>
             <input type="text" name="cidade" id="cidade">
        </div>
    <br>
        
        <div>
            <label> Estado: </label>
            <br>
             <input type="text" name="estado" id="estado">
        </div>
    <br>
        
      <div>
        <label>Imagem</label>
         <input type="file" name="upload" id=""/>
       </div>
       <div>
         <input type="submit" value="enviar"/>   
       </div>

    <br>
</form>

</body>
</html>