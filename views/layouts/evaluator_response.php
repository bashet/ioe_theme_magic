<!DOCTYPE html>
<html>
<head>
    {{ theme:partial name="metadata" }}
    <script>
        var base_url = '<?php echo $this->config->base_url();?>';
        var evaluator_id = '{{ session:data name="evaluator_id" }}';
        var attempt_id = '{{ session:data name="attempt_id" }}';
        var survey_id = '{{ session:data name="survey_id" }}';
        var q_no = '{{ session:data name="question_no" }}';
    </script>
</head>

<body>
<div class="container">
    {{ theme:partial name="header" }}

    {{ theme:partial name="navbar" }}

    <div class="page-content">

        <div class="row">
            <div class="col-xs-12">
                {{ template:body }}
            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>

    {{ theme:partial name="footer" }}

</div>

<div class="loader_window"><!-- Place at bottom of page --></div>
</body>
</html>

