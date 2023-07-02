<?php

$config = require 'config.php';
$db = new Database($config['database']);
$currentuserId = 1;

$heading = "Notes";
$note = $db->query('SELECT * FROM notes where id = :id',
    ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentuserId);

require "views/notes/show.view.php";
