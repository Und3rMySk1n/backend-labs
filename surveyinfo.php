<?php
    require_once('include/common.inc.php');

    $errorCode = ERR_OK;
    $SurveyName = GetSurveyName($errorCode);
    if ($SurveyName != false)
    {
        $Survey = GetSurveyFromFile($SurveyName, $errorCode);
        if ($Survey != false)
        {		
            PrintSurvey($Survey);
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