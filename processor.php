<?php

$pdo = new PDO('mysql:dbname=school;charset=utf8;', 'root', '7656198s');
$st = $pdo->prepare("DELETE FROM students WHERE id in ?");
        $st->execute("1,2,3");
