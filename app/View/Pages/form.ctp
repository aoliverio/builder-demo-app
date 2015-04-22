<!-- include summernote css/js-->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $this->Html->url('/'); ?>dist/summernote/summernote.css" rel="stylesheet">
<script src="<?php echo $this->Html->url('/'); ?>dist/summernote/summernote.min.js"></script>            
<label>Descrizione:</label>
<div class="summernote">Hello Summernote</div>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true, // set focus to editable area after initializing summernote
        });
    });
</script> 