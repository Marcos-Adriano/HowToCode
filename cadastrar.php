<?php

require __DIR__.'/vendor/autoload.php';

use App\Entity\Course;

define('TITLE','Cadastrar curso');

$obCourse = new Course;

if(isset($_POST['course_name'], $_POST['course_instructor'], $_POST['course_description'], $_POST['course_numberClasses'], $_POST['course_hours'])){
    
    $obCourse->course_name = $_POST['course_name'];
    $obCourse->course_instructor = $_POST['course_instructor'];
    $obCourse->course_description = $_POST['course_description'];
    $obCourse->course_numberClasses = $_POST['course_numberClasses'];
    $obCourse->course_hours = $_POST['course_hours'];
    $obCourse->cadastrar();

    header('location: pagina.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
