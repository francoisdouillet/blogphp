<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/index.css" rel="stylesheet">
    <title>Mon blog</title>
</head>
<body>
    <h1>MON SUPER BLOG</h1>
    <nav>
        <li><a href="/">Accueil</a></li>
        <li><a href="?page=post">Articles</a></li>
    </nav>
    <main>
        <?php for($i=0;$i<10;$i++) { ?>
        <div>
            <a href="">
            <h2>Voici mon post</h2>
            <p>Voici une légère description de mon poste:)!</p>
            </a>
        </div>
        <?php } ?>
    </main>
</body>
</html>