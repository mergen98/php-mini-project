<?php

require 'functions.php';
//require 'router.php';
$config = require 'config.php';
require 'Database.php';
$db = new Database($config['database']);
$post = $db->query("SELECT * FROM user where userId < 100 ")->fetchAll();
dd($post);