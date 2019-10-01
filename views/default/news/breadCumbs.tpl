    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread">
        
        
        <li class="custom-li-bread"><a href="/">Главная</a></li>
        
        
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        {if $actionName != 'category'}
        <li><span>Новости</span></li>
        {else}
        <li class="custom-li-bread"><a href="/news/">Новости</a></li>
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        <li><span>{$rsCurCategory['name_art_cat']}</span></li>
        {/if}
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->