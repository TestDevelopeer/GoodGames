    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread" id="catalog-breadcumb">
        
        
        <li class="custom-li-bread"><a href="/">Главная</a></li>
        
        
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        {if !isset($Title)}
        <li><span id="breadcumb-text">{$pageTitle}</span></li>
        {else}
        <li class="custom-li-bread"><a href="/catalog/">{$pageTitle}</a></li>
        <li style="font-size: 1em;"><span class="fa fa-angle-right"></span></li>
        <li><span>{$Title}</span></li>
        {/if}
    </ul>
</div>

<!-- END: Breadcrumbs -->