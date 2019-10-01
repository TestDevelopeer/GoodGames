<?php
include_once "../models/UserModel.php";
include_once "../models/GameModel.php";
include_once "../models/CategoryModel.php";
include_once "../models/VideoModel.php";
include_once "../models/ArticleModel.php";
if(!isset($_SESSION['user'])){
	require_once('/capchaUser/capcha.php');
}

function indexAction($smarty){
	
	$rsArticles = getArtPagination();
	
	$rsArtCat = getArtCat();
	$rsLastVideo = getRandomVideo();
	$rsMostPopularGame = getMostPopularGame();
	$rsThreePopularLastArt = getThreePopularArt();
	$rsThreeLastUpd = getLastUpd();
	$rsTwoLastArt = getTwoLastArt();
	$rsTwoRandArt = getTwoRandArt();

	$rsArt = getAllArt();
	$indexPagination = 0;
	$curPag = 0;
	if($rsArt){
		$text = 'all';
		$rsPagintaions = count($rsArt)/20;
		$rsPagintaions = ceil($rsPagintaions);
		$res = drawPagination($rsPagintaions, $indexPagination, $curPag, $text);
	}

	$catIndex = count($rsArtCat);

	$artIndex = count($rsArticles);
	$u = 0;
	for ($i=0; $i < $catIndex; $i++) {
		$artIndex = count(getArtByCat($rsArtCat[$i]['id_art_cat']));
		if($artIndex != 0){
			$ForeachArt[$i] = getArtByCat($rsArtCat[$i]['id_art_cat']);
			$artcatName = getArtCatId($rsArtCat[$i]['id_art_cat']);
			for($u = 0; $u < $artIndex; $u++){
				$ForeachArt[$i][$u]['cat_name'] = $artcatName['name_art_cat'];
			}
		}
	}

	foreach ($rsArticles as $art) {
		$categoriesid[$art['id_art']] = getArtCatId($art['cat_art']);
	}
	
	
	$smarty->assign('rsArticles', $rsArticles);
	$smarty->assign('categoriesid', $categoriesid);
	$smarty->assign('rsArtCat', $rsArtCat);

	$smarty->assign('rsLastVideo', $rsLastVideo);
	$smarty->assign('rsMostPopularGame', $rsMostPopularGame);
	$smarty->assign('rsThreePopularLastArt', $rsThreePopularLastArt);
	$smarty->assign('rsThreeLastUpd', $rsThreeLastUpd);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('pageTitle', 'Новости');
	$smarty->assign('rsTwoRandArt', $rsTwoRandArt);
	
	$smarty->assign('rsArtCat', $rsArtCat);
	$smarty->assign('ForeachArt', $ForeachArt);

	$smarty->assign('rsPagintaions', $rsPagintaions);
	$smarty->assign('pagination', $res);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'news/breadCumbs');
	loadTemplate($smarty, 'news/news');
	loadTemplate($smarty, 'news/sideBar');
	loadTemplate($smarty, 'index/footer');
}

function drawPagination($rsPagintaions, $indexPagination, $curPag, $text){
			if($rsPagintaions > 1){
			if($indexPagination != 0){
				$indexPagination = $indexPagination - 1;
			}
			
			$res['article'] .= "<div class='nk-pagination nk-pagination-center'>";
			if($curPag != 0){
                $res['article'] .= "<a href='javascript: paginationPrev();' class='nk-pagination-prev'>
                        <span class='ion-ios-arrow-back'></span>
                    </a>";
            }
                    $res['article'] .= "<nav>";
                    
                        for ($i = 0; $i < $rsPagintaions; $i++) { 
                        	if($rsPagintaions > 4){
	                        	if($i == 0){
	                        		if($curPag == 0){
	                        			$res['article'] .= "
	                        		<a id='pag_0' class='nk-pagination-current pag' data-id='0' data-text='{$text}' href='javascript: searchpagination(\"$text\", 0);'>1</a>";
	                        		} else {
	                        			$res['article'] .= "
	                        		<a id='pag_0' class='pag' data-id='0' data-text='{$text}' href='javascript: searchpagination(\"$text\", 0);'>1</a>";
	                        		}
	                        		
	                        	} else if($i - $indexPagination == 1){
	                        		if($curPag > 2){
	                        			$res['article'] .= "<a class='pag' href='javascript:;'>...</a>";
	                        		}
	                        		if($rsPagintaions > 5 && $curPag > 1){
		                        		$res['article'] .= "<a id='pag_";
		                        		$res['article'] .= $i - 1;
		                        		$res['article'] .= "' class='pag' data-id=";
		                        		$res['article'] .= $i - 1;
		                        		$res['article'] .= " data-text='{$text}' href='javascript: searchpagination(\"$text\", ";
			                        	$res['article'] .= $i-1;
			                        	$res['article'] .= ");');'>";
			                        	$res['article'] .= $i;
			                        	$res['article'] .= "</a>";
		                        	}
		                        	if($curPag != 0){
		                        		$res['article'] .= "<a id='pag_";
		                        		$res['article'] .= $i;
		                        		$res['article'] .= "' class='nk-pagination-current pag' data-id=";
		                        		$res['article'] .= $i;
		                        		$res['article'] .= " data-text='{$text}' href='javascript: searchpagination(\"$text\", {$i});');'>";
		                        	} else {
		                        		$res['article'] .= "<a id='pag_";
		                        		$res['article'] .= $i;
		                        		$res['article'] .= "' class='pag' data-id=";
		                        		$res['article'] .= $i;
		                        		$res['article'] .= " data-text='{$text}' href='javascript: searchpagination(\"$text\", {$i});');'>";
		                        	}
		                        	$res['article'] .= $i+1;
		                        	$res['article'] .= "</a>";

			                        if($curPag + 1 != $rsPagintaions){
			                        	$res['article'] .= "<a id='pag_";
			                        	$res['article'] .= $i + 1;
		                        		$res['article'] .= "' class='pag' data-id=";
		                        		$res['article'] .= $i + 1;
		                        		$res['article'] .= " data-text='{$text}' href='javascript: searchpagination(\"$text\", ";
			                        	$res['article'] .= $i+1;
			                        	$res['article'] .= ");');'>";
			                        	$res['article'] .= $i+2;
			                        	$res['article'] .= "</a>";
			                        }

	                        	}
	                        if($rsPagintaions - $i == 2 && $rsPagintaions - ($curPag+1) == 2){
		                        $res['article'] .= "<a id='pag_{$i}' class='pag' data-id=";
		                        $res['article'] .= $i;
		                        $res['article'] .= " data-text='{$text}' href='javascript: searchpagination(\"$text\", ";
		                        $res['article'] .= $i;
		                        $res['article'] .= ");');'>";
		                        $res['article'] .= $i+2;
		                        $res['article'] .= "</a>";
	                        } else if($i + 1 == $rsPagintaions && $rsPagintaions - ($curPag+1) > 2 && $rsPagintaions > 4){
		                        $res['article'] .= "<a class='pag' href='javascript:;'>...</a>";
		                        $res['article'] .= "<a id='pag_{$i}' class='pag' href='javascript: searchpagination(\"$text\", {$i});');'>";
			                    $res['article'] .= $i+1;
			                    $res['article'] .= "</a>";
                        	}
                        } else {
                        	if($i == 0){
	                        	if($curPag == 0){
	                        			$res['article'] .= "
	                        		<a id='pag_0' class='nk-pagination-current pag' data-id='0' data-text='{$text}' href='javascript: searchpagination(\"$text\", 0);'>1</a>";
	                        	} else {
	                        			$res['article'] .= "
	                        		<a id='pag_0' class='pag' data-id='0' data-text='{$text}' href='javascript: searchpagination(\"$text\", 0);'>1</a>";
	                        	}
	                        		
	                        } else {
	                        	if($curPag == $i){
	                        		$res['article'] .= "<a id='pag_{$i}' class='nk-pagination-current pag' data-id=";
		                        	$res['article'] .= $i;
		                        	$res['article'] .= " data-text='{$text}' href='javascript: searchpagination(\"$text\", ";
			                        	$res['article'] .= $i;
			                        	$res['article'] .= ");');'>";
			                        	$res['article'] .= $i+1;
			                        	$res['article'] .= "</a>";
	                        	} else {
	                        		$res['article'] .= "<a id='pag_{$i}' class='pag' data-id=";
		                        	$res['article'] .= $i;
		                        	$res['article'] .= " data-text='{$text}' href='javascript: searchpagination(\"$text\", ";
			                        	$res['article'] .= $i;
			                        	$res['article'] .= ");');'>";
			                        	$res['article'] .= $i+1;
			                        	$res['article'] .= "</a>";
	                        	}
	                        	
	                        }
                        	
                        }
                    }
                    $res['article'] .= "</nav>";
                    if($curPag+1 != $rsPagintaions){
                    	$res['article'] .= "<a href='javascript: paginationNext();' class='nk-pagination-next'>
                        	<span class='ion-ios-arrow-forward'></span>
                    	</a>";
                    }
                    
                $res['article'] .= "</div>";
		}
		return $res['article'];
}

function categoryAction($smarty){
	$category = isset($_GET['name']) ? $_GET['name'] : null;
	$rsArticles = getArtPaginationWthCat($category);
	$rsArtCat = getArtCat();
	$rsArt = getAllArt();
	$rsCurCategory = getArtCatId($category);
	
	$rsMostPopularGame = getMostPopularGame();
	$rsThreePopularLastArt = getThreePopularArt();
	$rsThreeLastUpd = getLastUpd();
	$rsTwoLastArt = getTwoLastArt();
	$rsTwoRandArt = getTwoRandArt();

	$rsCatArt = getArticlesById($category);
	$indexPagination = 0;
	$curPag = 0;
	if($rsCatArt){
		$text = 'all';
		$rsPagintaions = count(getArticlesById($category))/20;
		$rsPagintaions = ceil($rsPagintaions);
		$res = drawPagination($rsPagintaions, $indexPagination, $curPag, $text);
	}

	$smarty->assign('rsArticles', $rsArticles);
	$smarty->assign('categoriesid', $categoriesid);

	
	$smarty->assign('rsMostPopularGame', $rsMostPopularGame);
	$smarty->assign('rsThreePopularLastArt', $rsThreePopularLastArt);
	$smarty->assign('rsThreeLastUpd', $rsThreeLastUpd);
	$smarty->assign('rsTwoLastArt', $rsTwoLastArt);
	$smarty->assign('pageTitle', 'Новости');
	$smarty->assign('rsTwoRandArt', $rsTwoRandArt);
	$smarty->assign('rsArt', $rsArt);
	$smarty->assign('rsArtCat', $rsArtCat);
	$smarty->assign('rsCurCategory', $rsCurCategory);

	$smarty->assign('rsPagintaions', $rsPagintaions);
	$smarty->assign('pagination', $res);

	loadTemplate($smarty, 'index/head');
	loadTemplate($smarty, 'index/header');
	loadTemplate($smarty, 'news/breadCumbs');
	loadTemplate($smarty, 'news/news');
	loadTemplate($smarty, 'news/sideBar');
	loadTemplate($smarty, 'index/footer');
}

function searcharticleAction(){
	$category = $_POST['cat'];
	$searchText = $_POST['text'];
	if(isset($_POST['pagination'])){
		$pagination = $_POST['pagination'];
		$indexPagination = $_POST['pagination'];
		$curPag = $_POST['pagination'];
		if($pagination > 0){
			$pagination *= 20;
		}
		if($category != null){
			$rsArticles = searchArtPaginationWthCat($pagination, $category);
		} else {
			$rsArticles = searchArtPagination($searchText, $pagination);
		}
	} else {
		$pagination = false;
		$rsArticles = searchArt($searchText);
	}
	
	

	if($rsArticles){
		$rsPagintaions = count($rsArticles['all'])/20;
		$rsPagintaions = ceil($rsPagintaions);
		
		$res['article'] .= "<div class='row' id='news-article-box'>";
		$res['success'] = 1;
		foreach ($rsArticles['pagination'] as $row) {
			$categoriesid[$row['id_art']] = getArtCatId($row['cat_art']);
			$res['article'] .= "\n			
					<div class='col-md-6'>
	                        <!-- START: Post -->
	                        <div class='nk-blog-post'>
	                            <a href='/article/{$row['id_art']}/' class='nk-post-img'>";
	                            if($row['art_game_id'] == 0){
	                            	$res['article'] .= "<img src='../../www/images/articles/{$row['id_art']}/main.jpg' alt='{$row['name_art']}'>";
	                            } else {
	                            	$res['article'] .= "<img src='../../www/images/games/{$row['art_game_id']}/mainv2.jpg' alt='{$row['name_art']}'>";
	                            }
	                                $res['article'] .= "<span class='nk-post-comments-count'>{$row['views_art']}</span>
	                                
	                                <span class='nk-post-categories'>
	                                <span class='bg-main-{$row['cat_art']}'>{$categoriesid[$row['id_art']]['name_art_cat']}</span>
	                               </span>
	                                
	                            </a>
	                            <div class='nk-gap'></div>
	                            <h2 class='nk-post-title h4'><a href='/article/{$row['id_art']}/'>{$row['name_art']}</a></h2>
	                            <div class='nk-post-text'>
	                                <p>{$row['prewiew_art']}</p>
	                            </div>
	                            <div class='nk-gap'></div>
	                            <a href='/article/{$row['id_art']}/' class='nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1 btn-article'>Перейти</a>
	                            <div class='nk-post-date float-right'><span class='fa fa-calendar'></span> {$row['date_art']}</div>
	                        </div>
	                        <!-- END: Post -->
	                    </div>";
		}
		$res['article'] .= "</div>";
		$res['article'] .= drawPagination($rsPagintaions, $indexPagination, $curPag, $searchText);
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}