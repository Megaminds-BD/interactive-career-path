<?php

class Post
{
    public function publish($user, $post)
    {
        if ($user->isLoggedIn()) {
            if ($post->isNotEmpty()) {
                $postLines = explode("\n", $post->getContent());

                foreach ($postLines as $key => $line) {
                    $postLines[$key] = strip_tags($line);
                }

                $post->setContent(implode("\n", $postLines));
                $post->status = 'published';
                $post->save();
            } else {
                throw new Exception("Post can not be empty");
            }
        } else {
            throw new Exception("User is not logged in");
        }
    }
}
