<?php

function dbConnect()
{
    return new PDO('mysql:host=localhost;dbname=kultura', 'root', '');
}