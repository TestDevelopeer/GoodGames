<?php
/* Smarty version 3.1.30, created on 2019-02-12 09:27:39
  from "D:\OSPanel\domains\games\views\default\index\comingSoon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c62675b8523c3_80073427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b59bb2a0df65d1328d4623848ac7dc0108d820' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\index\\comingSoon.tpl',
      1 => 1549952849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62675b8523c3_80073427 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nk-gap-3"></div>
<h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Скоро</span> в продаже</span></h3>
    <!-- START: Posts FullWidth -->
    <div class="nk-blog-fullwidth">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comingSoon']->value, 'game', false, NULL, 'game', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_game']->value['iteration']++;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_game']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_game']->value['iteration'] : null) == 1) {?>
        <!-- START: Post -->
        <div class="nk-blog-post">
            <a href="<?php echo $_smarty_tpl->tpl_vars['game']->value['url_com_game'];?>
" class="nk-post-img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_com_game'];?>
/main.jpg" alt="Smell magic in the air. Or maybe barbecue">
                
            </a>
            <div class="nk-gap-1"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <?php
$__section_game_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_game']) ? $_smarty_tpl->tpl_vars['__smarty_section_game'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_game'] = new Smarty_Variable(array());
if (true) {
for ($__section_game_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] = 1; $__section_game_0_iteration <= 4; $__section_game_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']++){
?>
                    <div class="col-lg-3">
                        <div class="nk-gallery-item-box">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_com_game'];?>
/th<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] : null);?>
.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/newgame/<?php echo $_smarty_tpl->tpl_vars['game']->value['id_com_game'];?>
/th<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_game']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_game']->value['index'] : null);?>
.jpg" alt="">
                            </a>
                            
                        </div>
                    </div>
                    <?php
}
}
if ($__section_game_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_game'] = $__section_game_0_saved;
}
?>
                </div>
            </div>
            <div class="nk-gap-1"></div>
            <div class="row vertical-gap">
                <div class="col-md-8 col-lg-9">
                    <h2 class="nk-post-title h4"><a href="<?php echo $_smarty_tpl->tpl_vars['game']->value['url_com_game'];?>
"><?php echo $_smarty_tpl->tpl_vars['game']->value['name_com_game'];?>
</a></h2>
                    <div class="nk-gap"></div>
                    <div class="nk-post-text">
                        <p><?php echo $_smarty_tpl->tpl_vars['game']->value['desc_com_game'];?>
</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="nk-post-by">
                        
                        <br> <?php echo $_smarty_tpl->tpl_vars['game']->value['date_com_game'];?>

                        <br> <?php echo $_smarty_tpl->tpl_vars['game']->value['platforms_com_game'];?>

                        <br> <a href="<?php echo $_smarty_tpl->tpl_vars['game']->value['url_com_game'];?>
" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Оформить предзаказ</a>
                    </div>
                    <div class="nk-gap"></div>
                    
                    <div class="nk-gap-3"></div>
                </div>
            
            </div>
        </div>
        <!-- END: Post -->
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
