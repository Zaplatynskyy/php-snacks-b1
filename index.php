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

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

//*********PRIMA SOLUZIONE */
// if (strlen($name) > 3 && (strpos($mail,'.') && strpos($mail,'@')) && is_numeric($age)) {
//     echo "<h2>Accesso riuscito</h2>";
// } else {
//     echo "<h2>Accesso negato</h2>";
// }


//*********SECONDA SOLUZIONE */
if(strlen($name) > 3) {

    if(strpos($mail,'.') && strpos($mail,'@')){

        if(is_numeric($age) && is_int($age + 0)) {
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

?>