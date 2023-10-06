<?php

class Task
{
    public $status;
}

class Status {
    const PENDING = 'pending';
    const APPROVED = 'approved';
    const REJECTED = 'rejected';
}

$task = new Task();

if ($task->status === Status::PENDING) {
    // Do something
}
