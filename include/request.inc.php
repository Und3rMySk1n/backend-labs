<?php

    function PrintError($errorCode)
	{
	    $ErrMessages = array //����������� ������ ������
        (
	        ERR_NO_SURVEY => '������ �� ������, ���� ��� ������. <br>', 
	        ERR_NO_FIRSTNAME => '�� ������ ���. <br>',
		    ERR_NO_LASTNAME => '�� ������ �������. <br>',
		    ERR_NO_EMAIL => '�� ����� e-mail. <br>',
		    ERR_NO_AGE => '�� ����� �������. <br>',
            ERR_NO_FILE => '������ ����� �� ����������. <br>', 
		    ERR_NO_ACCESS_TO_FILE => '��� ������� � �����. <br>',
		    ERR_UNABLE_TO_PARSE => '������������ ������ �����. <br>',		    
            ERR_NO_FILE => '������ ����� �� ����������. <br>', 
	        ERR_NO_ACCESS_TO_FILE => '��� ������� � �����. <br>',
	        ERR_UNABLE_TO_PARSE => '������������ ������ �����. <br>',
			ERR_FILE_NOT_WRITTEN => '�� ������� �������� ����. <br>'
        );		
		echo $ErrMessages[$errorCode];    
	}
	
	function GetParam($paramName)
	{
	    return ((isset($_GET[$paramName]))&&(!empty($_GET[$paramName]))) ? $_GET[$paramName] : '';			
	}
    	
	function GetSurveyFromRequest(&$errorCode)
	{
	    if ((!isset($_GET)) || (empty($_GET)))
		{				   
		    $errorCode = ERR_NO_SURVEY;
		}
			
		if ($errorCode === ERR_OK)
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
                        
	function GetSurveyFilePath($email)
        {	
            $FilePath = 'data/'.$email.'.txt';
			return $FilePath;
        }		
		
	function SaveSurveyToFile($userInfo, &$errorCode)
	{
	    $SurveyFilePath = GetSurveyFilePath($userInfo['email']);
        $newfile = fopen($SurveyFilePath, w);						
        $wrt = fwrite($newfile, serialize($userInfo));
        if ($wrt == false)
        {
            $errorCode = ERR_FILE_NOT_WRITTEN;
        }	    
		fclose($newfile);			    
	}    		
	
	function ReadSurveyFile($filePath)
    {
	    $newfile = fopen($filePath, r);
	    $lenght = filesize($filePath);
	    $rd = fread($newfile, $lenght);			
		return $rd;
	}
	
    function GetSurveyName(&$errorCode)
    {
        if ((isset($_GET['email'])) && (!empty($_GET['email'])))
        {
		    return $_GET['email'];
	    }
		else
        {
		    $errorCode = ERR_NO_EMAIL;
			return false;
        }				
    }

    function GetSurveyFromFile($SurveyName, &$errorCode)
    {        
        $filePath = GetSurveyFilePath($SurveyName);				
        $Survey = array();

		if (!file_exists($filePath))
        {
            $errorCode = ERR_NO_FILE;
        }
			
		if ($errorCode == ERR_OK)
	    {
	        $Survey = ReadSurveyFile($filePath);
			if ($Survey == false)
            {
                $errorCode = ERR_NO_ACCESS_TO_FILE;
            }						
        }
            
        if ($errorCode == ERR_OK)
        {
            $Survey = unserialize($Survey);
     		if ($Survey == false)
            {
                $errorCode = ERR_UNABLE_TO_PARSE;
            }
        }		      				
        return ($errorCode == ERR_OK) ? $Survey : false;				
    }

	function PrintSurvey($Survey)
    {
	    echo '<b>First Name:</b> '.$Survey['first_name'].'<br>';
		echo '<b>Last Name:</b> '.$Survey['last_name'].'<br>';
		echo '<b>Email:</b> '.$Survey['email'].'<br>';
		echo '<b>Age:</b> '.$Survey['age'].'<br>';	
	}