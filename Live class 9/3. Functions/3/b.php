<?php

// Avoid using method flags

function saveFile($path)
{
    // save file in regular directory
}

function saveTemporaryFile($path)
{
    $path = 'temp/' . $path;

    // save file in temporary directory
}

saveFile("file");
saveTemporaryFile("temp_file");