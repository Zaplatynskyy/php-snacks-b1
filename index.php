<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60-->

<?php

$partite = [
    [
        'squadra_casa' => [
            'nome' => 'Olimpia Milano',
            'punteggio' => 55,
        ],
        'squadra_ospite' => [
            'nome' => 'Cantù',
            'punteggio' => 60,
        ]
    ],
    [
        'squadra_casa' => [
            'nome' => 'GeVi Napoli',
            'punteggio' => 63,
        ],
        'squadra_ospite' => [
            'nome' => 'GeVi Napoli',
            'punteggio' => 73,
        ]
    ],
    [
        'squadra_casa' => [
            'nome' => 'Segafredo Virtus Bologna',
            'punteggio' => 74,
        ],
        'squadra_ospite' => [
            'nome' => 'Segafredo Virtus Bologna',
            'punteggio' => 67,
        ]
    ],
    [
        'squadra_casa' => [
            'nome' => 'Umana Reyer Venezia',
            'punteggio' => 78,
        ],
        'squadra_ospite' => [
            'nome' => 'Allianz Pallacanestro Trieste',
            'punteggio' => 73,
        ]
    ],
    [
        'squadra_casa' => [
            'nome' => 'Openjobmetis Varese',
            'punteggio' => 52,
        ],
        'squadra_ospite' => [
            'nome' => 'Banco di Sardegna Sassari',
            'punteggio' => 74,
        ]
    ],
];

echo "<h2>Partite di basket</h2>";
for($i = 0; $i < count($partite); $i++) {
    echo "{$partite[$i]['squadra_casa']['nome']}"." - "."{$partite[$i]['squadra_ospite']['nome']}"." | "."{$partite[$i]['squadra_casa']['punteggio']}"." - "."{$partite[$i]['squadra_ospite']['punteggio']}"."<br><br>";
}

?>







<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// $name = $_GET['name'];
// $mail = $_GET['mail'];
// $age = $_GET['age'];

//*********PRIMA SOLUZIONE */
// if (strlen($name) > 3 && (strpos($mail,'.') && strpos($mail,'@')) && is_numeric($age)) {
//     echo "<h2>Accesso riuscito</h2>";
// } else {
//     echo "<h2>Accesso negato</h2>";
// }


//*********SECONDA SOLUZIONE */

if(!empty( $_GET['name']) || !empty($_GET['mail']) || !empty($_GET['age'])){

    if(strlen( $_GET['name']) > 3) {

        if(strpos($_GET['mail'],'.') && strpos($_GET['mail'],'@')){
    
            if(is_numeric($_GET['age']) && is_int($_GET['age'] + 0)) {
                echo "<h2>Accesso riuscito</h2>";
            }else {
                echo "<h2>Accesso negato, Inserisci un'età valida</h2>";
            }
    
        }else {
            echo "<h2>Accesso negato, Inserisci una mail valida</h2>";
        }
    
    }else {
        echo "<h2>Accesso negato, Inserisci un nome con almeno 4 lettere</h2>";
    }

} else {
    echo "<h2><strong>Non hai inserito i parametri name, mail e age da verificare</strong></h2>";
}

?>

<!-- Snack 5
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

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
    <?php 
        //************** */ Soluzione 1
        // foreach($posts as $date => $post){
        //     echo "<h2>{$date}</h2>";

        //     foreach($post as $el) {
                
        //         echo "<ul>"; 
        //         foreach($el as $value) {

        //             echo "<li>{$value}</li>";
                    
        //         }
        //         echo "</ul>";
        //     }
        // }

        //************** Soluzione 2
        foreach($posts as $date => $post){
            echo "<h2>{$date}</h2>";

            foreach($post as $el) {
                echo "<ul>"; 
                
                echo "<li><strong style='color : red;'>{$el['title']}</strong></li>";
                echo "<li><strong>{$el['author']}</strong></li>";
                echo "<li>{$el['text']}</li>";

                echo "</ul>"; 
            }
        }
    ?>
</body>
</html>