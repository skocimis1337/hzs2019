<?php
require_once 'utils/db.php';
require 'utils/view.php';
require 'model/event_type.php';
require 'model/event.php';

function getEventsListAction(array $filters) {
    $db = dbConnect();

    $selectedEventType = $filters['vrsta_dogadjaja'] ?? null;
    $events = $selectedEventType ? getEventsFiltered($db, ['vrsta_dogadjaja' => $selectedEventType]) : getAllEvents($db);
    $eventTypes = getAllEventTypes($db);
    $eventTypeNames = getEventTypeNames($db);

    renderView(
        'dogadjaji',
        [
            'events' => $events,
            'eventTypes' => $eventTypes,
            'selectedEventType' => $selectedEventType-1,
            'eventTypeNames' => $eventTypeNames,
        ]
    );
}

function addCarAction(array $data) {
    $db = dbConnect();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        addCar($db, [
            'model' => $data['model'],
            'year' => $data['year'],
            'doors' => $data['doors'],
            'brand' => $data['brand'],
        ]);

        redirect('/cars');
        return;
    }

    renderView('add_car', [ 'brands' => getAllBrands($db)]);
}


function editCarAction(array $filter, array $data) {
    $db = dbConnect();

    $car = null;
    if (isset($filter['car'])) {
        $car = getCar($db, $filter['car']);
    }

    if (!$car) {
        notFoundPage();
        return;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        editCar($db, $car['id'], [
            'model' => $data['model'],
            'year' => $data['year'],
            'doors' => $data['doors'],
            'brand' => $data['brand'],
            'id' => $car['id'],
        ]);

        redirect('/cars');
        return;
    }

    $brands = getAllBrands($db);

    renderView(
        'edit_car',
        [
            'car' => $car,
            'brands' => $brands,
        ]
    );
}
function deleteCarAction(array $filter) {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        notFoundPage();
        return;
    }

    $db = dbConnect();

    $car = null;
    if (isset($filter['car'])) {
        $car = getCar($db, $filter['car']);
    }

    if (!$car) {
        notFoundPage();
        return;
    }

    deleteCar($db, $car['id']);
    redirect('/cars');
}