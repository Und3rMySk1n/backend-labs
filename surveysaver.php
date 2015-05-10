<?php
	require_once('include/common.inc.php');

	$userInfo = GetSurveyFromRequest();		
	SaveSurveyToFile($userInfo);		