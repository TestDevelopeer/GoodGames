<?php
/* Smarty version 3.1.30, created on 2019-10-15 23:11:01
  from "D:\GitHub\GoodGames\views\default\index\latestNews.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5da627d581c357_12684315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00bd0fc51e23223b8508b0678102446340a2b2af' => 
    array (
      0 => 'D:\\GitHub\\GoodGames\\views\\default\\index\\latestNews.tpl',
      1 => 1554259450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da627d581c357_12684315 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- START: Latest News -->
    <div class="nk-gap-1"></div>  
    <h2 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Последние</span> Новости</span></h2>

    <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsLastSixArt']->value, 'art', false, NULL, 'art', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
?>
                    <div class="nk-news-box-item nk-news-box-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>nk-news-box-item-active<?php }?>">
                        <div class="nk-news-box-item-img">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                        </div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title last-bread-child-phone"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</h3>
                        
                        <div class="nk-news-box-item-text">
                            <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                        </div>
                        <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-news-box-item-url">Перейти</a>
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>
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
        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    <!-- There will be inserted info about selected news-->
                    <div class="nk-news-box-item-image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['rsLastSixArt']->value[0]['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastSixArt']->value[0]['name_art'];?>
">
                    </div>
                    <h3 class="nk-news-box-item-title"><?php echo $_smarty_tpl->tpl_vars['rsLastSixArt']->value[0]['name_art'];?>
</h3>
                    <div class="nk-news-box-item-text">
                        <p><?php echo $_smarty_tpl->tpl_vars['rsLastSixArt']->value[0]['prewiew_text'];?>
</p>
                    </div>
                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-news-box-item-more">Перейти</a>
                    <div class="nk-news-box-item-date">
                        <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['rsLastSixArt']->value[0]['date_art'];?>

                    </div>
                </div>
            </div>
        </div>
    </div><?php }
}
