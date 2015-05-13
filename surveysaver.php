<?php
	require_once('include/common.inc.php');
    
	
	$errorCode = ERR_OK;
	$userInfo = GetSurveyFromRequest($errorCode);	
    if ($userInfo !== false)
    {
        SaveSurveyToFile($userInfo, $errorCode);
        if ($errorCode == ERR_OK)
        {
            echo 'Файл '.$userInfo['email'].'.txt успешно записан.';
        }
        else
        {
            PrintError($errorCode);
        }		
    }
    else
    {
        PrintError($errorCode);
    }