<?php

$l = ['Austin', 'New york', 'San francisco'];

for ($i=0; $i < count($l); $i++) {
    $li = $l[$i];

    doSomething($li);
}

function doSomething($var) {
    // Some business logic
}