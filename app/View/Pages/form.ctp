<h3 class="page-header">WYSIWYG with Summernote</h3>
<!-- include summernote css/js-->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $this->Html->url('/'); ?>bower_components/summernote/dist/summernote.css" rel="stylesheet">
<script src="<?php echo $this->Html->url('/'); ?>bower_components/summernote/dist/summernote.min.js"></script>            
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



<h3 class="page-header">Datepicker</h3>


<!-- ... -->
<script type="text/javascript" src="<?php echo $this->Html->url('/'); ?>bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="<?php echo $this->Html->url('/'); ?>bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="<?php echo $this->Html->url('/'); ?>bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
        </script>
    </div>
</div>