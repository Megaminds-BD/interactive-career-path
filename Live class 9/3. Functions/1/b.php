<?php

// Avoid negative conditional methods

class Article
{
    public $status;

    public function isPublished()
    {
        return $this->status !== 'Draft';
    }

    public function isNotPublished()
    {
        return ! $this->isPublished();
    }
}

$article = new Article();

if ($article->isPublished()) {
    // Do something
}

if ($article->isNotPublished()) {
    // Do something
}
