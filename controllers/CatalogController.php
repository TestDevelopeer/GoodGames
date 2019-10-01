<?php
include_once '../models/CategoryModel.php';
include_once '../models/GameModel.php';
include_once '../models/ArticleModel.php';
if(!isset($_SESSION['user'])){
	require_once('capchaUser/capcha.php');
}

function indexAction($smarty){
	
	$id  = isset($_GET['id']) ? $_GET['id'] : null;
	if($id == null){
		$smarty->assign('Title', 'Все');
		$rsGames = getGames();
		if(!$rsGames){
			header('Location: /notfound/');
		}
	}
	
	foreach ($rsGames as $game) {
		$rsPlatforms[] = explode(',', $game['platform_id']);
	}
	$index = count($rsPlatforms);
	for ($i = 0; $i < $index; $i++) { 
		$indexJ = count($rsPlatforms[$i]);
		for ($j = 0; $j < $indexJ; $j++) { 
			$name = getPlatformById($rsPlatforms[$i][$j]);
			$platformPopGames[$rsGames[$i]['id_game']][] = $name['name_platform'];
		}
	}

	$smarty->assign('pageTitle', 'Каталог');

	$rsThreePopularLastArt = getThreePopularArt();
	$rsTwoLastArt = getTwoLastArt();
	$rsMostPopularGame = getMostPopularGame();
	$rsGamePlatforms = getGamePlatforms();
	$rsCategories = getAllCategories();
	$id = 0;
	$rsRandomGames = getRandomGames();
	$rsRecomended = getRandomRecomGames();
	$rsRandomGame = getRandomGame();

	$smarty->assign('rsRandomGames', $rsRandomGames);
	$smarty->assign('id', $id);
	$smarty->assign('rsGamePlatforms', $rsGamePlatforms);
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsGames', $rsGames);
	$smarty->assign('rsThreePopularLastArt', $rsThreePopularLastArt);
	$smarty->assign('rsMostPopularGame', $rsMostPopularGame);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('platformPopGames', $platformPopGames);
	$smarty->assign('rsRecomended', $rsRecomended);
	$smarty->assign('rsRandomGame', $rsRandomGame);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'store/breadcrumbs');
	loadTemplate($smarty, 'catalog/slider');
	loadTemplate($smarty, 'catalog/platforms');
	loadTemplate($smarty, 'catalog/sideBar');
	loadTemplate($smarty, 'catalog/products');
	loadTemplate($smarty, 'index/footer');
}

function searchAction($smarty){
	if(!isset($_SESSION['user'])){
    require_once('capchaUser/capcha.php');
}
	$id = isset($_GET['searchname']) ? $_GET['searchname'] : null;
	$name  = isset($_GET['name']) ? $_GET['name'] : null;
	if($name == 'cat'){
		$cat = 'category_id';
		$rsGames = getGamesByCatId($id, $cat);
		if(!$rsGames){
			header('Location: /notfound/');
		}
		$catname = getCategoryById($id);
		$Title = $catname['name_category'];
		$smarty->assign('Title', $Title);
	} else if($name == 'tag'){
		$cat = 'tags';
		$rsGames = getGamesByCatId($id, $cat);
		if(!$rsGames){
			header('Location: /notfound/');
		}
		$smarty->assign('Title', $id);
	} else if($name == 'platform'){
		$cat = 'platform_id';
		$rsGames = getGamesByCatId($id, $cat);
		if(!$rsGames){
			header('Location: /notfound/');
		}
		$platname = getPlatformById($id);
		$Title = $platname['name_platform'];
		$smarty->assign('Title', $Title);
	} else if($name == 'developer'){
		$cat = 'Developer';
		$rsGames = getGamesByCatId($id, $cat);
		if(!$rsGames){
			header('Location: /notfound/');
		}
		$Title = $id;
		$smarty->assign('Title', $Title);
	} else if($name == 'publisher'){
		$cat = 'Publisher';
		$rsGames = getGamesByCatId($id, $cat);
		if(!$rsGames){
			header('Location: /notfound/');
		}
		$Title = $id;
		$smarty->assign('Title', $Title);
	} else if($name == 'game'){
		$cat = 'name_game';
		$rsGames = getGamesByCatId($id, $cat);
		if(!$rsGames){
			header('Location: /notfound/');
		}
		$Title = $id;
		$smarty->assign('Title', $Title);
	} else {
		$smarty->assign('Title', 'Все');
		$rsGames = getGames();
		if(!$rsGames){
			header('Location: /notfound/');
		}
	}	

	$smarty->assign('pageTitle', 'Каталог');

	$rsThreePopularLastArt = getThreePopularArt();
	$rsTwoLastArt = getTwoLastArt();
	$rsMostPopularGame = getMostPopularGame();
	$rsGamePlatforms = getGamePlatforms();
	$rsCategories = getAllCategories();

	$smarty->assign('rsGamePlatforms', $rsGamePlatforms);
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsGames', $rsGames);
	$smarty->assign('rsThreePopularLastArt', $rsThreePopularLastArt);
	$smarty->assign('rsMostPopularGame', $rsMostPopularGame);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'store/breadcrumbs');
	loadTemplate($smarty, 'catalog/slider');
	loadTemplate($smarty, 'catalog/platforms');
	loadTemplate($smarty, 'catalog/products');
	loadTemplate($smarty, 'catalog/sideBar');
	loadTemplate($smarty, 'index/footer');
}

function searchwthcatAction(){

	$mysqli = $GLOBALS["db"];
	$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
	if(!empty($_POST["referal"])){ //Принимаем данные
	    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
	    $cat = $_POST['cat'];
	    if($referal != 'all'){
		    $db_referal = $mysqli -> query("SELECT * from `games` search WHERE (`parent_game` = '0' AND `{$cat}` LIKE '%$referal%') ORDER BY `id_game` DESC LIMIT 12")
		    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
		} else {
			$db_referal = $mysqli -> query("SELECT * FROM `games` WHERE `parent_game` = '0' ORDER BY `id_game` DESC LIMIT 12")
	    	or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
		}

			if(isset($_SESSION['cart'])){
				$rsCheckGameCart = $_SESSION['cart'];
			}

			$rsGame = createSmartyRsArray($db_referal);
			foreach ($rsGame as $game) {
				$rsPlatforms[] = explode(',', $game['platform_id']);
			}
			$index = count($rsPlatforms);
			for ($i = 0; $i < $index; $i++) { 
				$indexJ = count($rsPlatforms[$i]);
				for ($j = 0; $j < $indexJ; $j++) { 
					$name = getPlatformById($rsPlatforms[$i][$j]);
					$platformPopGames[$rsGame[$i]['id_game']][] = $name['name_platform'];
				}
			}
			
	    foreach ($rsGame as $row) {
	        echo "\n			
        		<div class='col-md-6'>
                    <div class='nk-product-cat'>
                        <a class='nk-product-image";
                        if (isset($rsCheckGameCart[$row['id_game']])){echo " img-game-in-cat in-cat-{$row['id_game']}";}
                    	echo "'	href='/game/{$row['id_game']}/'>
                            <img src='/www/images/games/{$row['id_game']}/main.jpg' alt='{$row['name_game']}'>";
                            if (isset($rsCheckGameCart[$row['id_game']])){echo "<div class='game-in-cat flag-{$row['id_game']}'>В КОРЗИНЕ&nbsp;&nbsp;</div>";}
                        echo "</a>
                        <a href='/game/{$row['id_game']}/' class='nk-product-cont custom-prod-cont'>
                        <div >
                            
                            <div class='nk-gap'></div>
                            <h3 class='nk-product-title h6 custom-prod-cont-h'>{$row['name_game']}</h3>
                            <div class='nk-gap'></div>
                            <div class='tab_item_content'>
                                <div class='tab_item_details'>";
                                foreach ($platformPopGames[$row['id_game']] as $plat) {echo "<span class='platform_img {$plat}'></span>";}
                                 echo "<span class='platform_img steam'></span>
                                    <div class='tab_item_top_tags'><span class='top_tag'>{$row['tags']}</span></div>
                                </div>
                            </div>";
                            
                            if($row['discount_game'] == 0){
                            echo "<div class='discount_block tab_item_discount' data-price-final='25400'><div class='discount_prices'><div class='discount_final_price'>{$row['price_game']} руб.</div></div></div>";
                        	} else {
                            echo "<div class='discount_block tab_item_discount' data-price-final='25400'><div class='discount_pct'>-{$row['discount_game']}%</div><div class='discount_prices'><div class='discount_original_price'>{$row['price_game']} pуб.</div><div class='discount_final_price'>{$row['discount_price_game']} pуб.</div></div></div>";
                            }
                            echo "<div class='nk-gap-2'></div>
                            
                        </div>
                        </a>
                    </div>
                </div>";
	    }
	}	
}

function searchwthpriceAction(){
	$mysqli = $GLOBALS["db"];
	$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
	if(!empty($_POST["referal"])){ //Принимаем данные
	    $ref = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
	    $referal = explode(',', $ref);
		    $db_referal = $mysqli -> query("SELECT * from `games` search WHERE (`price_game` BETWEEN '{$referal['0']}' AND '{$referal['1']}') ORDER BY `price_game` DESC")
		    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
		    
			if(isset($_SESSION['cart'])){
				$rsCheckGameCart = $_SESSION['cart'];
			}

			$rsGame = createSmartyRsArray($db_referal);
			foreach ($rsGame as $game) {
				$rsPlatforms[] = explode(',', $game['platform_id']);
			}
			$index = count($rsPlatforms);
			for ($i = 0; $i < $index; $i++) { 
				$indexJ = count($rsPlatforms[$i]);
				for ($j = 0; $j < $indexJ; $j++) { 
					$name = getPlatformById($rsPlatforms[$i][$j]);
					$platformPopGames[$rsGame[$i]['id_game']][] = $name['name_platform'];
				}
			}
			
	    foreach ($rsGame as $row) {
	        echo "\n			
        		<div class='col-md-6'>
                    <div class='nk-product-cat'>
                        <a class='nk-product-image";
                        if (isset($rsCheckGameCart[$row['id_game']])){echo " img-game-in-cat in-cat-{$row['id_game']}";}
                    	echo "'	href='/game/{$row['id_game']}/'>
                            <img src='/www/images/games/{$row['id_game']}/main.jpg' alt='{$row['name_game']}'>";
                            if (isset($rsCheckGameCart[$row['id_game']])){echo "<div class='game-in-cat flag-{$row['id_game']}'>В КОРЗИНЕ&nbsp;&nbsp;</div>";}
                        echo "</a>
                        <a href='/game/{$row['id_game']}/' class='nk-product-cont custom-prod-cont'>
                        <div >
                            
                            <div class='nk-gap'></div>
                            <h3 class='nk-product-title h6 custom-prod-cont-h'>{$row['name_game']}</h3>
                            <div class='nk-gap'></div>
                            <div class='tab_item_content'>
                                <div class='tab_item_details'>";
                                foreach ($platformPopGames[$row['id_game']] as $plat) {echo "<span class='platform_img {$plat}'></span>";}
                                 echo "<span class='platform_img steam'></span>
                                    <div class='tab_item_top_tags'><span class='top_tag'>{$row['tags']}</span></div>
                                </div>
                            </div>";
                            
                            if($row['discount_game'] == 0){
                            echo "<div class='discount_block tab_item_discount' data-price-final='25400'><div class='discount_prices'><div class='discount_final_price'>{$row['price_game']} руб.</div></div></div>";
                        	} else {
                            echo "<div class='discount_block tab_item_discount' data-price-final='25400'><div class='discount_pct'>-{$row['discount_game']}%</div><div class='discount_prices'><div class='discount_original_price'>{$row['price_game']} pуб.</div><div class='discount_final_price'>{$row['discount_price_game']} pуб.</div></div></div>";
                            }
                            echo "<div class='nk-gap-2'></div>
                            
                        </div>
                        </a>
                    </div>
                </div>";
	    }
	}	
}

function showmoregamesAction(){
	if(!empty($_POST["cuurrentCntGames"])){ //Принимаем данные
	    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["cuurrentCntGames"]))));
	    $cat = $_POST['catGames'];
		$rsGame = getMoreGames($referal, $cat);


			if(isset($_SESSION['cart'])){
				$rsCheckGameCart = $_SESSION['cart'];
			}

			
			foreach ($rsGame as $game) {
				$rsPlatforms[] = explode(',', $game['platform_id']);
			}
			$index = count($rsPlatforms);
			for ($i = 0; $i < $index; $i++) { 
				$indexJ = count($rsPlatforms[$i]);
				for ($j = 0; $j < $indexJ; $j++) { 
					$name = getPlatformById($rsPlatforms[$i][$j]);
					$platformPopGames[$rsGame[$i]['id_game']][] = $name['name_platform'];
				}
			}
			
	    foreach ($rsGame as $row) {
	        echo "\n			
        		<div class='col-md-6'>
                    <div class='nk-product-cat'>
                        <a class='nk-product-image";
                        if (isset($rsCheckGameCart[$row['id_game']])){echo " img-game-in-cat in-cat-{$row['id_game']}";}
                    	echo "'	href='/game/{$row['id_game']}/'>
                            <img src='/www/images/games/{$row['id_game']}/main.jpg' alt='{$row['name_game']}'>";
                            if (isset($rsCheckGameCart[$row['id_game']])){echo "<div class='game-in-cat flag-{$row['id_game']}'>В КОРЗИНЕ&nbsp;&nbsp;</div>";}
                        echo "</a>
                        <a href='/game/{$row['id_game']}/' class='nk-product-cont custom-prod-cont'>
                        <div >
                            
                            <div class='nk-gap'></div>
                            <h3 class='nk-product-title h6 custom-prod-cont-h'>{$row['name_game']}</h3>
                            <div class='nk-gap'></div>
                            <div class='tab_item_content'>
                                <div class='tab_item_details'>";
                                foreach ($platformPopGames[$row['id_game']] as $plat) {echo "<span class='platform_img {$plat}'></span>";}
                                 echo "<span class='platform_img steam'></span>
                                    <div class='tab_item_top_tags'><span class='top_tag'>{$row['tags']}</span></div>
                                </div>
                            </div>";
                            
                            if($row['discount_game'] == 0){
                            echo "<div class='discount_block tab_item_discount' data-price-final='25400'><div class='discount_prices'><div class='discount_final_price'>{$row['price_game']} руб.</div></div></div>";
                        	} else {
                            echo "<div class='discount_block tab_item_discount' data-price-final='25400'><div class='discount_pct'>-{$row['discount_game']}%</div><div class='discount_prices'><div class='discount_original_price'>{$row['price_game']} pуб.</div><div class='discount_final_price'>{$row['discount_price_game']} pуб.</div></div></div>";
                            }
                            echo "<div class='nk-gap-2'></div>
                            
                        </div>
                        </a>
                    </div>
                </div>";
	    }
	}	
}