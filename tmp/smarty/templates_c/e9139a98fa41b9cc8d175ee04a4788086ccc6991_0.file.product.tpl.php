<?php
/* Smarty version 3.1.30, created on 2019-01-23 10:19:02
  from "C:\OpenServer\domains\games\views\default\game\product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c48156656ab87_12901936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9139a98fa41b9cc8d175ee04a4788086ccc6991' => 
    array (
      0 => 'C:\\OpenServer\\domains\\games\\views\\default\\game\\product.tpl',
      1 => 1548227939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c48156656ab87_12901936 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="/">Главная</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="/catalog/">Каталог</a></li>
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['name_game'];?>
</span></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">
            <div class="nk-store-product">
                <div class="row vertical-gap">
                    <div class="col-md-6">
                        <!-- START: Product Photos -->
                        <div class="nk-popup-gallery">
                            <div class="nk-gallery-item-box">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['main_photo'];?>
" alt="">
                            </div>

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap sm-gap">
                                <?php if (isset($_smarty_tpl->tpl_vars['namePhoto']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['namePhoto']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['photo']->value != $_smarty_tpl->tpl_vars['rsGame']->value['main_photo']) {?>
                                <div class="col-6 col-md-4">
                                    <div class="nk-gallery-item-box">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" class="nk-gallery-item" data-size="1200x550">
                                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
games/<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="">
                                        </a>
                                    </div>
                                </div>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php }?>
                            </div>
                        </div>
                        <!-- END: Product Photos -->
                    </div>
                    <div class="col-md-6">

                        

                        <select class="form-control">
                            <option value="" disabled selected>Платформа для покупки</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsGamePlatforms']->value, 'platform');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['platform']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['platform']->value['id_platform'];?>
"><?php echo $_smarty_tpl->tpl_vars['platform']->value['name_platform'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>

                        <div class="nk-product-description">
                            <p><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['description_game'];?>
</p>
                        </div>

                        <!-- START: Add to Cart -->
                        <div class="nk-gap-2"></div>
                        <form action="#" class="nk-product-addtocart">
                            <div class="nk-product-price"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['price_game'];?>
р.</div>
                            <div class="nk-gap-1"></div>
                            <div class="input-group">
                                <input type="number" class="form-control" value="1" min="1" max="21">
                                <button class="nk-btn nk-btn-rounded nk-btn-color-main-1">В корзину</button>
                            </div>
                        </form>
                        <div class="nk-gap-3"></div>
                        <!-- END: Add to Cart -->

                        <!-- START: Meta -->
                        <div class="nk-product-meta">
                            <div><strong>Категории</strong>: 
                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['category_1_name'];?>
</a>
                                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['category_2_name'] != null) {?>, <a href="#"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['category_2_name'];?>
</a><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['category_3_name'] != null) {?>, <a href="#"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['category_3_name'];?>
</a><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['category_4_name'] != null) {?>, <a href="#"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['category_4_name'];?>
</a><?php }?>
                            </div>
                            <div><strong>Метки</strong>: 
                                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['tag_1'] != '') {?><a href="#"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['tag_1'];?>
</a><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['tag_2'] != '') {?>, <a href="#"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['tag_2'];?>
</a><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['tag_3'] != '') {?>, <a href="#"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['tag_3'];?>
</a><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['rsGame']->value['tag_4'] != '') {?>, <a href="#"><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['tag_4'];?>
</a><?php }?>
                            </div>
                        </div>
                        <!-- END: Meta -->
                    </div>
                </div>

                <!-- START: Share -->
                <div class="nk-gap-2"></div>
                <div class="nk-post-share">
                    <span class="h5">Поделиться игрой:</span>
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
                <!-- END: Share -->

                <div class="nk-gap-2"></div>
                <!-- START: Tabs -->
                <div class="nk-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab-description" role="tab" data-toggle="tab">Описание</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab-reviews" role="tab" data-toggle="tab">Отзывы (<?php echo $_smarty_tpl->tpl_vars['rsCntComments']->value;?>
)</a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-- START: Tab Description -->
                        <div role="tabpanel" class="tab-pane fade show active" id="tab-description">
                            <div class="nk-gap"></div>
                            <strong class="text-white">Дата выхода: <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['Date'];?>
</strong>
                            <div class="nk-gap"></div>
                            <p><?php echo $_smarty_tpl->tpl_vars['rsGame']->value['desc_game'];?>
</p>

                            <div class="nk-product-info-row row vertical-gap">
                                <div class="col-md-5">
                                    <div class="nk-product-pegi">
                                        <div class="nk-gap"></div>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/pegi-icon.jpg" alt="">
                                        <div class="nk-product-pegi-cont">
                                            <strong class="text-white">Возрастной рейтинг:</strong>
                                            <div class="nk-gap"></div>
                                            Подходит для людей в возрасте от <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['pegi_rating'];?>
 лет и старше.
                                        </div>
                                        <div class="nk-gap"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="nk-gap"></div>
                                    <strong class="text-white">Рейтинг:</strong>
                                    <div class="nk-gap"></div>
                                    <div class="nk-product-rating" data-rating="<?php echo $_smarty_tpl->tpl_vars['rsGameRating']->value;?>
"> 
                                        <?php
$__section_rating_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rating']) ? $_smarty_tpl->tpl_vars['__smarty_section_rating'] : false;
$__section_rating_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rsGameRating']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rating_0_start = min(0, $__section_rating_0_loop);
$__section_rating_0_total = min(($__section_rating_0_loop - $__section_rating_0_start), $__section_rating_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = new Smarty_Variable(array());
if ($__section_rating_0_total != 0) {
for ($__section_rating_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index'] = $__section_rating_0_start; $__section_rating_0_iteration <= $__section_rating_0_total; $__section_rating_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index']++){
?>
                                        <i class="fa fa-star"></i>
                                        <?php
}
}
if ($__section_rating_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = $__section_rating_0_saved;
}
?>
                                    </div>
                                    <div class="nk-gap"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Tab Description -->

                        <!-- START: Tab Reviews -->
                        <div role="tabpanel" class="tab-pane fade" id="tab-reviews">
                            <div class="nk-gap-2"></div>
                            <div class="nk-info-box text-success hide" id="success-box">
                                <div class="nk-info-box-icon">
                                    <i class="ion-checkmark-round"></i>
                                </div>
                                <h3>Успешно!</h3>
                                <em>Спасибо за ваш отзыв, он очень важен для нас.</em>
                            </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['rsCheckUserReview']->value['success'] != 1) {?>
                        <div id="review-box">
                            <!-- START: Reply -->
                            <h3 class="h4">Добавить отзыв</h3>
                            <div class="nk-reply">
                                <div class="nk-form" id="review-form">
                                    <div class="row vertical-gap sm-gap">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control required" name="name" placeholder="Имя *">
                                        </div>
                                    </div>
                                    <div class="nk-gap-1"></div>
                                    <textarea class="form-control required" name="message" rows="5" placeholder="Ваш отзыв *" aria-required="true"></textarea>
                                    <div class="nk-gap-1"></div>
                                    <div class="nk-rating">
                                        <input type="radio" id="review-rate-5" name="review-rate" value="5">
                                        <label for="review-rate-5">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-4" name="review-rate" value="4">
                                        <label for="review-rate-4">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-3" name="review-rate" value="3">
                                        <label for="review-rate-3">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-2" name="review-rate" value="2">
                                        <label for="review-rate-2">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>

                                        <input type="radio" id="review-rate-1" name="review-rate" value="1">
                                        <label for="review-rate-1">
                                            <span><i class="far fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </label>
                                        <input type="text" hidden="" name="game_id" value="<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
">
                                        <input type="text" hidden="" id="cnt_vote" name="cnt_vote" value="">
                                    </div>
                                    <button onclick="addreview();" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 float-right">Отправить</button>
                                </div>
                            </div>
                        </div>
                            <!-- END: Reply -->
                        <?php } else { ?>
                        <div class="nk-info-box text-warning">
                            <div class="nk-info-box-icon">
                                <i class="ion-android-notifications-none"></i>
                            </div>
                            <div class="nk-info-box-close nk-info-box-close-btn">
                                <i class="ion-close-round"></i>
                            </div>
                            <em>Вы уже оставили свой отзыв на данную игру.</em>
                            <div class="nk-gap-1"></div>
                            <a href="?controller=game&id=<?php echo $_smarty_tpl->tpl_vars['rsGame']->value['id_game'];?>
#user_<?php echo $_smarty_tpl->tpl_vars['arUser']->value['id_user'];?>
" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-warning">
                                Перейти
                            </a>
                        </div>
                        <?php }?>
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

                            <div class="clearfix"></div>
                            <div class="nk-gap-2"></div>
                            <div class="nk-comments">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsComments']->value, 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                                <!-- START: Review -->
                                <div class="nk-comment" id="user_<?php echo $_smarty_tpl->tpl_vars['comment']->value['auth_user_id'];?>
">
                                    <div class="nk-comment-meta">
                                        <?php if ($_smarty_tpl->tpl_vars['comment']->value['auth_user_id'] != 0) {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
users/<?php echo $_smarty_tpl->tpl_vars['comment']->value['auth_user_id'];?>
/user-avatar.jpg" alt="Witch Murder" class="rounded-circle" width="35">
                                        <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['teplateImgPath']->value;?>
users/default/default.png" alt="Witch Murder" class="rounded-circle" width="35">
                                        <?php }?>
                                        <a href="https://nkdev.info"><?php echo $_smarty_tpl->tpl_vars['comment']->value['user_name_review'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['comment']->value['review_date'];?>
, <?php echo $_smarty_tpl->tpl_vars['comment']->value['review_time'];?>

                                        <div class="nk-review-rating" data-rating="<?php echo $_smarty_tpl->tpl_vars['comment']->value['vote_review'];?>
">
                                            <?php
$__section_rating_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rating']) ? $_smarty_tpl->tpl_vars['__smarty_section_rating'] : false;
$__section_rating_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['comment']->value['vote_review']) ? count($_loop) : max(0, (int) $_loop));
$__section_rating_1_start = min(0, $__section_rating_1_loop);
$__section_rating_1_total = min(($__section_rating_1_loop - $__section_rating_1_start), $__section_rating_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = new Smarty_Variable(array());
if ($__section_rating_1_total != 0) {
for ($__section_rating_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index'] = $__section_rating_1_start; $__section_rating_1_iteration <= $__section_rating_1_total; $__section_rating_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rating']->value['index']++){
?>
                                            <i class="fa fa-star"></i>
                                            <?php
}
}
if ($__section_rating_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rating'] = $__section_rating_1_saved;
}
?>
                                        </div>
                                    </div>
                                    <div class="nk-comment-text">
                                        <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['text_review'];?>
</p>
                                    </div>
                                </div>
                                <!-- END: Review -->
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                        </div>
                        <!-- END: Tab Reviews -->

                    </div>
                </div>
                <!-- END: Tabs -->
            </div>

            <!-- START: Game Trailer -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Трейлер</span> игры</span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                <div class="col-md-12">
                    <?php echo $_smarty_tpl->tpl_vars['rsGame']->value['video_game'];?>

                </div>
            </div>

            <!-- START: Related Products -->
            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Другие</span> игры</span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-11-xs.jpg" alt="She gave my mother">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">She gave my mother</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 14.00</div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-12-xs.jpg" alt="A hundred thousand">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">A hundred thousand</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 20.00</div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-13-xs.jpg" alt="So saying he unbuckled">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">So saying he unbuckled</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 23.00</div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-14-xs.jpg" alt="However, I have reason">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">However, I have reason</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 32.00</div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-15-xs.jpg" alt="At first, for some time">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">At first, for some time</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 14.00</div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
assets/images/product-16-xs.jpg" alt="When the last &#39;natural&#39;">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">When the last &#39;natural&#39;</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 20.00</div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- END: Related Products -->
        </div><?php }
}
