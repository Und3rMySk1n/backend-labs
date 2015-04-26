<?php
    function CalcStrength($password)
	{
	    $strength = 0;
		$strength += CalcLengthStrength($password);
		$strength += GetDigitStrength($password);
		$strength += GetUpperStrength($password);
		$strength += GetLowerStrength($password);
		$strength += OnlyChars($password);
		$strength += OnlyDigits($password);
		$strength += CalcRepeatedStrength($password);
		return $strength;
	}
	
	function CalcLengthStrength($password)
	{
	return strlen($password)*4;
	}
	
	function GetDigitStrength($password)
	{	
        $counter = 0;    
		for ($i = 0; $i < strlen($password); ++$i)
		{
		    if (ctype_digit($password[$i]))
			{
			    $counter += 1;
			}
		}
		return $counter*4;
	}
	
	function GetUpperStrength($password)
	{	 
	    $counter = 0;
	    for ($i = 0; $i < strlen($password); ++$i)
	    {
            if (ctype_upper($password[$i]))
	       	{
        	    $counter += 1;				
        	}
        }
		$strength = 2*(strlen($password) - $counter);
        if ($counter == 0)
		{
		    $strength = 0;
		}
		return $strength;
	}
	
	function GetLowerStrength($password)
	{	 
	    $counter = 0;
	    for ($i = 0; $i < strlen($password); ++$i)
	    {
            if (ctype_lower($password[$i]))
	       	{
        	    $counter += 1;				
        	}
        }
		$strength = 2*(strlen($password) - $counter);
        if ($counter == 0)
		{
		    $strength = 0;
		}
		return $strength;
	}
	
	function OnlyChars($password)
	{
	    $strength = 0;
	    if (ctype_alpha($password))
		{
		    $strength = $strength - strlen($password);
		}
		return $strength;
	}
	
	function OnlyDigits($password)
	{
	    $strength = 0;
	    if (ctype_digit($password))
		{
		    $strength = $strength - strlen($password);
		}
		return $strength;
	}
	
	function CalcRepeatedStrength($password)
	{
	    $strength = 0;
		$symbols = Count_chars($password, 1);
		foreach ($symbols as $ChCount)
        {
            if ($ChCount > 1)
			{
			    $strength -= $ChCount;
			}
        }
        return $strength;		
	}

?>