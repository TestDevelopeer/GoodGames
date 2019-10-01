<?php
/* Smarty version 3.1.30, created on 2019-02-08 22:41:11
  from "D:\OSPanel\domains\games\views\default\news\news.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c5ddb579d0d11_82678429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9bce472e410b7ce95387b260bb4db2ba1b13b8d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\news\\news.tpl',
      1 => 1549654595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5ddb579d0d11_82678429 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">

            <!-- START: Tabs  -->
            <div class="nk-tabs">
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
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['cat']->value['id_art_cat'] == 1) {?>active show<?php }?>" href="#<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_art_cat'];?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name_art_cat'];?>
</a>
                    </li>
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
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
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
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom">
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
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
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
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom">
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
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
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
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom">
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
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
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
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['index'];
?>
                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_art']->value['first'] : null)) {?>
                        <div class="nk-blog-post nk-blog-post-border-bottom">
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

            <div class="nk-gap"></div>
            <!-- START: Posts Grid -->
            <div class="nk-blog-grid">
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/main.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
">
                                <span class="nk-post-comments-count"><?php echo $_smarty_tpl->tpl_vars['art']->value['views_art'];?>
</span>
                                
                                <span class="nk-post-categories">
                                    <?php
$__section_cats_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_cats']) ? $_smarty_tpl->tpl_vars['__smarty_section_cats'] : false;
$__section_cats_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categoriesid']->value[$_smarty_tpl->tpl_vars['i']->value]['cat_name']) ? count($_loop) : max(0, (int) $_loop));
$__section_cats_0_start = min(0, $__section_cats_0_loop);
$__section_cats_0_total = min(($__section_cats_0_loop - $__section_cats_0_start), $__section_cats_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_cats'] = new Smarty_Variable(array());
if ($__section_cats_0_total != 0) {
for ($__section_cats_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cats']->value['index'] = $__section_cats_0_start; $__section_cats_0_iteration <= $__section_cats_0_total; $__section_cats_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cats']->value['index']++){
?>
                                    <span class="bg-main-4"><?php echo $_smarty_tpl->tpl_vars['categoriesid']->value[$_smarty_tpl->tpl_vars['i']->value]['cat_name'][$_smarty_tpl->tpl_vars['j']->value];?>
</span>
                                    <?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);
?>
                                    <?php
}
}
if ($__section_cats_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_cats'] = $__section_cats_0_saved;
}
?>
                                    <?php $_smarty_tpl->_assignInScope('j', 0);
?>
                                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
                                    
                                </span>
                                
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
/" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Перейти</a>
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

                <!-- START: Pagination -->
                <div class="nk-pagination nk-pagination-center">
                    <a href="#" class="nk-pagination-prev">
                        <span class="ion-ios-arrow-back"></span>
                    </a>
                    <nav>
                        <a id="pag_null" class="nk-pagination-current pag" href="javascript: pagination('null');">1</a>
                        <?php
$__section_rating_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rating']) ? $_smarty_tpl->tpl_vars['__smarty_section_rating'] : false;
$__section_rating_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rsPagintaions']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rating_1_start = min(1, $__section_rating_1_loop);
$__section_rating_1_total = min(($__section_rating_1_loop - $__section_rating_1_start), $__section_rating_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = new Smarty_Variable(array());
if ($__section_rating_1_total != 0) {
for ($__section_rating_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index'] = $__section_rating_1_start; $__section_rating_1_iteration <= $__section_rating_1_total; $__section_rating_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index']++){
?>
                            <a id="pag_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index'] : null);?>
" class="pag" href="javascript: pagination('<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index'] : null);?>
');">
                                <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index'] : null)+1;?>

                            </a>
                        <?php
}
}
if ($__section_rating_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = $__section_rating_1_saved;
}
?>
                        
                    </nav>
                    <a href="#" class="nk-pagination-next">
                        <span class="ion-ios-arrow-forward"></span>
                    </a>
                </div>
                <!-- END: Pagination -->
            </div>
            <!-- END: Posts Grid -->

        </div><?php }
}
