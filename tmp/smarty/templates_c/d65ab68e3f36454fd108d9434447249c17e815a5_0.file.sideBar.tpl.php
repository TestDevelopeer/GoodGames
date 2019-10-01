<?php
/* Smarty version 3.1.30, created on 2019-03-11 03:23:49
  from "D:\OSPanel\domains\gg.com\views\default\news\sideBar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c85aa95ce63b9_90766889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd65ab68e3f36454fd108d9434447249c17e815a5' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\news\\sideBar.tpl',
      1 => 1552263827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c85aa95ce63b9_90766889 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
<div class="nk-widget hidden-phone">
    <div class="nk-widget-content">
        <div class="nk-form nk-form-style-1">
            <div class="input-group">
                <input type="text" class="form-control" id="search-article" placeholder="Поиск...">
                <button class="nk-btn nk-btn-color-main-1" id="search-btn" data-input="search-article"><span class="ion-search"></span></button>
            </div>
        </div>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted hidden-phone">

    <div class="contenthub_popular_tags">
        <h2>Категории новостей</h2>
        <a class="btnv6_blue_hoverfade btn_small_tall" href="/news/" name="category">
                <span>Все</span>
        </a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArtCat']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
            <a class="btnv6_blue_hoverfade btn_small_tall" href="/news/category/?name=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_art_cat'];?>
" name="category">
                    <span><?php echo $_smarty_tpl->tpl_vars['cat']->value['name_art_cat'];?>
</span>
            </a> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <div style="clear: both; margin-bottom: 20px;"></div>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted hidden-phone">
    <div class="contenthub_popular_tags">   
    <h2>Мы в соц. сетях</h2>
    
        <ul class="nk-social-links-3 nk-social-links-cols-4">
            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
            <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
            <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
            <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
        </ul>
        <div style="clear: both; margin-bottom: 40px;"></div>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted nk-custom-widget">
    <div class="contenthub_dailydeal_container">
    <h2><span><span class="text-main-1">Популярные</span> новости</span></h2>
    <div class="nk-widget-content custom-catalog-art-content">
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsThreePopularLastArt']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
            <div class="nk-widget-post">
                <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-image custom-a-img-catalog">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="text-art"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>
</div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <div style="clear: both; margin-bottom: 40px;"></div>
    </div>
</div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
    <div class="contenthub_dailydeal_container">
    <h2><span><span class="text-main-1">Последние</span> обновления</span></h2>
    <div class="nk-widget-content custom-catalog-art-content">
        
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsThreeLastUpd']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
            <div class="nk-widget-post">
                <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-image custom-a-img-catalog">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['art']->value['art_game_id'];?>
/mainv2.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                </a>
                <h3 class="nk-post-title"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="text-art"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>
</div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <div style="clear: both; margin-bottom: 20px;"></div>
    </div>
</div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>    
    </div>
</div>

<div class="nk-gap-2"></div><?php }
}
