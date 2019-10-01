<?php
/* Smarty version 3.1.30, created on 2019-02-27 17:50:11
  from "D:\OSPanel\domains\gg.com\views\default\reviews\review.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c76a3a3b7ba63_78516879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100d8844655deb7e177ae059f31e5b21c77cadb0' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\reviews\\review.tpl',
      1 => 1551279010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76a3a3b7ba63_78516879 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nk-gap-2"></div>
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-12">
            <!-- START: Latest Pictures -->
            <h2 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Отзывы</span> <a href="/user/profile/<?php echo $_smarty_tpl->tpl_vars['rsUser']->value['id_user'];?>
/"><?php if (isset($_smarty_tpl->tpl_vars['rsUser']->value)) {
echo $_smarty_tpl->tpl_vars['rsUser']->value['user_name'];
}?></a></span></h2>
            <div class="nk-gap-3"></div>
            
                <div class="row vertical-gap">
                    <div class="col-md-7">
                    <div id="leftContents">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsReviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                        <div class="review_box">    
                            <div style="clear: left;"></div>
                            <div class="review_box_content">
                                <div class="leftcol" style="opacity: 1;">
                                    <a href="/game/<?php echo $_smarty_tpl->tpl_vars['review']->value['game_id_review'];?>
/">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['review']->value['game_id_review'];?>
/mainv2.jpg">
                                    </a>
                                </div>
                                <div class="rightcol">
                                    <div class="vote_header">
                                        <div class="thumb">
                                            <a href="javascript:;">
                                                <?php if ($_smarty_tpl->tpl_vars['review']->value['vote_review'] == 'like') {?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/thumbs/icon_thumbsUp.png" width="44" height="44">
                                                <?php } else { ?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/thumbs/icon_thumbsDown.png" width="44" height="44">
                                                <?php }?>
                                            </a>
                                        </div>
                                        <div class="title">
                                            <?php if ($_smarty_tpl->tpl_vars['review']->value['vote_review'] == 'like') {?>
                                            <a href="javascript:;">Рекомендую</a>
                                            <?php } else { ?>
                                            <a href="javascript:;">Не рекомендую</a>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div class="content"><?php echo $_smarty_tpl->tpl_vars['review']->value['text_review'];?>
</div>
                                    <div class="posted">
                                        Опубликовано <?php echo $_smarty_tpl->tpl_vars['review']->value['review_date'];?>
 в <?php echo $_smarty_tpl->tpl_vars['review']->value['review_time'];?>
.                                                                    
                                    </div>
                                    <div class="hr"></div>
                                </div>
                                <div style="clear: left;"></div>
                            </div>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>   
                    </div>  
                    <div class="col-md-4">
                        <div id="rightContents">
                <div class="box">
                    <div>
                        <div class="review_stat">
                            <div class="giantNumber ellipsis"><?php echo $_smarty_tpl->tpl_vars['cntReviews']->value;?>
</div>
                            <div class="giantNumberSubhead ellipsis">Количество<br>обзоров</div>
                        </div>
                        <div class="review_stat">
                            <div class="giantNumber ellipsis"><?php echo $_smarty_tpl->tpl_vars['cnt']->value;?>
</div>
                            <div class="giantNumberSubhead ellipsis">Количество<br>продуктов</div>
                        </div>
                    </div>
                    <div style="clear: left;"></div>
                </div>
                <!-- in responsive mode these boxes float side-by-side -->
                <div style="clear: left;"></div>
            </div>
                    </div>             
                </div>
</div>
</div>
</div>
<div class="nk-gap-2"></div><?php }
}
