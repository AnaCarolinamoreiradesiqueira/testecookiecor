<?php
if (isset($_POST['cor'])) {
    setcookie('cor_fundo', $_POST['cor'], time() + 120);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$corFundo = isset($_COOKIE['cor_fundo']) ? $_COOKIE['cor_fundo'] : '#ffffff';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha sua cor de fundo</title>
    <style>
        body {
            background-color: <?php echo $corFundo; ?>;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <h1>Bem-vindo ao Rock In Rio!</h1>
    <p>Escolha a cor de fundo:</p>

    <form method="post">
        <button type="submit" name="cor" value="#ff5733" style="background-color: #ff5733;">Vermelho</button>
        <button type="submit" name="cor" value="#33c1ff" style="background-color: #33c1ff;">Azul</button>
        <button type="submit" name="cor" value="#32cd32" style="background-color: #32cd32;">Verde</button>
        <button type="submit" name="cor" value="#f39c12" style="background-color: #f39c12;">Amarelo</button>
    </form>

    <div>
        <p>Cor escolhida: <strong style="color: <?php echo $corFundo; ?>;"><?php echo $corFundo; ?></strong></p>
    </div>

    <p>A cor ficará salva por 2 minutos.</p>

</body>
</html>


