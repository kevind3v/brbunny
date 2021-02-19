<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bem-vindo(a) ao BrBunny</title>
    <link rel="stylesheet" href="<?= themes('assets/style.min.css') ?>">
</head>

<body>
    <?php if (ENVIRONMENT == "prod") : ?>
        <h4>Aplicação está em modo produção</h4>
        <p>Para mudar o modo modifique a variável <b>environment</b> no arquivo .env colocando <b>dev</b>
            como valor padrão</p>
    <?php else : ?>
        <header class="wrap header">
            <h2 class="f400">Bem-Vindo(a)</h2>
            <h1 class="f800 text-primary">BrBunny</h1>
            <p>Microframework PHP</p>
        </header>
        <main class="wrap">
        
        </main>
    <?php endif; ?>
</body>

</html>