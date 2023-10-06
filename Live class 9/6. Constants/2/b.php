<?php

class Task
{
    const MAX_RETRY = 5;
}

$task = new Task();

if ($task->attempts > Task::MAX_RETRY) {
    // Do something
}