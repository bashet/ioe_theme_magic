<!DOCTYPE html>
<html>
<head>
    {{ theme:partial name="metadata" }}
    <script>
        var base_url = '<?php echo $this->config->base_url();?>';
        var user_id = '{{ user:id }}';
        var attempt_id = '{{ session:data name="attempt_id" }}';
        var survey_id = '{{ session:data name="survey_id" }}';
        var q_no = '{{ session:data name="question_no" }}';
    </script>
</head>

<body style="overflow: hidden">
<div class="container">
    {{ template:body }}
</div>

</body>
</html>

