<?php

// Use better variable naming

$locations = ['Austin', 'New york', 'San francisco'];

foreach ($locations as $location) {
    doSomething($location);
}

function doSomething($var) {
    // Some business logic
}