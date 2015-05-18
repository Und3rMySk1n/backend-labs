<?php
    require_once('include/common.inc.php');

    $errorCode = ERR_OK;
    $surveyName = GetSurveyName($errorCode);
    if ($surveyName != false)
    {
        $survey = GetSurveyFromFile($surveyName, $errorCode);
        if ($survey != false)
        {		
            PrintSurvey($survey);
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