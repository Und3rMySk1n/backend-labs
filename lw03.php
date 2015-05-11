<?php
    require_once('/include/common.inc.php');
	
    $vars = array
	    (
		    'title' => "Добро пожаловать!",
			'description' => "Это страница для лабораторной работы #03."			
		);
	
    echo BuildPage('htmlbook.tpl', $vars);