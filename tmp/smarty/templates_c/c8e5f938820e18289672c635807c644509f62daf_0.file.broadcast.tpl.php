<?php
/* Smarty version 3.1.30, created on 2019-01-22 01:34:20
  from "D:\OSPanel\domains\games\views\default\stream\broadcast.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c4648ecaf5458_07488083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e5f938820e18289672c635807c644509f62daf' => 
    array (
      0 => 'D:\\OSPanel\\domains\\games\\views\\default\\stream\\broadcast.tpl',
      1 => 1548110058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4648ecaf5458_07488083 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-8">



            <div class="responsive-embed responsive-embed-16x9">
                <iframe src="https://player.twitch.tv/?channel=shroud&muted=false" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
            </div>
            <!-- END: Now Playing -->


            <!-- START: Share -->
            <div class="nk-gap"></div>
            <div class="nk-post-share">
                <span class="h5">Поделиться трансляцией:</span>

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

        <?php }
}
