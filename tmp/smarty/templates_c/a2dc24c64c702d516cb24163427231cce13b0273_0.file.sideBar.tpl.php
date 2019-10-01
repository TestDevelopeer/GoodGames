<?php
/* Smarty version 3.1.30, created on 2019-02-15 04:33:11
  from "D:\OSPanel\domains\games\views\default\catalog\sideBar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6616d7e78fa0_50698936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2dc24c64c702d516cb24163427231cce13b0273' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\catalog\\sideBar.tpl',
      1 => 1550194390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6616d7e78fa0_50698936 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="nk-widget">
    <div class="nk-widget-content">
        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
            <div class="input-group">
                <input id="search-input" type="text" class="form-control" placeholder="Поиск...">
                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
            </div>
        </form>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">

    <div class="contenthub_popular_tags">
        <h2>Категории игр</h2>
            <a class="btnv6_blue_hoverfade btn_small_tall" href="javascript: searchwthcat('all', 'Все');">
                <span>Все игры</span>
            </a>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <a class="btnv6_blue_hoverfade btn_small_tall" href="javascript: searchwthcat(<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
, '<?php echo $_smarty_tpl->tpl_vars['category']->value['name_category'];?>
');">
                <span><?php echo $_smarty_tpl->tpl_vars['category']->value['name_category'];?>
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
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
    <div class="contenthub_popular_tags">
    <h2>Цена</h2>
    <div class="nk-widget-content custom-price-widget">
        <div class="nk-input-slider">
            <input
                id="slider-price"
                type="text"
                name="price-filter"
                data-slider-min="0"
                data-slider-max="5000"
                data-slider-step="1"
                data-slider-value="[200, 1200]"
                data-slider-tooltip="hide"
            >
            <div class="nk-gap"></div>
            <div>
                <div class="text-white mt-4 float-left">
                    
                    <strong class="text-main-1"><span class="nk-input-slider-value-0"></span> р.</strong>
                    -
                    <strong class="text-main-1"><span class="nk-input-slider-value-1"></span> р.</strong>
                </div>
                <a href="javascript: searchwthprice();" class="nk-btn nk-btn-rounded nk-btn-color-white float-right">Принять</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <div class="contenthub_dailydeal_container">
        <h2>Предложение дня</h2>                           
    <div class="dailydeal_ctn">
    <div class="dailydeal_cap">
        <a href="https://store.steampowered.com/app/743450/Monster_Prom/?snr=1_1452_4__43">
            <img src="https://steamcdn-a.akamaihd.net/steam/apps/743450/header_alt_assets_4.jpg?t=1550172723">
        </a>
    </div>
    <div class="discount_block daily_deal_discount discount_block_large" data-price-final="13900"><div class="discount_pct">-30%</div><div class="discount_prices"><div class="discount_original_price">199₴</div><div class="discount_final_price">139₴</div></div></div>                <div class="dailydeal_desc">
    </div>
    </div>
    <div style="clear: both; margin-bottom: 20px;"></div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
    <div class="contenthub_dailydeal_container">
    <h2><span><span class="text-main-1">Последние</span> новости</span></h2>
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

        
    </div>
</div>
</div>
<div class="nk-widget nk-widget-highlighted">
<div id="specials_container">
                                <h2>Предложения для вас</h2>
                                <div class="contenthub_specials_ctn">
                                    <div class="contenthub_specials_grid">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsMostPopularGame']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                                        <div class="contenthub_specials_grid_cell">
                                            <a class="store_capsule app_impression_tracked" data-ds-appid="107410" href="#">
                                                <div class="capsule header">
                                                    <img src="https://steamcdn-a.akamaihd.net/steam/apps/107410/header_alt_assets_2.jpg?t=1549888448">
                                                </div>
                                                <div>
                                                    <div class="discount_block  discount_block_inline" data-price-final="33900">
                                                        <div class="discount_pct">-<?php echo $_smarty_tpl->tpl_vars['game']->value['discount_game'];?>
%</div>
                                                        <div class="discount_prices">
                                                            <div class="discount_original_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['price_game'];?>
 руб.</div>
                                                            <div class="discount_final_price"><?php echo $_smarty_tpl->tpl_vars['game']->value['discount_price_game'];?>
 руб.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <div style="clear: both"></div>
                                    </div>
                                    <div style="clear: both"></div>

                                </div>
                            </div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>

</div>

<div class="nk-gap-4"></div><?php }
}
