<?php
    $lang = 'en';

    if (!empty($_GET['lang']))
    {
        $lang = $_REQUEST['lang'];
    }

    $textoCabecalho = '';
    $textoTitulo = '';
    $textoBotaoDownload = '';
    $textoVersao = '';
    $textoIconeDiscord = '';
    $textoLinkDiscord = '';
    $textoDiscord = '';
    $textoAutor = '';

    if ($lang == 'pt')
    {
        $textoCabecalho = 'Lamina RPG Cooperativo';
        $textoTitulo = 'Projeto de RPG Co-op<br> Obrigado por mostrar o interesse<br> em nosso projeto!';
        $textoBotaoDownload = 'Download do instalador <br>Windows 7/8/8.1/10';
        $textoVersao = 'versão 0.1 <br> 06 de dezembro de 2019';
        $textoIconeDiscord = 'img/discord-br-512px.png';
        $textoLinkDiscord = 'https://discord.gg/889fmuc';
        $textoDiscord = 'Junte-se ao nosso discord oficial!';
        $textoAutor = 'Desenvolvido por Mence, 2019-2020.';
    }
    else
    {
        $textoCabecalho = 'Lamina Co-op RPG';
        $lang = 'en';
        $textoTitulo = 'Co-op RPG Project<br> Thank you for showing interest<br> on our project!';
        $textoBotaoDownload = 'Download installer <br>Windows 7/8/8.1/10';
        $textoVersao = 'v. 0.1 <br> December, 06 of 2019.';
        $textoIconeDiscord = 'img/discord-512px.png';
        $textoLinkDiscord = 'https://discord.gg/ySSmcU3';
        $textoDiscord = 'Join us at our official Discord server!';
        $textoAutor = 'Developed by Mence, 2019-2020.';
    }
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <title><?php echo $textoCabecalho; ?></title>
</head>
<body background="img/lamina-prototype-wallpaper.png" style=" background-repeat: no-repeat; background-size: cover;"> 
    <div>
        <a class="language" href="http://lamina.criticalhit.com.br/?lang=en">English</a> | 
        <a class="language" href="http://lamina.criticalhit.com.br/?lang=pt">Português</a>
    </div>
    <div style="text-align: center; padding-top: 200px;">

        <h2 style="color: darkmagenta;"><?php echo $textoTitulo; ?></h2>
        <a class= "downloader" href="http://lamina.criticalhit.com.br/lamina-setup.exe" target="_blank"><?php echo $textoBotaoDownload; ?></a>
        <br>
        <?php echo $textoVersao; ?>
        <br>
        <div style="padding-top: 100px">
            <a href="<?php echo $textoLinkDiscord; ?>"><img src="<?php echo $textoIconeDiscord; ?>" width="64" height="64"></a>
            <h3><?php echo $textoDiscord; ?></h3>
            <span style="color: white;"><?php echo $textoAutor; ?></span>
        </div>   
    </div>
</body>
</html>