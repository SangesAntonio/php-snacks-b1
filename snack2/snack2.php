<?php
/*Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.*/

$posts_by_dates = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$dates = array_keys($posts_by_dates);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php for ($i = 0; $i < count($posts_by_dates); $i++) {
        $date = $dates[$i];
        $posts = $posts_by_dates[$date];

    ?>
        <h1><?= $dates[$i] ?></h1>
        <ul>

            <?php for ($y = 0; $y < count($posts); $y++) {
                $post = $posts[$y];
            ?>
                <li>
                    <h1><?= $post['title'] ?></h1>
                </li>
                <li><?= $post['author'] ?></li>
                <li><?= $post['text'] ?></li>

            <?php } ?>
        </ul>


    <?php } ?>



</body>

</html>