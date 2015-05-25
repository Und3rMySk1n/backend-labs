<?php
    require_once('include/common.inc.php');
    error_reporting(E_ALL);
    
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