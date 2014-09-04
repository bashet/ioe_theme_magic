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
    <style type="text/css">
        body, html
        {
            margin: 0; padding: 0; height: 100%; overflow: hidden;
        }

        #content
        {
            position:absolute; left: 0; right: 0; bottom: 0; top: 0px;
        }
    </style>
</head>

<body>

    {{ template:body }}

</body>
</html>

