<?php
    require_once('/include/common.inc.php');
	
    $vars = array
	    (
		    'title' => "����� ����������!",
			'description' => "��� �������� ��� ������������ ������ #03."			
		);
	
    echo BuildPage('htmlbook.tpl', $vars);