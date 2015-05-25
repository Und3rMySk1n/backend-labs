<?php
    define('ERR_OK', 0);
    define('ERR_NO_SURVEY', 1);
    define('ERR_NO_FIRSTNAME', 2);
    define('ERR_NO_LASTNAME', 3);
    define('ERR_NO_EMAIL', 4);
    define('ERR_NO_AGE', 5);
    define('ERR_NO_ACCESS_TO_FILE', 6);
    define('ERR_UNABLE_TO_PARSE', 7);
    define('ERR_NOT_READ', 8);
    define('ERR_FILE_NOT_WRITTEN', 9);
    define('first_name', 10);
    define('last_name', 11);
    define('age', 12);
    define('email', 13);
    
    function PrintError($errorCode)
    {
        $errMessages = array //расшифровка ошибок записи
        (
            ERR_NO_SURVEY => 'Анкета не задана, либо она пустая. <br>',
            ERR_NO_FIRSTNAME => 'Не задано имя. <br>',
            ERR_NO_LASTNAME => 'Не задана фамилия. <br>',
            ERR_NO_EMAIL => 'Не задан e-mail. <br>',
            ERR_NO_AGE => 'Не задан возраст. <br>',
            ERR_NO_ACCESS_TO_FILE => 'Нет доступа к файлу. <br>',
            ERR_UNABLE_TO_PARSE => 'Неправильный формат файла. <br>',
            ERR_NOT_READ => 'Файл не был прочитан. <br>',           
            ERR_FILE_NOT_WRITTEN => 'Не удалось записать файл. <br>'
        );

        echo $errMessages[$errorCode];
    }

    function GetSurveyFromRequest(&$errorCode)
    {
        if ($errorCode == ERR_OK)
        {
            $result[first_name] = GetParam('first_name');
            if (empty($result[first_name]))
            {
                $errorCode = ERR_NO_FIRSTNAME;
            }
        }

        if ($errorCode === ERR_OK)
        {
            $result[last_name] = GetParam('last_name');
            if (empty($result[last_name]))
            {
                $errorCode = ERR_NO_LASTNAME;
            }
        }

        if ($errorCode === ERR_OK)
        {
            $result[email] = GetParam('email');
            if (empty($result[email]))
            {
                $errorCode = ERR_NO_EMAIL;
            }
        }

        if ($errorCode === ERR_OK)
        {
            $result[age] = GetParam('age');
            if (empty($result[age]))
            {
                $errorCode = ERR_NO_AGE;
            }
        }

        return ($errorCode == ERR_OK) ? $result : false;
    }

    function GetSurveyName(&$errorCode)
    {
        $email = GetParam('email');
        if (empty($email))
        {
            $errorCode = ERR_NO_EMAIL;
        }

        return ($errorCode == ERR_OK) ? $email : false;
    }

    function GetSurveyFilePath($email)
    {
        $filePath = 'data/' . $email . '.txt';
        return $filePath;
    }

    function SaveSurveyToFile($userInfo, &$errorCode)
    {
        $surveyFilePath = GetSurveyFilePath($userInfo[email]);
        $newfile = fopen($surveyFilePath, 'w');
        if ($newfile === false)
        {
            $errorCode = ERR_NO_ACCESS_TO_FILE;
        }
        else
        {
            $wrt = fwrite($newfile, serialize($userInfo));
            if ($wrt === false)
            {
                $errorCode = ERR_FILE_NOT_WRITTEN;
            }
            else
            {
                fclose($newfile);
            }
        }
    }

    function ReadSurveyFile($filePath, &$errorCode)
    {
        $newfile = fopen($filePath, 'r');
        if ($newfile === false)
        {
            $errorCode = ERR_NO_ACCESS_TO_FILE;
        }
        else
        {
            $lenght = filesize($filePath);
            $rd = fread($newfile, $lenght);
            if ($rd === false)
            {
                $errorCode = ERR_NOT_READ;
            }            
            fclose($newfile);            
        }

        return ($errorCode == ERR_OK) ? $rd : false;
    }

    function GetSurveyFromFile($surveyName, &$errorCode)
    {
        $filePath = GetSurveyFilePath($surveyName);
        $survey = array();

        $survey = ReadSurveyFile($filePath, $errorCode);

        if ($errorCode == ERR_OK)
        {
            $survey = unserialize($survey);
            if ($survey == false)
            {
                $errorCode = ERR_UNABLE_TO_PARSE;
            }
        }

        return ($errorCode == ERR_OK) ? $survey : false;
    }

    function PrintSurvey($survey)
    {
        echo '<b>First Name:</b> ' . $survey[first_name] . '<br>';
        echo '<b>Last Name:</b> ' . $survey[last_name] . '<br>';
        echo '<b>Email:</b> ' . $survey[email] . '<br>';
        echo '<b>Age:</b> ' . $survey[age] . '<br>';
    }