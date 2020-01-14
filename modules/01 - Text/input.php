
<?php
    $mForm = new MForm();
  
    $mForm->addTab('Einstellungen');
    $mForm->addTextAreaField("2.cke5_editor", array('label'=>'Text', 
    	'class'=>'cke5-editor', 
    	'data-lang'=>\Cke5\Utils\Cke5Lang::getUserLang(), 
    	'data-profile'=>'default'));
    $mForm->closeTab();

    $mForm->addTab('Breite');
    $mForm->addSelectField("1.bootstrap_column_width",
    	array(1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5', 6=>'6', 7=>'7', 8=>'8', 9=>'9', 10=>'10', 11=>'11', 12=>'12'), 
    	array('label'=>'Spaltenbreite'));
    $mForm->closeTab();
    
    echo $mForm->show();
?>