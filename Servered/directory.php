<?php
function directory() {
    $files = scandir("./");
    foreach ($files as $file) {
        echo "<a href='" . $file . "'>{$file}</a><br>";
    }
}