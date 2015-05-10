<?php
	require_once('include/common.inc.php');

	$SurveyName = GetSurveyName();
	$Survey = GetSurveyFromFile($SurveyName);		
	PrintSurvey($Survey);		