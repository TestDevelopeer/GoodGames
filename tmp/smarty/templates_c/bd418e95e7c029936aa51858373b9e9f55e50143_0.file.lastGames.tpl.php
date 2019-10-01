<?php
/* Smarty version 3.1.30, created on 2019-06-23 21:05:53
  from "D:\GitHub\gg.com\views\default\index\lastGames.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d0fbf8111aa93_36810021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd418e95e7c029936aa51858373b9e9f55e50143' => 
    array (
      0 => 'D:\\GitHub\\gg.com\\views\\default\\index\\lastGames.tpl',
      1 => 1550636537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0fbf8111aa93_36810021 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- START: Some Products -->
    <div class="nk-gap-3"></div>
    <h3 class="nk-decorated-h-2 custom-h2"><span><span class="text-main-1">Новые</span> игры</span></h3>
    <div class="slide-container">
    <div class="row vertical-gap" id="items1">
        <div class="col-md-4 col-lg-4 col-6 last-big-games">
            <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[0]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[0]['id_game'];
}?>">
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[0]['id_game'];?>
/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[0]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[0]['name_game'];?>
">
                    <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[0]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[0]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                </a>
                
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-6 order-lg-3 last-big-games">
            <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[5]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[5]['id_game'];
}?>">
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[5]['id_game'];?>
/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[5]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[5]['name_game'];?>
">
                    <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[5]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[5]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                </a>
                
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="row vertical-gap last-small-games">
                
                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[1]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[1]['id_game'];
}?>">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[1]['id_game'];?>
" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[1]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[1]['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[1]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[1]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[2]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[2]['id_game'];
}?>">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[2]['id_game'];?>
/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[2]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[2]['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[2]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[2]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[3]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[3]['id_game'];
}?>">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[3]['id_game'];?>
/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[3]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[3]['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[3]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[3]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[4]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[4]['id_game'];
}?>">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[4]['id_game'];?>
/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[4]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[4]['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[4]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[4]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
        <div class="row vertical-gap slide-item" id="items2">
        <div class="col-md-4 col-lg-4 col-6 last-big-games">
            <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[6]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[6]['id_game'];
}?>">
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[6]['id_game'];?>
/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[6]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[6]['name_game'];?>
">
                    <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[6]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[6]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                </a>
                
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-6 order-lg-3 last-big-games">
            <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[11]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[11]['id_game'];
}?>">
                <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[11]['id_game'];?>
/" class="nk-gallery-item">
                    <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[11]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[11]['name_game'];?>
">
                    <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[11]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[11]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                </a>
                
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-12">
            <div class="row vertical-gap last-small-games">
                
                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[7]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[7]['id_game'];
}?>">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[7]['id_game'];?>
/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[7]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[7]['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[7]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[7]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[8]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[8]['id_game'];
}?>">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[8]['id_game'];?>
/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[8]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[8]['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[8]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[8]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[9]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[9]['id_game'];
}?>">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[9]['id_game'];?>
/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[9]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[9]['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[9]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[9]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-3">
                    <div class="nk-gallery-item-box <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[10]['id_game']])) {?>img-game-in-cat in-cat-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[10]['id_game'];
}?>">
                        <a href="/game/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[10]['id_game'];?>
/" class="nk-gallery-item a-img">
                            <span class="nk-gallery-item-overlay"><span><span class="nk-icon-circles"></span></span></span>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[10]['id_game'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[10]['name_game'];?>
">
                            <?php if (isset($_smarty_tpl->tpl_vars['rsCheckGameCart']->value[$_smarty_tpl->tpl_vars['rsLastGames']->value[10]['id_game']])) {?>
                    <div class="game-in-cat flag-<?php echo $_smarty_tpl->tpl_vars['rsLastGames']->value[10]['id_game'];?>
">В КОРЗИНЕ&nbsp;&nbsp;</div>
                    <?php }?>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    <!-- END: Some Products --><?php }
}
