<?php

namespace App\Entity;

use \App\Db\Database;
use PDO;
use PDOException;

class Course{
    public $course_id;
    public $course_name;
    public $course_description;
    public $course_isActive;
    public $course_instructor;
    public $course_numberClasses;
    public $course_hours;

    public function cadastrar(){
        $this->data = date('Y-m-d H:i:s');

        $obDatabase = new Database('course');
        $this->course_id = $obDatabase->insert(['course_name' => $this->course_name, 'course_instructor' => $this->course_instructor, 'course_description' => $this->course_description, 'course_numberClasses' => $this->course_numberClasses, 'course_hours' => $this->course_hours, 'course_isActive' => $this->course_isActive]);

        return true;
    }

    public function atualizar(){
        return (new Database('course'))->update('course_id = '.$this->course_id,[
                                                'course_name' => $this->course_name,
                                                'course_instructor' => $this->course_instructor,
                                                'course_description' => $this->course_description,
                                                'course_numberClasses' => $this->course_numberClasses,
                                                'course_hours' => $this->course_hours, 
                                                'course_isActive' => $this->course_isActive 
        ]);
    }

    public function excluir(){
        return(new Database('course'))->delete('course_id = '.$this->course_id);
    }

    public static function getCourses($where = null, $order = null, $limit = null){
        return (new Database('course'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getCourse($id){
        return (new Database('course'))->select('course_id = '.$id)->fetchObject(self::class);
    }

}
