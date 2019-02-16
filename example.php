<?php

function getCelsius($temperature = null, $includeUnit = true)
{
    $result = ($temperature - 32) / 1.8;

    if ($includeUnit) {
        $result .= ' C';
    }

    return $result;
}