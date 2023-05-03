<?php
    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];
    $newParagraph = str_replace($word, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Badwords Calling</title>
</head>
<body id="result">
    <header class="d-flex flex-column align-items-center">
        <div class="box-logo">
            <img src="./img/logo.png" alt="logo">
        </div>
        <h1 class="title">PHP <span class="text-decoration-line-through fw-lighter">Badwords</span></h1>
    </header>
    <main class="container d-flex flex-column align-items-center justify-content-center mt-3">
        <div class="box-old d-flex flex-column align-items-center justify-content-center p-2">
            <h4 class="fst-italic text-white">This is your paragraph:</h4>
            <span class="fw-semibold fs-5"> <?php echo "$paragraph" ?> </span>
            <span class="text-decoration-underline text-danger fw-semibold"> <?php echo 'The paragraph lenght is:' . ' ' . strlen($paragraph) . ' ' . 'characters' ?> </span>
        </div>
        <div class="box-new d-flex flex-column align-items-center justify-content-center p-2">
            <h4 class="fst-italic text-white">This is the NEW paragraph:</h4>
            <span class="fw-semibold fs-5"> <?php echo "$newParagraph" ?> </span>
            <span class="text-decoration-underline text-danger fw-semibold"> <?php echo 'The new paragraph lenght is:' . ' ' . strlen($newParagraph) . ' ' . 'characters' ?> </span>
        </div>
    </main>
    <hr class="container w-25">
    <footer class="container d-flex flex-column align-items-center justify-content-center mt-5">
        <span class="fst-italic text-white">Thank you for visiting this page!</span>
        <h5>Made with &hearts; by Nicolò Zibra </h5>
    </footer>
</body>
</html>