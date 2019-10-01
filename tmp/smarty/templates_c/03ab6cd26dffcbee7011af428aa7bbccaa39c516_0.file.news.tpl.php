<?php
/* Smarty version 3.1.30, created on 2019-03-11 14:58:27
  from "D:\OSPanel\domains\gg.com\views\default\news\news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c864d63121165_36353915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03ab6cd26dffcbee7011af428aa7bbccaa39c516' => 
    array (
      0 => 'D:\\OSPanel\\domains\\gg.com\\views\\default\\news\\news.tpl',
      1 => 1552305505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c864d63121165_36353915 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" <?php if ($_smarty_tpl->tpl_vars['actionName']->value == 'category') {?> id="top-articles" <?php }?>>
    <div class="row vertical-gap">

<div class="col-lg-4 visible-phone">
            <aside class="nk-sidebar nk-sidebar-left nk-sidebar-sticky">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <div class="nk-form nk-form-style-1">
            <div class="input-group">
                <input type="text" class="form-control" id="search-phone" placeholder="Поиск...">
                <button class="nk-btn nk-btn-color-main-1" id="search-phone-btn" data-input="search-phone"><span class="ion-search"></span></button>
            </div>
        </div>
    </div>
</div>

<div class="nk-widget nk-widget-highlighted">

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

            </aside>
            <!-- END: Sidebar -->
        </div>    





        <div class="col-lg-8">
            <?php if ($_smarty_tpl->tpl_vars['actionName']->value != 'category') {?>
            <!-- START: Tabs  -->
            <div class="nk-tabs" id="clear-search">
                <!--
                    Additional Classes:
                        .nav-tabs-fill
                -->
                <ul class="nav nav-tabs nav-tabs-fill" role="tablist">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArtCat']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['cat']->value['id_art_cat'] != 5) {?>
                    <li class="nav-item">
                        <a class="nav-link article-nav-link <?php if ($_smarty_tpl->tpl_vars['cat']->value['id_art_cat'] == 1) {?>active show<?php }?>" href="#<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_art_cat'];?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name_art_cat'];?>
</a>
                    </li>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active show" id="1">
                        <div class="nk-gap"></div>
                        <!-- START: Action Tab -->
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ForeachArt']->value[0], 'art', false, NULL, 'art', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['total'];
?>
                        
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                
                                <span class="nk-post-categories">
                                    <span class="bg-main-1"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</span>
                                </span>
                                
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

                                <span class="fa fa-comments"></span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
 просмотров</a>
                            </div>
                            <div class="nk-post-text">
                                <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
                        
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ForeachArt']->value[0], 'art', false, NULL, 'art', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['total'];
?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] : null)) {?> id="top-articles" <?php }?>>
                            <div class="row vertical-gap">
                                <div class="col-lg-3 col-md-5">
                                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                        
                                        <span class="nk-post-categories">
                                            <span class="bg-main-1"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</span>
                                        </span>
                                        
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

                                        <span class="fa fa-comments"></span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
 просмотров</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <!-- END: Action Tab -->
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="2">
                        <div class="nk-gap"></div>
                        <!-- START: MMO Tab -->
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ForeachArt']->value[1], 'art', false, NULL, 'art', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['total'];
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                
                                <span class="nk-post-categories">
                                    <span class="bg-main-4"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</span>
                                </span>
                                
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

                                <span class="fa fa-comments"></span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
 просмотров</a>
                            </div>
                            <div class="nk-post-text">
                                <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ForeachArt']->value[1], 'art', false, NULL, 'art', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['total'];
?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] : null)) {?> id="top-articles" <?php }?>>
                            <div class="row vertical-gap">
                                <div class="col-lg-3 col-md-5">
                                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                        
                                        <span class="nk-post-categories">
                                            <span class="bg-main-4"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</span>
                                        </span>
                                        
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

                                        <span class="fa fa-comments"></span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
 просмотров</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



                        <!-- END: MMO Tab -->
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="3">
                        <div class="nk-gap"></div>
                        <!-- START: Strategy Tab -->
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ForeachArt']->value[2], 'art', false, NULL, 'art', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['total'];
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                
                                <span class="nk-post-categories">
                                    <span class="bg-main-3"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</span>
                                </span>
                                
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

                                <span class="fa fa-comments"></span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
 просмотров</a>
                            </div>
                            <div class="nk-post-text">
                                <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ForeachArt']->value[2], 'art', false, NULL, 'art', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['total'];
?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] : null)) {?> id="top-articles" <?php }?>f>
                            <div class="row vertical-gap">
                                <div class="col-lg-3 col-md-5">
                                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                        
                                        <span class="nk-post-categories">
                                            <span class="bg-main-3"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</span>
                                        </span>
                                        
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

                                        <span class="fa fa-comments"></span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
 просмотров</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




                        <!-- END: Strategy Tab -->
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="4">
                        <div class="nk-gap"></div>
                        <!-- START: Adventure Tab -->
                        

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ForeachArt']->value[3], 'art', false, NULL, 'art', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['total'];
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom">
                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                
                                <span class="nk-post-categories">
                                    <span class="bg-main-2"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</span>
                                </span>
                                
                            </a>
                            <div class="nk-gap-1"></div>
                            <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                            <div class="nk-post-date mt-10 mb-10">
                                <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

                                <span class="fa fa-comments"></span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
 просмотров</a>
                            </div>
                            <div class="nk-post-text">
                                <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                            </div>
                        </div>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ForeachArt']->value[3], 'art', false, NULL, 'art', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['total'];
?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['last'] : null)) {?> id="top-articles" <?php }?>>
                            <div class="row vertical-gap">
                                <div class="col-lg-3 col-md-5">
                                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                        
                                        <span class="nk-post-categories">
                                            <span class="bg-main-2"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</span>
                                        </span>
                                        
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                                    <div class="nk-post-date mt-10 mb-10">
                                        <span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>

                                        <span class="fa fa-comments"></span> <a href="#"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
 просмотров</a>
                                    </div>
                                    <div class="nk-post-text">
                                        <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_text'];?>
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




                        <!-- END: Adventure Tab -->
                        <div class="nk-gap"></div>
                    </div>

                </div>

            </div>
            <!-- END: Tabs -->
            <?php }?>
            <div class="nk-gap"></div>
            <!-- START: Posts Grid -->
            <div class="nk-blog-grid" id="show-search">
                <div class="row" id="news-article-box">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsArticles']->value, 'art');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
?>
                    <div class="col-md-6">
                        <!-- START: Post -->
                        <div class="nk-blog-post">
                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-post-img">
                                <?php if ($_smarty_tpl->tpl_vars['art']->value['art_game_id'] == 0) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['art']->value['art_game_id'];?>
/mainv2.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                <?php }?>
                                <span class="nk-post-comments-count"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['actionName']->value != 'category') {?>
                                <span class="nk-post-categories">
                                    
                                    <span class="bg-main-<?php echo $_smarty_tpl->tpl_vars['art']->value['cat_art'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoriesid']->value[$_smarty_tpl->tpl_vars['art']->value['id_art']]['name_art_cat'];?>
</span>
                                    
                                </span>
                                <?php } else { ?>
                                <span class="nk-post-categories">
                                    <span class="bg-main-<?php echo $_smarty_tpl->tpl_vars['rsCurCategory']->value['id_art_cat'];?>
"><?php echo $_smarty_tpl->tpl_vars['rsCurCategory']->value['name_art_cat'];?>
</span>
                                </span>
                                <?php }?>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                            <div class="nk-post-text">
                                <p><?php echo $_smarty_tpl->tpl_vars['art']->value['prewiew_art'];?>
</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1 btn-article">Перейти</a>
                            <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> <?php echo $_smarty_tpl->tpl_vars['art']->value['date_art'];?>
</div>
                        </div>
                        <!-- END: Post -->
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

            </div>
            <!-- END: Posts Grid -->

        </div><?php }
}
