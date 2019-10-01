<script src="{$teplateAdminPath}lib/summernote/summernote-bs4.min.js"></script>
<script src="{$teplateAdminPath}lib/peity/jquery.peity.min.js"></script>
<script src="{$teplateAdminPath}lib/highlightjs/highlight.pack.min.js"></script>
<script src="{$teplateAdminPath}lib/medium-editor/js/medium-editor.min.js"></script>
<script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
          height: 500,
          tooltip: false
        })
      });
    </script>