    <script>
      $(function(){
        'use strict';

        // depcrecated
        //$('.br-mailbox-list').perfectScrollbar();

        new PerfectScrollbar('.br-mailbox-list', {
          suppressScrollX: true
        });

        $('#showMailBoxLeft').on('click', function(e){
          e.preventDefault();
          if($('body').hasClass('show-mb-left')) {
            $('body').removeClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-left').addClass('fa-arrow-right');
          } else {
            $('body').addClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-right').addClass('fa-arrow-left');
          }
        });
      });
    </script>