<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:32:05
  from "D:\GitHub\gg.com\views\default\game\sideBar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fc5a5275b99_38560412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '482d6bdc58d332ec1d00f3efaf6ee6cd450aaf48' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\game\\sideBar.tpl',
      1 => 1551118713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fc5a5275b99_38560412 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar">
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
     <div class="block responsive_apppage_details_left game_details underlined_links">
            <a class="bla-2 custom-trailer" href="https://www.youtube.com/watch?v=<?php echo $_smarty_tpl->tpl_vars['rsTrailer']->value['id_on_youtube'];?>
">
                <img src="//img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['rsTrailer']->value['id_on_youtube'];?>
/mqdefault.jpg" width="320" height="180">
                <img class="custom-play-btn" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/play-button-png-play-button-png-image-1250.png" alt="Play">
            </a>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
<div>
    <div class="block responsive_apppage_details_left game_details underlined_links">
        <div class="block_content">
            <div class="block_content_inner">
                <div class="details_block">
                    <b>Название:</b> <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['name_game'];?>
<br>
                    <b>Жанр:</b>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat', false, NULL, 'cat', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['total'];
?>
                    <a href="/catalog/search/cat/?searchname=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_cat'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat']->value['last'] : null)) {?>,<?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <div class="dev_row">
                    <b>Разработчик:</b>
                    <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?>
                    <a href="/catalog/search/developer/?searchname=<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Developer'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Developer'];?>
</a>
                    <?php } else { ?>
                    <a href="/catalog/search/developer/?searchname=<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['Developer'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['Developer'];?>
</a>
                    <?php }?>
                    </div>
                    <div class="dev_row">
                    <b>Издатель:</b>
                    <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?>
                    <a href="/catalog/search/developer/?searchname=<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Developer'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Publisher'];?>
</a>
                    <?php } else { ?>
                    <a href="/catalog/search/developer/?searchname=<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['Developer'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['rsParentGame']->value['Publisher'];?>
</a>
                    <?php }?>
                    </div>
                    <b>Дата выхода:</b> <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Date'];?>
<br>
                </div>
            <div class="details_block">
            <br>
            <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value == null) {?>
            <a class="linkbar" href="<?php echo $_smarty_tpl->tpl_vars['rsSteamBuyLink']->value['site_game'];?>
" target="_blank" rel="noreferrer noopener">
            Посетить сайт <img src="https://steamstore-a.akamaihd.net/public/images/v5/ico_external_link.gif" border="0" align="bottom">
            </a>
            <?php } else { ?>
            <a class="linkbar" href="<?php echo $_smarty_tpl->tpl_vars['rsSteamBuyLink']->value['site']['site_game'];?>
" target="_blank" rel="noreferrer noopener">
            Посетить сайт <img src="https://steamstore-a.akamaihd.net/public/images/v5/ico_external_link.gif" border="0" align="bottom">
            </a>
            <?php }?>
            <a class="linkbar" href="#" target="_blank" rel="noreferrer">
            Прочитать соответствующие новости       </a>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
<div>
    <div class="block responsive_apppage_details_left" id="category_block">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriesUser']->value, 'userCat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['userCat']->value) {
?>
        <div class="game_area_details_specs">
            <div class="custom-icon">
                <a href="#">
                    <img class="category_icon" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/userIcons/<?php echo $_smarty_tpl->tpl_vars['userCat']->value['icon'];?>
">
                </a>
            </div>
            <a class="name" href="#"><?php echo $_smarty_tpl->tpl_vars['userCat']->value['cat_name'];?>
</a>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['rsParentGame']->value != null) {?>
            <div class="game_area_details_specs">
                <div class="custom-icon">
                    <a href="#">
                        <img class="category_icon" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/userIcons/ico_dlc.png">
                    </a>
                </div>
                <a class="name" href="#">Дополнительный контент</a>
            </div>
        <?php }?>
            <div class="DRM_notice">
                <div>Требуется принятие условий стороннего <a href="https://store.steampowered.com/privacy_agreement/" onclick="ShowEULA( this ); return false;">соглашения политики конфиденциальности Steam</a></div>
            </div>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted nk-custom-widget">
<div>
    <div class="block responsive_apppage_details_right">
        <div class="block_title">
            Языки:
        </div>
<table class="game_language_options" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <th style="width: 94px;"></th>
            <th class="checkcol">Интерфейс</th>
            <th class="checkcol">&nbsp;Озвучка</th>
            <th class="checkcol">Субтитры</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allLangs']->value, 'languages');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['languages']->value) {
?>
        <tr style="" class="">
            <td style="width: 94px; text-align: left" class="ellipsis">
                <?php echo $_smarty_tpl->tpl_vars['languages']->value['name_lang'];?>

            </td>
            <td class="checkcol">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang']->value['interf'], 'check');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['check']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['check']->value == $_smarty_tpl->tpl_vars['languages']->value['id_lang']) {?>
                <span>✔</span>
                <?php } else { ?>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </td>
            <td class="checkcol">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang']->value['sound'], 'check');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['check']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['check']->value == $_smarty_tpl->tpl_vars['languages']->value['id_lang']) {?>
                <span>✔</span>
                <?php } else { ?>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </td>
            <td class="checkcol">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lang']->value['subtit'], 'check');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['check']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['check']->value == $_smarty_tpl->tpl_vars['languages']->value['id_lang']) {?>
                <span>✔</span>
                <?php } else { ?>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table>
</div>
</div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>

</div>

<div class="nk-gap-4"></div>
<?php }
}
