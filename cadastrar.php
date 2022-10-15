<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar curso');

use App\Entity\Course;

$obCourse = new Course;

if(isset($_POST['course_name'], $_POST['course_instructor'], $_POST['course_description'], $_POST['course_numberClasses'], $_POST['course_hours'], $_POST['course_isActive'])){
    
    $obCourse->course_name = $_POST['course_name'];
    $obCourse->course_instructor = $_POST['course_instructor'];
    $obCourse->course_description = $_POST['course_description'];
    $obCourse->course_numberClasses = $_POST['course_numberClasses'];
    $obCourse->course_hours = $_POST['course_hours'];
    $obCourse->course_isActive = $_POST['course_isActive'];
    $obCourse->cadastrar();

    header('location: pagina.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
