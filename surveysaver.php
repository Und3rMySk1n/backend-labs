<?php
	require_once('include/common.inc.php');
	$email = GetParam('email');
	if (!empty($email))
	{	 
		$userInfo = GetSurveyFromRequest();	
		$SerializedSurvey = SerializeSurvey($userInfo);
		SaveSurveyToFile($userInfo, $SerializedSurvey);	
	}
	else
	{
	    echo 'Не введен обязательный параметр email.';
	}
	