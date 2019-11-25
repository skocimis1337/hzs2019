<html>

<head>
    <title>Dogadjaji</title>
    <?php include 'templates/includes/css.php'; ?>
</head>

<body>
    <?php include 'templates/includes/header.php'; ?>
    <!--
            'events' => $events,
            'eventTypes' => $eventTypes,
            'selectedEventType' => $selectedEventType-1,
            'eventTypeNames' => $eventTypeNames,


    -->
    <?php
    if ($selectedEventType >= 0)
        echo '<h1>' . $eventTypes[$selectedEventType]['naziv'] . '</h1>
    <p>' . $eventTypes[$selectedEventType]['opis'] . '</p>';
    else
        echo '<h1>Događaji</h1>
    <p>Svi budući događaji koji se nalaze na našem sajtu. </p>';
    ?>
    </div>



    <?php
    foreach ($events as $vred) {
        echo '
            <a class = "noedita" href = "../desavanje?id_dogadjaja=' . $vred['id_dogadjaja'] . '
            ">
            <div>
            <h3>' . $vred['naziv_dogadjaja'] . '</h3>
            <p>' . $vred['opis_dogadjaja'] . '</p>
            </div>
            </a>
            ';
    }
    ?>


    <!--<a href="/cars/add" class="btn btn-primary btn-lg btn-block">Add new car</a>-->
    <?php include 'templates/includes/js.php'; ?>
</body>

</html>