<?php

// Return early, encapsulate methods

class Post
{
    public function publish($user, $post)
    {
        if (!$user->isLoggedIn()) {
            throw new Exception("User is not logged in");
        }

        if ($post->isEmpty()) {
            throw new Exception("Post can not be empty");
        }

        $post->setContent($this->sanitizeContent());
        $post->status = 'published';
        $post->save();
    }

    private function sanitizeContent()
    {
        $postLines = explode("\n", $this->getContent());

        foreach ($postLines as $key => $line) {
            $postLines[$key] = strip_tags($line);
        }

        return implode("\n", $postLines);
    }
}
