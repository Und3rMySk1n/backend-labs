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
			    echo '������������ ����������, ������� ������ ������. <br>';
			    $serialized = '';
			}
			return $serialized;
		}
		
	function GetSurveyFromRequest()
	    {
		    if ((isset($_GET)) && (!empty($_GET)))
			{
			    $error = 0;
			    $survey = $_GET;
				if (!empty($survey[first_name]))
				{
				    $result[first_name] = $survey[first_name];
				}
				else
				{
				    echo '�� ������ ���. <br>';
					$error = 1;
				}
				
				if (!empty($survey[last_name]))
				{
				    $result[last_name] = $survey[last_name];
				}
				else
				{
				    echo '�� ������ �������. <br>';
					$error = 1;
				}
				
				if (!empty($survey[email]))
				{
				    $result[email] = $survey[email];
				}
				else
				{
				    echo '�� ����� e-mail. <br>';
					$error = 1;
				}
				
				if (!empty($survey[age]))
				{
				    $result[age] = $survey[age];					
				}
				else
				{
				    echo '�� ����� �������. <br>';
					$error = 1;
				}
				
				if ($error == 1)
                {
                    $result = '';
                }				
			}
			else
			{
			    echo '������ �� ������, ���� ��� ������. <br>';
			    $result = '';
			}
			return $result;
		}	

	function SaveSurveyToFile($userInfo, $SerializedSurvey)
	    {
		    $newfile = fopen('data/'.$userInfo['email'].'.txt', w);
		    $wrt = fwrite($newfile, $SerializedSurvey);
		    if ($wrt == false)
		    {
		        echo '�� ������� �������� ����.';
		    }
			else
		    {
			    echo '���� '.$userInfo['email'].'.txt ������� �������.';
	        }
		    fclose($newfile);
		}