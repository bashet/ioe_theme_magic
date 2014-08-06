$(function(){

    $('.login_msg').delay(1500).fadeOut('slow');

    $('#btn_register').button().click(function(){
        var password    = $('#password').val();
        var r_pass      = $('#re_password').val();
        var uni         = $('#uni').val();
        var programme   = $('#programme').val();
        var email       = $('#email').val();
        var first_name  = $('#first_name').val();
        var last_name   = $('#last_name').val();

        if((first_name == '') || (last_name =='') || (password == '') || (r_pass == '')  || (uni == '')  || (programme == '')){
            $('#magic_warning_msg').html('Please fill all the fields');
            $( "#magic_warning" ).removeClass('hide').dialog({
                resizable: false,
                width:250,
                modal: true,
                title: "<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i> Warning message</h4></div>",
                title_html: true,
                buttons: [
                    {
                        html: "<i class='icon-remove bigger-110'></i>&nbsp; Close",
                        "class" : "btn btn-xs",
                        click: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                ]
            });
        }else if(password != r_pass){
            $('#magic_warning_msg').html('Password and repeat-password does not match!');
            $( "#magic_warning" ).removeClass('hide').dialog({
                resizable: false,
                width:450,
                modal: true,
                title: "<div class='widget-header'><h4 class='smaller'><i class='icon-warning-sign red'></i> Warning message</h4></div>",
                title_html: true,
                buttons: [
                    {
                        html: "<i class='icon-remove bigger-110'></i>&nbsp; Close",
                        "class" : "btn btn-xs",
                        click: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                ]
            });
        }else{
            $('#register').submit();
        }
    });


    $( ".datepicker" ).datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        //isRTL:true,

        changeMonth: true,
        changeYear: true,
        dateFormat: "dd/mm/yy",
        yearRange: "1900:3000",

        showButtonPanel: true,
        beforeShow: function() {
            //change button colors
            var datepicker = $(this).datepicker( "widget" );
            setTimeout(function(){
                var buttons = datepicker.find('.ui-datepicker-buttonpane').find('button');
                buttons.eq(0).addClass('btn btn-xs');
                buttons.eq(1).addClass('btn btn-xs btn-success');
                buttons.wrapInner('<span class="bigger-110" />');
            },0);
        }

    });

    //override dialog's title function to allow for HTML titles
    $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
        _title: function(title) {
            var $title = this.options.title || '&nbsp;'
            if( ("title_html" in this.options) && this.options.title_html == true )
                title.html($title);
            else title.text($title);
        }
    }));

});

