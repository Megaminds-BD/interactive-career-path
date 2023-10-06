<?php

class Task
{
    public $status;
}

$task = new Task();

if ($task->status === 'pending') {
    // Do something
}
