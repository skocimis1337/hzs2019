<html>

<head>
    <title>Dogadjaj</title>
    <?php include 'templates/includes/css.php'; ?>
</head>

<body>
    <?php include 'templates/includes/header.php'; ?>
    <!--
            'event' => $event

    -->
    <?php
        echo '<h1>' . $event['naziv_dogadjaja'] . '</h1>
    <p>' . $event['opis_dogadjaja'] . '</p>';
    ?>






    <!--<a href="/cars/add" class="btn btn-primary btn-lg btn-block">Add new car</a>-->
    <?php include 'templates/includes/js.php'; ?>
</body>

</html>