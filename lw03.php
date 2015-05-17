<?php
    require_once('/include/common.inc.php');
	
    $vars = array
	    (
		    'title' => "Тег &lt;canvas&gt;",						
		);
	
    echo BuildPage('canvas.tpl', $vars);