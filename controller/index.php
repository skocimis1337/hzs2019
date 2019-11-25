<?php

require_once 'utils/db.php';
require 'utils/view.php';
require 'model/event_type.php';

function indexAction(){
  $db = dbConnect();
  $eventTypeNames = getEventTypeNames($db);
  renderView('index', ['eventTypeNames' => $eventTypeNames, ]);
}