<?php 

$cor = rand(0,3);
$tamanho = rand(0,4);
$preco = rand(0,2);

$cor_list = ['azul' , 'vermelho' , 'preto' , 'branca'];
$tamanho_list = ['PP' , 'P' , 'M' , 'G' , 'GG'];
$preco_list = [59.99 , 159.99 , 9.99];

$cor_selecionada = $cor_list[$cor] ;
$tamanho_selecionado = $tamanho_list[$tamanho];
$preco_selecionado = $preco_list[$preco];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Princesinha do Brás</title>

    <link rel="icon" id="icon-logo" href="../../imagens/logo.jpg" type="image/png">
    <link rel="stylesheet" href="../../css/home.css">
    <link rel="stylesheet" href="../../css/categorias-style.css">
    <link rel="stylesheet" href="../../css/card-produtos.css">

</head>

<body>

    <div class="container">

        <div class="cabecalho">

            <h1 id="Letras">
                <span>P</span><span>r</span><span>i</span><span>n</span><span>c</span><span>e</span><span>s</span><span>i</span><span>n</span><span>h</span><span>a</span><span></span>
                <span>d</span><span>o</span> <span>
                </span><span>B</span><span>r</span><span>á</span><span>s</span>
            </h1>
            <h2 id="Subtitulo">atacado e varejo</h2>

        </div>

        <div class="input-voltar">
            <a href="../camisas.php" class="btn-voltar">Voltar</a>
        </div>

        <div class="card">
            <div class="img-card">
                <img src="../../imagens/camisa-icon.png" id="imagem-card" alt="camisa-1">
                <div class="cards-imagens">
                    <img src="../../imagens/camisa-icon.png" alt="camisa-1-frente" id="card-imagens-fileira">
                    <img src="../../imagens/camisa-icon.png" alt="camisa-1-costa" id="card-imagens-fileira">
                    <img src="../../imagens/camisa-icon.png" alt="camisa-1-lado" id="card-imagens-fileira">
                </div>
            </div>

            <div class="descricao-card">
                <h1>Camisa 1</h1>
                <h2>Cor: <?php echo"$cor_selecionada";?> </h2>
                <h2>Tamanho: <?php echo"$tamanho_selecionado";?> </h2>
                <span id="preco-card">R$ <?php echo"$preco_selecionado";?> </span> <br>
                <button class="button-comprar">Comprar</button>
            </div>

        </div>


        <a class="wpp-link" rel="stylesheet" href="https://web.whatsapp.com/send?phone=55997183226" target="_blank"></a>
        <i class="fa fa-whatsapp"></i>

    </div>

</body>

</html>