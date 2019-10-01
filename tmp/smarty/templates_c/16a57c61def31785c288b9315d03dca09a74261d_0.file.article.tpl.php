<?php
/* Smarty version 3.1.30, created on 2019-02-19 12:27:54
  from "D:\OSPanel\domains\games\views\default\article\article.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c6bcc1a548af2_22712868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16a57c61def31785c288b9315d03dca09a74261d' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\article\\article.tpl',
      1 => 1550568473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6bcc1a548af2_22712868 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.html">Главная</a></li>
        
        <?php if ($_smarty_tpl->tpl_vars['rsArticle']->value['art_game_id'] == 0) {?>
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="#">Новости</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span><?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['name_art'];?>
</span></li>
        <?php } else { ?>
        <li><span class="fa fa-angle-right"></span></li>
        <li><a href="#">Обновления</a></li>

        <li><span class="fa fa-angle-right"></span></li>
        <li><span><?php echo $_smarty_tpl->tpl_vars['rsUpdateGame']->value['name_game'];?>
</span></li>
        <?php }?>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <!-- START: Post -->
            <div class="nk-blog-post nk-blog-post-single">
                <!-- START: Post Text -->
                <div class="nk-post-text mt-0">
                    <?php if ($_smarty_tpl->tpl_vars['rsArticle']->value['art_game_id'] == 0) {?>
                    <div class="nk-post-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
/main.jpg" alt="Grab your sword and fight the Horde">
                    </div>
                    <?php }?>
                    <div class="nk-gap-1"></div>
                    <h1 class="nk-post-title h4"><?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['name_art'];?>
</h1>
                    <div class="nk-post-by">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/avatar-2.jpg" alt="Witch Murder" class="rounded-circle" width="35"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['author_art'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['date_art'];?>

                    </div>
                    <div class="nk-gap"></div>
                    <div class="main-text-art">
                    	<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['text_art'];?>

                    </div>
                    <div class="nk-gap"></div>
                    <div class="nk-post-share">
                        <span class="h5">Поделиться статьей:</span>

                        <ul class="nk-social-links-2">
                            <li><span class="nk-social-facebook" title="Share page on Facebook" data-share="facebook"><span class="fab fa-facebook"></span></span></li>
                            <li><span class="nk-social-google-plus" title="Share page on Google+" data-share="google-plus"><span class="fab fa-google-plus"></span></span></li>
                            <li><span class="nk-social-twitter" title="Share page on Twitter" data-share="twitter"><span class="fab fa-twitter"></span></span></li>
                            <li><span class="nk-social-pinterest" title="Share page on Pinterest" data-share="pinterest"><span class="fab fa-pinterest-p"></span></span></li>

                            <!-- Additional Share Buttons
                                <li><span class="nk-social-linkedin" title="Share page on LinkedIn" data-share="linkedin"><span class="fab fa-linkedin"></span></span></li>
                                <li><span class="nk-social-vk" title="Share page on VK" data-share="vk"><span class="fab fa-vk"></span></span></li>
                            -->
                        </ul>
                    </div>
                </div>
                <!-- END: Post Text -->

                <!-- START: Similar Articles -->
                <div class="nk-gap-2"></div>
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Другие</span> новости</span></h3>
                <div class="nk-gap"></div>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsTwoRandArt']->value, 'art');
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
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a class="text-art" href="/article/<?php echo $_smarty_tpl->tpl_vars['art']->value['id_art'];?>
/"><?php echo $_smarty_tpl->tpl_vars['art']->value['name_art'];?>
</a></h2>
                        </div>
                        <!-- END: Post -->
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <!-- END: Similar Articles -->

                <!-- START: Comments -->
                <div id="comments"></div>
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1"><?php echo $_smarty_tpl->tpl_vars['cntComments']->value;?>
</span> Комментариев</span></h3>
                <div class="nk-gap"></div>
                <div class="nk-comments">
                    <!-- START: Comment -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsComments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                    <div class="nk-comment">
                        <div class="nk-comment-meta">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png" alt="Witch Murder" class="rounded-circle" width="35"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['comment']->value['name_user'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['comment']->value['date_comment'];?>

                        </div>
                        <div class="nk-comment-text">
                            <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['text_comment'];?>
</p>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <!-- END: Comment -->
                </div>
                <!-- END: Comments -->

                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                <!-- START: Reply -->
                <div class="nk-gap-2"></div>
                <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Оставить</span> комментарий</span></h3>
                <div class="nk-gap"></div>
                <div class="nk-reply">
                    <form action="/article/addcomment/" method="POST" class="nk-form">
                        <input type="text" readonly="" hidden="" name="art_id" value="<?php echo $_smarty_tpl->tpl_vars['rsArticle']->value['id_art'];?>
">
                        <div class="nk-gap-1"></div>
                        <textarea class="form-control required" name="message" rows="5" placeholder="Комменатрий *" required=""></textarea>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">Отправить</button>
                    </form>
                </div>
                <!-- END: Reply -->
                <?php } else { ?>
                <div class="nk-info-box text-info">
                            <div class="nk-info-box-icon">
                                <i class="ion-information"></i>
                            </div>
                            <h3>Войдите!</h3>
                            <em>Чтобы оставить свое мнение о данной игре, вам необходимо авторизоваться.</em>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-info" data-toggle="modal" data-target="#modalLogin">
                                <span>Войти</span>
                                <span class="icon"><i class="ion-help-circled"></i></span>
                            </a>
                        </div>
                <?php }?>
            </div>
            <!-- END: Post -->
        </div>
</div>
</div><?php }
}
