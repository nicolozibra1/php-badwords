<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Badwords</title>
</head>
<body id="index">
    <header class="d-flex flex-column align-items-center">
        <div class="box-logo">
            <img src="./img/logo.png" alt="logo">
        </div>
        <h1 class="title">PHP <span class="text-decoration-line-through fw-lighter">Badwords</span></h1>
    </header>
    <main class="container">
        <form action="result.php" method="POST" class="d-flex flex-column align-items-center justify-content-center mt-3">
            <label for="paragraph">Insert your text</label>
            <textarea name="paragraph" id="paragraph" cols="30" rows="10" class="w-25"></textarea>
            <label for="word">Insert BAD word</label>
            <input type="text" name="word" id="word" class="w-25">
            <button type="submit">SEND</button>
        </form>
    </main>
</body>
</html>
