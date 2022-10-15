<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Course;

$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_SPECIAL_CHARS);

$condicoes = [
    strlen($busca) ? 'course_name LIKE "%'.str_replace(' ','%',$busca).'%"' : null
];

$where = implode(' AND ', $condicoes);

$courses = Course::getCourses($where);

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';
