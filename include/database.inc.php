<?php
    
    $g_dbLink = NULL;
    
    function DBConnect()
    {
        global $g_dbLink;
        $g_dbLink = mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if (mysqli_connect_errno())
        {
            echo 'Unable to connect to DB';
            exit();
        }
    }
    
    // ��������� SQL-������, ���������� � ���������� $query, ���������� ������������� ������,
    // ���������� ������ ������, ���� ������ ���.
    // @param string $query
    // @return array
    
    function DBQuery($query)
    {
        global $g_dbLink;
        $data = array();
        if ($result = mysqli_query($g_dbLink, $query))
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                array_push($data, $row);
            }
            mysqli_free_result($result);
        }
        return $data;
    }

    function DBClose()
    {
        global $g_dbLink;
        mysqli_close($g_dbLink);
    }
    
    function DBQuote($str)
    {
        global $g_dbLink;
        return mysqli_real_escape_string($g_dbLink, $str);
    }  