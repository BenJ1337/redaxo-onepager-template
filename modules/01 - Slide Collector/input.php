<?php

	$mForm = new MForm();
    
    $mForm->addTab('Allgemein');
	$mForm->addSelectField("1.bootstrap_width", 
		array(''=>'normal','-fluid'=>'Rand'), 
		array('label'=>'Breite'));

	$mForm->addSelectField("1.slice_count", 
	    array(1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5', 6=>'6', 7=>'7', 8=>'8', 9=>'9', 10=>'10', 11=>'11', 12=>'12'), 
	 	array('label'=>'Blöcke'));

	$mForm->addCheckboxField("1.no_padding", array('no-padding'=>'keine Ränder'), array('label'=>'Ränder links/rechts'));
    $mForm->closeTab();
    
    $mForm->addTab('Verschachtelt');

	$mForm->addSelectField("1.bootstrap_column_width", 
	    array(1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5', 6=>'6', 7=>'7', 8=>'8', 9=>'9', 10=>'10', 11=>'11', 12=>'12'), 
	    array('label'=>'Spaltenbreite'));
    $mForm->closeTab();
 
	echo $mForm->show();
?>




