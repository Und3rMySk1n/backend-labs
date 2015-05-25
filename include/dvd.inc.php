<?php

    function FindDvd($title)
    {
        $title = DBQuote($title);
        $query = "SELECT * FROM dvd 
                  WHERE title LIKE '%{$title}%'";
        return DBQuery($query);
    }
    
    