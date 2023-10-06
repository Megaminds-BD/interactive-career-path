<?php

function saveFile($path, $temporary = false)
{
    if ($temporary) {
        $path = 'temp/' . $path;

        // save file in temporary directory
    } else {
        // save file in regular directory
    }
}

saveFile("file", true);