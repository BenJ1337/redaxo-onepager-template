<!DOCTYPE html>
<html lang="de">
REX_TEMPLATE[2]
<body>
REX_TEMPLATE[5]
<main>
    <?php
    REX_TEMPLATE[4];
    // All slices of one article
    $dao = rex_sql::factory();

	$dao->setQuery("SELECT * FROM rex_article WHERE parent_id = '0'");
	$result = $dao->getDBArray();
	$content = '';
	foreach ($result as $key => $value) {
		$arr = rex_article_slice::getSlicesForArticle($value['id']);
		$content .= '<section id="article-'.$value['id'].'" class="content-section">';    	
    	$content .= ContentBuilder::buildContent( $arr );
    	$content .= '</section>';
	}
    echo $content;
    ?>
</main>
REX_TEMPLATE[3]
</body>
</html>