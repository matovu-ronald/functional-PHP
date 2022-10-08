<?php

function countDown($x)
{
    if ($x < 0) {
        echo "Blast off!";
        return;
    }
    echo $x . "...\n";
    countDown($x - 1);
}

countDown(10);
