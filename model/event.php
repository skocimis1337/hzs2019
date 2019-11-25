<?php

function getAllEvents(PDO $db) {
    $eventsStatement = $db->prepare('SELECT * FROM dogadjaji ORDER BY pocetak_dogadjaja');
    $eventsStatement->execute();

    return $eventsStatement->fetchAll();
}

function getEventsFiltered(PDO $db, array $filters) {
    $eventsStatement = $db->prepare('SELECT * FROM dogadjaji  WHERE vrsta_dogadjaja = :vrsta_dogadjaja AND sysdate()<pocetak_dogadjaja ORDER BY pocetak_dogadjaja');
    $eventsStatement->execute($filters);

    return $eventsStatement->fetchAll();
}

function getEvent(PDO $db, $id) {
    $eventStatement = $db->prepare("SELECT * FROM dogadjaji /*JOIN vrste_dogadjaja ON (dogadjaji.id_dogadjaja=vrste_dogadjaja.id_vrste)*/ WHERE id_dogadjaja = :id ");
   
    $eventStatement->execute(array('id' => $id));
    return ($eventStatement->fetch());
}
/*  POSLE
function addCar(PDO $db, array $data) {
    $insertStatement = $db->prepare('INSERT INTO car (brand_id, model, num_of_door, year_made) VALUES (:brand, :model, :doors, :year)');
    $insertStatement->execute([
        'model' => $data['model'],
        'year' => $data['year'],
        'doors' => $data['doors'],
        'brand' => $data['brand'],
    ]);
}

function editCar(PDO $db, $id, array $data) {
    $updateStatement = $db->prepare('UPDATE car SET brand_id = :brand, model = :model, num_of_door = :doors, year_made = :year WHERE id = :id');
    $updateStatement->execute([
        'model' => $data['model'],
        'year' => $data['year'],
        'doors' => $data['doors'],
        'brand' => $data['brand'],
        'id' => $id,
    ]);
}

function deleteCar(PDO $db, $id) {
    $deleteStatement = $db->prepare('DELETE FROM car WHERE id = :id');
    $deleteStatement->execute(['id' => $id,]);
}*/