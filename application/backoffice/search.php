<?php

if ( isset($_POST['submit_search']) ) {
	// field, operator, higher, lower, equals, contains, starts, ends
	$field = isset($_POST['field']) ? trim($_POST['field']) : false;

	if ( !empty($field) ) {
		
		$operator 	= isset($_POST['operator']) ? $_POST['operator'] : 'OR';
		/*
		$higher		= isset($_POST['higher']) ? trim($_POST['higher']) : '';
		$lower		= isset($_POST['lower']) ? trim($_POST['lower']) : '';
		$equals		= isset($_POST['equals']) ? trim($_POST['equals']) : '';
		$contains	= isset($_POST['contains']) ? trim($_POST['contains']) : '';
		$starts		= isset($_POST['starts']) ? trim($_POST['starts']) : '';
		$ends		= isset($_POST['ends']) ? trim($_POST['ends']) : '';
		*/
		$query.= " HAVING ";
		$_count = 0;
	
		foreach ($_POST as $condition => $value) {
			if ( !empty($value) ) {
				switch ($condition) {
					case 'higher':
						$query.= $_count > 0 ? " $operator " : '';
						$query.= "`$field` > $value";
						$_count++;
						break;
					case 'lower':
						$query.= $_count > 0 ? " $operator " : '';
						$query.= "`$field` < $value";
						$_count++;						
						break;
					case 'equals':
						$query.= $_count > 0 ? " $operator " : '';
						$query.= "`$field` = '$value'";
						$_count++;						
						break;
					case 'contains':
						$query.= $_count > 0 ? " $operator " : '';
						$query.= "`$field` LIKE '%$value%'";
						$_count++;						
						break;
					case 'starts':
						$query.= $_count > 0 ? " $operator " : '';
						$query.= "`$field` LIKE '$value%'";
						$_count++;						
						break;
					case 'ends':
						$query.= $_count > 0 ? " $operator " : '';					
						$query.= "`$field` LIKE '%$value'";
						$_count++;						
						break;
				}
				/* DEBUG
				var_dump($condition);
				var_dump($value);
				var_dump($_count);
				var_dump($_count > 0);
				//*/
			}
		}
		/*
		if ( !empty($_POST['higher']) ) {
			$query.= "`$field` > $higher";
			$query.= " $operator";
		}
		if ( !empty($_POST['lower']) ) {
			$query.= "`$field` < $lower";
			$query.= " $operator";			
		}
		if ( !empty($_POST['equals'] )) {
			$query.= "`$field` = '$equals'";
			$query.= " $operator";			
		}
		if ( !empty($_POST['contains'] )) {
			$query.= "`$field` LIKE '%$contains%'";
			$query.= " $operator";			
		}
		if ( !empty($_POST['starts'] )) {
			$query.= "`$field` LIKE '$starts%'";
			$query.= " $operator";			
		}
		if ( !empty($_POST['ends'] )) {
			$query.= "`$field` LIKE '%$ends'";		
		}
		*/
	}
}