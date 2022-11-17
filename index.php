<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    $movies = array('Batman', 'Spiderman', 'Ironman', 'Superman');
    echo var_dump($movies);
    echo var_dump($movies[1]);

    // Another way to declare an array
    $singers = ['Reik', 'Maná', 'Axel', 'Regina Spektor'];
    echo var_dump($singers);

    // How to loop through an array?
    echo "<h1>Listado de Peliculas</h1>";
    echo "<ul>";
    for ($i = 0; $i < count($singers); $i++) {
        echo "<li>" . $singers[$i] . "</li>";
    }
    echo "</ul>";

    // Another way to loop through an array:
    echo "<ol>";
    foreach ($singers as $singers) {
        echo "<li>".$singers ."</li>";
    }
    echo "</ol>";

    // Associative arrays
    $persons=['nombre'=>'Matias', 'apellidos'=>'Bueno', 'pais'=>'Argentina'];
    var_dump($persons);
    echo $persons['apellidos'];
    // For example, the GET parameters are associate arrays.

    // Multidimensional arrays... that is, they are nested arrays.
    $contacts=array(
        array(
            'nombre'=>'Belu',
            'email'=>'antonio@antonio.com'
        ),
        array(
            'nombre'=>'Luis',
            'email'=>'luis@luis.com'
        ),
        array(
            'nombre'=>'Salvador',
            'email'=>'salvador@salvador.com'
        )
    );
    var_dump($contacts);
    echo $contacts[1]['nombre'];

    // functions for arrays:
    // -sort array alphabetically
    asort($movies);
    var_dump($movies);

    // -Sort array in reverse alphabetical order
    arsort($movies);
    var_dump($movies);

    // -sort array alphabetically and numerically
    sort($movies);
    var_dump($movies);

    // -Add elements to an array
    $movies[]='Star Wars';
    array_push($movies,'Guardians of de Galaxy');
    var_dump($movies);

    // Delete elements to an array:
    array_pop($movies);
    unset($movies[2]);
    var_dump($movies);

    // Delete random element to an array:
    $randomIndex = array_rand($movies);
    echo $movies[$randomIndex];

    // Search in to an array:
    echo'<br>';
    echo array_search('Ironman', $movies);
    
    // Count the number of elements
    echo'<br>';
    echo count($movies);




    ?>

</body>

</html>