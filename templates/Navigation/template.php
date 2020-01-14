<?php
    $dao = rex_sql::factory();
	$dao->setQuery("SELECT * FROM rex_article WHERE parent_id = '0'");
	$result = $dao->getDBArray();
	$navigation = '';

	$navigation .= '<ul class="navbar-nav mr-auto">';
	$first = true;
	foreach ($result as $key => $value) {
		$class='';
		if($first) {
			$first = false;
			$class.='active';
		}
		$navigation .=  '<li class="nav-item"><a class="nav-link '.$class.'" href="#article-'.$value['id'].'">'.$value['name'].'</a></li>';
	}
	$navigation .=  '</ul>';

?>
<nav class="navbar fixed-top navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigationToggle" aria-controls="mainNavigationToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavigationToggle">
        <?php
        echo $navigation;
        ?>
    </div>
</nav>