<?php

namespace App\Entity;

use \App\Db\Database;
use PDO;
use PDOException;

class Course{
    public $id;
    public $courseName;
    public $description;
    public $isActive;
    public $instructorName;
    public $numberClasses;
    public $hours;

    public function cadastrar(){
        $this->data = date('Y-m-d H:i:s');

        $obDatabase = new Database('course');
        $this->id = $obDatabase->insert([
                                'course_Name' => $this->courseName,
                                'course_instructor' => $this->instructorName,
                                'course_description' => $this->description,
                                'course_numberClasses' => $this->numberClasses,
                                'course_hours' => $this->hours 
                            ]);

        return true;
    }

    public static function getCourse($where = null, $order = null, $limit = null){
        return (new Database('course'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

}
