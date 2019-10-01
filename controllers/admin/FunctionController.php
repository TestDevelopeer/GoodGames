<?php
header('X-XSS-Protection: 1');

include_once "../models/UserModel.php";
include_once "../models/GameModel.php";
include_once "../models/CategoryModel.php";
include_once "../models/VideoModel.php";
include_once "../models/ArticleModel.php";

    $smarty->setTemplateDir(TemplateAdminPrefix);
    $smarty->assign('teplateAdminPath', TemplateAdminWebPath);

if(!isset($_SESSION['admin'])){
	header('Location: /login/');
}

function addnewcatAction(){
	$catName = $_POST['catName'];
	$rs = addNewCat($catName);
	if($rs){
		$res['success'] = 1;
		$res['message'] = 'Категория добавлена!';
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function addnewscatAction(){
	$catName = $_POST['catName'];
	$rs = addNewsCat($catName);
	if($rs){
		$res['success'] = 1;
		$res['message'] = 'Категория добавлена!';
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function getcatAction(){
	$id = $_POST['id'];
	$rs = getCategoryById($id);
	if($rs){
		$res['success'] = 1;
		$res['message'] = $rs['name_category'];
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function getnewscatAction(){
	$id = $_POST['id'];
	$rs = getCategoryNewsById($id);
		if($rs){
			$res['success'] = 1;
			$res['message'] = $rs['name_art_cat'];
		} else {
			$res['success'] = 0;
		}
	echo json_encode($res);
}

function changecatAction(){
	$id = $_POST['id'];
	$name = $_POST['name'];
	if(!empty($name)){
		$rs = changeCategoryById($id, $name);
		if($rs){
			$res['success'] = 1;
			$res['message'] = 'Категория изменена!';
		} else {
			$res['success'] = 0;
		}
	} else {
		$rs = deleteCatById($id);
		if($rs){
			$res['success'] = 1;
			$res['message'] = 'Категория удалена!';
		} else {
			$res['success'] = 0;
		}
	}
	echo json_encode($res);
}

function changenewscatAction(){
	$id = $_POST['id'];
	$name = $_POST['name'];
	if(!empty($name)){
		$rs = changeNewsCategoryById($id, $name);
		if($rs){
			$res['success'] = 1;
			$res['message'] = 'Категория изменена!';
		} else {
			$res['success'] = 0;
		}
	} else {
		$rs = deleteNewsCatById($id);
		if($rs){
			$res['success'] = 1;
			$res['message'] = 'Категория удалена!';
		} else {
			$res['success'] = 0;
		}
	}
	echo json_encode($res);
}

function addnewgameAction(){
	$name = $_POST['game-name'];

	$tags = $_POST['game-tags'];
	$categories = $_POST['categories'];
	$platforms = $_POST['platforms'];
	$index = count($categories);
	for ($i = 0; $i < $index; $i++) {
		$categoriesid = $categoriesid.','.$categories[$i];
	}
	mb_internal_encoding("UTF-8");
	$categoriesid = mb_substr( $categoriesid, 1);

	$index = count($platforms);
	for ($i = 0; $i < $index; $i++) {
		$platformsid = $platformsid.','.$platforms[$i];
	}
	mb_internal_encoding("UTF-8");
	$platformsid = mb_substr( $platformsid, 1);

	$rs = addnewgame($name, $tags, $categoriesid, $platformsid);

	if($rs){
		$id = getLastGame();
		$lang = addGameLang($id['id_game']);
		$minReq = addGameMinReq($id['id_game']);
		$recReq = addGameRecReq($id['id_game']);
		$link = addGameLink($id['id_game']);

		$dirimg = mkdir('images/games/'.$id['id_game'].'/', 0777, true);
	}

	$dir = $id['id_game'];
    if($dir == null) exit();

    $upload_dir = 'images/games/'.$dir;
    $ds = DIRECTORY_SEPARATOR;
	if (!empty($_FILES['mainPicture'])) { // Проверяем пришли ли файлы от клиента
        $name = 'main.jpg';
        if($_FILES['mainPicture']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["mainPicture"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        else if($_FILES['mainPicture']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["mainPicture"]["tmp_name"]);
            @imagepng($image, "$upload_dir/$name", 70);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');

        @imagedestroy($image);
	}
	if (!empty($_FILES['mainPicturev2'])) { // Проверяем пришли ли файлы от клиента
        $name = 'mainv2.jpg';
        if($_FILES['mainPicturev2']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["mainPicturev2"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        else if($_FILES['mainPicturev2']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["mainPicturev2"]["tmp_name"]);
            @imagepng($image, "$upload_dir/$name", 70);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');

        @imagedestroy($image);
	}

	if (!empty($_FILES['sliderPicture'])) { // Проверяем пришли ли файлы от клиента
        $name = 'slider.jpg';
        if($_FILES['sliderPicture']['type'] == 'image/jpeg'){
                $image = @imagecreatefromjpeg($_FILES["sliderPicture"]["tmp_name"]);
                @imagejpeg($image, "$upload_dir/$name", 70);
            }
            else if($_FILES['sliderPicture']['type'] == 'image/png'){
                $image = @imagecreatefrompng($_FILES["sliderPicture"]["tmp_name"]);
                @imagepng($image, "$upload_dir/$name", 70);
            }

            @imagedestroy($image);
	}
    if (!empty($_FILES['file-1'])) {
	    foreach ($_FILES["file-1"]["error"] as $key => $error) {
	    if ($error == UPLOAD_ERR_OK) {
	        //$tmp_name = $_FILES["file-1"]["tmp_name"][$key];
	        // basename() может спасти от атак на файловую систему;
	        // может понадобиться дополнительная проверка/очистка имени файла
	        $time = time();
	        $rand = rand();
	        $name = $time + $rand;
	        if($_FILES['file-1']['type'][$key] == 'image/jpeg'){
	            $image = @imagecreatefromjpeg($_FILES["file-1"]["tmp_name"][$key]);
	        }
	        else if($_FILES['file-1']['type'][$key] == 'image/png'){
	            $image = @imagecreatefrompng($_FILES["file-1"]["tmp_name"][$key]);
	        }
	        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');
	        @imagejpeg($image, "$upload_dir/$name".'.jpg', 70);
	        @imagedestroy($image);
	        }
	    }
	}
	$id = $id['id_game'];
	
    header('Location: /admin/?controller=editgame&id='.$id);

}


function addnewcontentAction(){
	$name = $_POST['game-name'];
	$game = $_POST['games'];
	$rs = addnewcontent($name, $game);

	if($rs){
		$id = getLastGame();
		$link = addGameLink($id['id_game']);
		$dirimg = mkdir('images/games/'.$id['id_game'].'/', 0777, true);
	}

	$dir = $id['id_game'];
    if($dir == null) exit();

    $upload_dir = 'images/games/'.$dir;
    $ds = DIRECTORY_SEPARATOR;
	if (!empty($_FILES['mainPicture'])) { // Проверяем пришли ли файлы от клиента
        $name = 'main.jpg';
        if($_FILES['mainPicture']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["mainPicture"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        else if($_FILES['mainPicture']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["mainPicture"]["tmp_name"]);
            @imagepng($image, "$upload_dir/$name", 70);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');

        @imagedestroy($image);
	}
	if (!empty($_FILES['mainPicturev2'])) { // Проверяем пришли ли файлы от клиента
        $name = 'mainv2.jpg';
        if($_FILES['mainPicturev2']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["mainPicturev2"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        else if($_FILES['mainPicturev2']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["mainPicturev2"]["tmp_name"]);
            @imagepng($image, "$upload_dir/$name", 70);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');

        @imagedestroy($image);
	}

	if (!empty($_FILES['sliderPicture'])) { // Проверяем пришли ли файлы от клиента
        $name = 'slider.jpg';
        if($_FILES['sliderPicture']['type'] == 'image/jpeg'){
                $image = @imagecreatefromjpeg($_FILES["sliderPicture"]["tmp_name"]);
                @imagejpeg($image, "$upload_dir/$name", 70);
            }
            else if($_FILES['sliderPicture']['type'] == 'image/png'){
                $image = @imagecreatefrompng($_FILES["sliderPicture"]["tmp_name"]);
                @imagepng($image, "$upload_dir/$name", 70);
            }

            @imagedestroy($image);
	}
    if (!empty($_FILES['file-1'])) {
	    foreach ($_FILES["file-1"]["error"] as $key => $error) {
	    if ($error == UPLOAD_ERR_OK) {
	        //$tmp_name = $_FILES["file-1"]["tmp_name"][$key];
	        // basename() может спасти от атак на файловую систему;
	        // может понадобиться дополнительная проверка/очистка имени файла
	        $time = time();
	        $rand = rand();
	        $name = $time + $rand;
	        if($_FILES['file-1']['type'][$key] == 'image/jpeg'){
	            $image = @imagecreatefromjpeg($_FILES["file-1"]["tmp_name"][$key]);
	        }
	        else if($_FILES['file-1']['type'][$key] == 'image/png'){
	            $image = @imagecreatefrompng($_FILES["file-1"]["tmp_name"][$key]);
	        }
	        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');
	        @imagejpeg($image, "$upload_dir/$name".'.jpg', 70);
	        @imagedestroy($image);
	        }
	    }
	}
	$id = $id['id_game'];
    header('Location: /admin/?controller=editgame&id='.$id);

}

function savecategoriesAction(){
	$gameId = $_POST['id'];
	$categoriesid = $_POST['value'];
	$index = count($categoriesid);
	for($i = 0; $i < $index; $i++){
		$categoryNames = $categoryNames.','.$categoriesid[$i];
	}
	mb_internal_encoding("UTF-8");
	$categoryNames = mb_substr( $categoryNames, 1);

	$rs = changeCategories($gameId, $categoryNames);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveparentgameAction(){
	$gameId = $_POST['id'];
	$parent = $_POST['value'];

	$rs = changeParent($gameId, $parent);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savetagsAction(){
	$gameId = $_POST['id'];
	$tags = $_POST['value'];

	$rs = changeTags($gameId, $tags);

	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveplatformsAction(){
	$gameId = $_POST['id'];
	$platformsid = $_POST['value'];
	$index = count($platformsid);
	for($i = 0; $i < $index; $i++){
		$platformNames = $platformNames.','.$platformsid[$i];
	}
	mb_internal_encoding("UTF-8");
	$platformNames = mb_substr( $platformNames, 1);

	$rs = changePlatfroms($gameId, $platformNames);

	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveuserscatAction(){
	$gameId = $_POST['id'];
	$categoriesid = $_POST['value'];
	$index = count($categoriesid);
	for($i = 0; $i < $index; $i++){
		$categoryNames = $categoryNames.','.$categoriesid[$i];
	}
	mb_internal_encoding("UTF-8");
	$categoryNames = mb_substr( $categoryNames, 1);

	$rs = changeUserCategories($gameId, $categoryNames);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savegamelangAction(){
    $type = $_POST['type'];
	$gameId = $_POST['id'];
	$categoriesid = $_POST['value'];
	$index = count($categoriesid);
	for($i = 0; $i < $index; $i++){
		$categoryNames = $categoryNames.','.$categoriesid[$i];
	}
	mb_internal_encoding("UTF-8");
	$categoryNames = mb_substr( $categoryNames, 1);

    $rs = changeLang($gameId, $categoryNames, $type);


	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savenameAction(){
	$gameId = $_POST['id'];
	$name = $_POST['value'];
	$rs = changeName($gameId, $name);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savepriceAction(){
	$gameId = $_POST['id'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	if($discount != "" && $discount != 0){
		$discPrice = $price - $price/100*$discount;
		$discountPrice = round($discPrice, 0);
	} else {
		$discountPrice = 0;
	}
	$rs = changePrice($gameId, $price, $discount, $discountPrice);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savedateAction(){
	$gameId = $_POST['id'];
	$date = $_POST['value'];
    $game_date = dateForMysql($date);
	$rs = changeDate($gameId, $date, $game_date);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savevideoAction(){
	$name = $_POST['name'];
	$gameId = $_POST['id'];
	$video = $_POST['value'];
	$rs = changeVideo($gameId, $video, $name);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function uploadpicturesAction(){
	$dir = $_POST['game-id'];
    if($dir == null) exit();
    //$new_video = changeVideo($dir, $video, $name);
    $upload_dir = 'images/games/'.$dir;
    $ds = DIRECTORY_SEPARATOR;
	if (!empty($_FILES['mainPicture'])) { // Проверяем пришли ли файлы от клиента
        $name = 'main.jpg';
        if($_FILES['mainPicture']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["mainPicture"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        else if($_FILES['mainPicture']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["mainPicture"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');

        @imagedestroy($image);
	}
    if (!empty($_FILES['mainv2Picture'])) { // Проверяем пришли ли файлы от клиента
        $name = 'mainv2.jpg';
        if($_FILES['mainv2Picture']['type'] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["mainv2Picture"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        else if($_FILES['mainv2Picture']['type'] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["mainv2Picture"]["tmp_name"]);
            @imagejpeg($image, "$upload_dir/$name", 70);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');

        @imagedestroy($image);
	}
	if (!empty($_FILES['sliderPicture'])) { // Проверяем пришли ли файлы от клиента
        $name = 'slider.jpg';
            if($_FILES['sliderPicture']['type'] == 'image/jpeg'){
                $image = @imagecreatefromjpeg($_FILES["sliderPicture"]["tmp_name"]);
                @imagejpeg($image, "$upload_dir/$name", 70);
            }
            else if($_FILES['sliderPicture']['type'] == 'image/png'){
                $image = @imagecreatefrompng($_FILES["sliderPicture"]["tmp_name"]);
                @imagejpeg($image, "$upload_dir/$name", 70);
            }

            @imagedestroy($image);

	}
    foreach ($_FILES["file-1"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        //$tmp_name = $_FILES["file-1"]["tmp_name"][$key];
        // basename() может спасти от атак на файловую систему;
        // может понадобиться дополнительная проверка/очистка имени файла
        $time = time();
        $rand = rand();
        $name = $time + $rand;
        if($_FILES['file-1']['type'][$key] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["file-1"]["tmp_name"][$key]);
        }
        else if($_FILES['file-1']['type'][$key] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["file-1"]["tmp_name"][$key]);
        }
        @imagejpeg($image, "$upload_dir/$name".'.jpg', 70);
        @imagedestroy($image);
        }
    }

    header('Location: /admin/?controller=editgame&id='.$dir);
}

function savemaindescAction(){
	$gameId = $_POST['id'];
	$text = $_POST['value'];
	$rs = changeMainDesc($gameId, $text);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveseconddescAction(){
	$gameId = $_POST['id'];
	$text = $_POST['value'];
	$rs = changeSecondDesc($gameId, $text);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savedeveloperAction(){
	$gameId = $_POST['id'];
	$developer = $_POST['value'];
	$rs = changeDeveloper($gameId, $developer);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savepublisherAction(){
	$gameId = $_POST['id'];
	$publisher = $_POST['value'];
	$rs = changePublisher($gameId, $publisher);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savepegiAction(){
	$gameId = $_POST['id'];
	$pegi = $_POST['value'];
	$rs = changePegi($gameId, $pegi);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveminrequiredAction(){
	$gameId = $_POST['id-game'];
	$OS = $_POST['game-os'];
	$Processor = $_POST['game-cpu'];
	$OZU = $_POST['game-ozu'];
	$GPU = $_POST['game-gpu'];
	$DirectX = $_POST['game-directx'];
	$Memory = $_POST['game-memory'];
	$rs = changeSystemMinRequired($gameId, $OS, $Processor, $OZU, $GPU, $DirectX, $Memory);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savelinksAction(){
    $gameId = $_POST['id'];
    $link = $_POST['value'];
    $type = $_POST['type'];
    $rs = changeLinks($gameId, $link, $type);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saverecrequiredAction(){

	$gameId = $_POST['id-game'];
	$OS = $_POST['game-os'];
	$Processor = $_POST['game-cpu'];
	$OZU = $_POST['game-ozu'];
	$GPU = $_POST['game-gpu'];
	$DirectX = $_POST['game-directx'];
	$Memory = $_POST['game-memory'];
	$rs = changeSystemRequired($gameId, $OS, $Processor, $OZU, $GPU, $DirectX, $Memory);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function savecntkeysAction(){
	$gameId = $_POST['id'];
	$keys = $_POST['keys'];
	$deleteKeys = deleteKeysByGame($gameId);
	$index = count($keys);
	$i = 1;
	while ($i <= $index) {
		$rs = addGameKey($gameId, $keys['key_'.$i]);
		$i++;
	}
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function deletegameAction(){
	$gameId = $_POST['id'];
	$path = 'images/games/'.$gameId.'/';
	$rs = deleteGame($gameId);
	if($rs){
		$keys = deleteKeysByGame($gameId);
		$dir = rmRec($path);
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function rmRec($path) {
  if (is_file($path)) return unlink($path);
  if (is_dir($path)) {
    foreach(scandir($path) as $p) if (($p!='.') && ($p!='..'))
      rmRec($path.DIRECTORY_SEPARATOR.$p);
    return rmdir($path);
    }
  return false;
}

function deleteimgAction(){
	$itemId = $_POST['id'];
    if($itemId == null) exit();
    $filename = $_POST['name'];
    $dir = 'images/games/'.$itemId.'/'.$filename;
    $delete = unlink($dir);
    if($delete){
    	$res['success'] = 1;
    } else {
    	$res['success'] = 0;
    }
    echo json_encode($res);
}

function searchgamescatAction(){
	$mysqli = $GLOBALS["db"];
	$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
	if(!empty($_POST["referal"])){ //Принимаем данные
	    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
	    $db_referal = $mysqli -> query("SELECT * from `games` search WHERE (`category_id` LIKE '%$referal%')")
	    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
	    while ($row = $db_referal -> fetch_array()) {
	        echo "\n
				<div class='col-xl-6 mg-t-20'>
            <div class='card pd-0'>
              <div class='row no-gutters'>
                <div class='col-md-12 col-lg-4 pd-20-force'>
                  <img style='width: 500px;' src='../../www/images/games/{$row['id_game']}/mainv2.jpg' class='img-fluid wd-md-100p wd-lg-auto' alt=''>
                </div><!-- col-4 -->
                <div class='col-md-6 col-lg-5 pd-20-force'>
                  <h5 class='tx-normal mg-y-5'><a href='/admin/?controller=editgame&id={$row['id_game']}' class='tx-white'>{$row['name_game']}</a></h5>
                  
                </div><!-- col-5 -->
                <div class='col-md-6 col-lg-3 pd-20-force d-flex align-items-start flex-column'>
                  <a style='margin-top: 0;' href='/admin/?controller=editgame&id={$row['id_game']}' class='mg-t-20 btn btn-danger btn-block tx-size-xs'>Перейти</a>
                </div><!-- col-3-->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->";
	    }
	}
}

function searchgameAction(){
	$mysqli = $GLOBALS["db"];
	$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
	if(!empty($_POST["referal"])){ //Принимаем данные
	    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
	    $db_referal = $mysqli -> query("SELECT * from `games` search WHERE (`name_game` LIKE '%$referal%')")
	    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
	    while ($row = $db_referal -> fetch_array()) {
	        echo "\n
				<div class='col-xl-6 mg-t-20'>
            <div class='card pd-0'>
              <div class='row no-gutters'>
                <div class='col-md-12 col-lg-4 pd-20-force'>
                  <img style='width: 500px;' src='../../www/images/games/{$row['id_game']}/mainv2.jpg' class='img-fluid wd-md-100p wd-lg-auto' alt=''>
                </div><!-- col-4 -->
                <div class='col-md-6 col-lg-5 pd-20-force'>
                  <h5 class='tx-normal mg-y-5'><a href='/admin/?controller=editgame&id={$row['id_game']}' class='tx-white'>{$row['name_game']}</a></h5>
                  
                </div><!-- col-5 -->
                <div class='col-md-6 col-lg-3 pd-20-force d-flex align-items-start flex-column'>
                  <a style='margin-top: 0;' href='/admin/?controller=editgame&id={$row['id_game']}' class='mg-t-20 btn btn-danger btn-block tx-size-xs'>Перейти</a>
                </div><!-- col-3-->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->";
	    }
	}
}

function searchgamestagAction(){
	$mysqli = $GLOBALS["db"];
	$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
	if(!empty($_POST["referal"])){ //Принимаем данные
	    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));
	    $db_referal = $mysqli -> query("SELECT * from `games` search WHERE (`tags` LIKE '%$referal%')")
	    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
	    while ($row = $db_referal -> fetch_array()) {
	        echo "\n
				<div class='col-xl-6 mg-t-20'>
            <div class='card pd-0'>
              <div class='row no-gutters'>
                <div class='col-md-12 col-lg-4 pd-20-force'>
                  <img style='width: 500px;' src='../../www/images/games/{$row['id_game']}/mainv2.jpg' class='img-fluid wd-md-100p wd-lg-auto' alt=''>
                </div><!-- col-4 -->
                <div class='col-md-6 col-lg-5 pd-20-force'>
                  <h5 class='tx-normal mg-y-5'><a href='/admin/?controller=editgame&id={$row['id_game']}' class='tx-white'>{$row['name_game']}</a></h5>
                  
                </div><!-- col-5 -->
                <div class='col-md-6 col-lg-3 pd-20-force d-flex align-items-start flex-column'>
                  <a style='margin-top: 0;' href='/admin/?controller=editgame&id={$row['id_game']}' class='mg-t-20 btn btn-danger btn-block tx-size-xs'>Перейти</a>
                </div><!-- col-3-->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-6 -->";
	    }
	}
}

function showsuppmessageAction(){
	$mysqli = $GLOBALS["db"];
	$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
	if(!empty($_POST["id"])){ //Принимаем данные
		$rs = checkMessage($_POST["id"]);
	    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["id"]))));
	    $db_referal = $mysqli -> query("SELECT * from `support` search WHERE (`id_support` LIKE '%$referal%')")
	    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
	    while ($row = $db_referal -> fetch_array()) {
	        echo "\n
				      <div class='br-msg-header d-flex justify-content-between'>
        <div class='media align-items-center'>";
        if($row['supp_user_photo'] != 0){
        echo "<img src='../../www/images/users/{$row['support_user_id']}/user-avatar.jpg' class='wd-40 rounded-circle' alt='User Photo'>";
    	} else {
    		echo "<img src='../../www/images/users/default/default.png' class='wd-40 rounded-circle' alt='User Photo'>";
    	}
        echo "<div class='media-body mg-l-10'>
            <p class='tx-white tx-medium mg-b-0' id='support-user-email'>{$row['support_user_email']}</p>
            <p class='tx-12 mg-b-0'>
              <span>{$row['support_user_name']}, {$row['support_date']}</span>
            </p>
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- br-msg-header -->
      <div class='br-msg-body'>
        <h6 class='tx-white mg-b-25 lh-4'>{$row['support_user_theme']}</h6>
        <p>{$row['support_user_text']}</p>
      </div><!-- br-msg-body -->
      <div class='pd-x-30 pd-b-30'>
        <div class='row flex-row-reverse'>
          <div class='col-md-12 mg-t-30 mg-md-t-0'>
            <div class='pd-10'>
        <a onclick='addSupUserMail();' href='' class='btn btn-success bd-0 btn-compose' data-toggle='modal' data-target='#modalCompose'><i class='icon ion-ios-compose-outline'></i> Ответить</a>
      </div>
          </div><!-- col-3 -->
        </div><!-- row -->
      </div>";
	    }
	}
}

function dateForMysql($date){
	$arr = [
      'янв.',
      'фев.',
      'мар.',
      'апр.',
      'мая.',
      'июн.',
      'июл.',
      'авг.',
      'сен.',
      'окт.',
      'нояб.',
      'дек.'
    ];
    $explode_date = explode(" ", $date);
    $year = $explode_date[2];
    for ($i = 0; $i < 12; $i++) {
    	if($explode_date[1] == $arr[$i]){
    		$month = $i + 1;
    		break;
    	}
    }
    if($i < 10){
    	$month = '0'.$month;
    }
    $day = $explode_date[0];
    $game_date = $year.'-'.$month.'-'.$day;
    return $game_date;
}

function addkeysAction(){
	$txt = 'my keys';
	$cnt_keys = $_POST['cnt_keys'];
	$i = 0;
	while ($i < $cnt_keys) {
		$keys[$i] = mc_encrypt($txt, ENCRYPTION_KEY);
		$restKeys[$i][1] = substr($keys[$i], 0, 5);
		$restKeys[$i][2] = substr($keys[$i], 5, 5);
		$restKeys[$i][3] = substr($keys[$i], 10, 5);
		$key[$i] = $restKeys[$i][1].'-'.$restKeys[$i][2].'-'.$restKeys[$i][3];
		$res['message'][$i] = $key[$i];
		$i++;
	}
	$res['success'] = 1;
	echo json_encode($res);
}

function sendmailAction(){
   if ($_POST) { // eсли пeрeдaн мaссив POST
    $name =  "Тех. поддержка Good Games";// пишeм дaнныe в пeрeмeнныe и экрaнируeм спeцсимвoлы
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $json = array(); // пoдгoтoвим мaссив oтвeтa
    if (!$name or !$email or !$subject or !$message) { // eсли хoть oднo пoлe oкaзaлoсь пустым
        $json['error'] = 'Вы зaпoлнили нe всe пoля! oбмaнуть рeшили? =)'; // пишeм oшибку в мaссив
        echo json_encode($json); // вывoдим мaссив oтвeтa
        die(); // умирaeм
    }
    /*if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) { // прoвeрим email нa вaлиднoсть
        $json['error'] = 'Нe вeрный фoрмaт email! >_<'; // пишeм oшибку в мaссив
        echo json_encode($json); // вывoдим мaссив oтвeтa
        die(); // умирaeм
    }*/

    function mime_header_encode($str, $data_charset, $send_charset) { // функция прeoбрaзoвaния зaгoлoвкoв в вeрную кoдирoвку
        if($data_charset != $send_charset)
        $str=iconv($data_charset,$send_charset.'//IGNORE',$str);
        return ('=?'.$send_charset.'?B?'.base64_encode($str).'?=');
    }
    /* супeр клaсс для oтпрaвки письмa в нужнoй кoдирoвкe */
    class TEmail {
    public $from_email;
    public $from_name;
    public $to_email;
    public $to_name;
    public $subject;
    public $data_charset='UTF-8';
    public $send_charset='windows-1251';
    public $body='';
    public $type='text/plain';

    function send(){
        $dc=$this->data_charset;
        $sc=$this->send_charset;
        $enc_to=mime_header_encode($this->to_name,$dc,$sc).' <'.$this->to_email.'>';
        $enc_subject=mime_header_encode($this->subject,$dc,$sc);
        $enc_from=mime_header_encode($this->from_name,$dc,$sc).' <'.$this->from_email.'>';
        $enc_body=$dc==$sc?$this->body:iconv($dc,$sc.'//IGNORE',$this->body);
        $headers='';
        $headers.="Mime-Version: 1.0\r\n";
        $headers.="Content-type: ".$this->type."; charset=".$sc."\r\n";
        $headers.="From: ".$enc_from."\r\n";
        return mail($enc_to,$enc_subject,$enc_body,$headers);
    }

    }

    $emailgo= new TEmail; // инициaлизируeм супeр клaсс oтпрaвки
    $emailgo->from_email= 'goodgames7967@gmail.com'; // oт кoгo
    $emailgo->from_name= $name;
    $emailgo->to_email= $email; // кoму
    $emailgo->to_name= $name;
    $emailgo->subject= $subject; // тeмa
    $emailgo->body= $message; // сooбщeниe
    $emailgo->send(); // oтпрaвляeм

    $json['error'] = 0; // oшибoк нe былo

    echo json_encode($json); // вывoдим мaссив oтвeтa
} else { // eсли мaссив POST нe был пeрeдaн
    echo 'GET LOST!'; // высылaeм
}
}

function sendsupportmessageAction(){
	if(!empty($_POST)){
		$userId = $_SESSION['user']['id_user'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$text = $_POST['message'];
		$userPhoto = $_SESSION['user']['user_have_photo'];

		$arr = [
	      'янв.',
	      'фев.',
	      'март',
	      'апр.',
	      'май',
	      'июнь',
	      'июль',
	      'авг.',
	      'сент.',
	      'окт.',
	      'нояб.',
	      'дек.'
	    ];
	    $month = date('n')-1;
		$date = date('d '.$arr[$month].' Y H:i');

		$rs = addSupportMessage($userId, $email, $name, $subject, $text, $userPhoto, $date);

		if($rs){
			$res['success'] = 1;
			$res['message'] = 'Ваше сообщение отправлено!';
		} else {
			$res['success'] = 0;
			$res['message'] = 'Ошибка!';
		}
	} else {
		$res['success'] = 0;
		$res['message'] = 'Ошибка!';
	}

	echo json_encode($res);
}

function addnewarticleAction(){
	$arr = [
      'янв.',
      'фев.',
      'март',
      'апр.',
      'май',
      'июнь',
      'июль',
      'авг.',
      'сент.',
      'окт.',
      'нояб.',
      'дек.'
    ];
    $month = date('n')-1;

    $category = $_POST['Cat'];
	$artName = $_POST['Name'];
	$artPrewiew = $_POST['Prewiew'];
	$artText = $_POST['Text'];
	$artDate = date('d '.$arr[$month].' Y H:i');
	$artUser = $_POST['Author'];

  if($artName == null || $artText == null){
    $res['success'] = 0;
    $res['message'] = 'Заполните все поля';
  } else {
  	$rs = addNewArticle($category, 0, $artName, $artUser, $artPrewiew, $artText, $artDate);

  	if($rs){
	  	$addedArticle = getAddedArticle();
	    $dirimg = mkdir('images/articles/'.$addedArticle['id_art'].'/', 0777, true);
        if($dirimg == true){
          $res['success'] = 1;
          $res['message'] = $addedArticle['id_art'];
        } else {
          $res['success'] = 0;
        }
      } else {
          $res['success'] = 0;
      }
    }
    echo json_encode($res);
}

function addnewupdateAction(){
	$arr = [
      'янв.',
      'фев.',
      'март',
      'апр.',
      'май',
      'июнь',
      'июль',
      'авг.',
      'сент.',
      'окт.',
      'нояб.',
      'дек.'
    ];
    $month = date('n')-1;

    $gameId = $_POST['Cat'];
	$artName = $_POST['Name'];
	$artPrewiew = $_POST['Prewiew'];
	$artText = $_POST['Text'];
	$artDate = date('d '.$arr[$month].' Y H:i');
	$artUser = $_POST['Author'];
	$category = 5;

  if($artName == null || $artText == null){
    $res['success'] = 0;
    $res['message'] = 'Заполните все поля';
  } else {
  	$rs = addNewArticle($category, $gameId, $artName, $artUser, $artPrewiew, $artText, $artDate);

  	if($rs){
	  	$addedArticle = getAddedArticle();
	    $dirimg = mkdir('images/articles/'.$addedArticle['id_art'].'/', 0777, true);
        if($dirimg == true){
          $res['success'] = 1;
          $res['message'] = $addedArticle['id_art'];
        } else {
          $res['success'] = 0;
        }
      } else {
          $res['success'] = 0;
      }
    }
    echo json_encode($res);
}

function uploadartpicturesAction(){
	$dir = $_POST['art-id'];
    if($dir == null) exit();
    //$new_video = changeVideo($dir, $video, $name);
    $upload_dir = 'images/articles/'.$dir;
    $ds = DIRECTORY_SEPARATOR;
	if (!empty($_FILES['mainPicture'])) { // Проверяем пришли ли файлы от клиента
        $name = 'main.jpg';
        if($_FILES['mainPicture']['type'] == 'image/jpeg' || $_FILES['mainPicture']['type'] == 'image/png'){
	        $storeFolder = '../../www/images/articles/'.$dir; // Указываем папку для загрузки
		    $tempFile = $_FILES['mainPicture']['tmp_name']; //Получаем загруженные файлы из временного хранилища
		    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
		    $targetFile =  $targetPath. $name;
		    move_uploaded_file($tempFile,$targetFile); // Перемещаем загруженные файлы из временного хранилища в нашу папку uploads
		}
	}

    foreach ($_FILES["file-1"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        //$tmp_name = $_FILES["file-1"]["tmp_name"][$key];
        // basename() может спасти от атак на файловую систему;
        // может понадобиться дополнительная проверка/очистка имени файла
        $time = time();
        $rand = rand();
        $name = $time + $rand;
        if($_FILES['file-1']['type'][$key] == 'image/jpeg'){
            $image = @imagecreatefromjpeg($_FILES["file-1"]["tmp_name"][$key]);
        }
        else if($_FILES['file-1']['type'][$key] == 'image/png'){
            $image = @imagecreatefrompng($_FILES["file-1"]["tmp_name"][$key]);
        }
        //move_uploaded_file($tmp_name, "$upload_dir/$name".'.jpg');
        imagejpeg($image, "$upload_dir/$name".'.jpg', 50);
        imagedestroy($image);
        }
    }

    header('Location: /admin/?controller=editarticle&id='.$dir);
}

function saveartcatAction(){
	$artId = $_POST['id'];
	$name = $_POST['value'];
	$rs = changeArtCat($artId, $name);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveupdatecatAction(){
	$artId = $_POST['id'];
	$gameId = $_POST['value'];
	$rs = changeUpdateCat($artId, $gameId);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveartnameAction(){
	$artId = $_POST['id'];
	$name = $_POST['value'];
	$rs = changeArtName($artId, $name);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveartauthorAction(){
	$artId = $_POST['id'];
	$name = $_POST['value'];
	$rs = changeArtAuthor($artId, $name);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveartdateAction(){
	$artId = $_POST['id'];
	$name = $_POST['value'];
	$rs = changeArtDate($artId, $name);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function deleteartimgAction(){
	$itemId = $_POST['id'];
    if($itemId == null) exit();
    $filename = $_POST['name'];
    $dir = 'images/articles/'.$itemId.'/'.$filename;
    $delete = unlink($dir);
    if($delete){
    	$res['success'] = 1;
    } else {
    	$res['success'] = 0;
    }
    echo json_encode($res);
}

function savearttextAction(){
	$artId = $_POST['id'];
	$name = $_POST['value'];
	$rs = changeArtText($artId, $name);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}

function saveartprewiewAction(){
	$artId = $_POST['id'];
	$name = $_POST['value'];
	$rs = changeArtPre($artId, $name);
	if($rs){
		$res['success'] = 1;
	} else {
		$res['success'] = 0;
	}
	echo json_encode($res);
}
