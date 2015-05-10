<?php
    	
	function GetParam($paramName)
	    {
	        return ((isset($_GET[$paramName]))&&(!empty($_GET[$paramName]))) ? $_GET[$paramName] : '';			
	    }

    function SerializeSurvey($str)
	    {
		    if (!empty($str))
			{
			    $serialized = serialize($str);
			}
			else
			{
			    echo 'Сериализация невозможна, входная строка пустая. <br>';
			    $serialized = '';
			}
			return $serialized;
		}
	
    function UnserializeSurvey($str)
	    {
		    if (!empty($str))
			{
			    $unserialized = unserialize($str);
			}
			else
			{
			    echo 'Десериализация невозможна, входная строка пустая. <br>';
			    $unserialized = '';
			}
			return $unserialized;
		}
	
	function GetSurveyFromRequest()
	    {
		    $errorCode = ERR_OK;
						
		    if ((!isset($_GET)) || (empty($_GET)))
			    {				   
				    $errorCode = ERR_NO_SURVEY;
				}
			
			if ($errorCode === ERR_OK)
			    {			    
			        $survey = $_GET;
				    if (!empty($survey[first_name]))
				    {
				        $result[first_name] = $survey[first_name];
				    }
				    else
				    {				       
					    $errorCode = ERR_NO_FIRSTNAME;
				    }
				}	
			
            	if ($errorCode === ERR_OK)
                    { 				
				        if (!empty($survey[last_name]))
				        {
				            $result[last_name] = $survey[last_name];
				        }
				        else
				        {				            
					        $errorCode = ERR_NO_LASTNAME;
				        }
					}
				
				if ($errorCode === ERR_OK)
				    {
				        if (!empty($survey[email]))
				      {
				          $result[email] = $survey[email];
				      }
				      else
				      {				          
					      $errorCode = ERR_NO_EMAIL;
				      }
				    }
				
				if ($errorCode === ERR_OK)
				    {
				        if (!empty($survey[age]))
				        {
				            $result[age] = $survey[age];					
				        }
				        else
				        {				            
					        $errorCode = ERR_NO_AGE;
				        }
					}

                $WriteErrMessages = array //расшифровка ошибок записи
                    (
		                ERR_NO_SURVEY => 'Анкета не задана, либо она пустая. <br>', 
			            ERR_NO_FIRSTNAME => 'Не задано имя. <br>',
			            ERR_NO_LASTNAME => 'Не задана фамилия. <br>',
			            ERR_NO_EMAIL => 'Не задан e-mail. <br>',
			            ERR_NO_AGE => 'Не задан возраст. <br>',
                        ERR_NO_FILE => 'Такого файла не существует. <br>', 
			            ERR_NO_ACCESS_TO_FILE => 'Нет доступа к файлу. <br>',
			            ERR_UNABLE_TO_PARSE => 'Неправильный формат файла. <br>'
                    );					
				
                if ($errorCode !== ERR_OK)
                    {
                        echo $WriteErrMessages[$errorCode];
                    }					
										
			return ($errorCode === ERR_OK) ? $result : false;
		}	

	function GetSurveyFilePath($email)
        {	
            $FilePath = 'data/'.$email.'.txt';
			return $FilePath;
        }		
		
	function SaveSurveyToFile($userInfo)
	    {
		    if ($userInfo !== false)
		        {
			        $SerializedSurvey = SerializeSurvey($userInfo);
		            $SurveyFilePath = GetSurveyFilePath($userInfo['email']);
			        $newfile = fopen($SurveyFilePath, w);						
		            $wrt = fwrite($newfile, $SerializedSurvey);
		            if ($wrt == false)
		            {
		                echo 'Не удалось записать файл.';
		            }
			        else
		            {
			            echo 'Файл '.$userInfo['email'].'.txt успешно записан.';
	                }
		            fclose($newfile);
			    }
		}	
	
	function ReadSurveyFile($filePath)
	    {
		    $newfile = fopen($filePath, r);
		    $lenght = filesize($filePath);
		    $rd = fread($newfile, $lenght);			
			return $rd;
		}
	
    function GetSurveyName()
        {
            if ((isset($_GET['email'])) && (!empty($_GET['email'])))
			    {
				    return $_GET['email'];
				}
			else
                {
					return '';
                }				
        }

    function GetSurveyFromFile($SurveyName)
        {
            $errorCode = ERR_OK;
            $filePath = GetSurveyFilePath($SurveyName);
			if (empty($filePath))
			    {
				    $errorCode = ERR_NO_FILE_PATH;
				}
				
            $Survey = array();

            if (!file_exists($filePath))
            {
                $errorCode = ERR_NO_FILE;
            }
			
			if ($errorCode === ERR_OK)
			    {
			        $Survey = ReadSurveyFile($filePath);
					if ($Survey === false)
                        {
                            $errorCode = ERR_NO_ACCESS_TO_FILE;
                        }						
                }
            
            if ($errorCode === ERR_OK)
                {
                    $Survey = UnserializeSurvey($Survey);
					if ($survey === false)
                        {
                            $errorCode = ERR_UNABLE_TO_PARSE;
                        }
                }			
			
            $ReadErrMessages = array //расшифровка ошибок чтения
                (	
                    ERR_NO_FILE_PATH => 'Не указан email анкеты. <br>',       
                    ERR_NO_FILE => 'Такого файла не существует. <br>', 
			        ERR_NO_ACCESS_TO_FILE => 'Нет доступа к файлу. <br>',
			        ERR_UNABLE_TO_PARSE => 'Неправильный формат файла. <br>'
                );
			
            if ($errorCode !== ERR_OK)
                {
                    echo $ReadErrMessages[$errorCode];
                }		
				
            return ($errorCode === ERR_OK) ? $Survey : false;				
        }

	function PrintSurvey($Survey)
	    {
		    if ($Survey !== false)
			    {
				    echo 'First Name: '.$Survey['first_name'].'<br>';
					echo 'Last Name: '.$Survey['last_name'].'<br>';
					echo 'Email: '.$Survey['email'].'<br>';
					echo 'Age: '.$Survey['age'].'<br>';     
				}
		}
		