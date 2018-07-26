<?php
?>

<div class="tryTheme">
       Trying leaflet 
</div>

<div class="iiif-viewer"></div>

<div id="confirmOverlay" style="display: none;">
    <div id="confirmBox">
        <textarea name="editor" id="editor" cols="30" rows="10" placeholder="123"></textarea>
        <div id="confirmButtons">
            <a id='annotation_save' class="button blue" >save<span></span></a>
            <a id='annotation_cancel' class="button gray" >cancel<span></span></a>
        </div>
    </div>
</div>

<script>
    tinymce.init({ selector:'textarea'  ,
        toolbar_items_size: 'small',
        menubar: false,
        toolbar: [
            'undo redo | styleselect | bold italic | link image |alignleft aligncenter alignright'
        ]
    });
</script>

<script>
    (function($) {
        $('.iiif-viewer').work();
    })(jQuery);
</script>