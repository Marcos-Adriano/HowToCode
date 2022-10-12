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

if(isset($_POST['course_name'], $_POST['course_instructor'], $_POST['course_description'], $_POST['course_numberClasses'], $_POST['course_hours'])){
    $obCourse->course_name = $_POST['course_name'];
    $obCourse->course_instructor = $_POST['course_instructor'];
    $obCourse->course_description = $_POST['course_description'];
    $obCourse->course_numberClasses = $_POST['course_numberClasses'];
    $obCourse->course_hours = $_POST['course_hours'];
    $obCourse->atualizar();

    header('location: pagina.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
