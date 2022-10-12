<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\Course;

if(!isset($_GET['course_id']) or !is_numeric($_GET['course_id'])){
    header('location: pagina.php?status=error');
    exit;
}

$obCourse = Course::getCourses($_GET['course_id']);

if(!$obCourse instanceof Course){
    header('location: pagina.php?status=error');
    exit;
}

if(isset($_POST['excluir'])){

    $obCourse->excluir();
    header('location: pagina.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';
