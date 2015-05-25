<?php

    require_once('include/common.inc.php');
    
    $title = GetParam('title');
    if (!empty($title))
    {
        $dvdc = FindDvd($title);
        var_export($dvdc);
    }