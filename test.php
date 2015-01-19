<?php
$connectionString='host=localhost port=5432 dbname=crimemap user=postgres password=pass';
						  
$connection=pg_connect($connectionString);
	
		if(pg_connection_status($connection)===PGSQL_CONNECTION_OK)
		{
			echo TRUE;
		}else{
			echo FALSE;
		}
		
		$query="select * from users";
		print_r(pg_fetch_object(pg_query($connection,$query)));
		?>