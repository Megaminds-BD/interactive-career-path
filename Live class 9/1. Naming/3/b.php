<?php

// Avoid unnecessary prefix in name

class Course
{
    public $name;
    public $fee;

    public function addFee()
    {
        //
    }
}

$course = new Course();
echo $course->name;