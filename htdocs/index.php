<?php

    include __DIR__.'/Process/autoload.php';

    require_once(__DIR__."/Process/connexionBDD.php");


    include 'View/header.php';

?>

<!-- ***** BODY *****  -->

<?php

    $birdCage = new BirdCage([
        'type' => 'birdCage',
        'surface' => 50,
        'max' => 6,
        'submit' => true,
        'height'=> 50,
        'id_zoo' => 1,
    ]);

    $aqua = new Aqua([
        'type' => 'Aquarium',
        'surface' => 30,
        'max' => 25,
        'Salinite' => 10,
        'deep'=> 50,
        'id_zoo' => 1,
    ]);

    $fish = new Fish([
        'nameSpecies' => "Saumon", 
        'sex' => 'male',
        'age' => 4,
        'weight' => 80,
        'size' => 100,
    ]);

    $eagle = new Eagle([
        'nameSpecies' => "Faucon", 
        'sex' => 'femele',
        'age' => 3,
        'weight' => 15,
        'size' => 60,
    ]);

    $tiger = new Tiger([
        'nameSpecies' => "Sibérie", 
        'sex' => 'male',
        'age' => 7,
        'weight' => 140,
        'size' => 150,
    ]);

    $worker = new Worker([
        'Name' => "Rasta Falliat", 
        'Sex' => 'homme',
        'Age' => 35,
    ]); 

    $zoo = new Zoo([
        'name' => 'NaturalZoo',
        'worker' => $worker,
    ]);

    echo '<br>';

    $zooManager = new ZooManager($pdo);
    $workerManager = new WorkerManager($pdo);
    $enclosureManager = new EnclosureManager($pdo);
    $animalManager = new AnimalManager($pdo);

    $zooManager -> add($zoo);
    $workerManager -> add($worker , $zoo);
    $enclosureManager -> add($birdCage, $zoo);
    $enclosureManager -> add($aqua , $zoo);
    $animalManager -> add($fish, $aqua);
    $animalManager -> add($eagle , $birdCage);


?>


<!-- ***** FOOTER *****  -->

<?php

    include 'View/footer.php';

?>