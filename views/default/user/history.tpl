    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs custom-game-bread">
        
        
        <li class="custom-li-bread"><a href="index.html">Главная</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li class="custom-li-bread"><span>История покупок</span></li>

        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="/user/profile/{if $rsUser['user_link'] != ''}{$rsUser['user_link']}{else}{$rsUser['id_user']}{/if}/">{$rsUser['user_name']}</a></li>
        
    </ul>
</div>
<div class="nk-gap-1"></div>
<!-- END: Breadcrumbs -->

        

        
    <div class="container">
        <div class="row vertical-gap">


        <div class="nk-gap-2"></div>
        

            <div class="col-lg-12">
                <!-- START: Table -->
                <div class="nk-gap"></div>
                <table class="nk-table custom-table">
                    
                    <tbody>
                        <thead class="custom-table">
                        <tr>
                            <th>Дата</th>
                            <th>Товары</th>
                            <th>Тип</th>
                            <th>Всего</th>
                        </tr>
                        </thead>
                        {foreach $rsHistory as $history}
                        <tr>
                            <td>{$history['order_date']} {$history['order_time']}</td>
                            <td>
                                {foreach $parseGames[$history['id_order']] as $games}
                                    {$games}<br>
                                {/foreach}
                            </td>
                            <td>
                                {$history['order_games_cnt']} предм. (покупка/продажа)<br>
                                {if $history['order_payment'] == 'AC'} Банковская карта {else} ЯндексДеньги {/if}
                            </td>
                            <td>{$history['order_price']}p.</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
                <!-- END: Table -->
            </div>
        

        
    </div>
</div>
    <div class="nk-gap-2"></div>