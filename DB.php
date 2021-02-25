<?php

class DB
{
	var $dbc;
	function __construct()
		{
			$this -> connect();
			$this -> selectDB();
		}
	function connect()
		{
			//Connect to DataBase
			$this -> dbc = new mysqli(DBHOST,DBUSER,DBPASS);
			if($this -> dbc -> connect_error)
				{
					alert('خطا در اتصال به دیتابیس');
				}
		}

	function selectDB()
		{
			$this -> dbc -> select_db(DBNAME);
			if($this -> dbc -> error)
				{
					alert('خطا در انتخاب دیتابیس');
				}
		}

	function execute($sql)
		{
			//Execute query
			$result = $this -> dbc -> query($sql);
			if($this -> dbc -> error)
				{
					alert('خطا در اجرای کوئری');
				}
		}
	function __destruct()
		{
			//Close DataBase
			$this -> dbc -> close();
		}
}
?>