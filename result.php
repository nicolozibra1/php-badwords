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
    <title>PHP Badwords Calling</title>
</head>
<body>
    <h1>This is your paragraph:</h1>
    <span> <?php echo "$paragraph" ?> </span>
    <span> <?php echo 'The paragraph lenght is:' . ' ' . strlen($paragraph) . ' ' . 'characters' ?> </span>
    <h1>This is the new paragraph:</h1>
    <span> <?php echo "$newParagraph" ?> </span>
    <span> <?php echo 'The new paragraph lenght is:' . ' ' . strlen($newParagraph) . ' ' . 'characters' ?> </span>
</body>
</html>