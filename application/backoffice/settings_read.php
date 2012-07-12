<h3>Gestione delle impostazioni</h3>

<?php

$query = "";

include_once BO . 'table_settings_form.php';
$table = new Table($db, $table_name, $query);

echo $table->table();
/*
echo '<table>';
	echo $table->thead();
	echo '<tbody>';
	foreach ( $table->rows as $row ) {
		echo '<tr>';
			echo $table->cell( $row->ID );
			echo $table->cell( $row->nome );
			echo $table->cell( euro($row->prezzo), 'price' );
			echo $table->cell( $row->data_di_creazione );
			echo $table->cell( publish($row->pubblicato, $row->ID) );
			echo $table->actions( $row->ID );
		echo '</tr>';
	}
	echo '</tbody>';
echo '</table>';
*/
echo $table->paginate();