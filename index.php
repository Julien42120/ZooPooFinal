<?php

    include __DIR__.'/Process/autoload.php';

    require_once(__DIR__."/Process/connexionBDD.php");


    include 'View/header.php';

?>

<!-- ***** BODY *****  -->

<?php

    // $zoo = new Zoo('Zooland', 'Jean', 25);
    // $test = new BirdCage('BirdCage', 50, 100, 200);
    // $test->setAnimalsEnclos([
    //     new Eagle('Eagle', 'male', 3, 15, 20),
    //     new Eagle('Eagle', 'female', 6, 15, 20),
    //     new Eagle('Eagle', 'female', 7, 15, 20),
    //     new Eagle('Eagle', 'male', 3, 15, 20),
    // ]);

    // // $test->animalsFeatures();

    // $worker = new Worker('Jean', 'male', 28);
    // $worker->inspectEnclos($test);

?>


<!-- ***** FOOTER *****  -->

<?php

    include 'View/footer.php';

?>