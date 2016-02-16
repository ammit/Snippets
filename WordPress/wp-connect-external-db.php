<?php

/*==============================================================
=            Connect to an external DB in WordPress            =
==============================================================*/

/**
*
* Define DB
*
**/

$mydb = new wpdb('root','mysql','TABLENAME','localhost');
$rows = $mydb->get_results("SELECT *
	FROM example_table_1 a
	-- specify dominant table (and assign 'a')
	LEFT JOIN example_table_2 b
	-- specify joined table (and assign 'b')
	ON a.unique_id = b.another_id
	ORDER BY a_field_name
	");

/**
*
* Foreach
*
**/
foreach ( $rows as $obj ){
	echo $obj->a_field_name;
}


/*=====  End of Connect to an external DB in WordPress  ======*/