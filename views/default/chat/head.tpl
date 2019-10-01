<!DOCTYPE html>
	<html class="responsive web_chat_frame fullheight">
		<head>
			<title>{$pageTitle}</title>
			<meta name="viewport" content="width=device-width,initial-scale=1">
			
			<link href="https://steamcommunity-a.akamaihd.net/public/shared/css/motiva_sans.css?v=FAK4O46_mOLB" rel="stylesheet" type="text/css">
			<link href="https://steamcommunity-a.akamaihd.net/public/shared/css/shared_global.css?v=o8AT57FjXBnx" rel="stylesheet" type="text/css">
			<link href="https://steamcommunity-a.akamaihd.net/public/css/webui/friends.css?v=1JigsKGP71Gj" rel="stylesheet" type="text/css">

			<link href="{$teplateWebPath}assets/css/chat/chat.css" rel="stylesheet" type="text/css">
			<link href="{$teplateWebPath}assets/css/chat/customChat.css" rel="stylesheet" type="text/css">

			<script src="{$teplateWebPath}assets/js/jquery-1.10.1.min.js"></script>
			<script src="{$teplateWebPath}assets/js/chatController.js"></script>
			{if isset($chatRsUser)}
			<script type="text/javascript">
				changeChat({$chatRsUser['id_user']}, {$chatArUser['id_user']});
			</script>
			{/if}
			<script type="text/javascript">
				$(document).keypress(function(e) {
				    if(e.which == 13) {
				        $('#sendMsg').click();
				    }
				});
			</script>
			<script type="text/javascript">
				updateCntMsg();
				updateOnlineFriends();
			</script>
			
		</head>
		<body class="fullheight">