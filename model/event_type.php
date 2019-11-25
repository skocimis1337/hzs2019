<?php

function getAllEventTypes(PDO $db): array {
    $eventTypesStatement = $db->prepare('SELECT * FROM vrste_dogadjaja');
    $eventTypesStatement->execute();

    return $eventTypesStatement->fetchAll();
}

function getEventTypeNames(PDO $db) {
    $eventTypeNames = [];
    foreach (getAllEventTypes($db) as $eventType) {
        $eventTypeNames[$eventType['id_vrste']] = $eventType['naziv'];
    }

    return $eventTypeNames;
}