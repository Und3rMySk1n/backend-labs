<?php

function GetParam($paramName)
    {         
        return ((isset($_GET[$paramName]))&&(!empty($_GET[$paramName]))) ? $_GET[$paramName] : '';			
    }