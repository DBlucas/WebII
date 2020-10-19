<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>CADASTRO</title>
    <style> 
        .principal{
            width:50%;
            margin: 0 auto;
            background-color:#000000;
            border: 1px solid #000000;
            border-radius: 10px;
        }
        body{
            background: #00BFFF;
            padding: 20px;
            font-family: Arial;
            font-size: 18px;        
        }
        label{ display: block; font-weight: bold;}
        .espaco{ height: 15px; display: block;}
        input{ font-size: 16px; padding: 5px; border-radius: 40px;}
        </style>
</head>
<body>
    <center>
    <form action="mkdir.php" method="post">
        <label for="lbl_dir">CÓDIGO <br/> (apenas números): </label>
        <input name="txt_dir" id="codigo" type="text" pattern="[0-9]+$" required><br/><br/>
            <div class="field">
                <label for="nome">NOME DO ARQUIVO:</label>
                <input name="nome_arquivo" id="nome" type="text" required/>
        </div>
        <br />
        <div class="field">
                <label for="text">TEXTO:</label><br />
                <textarea name="texto" id="text" class="estilotextarea" cols="60" rows="18" required></textarea>
        </div>
            <button name="boton" type="submit">CRIAR </button>
        </form>
    </center>
</body>
</html>
