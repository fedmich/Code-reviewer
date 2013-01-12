<?php
    /*
    SQL Injection some samples
    */
	
	/*
	/place/3
	/place/3; drop table;
	/place/3 AND 0=0; drop table;
    */
    
    $sql = "select * from table where id = 3";
    
    $sql = "select * from table where id = '3' ";
    
    $sql = "select * from table where id = '3' AND 0=0; drop table ";
    
    mysql_real_escape_string( $url );