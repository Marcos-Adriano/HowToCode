<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\Course;

define('TITLE','Editar curso');

if(!isset($_GET['course_id']) or !is_numeric($_GET['course_id'])){
    header('location: pagina.php?status=error');
    exit;
}

$obCourse = Course::getCourses($_GET['course_id']);

if(!$obCourse instanceof Course){
    header('location: pagina.php?status=error');
    exit;
}

if(isset($_POST['courseName'], $_POST['instructorName'], $_POST['description'], $_POST['numberClasses'], $_POST['hours'])){
    // $obCourse = new Course;
    $obCourse->courseName = $_POST['courseName'];
    $obCourse->instructorName = $_POST['instructorName'];
    $obCourse->description = $_POST['description'];
    $obCourse->numberClasses = $_POST['numberClasses'];
    $obCourse->hours = $_POST['hours'];
    $obCourse->atualizar();

    header('location: pagina.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
