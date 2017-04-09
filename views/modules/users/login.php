<h1 class="page-title text-primary" id="page_title"><strong>Leadership CoLab 360 Diagnostic:</strong></h1>

<div class="">
    <h4 class="text-primary"><strong>A Powerful tool to drive professional development in educational leadership</strong></h4>
    <p>
        Leadership CoLab is a partnership between UCL Institute of Education and outstanding schools,
        to provide exceptional leadership development for middle leaders, senior leaders and head teachers.
        The 360 Diagnostic is a peer evaluation tool to track your leadership development.
    </p>
    <p>
        This can be approached at two levels:
    </p>
    <h4 class="text-primary"><strong>At an organisational level</strong></h4>
    <p>
        Through competencies designed by industry experts, the 360 benchmarks individuals' progress on
        their leadership journey by gathering feedback from line managers, peers and those who you line manage.
        The 360promots engagement at organisational level whilst encouraging the diverse talent of your staff to realise their full potential.
    </p>
    <h4 class="text-primary"><strong>As an individual</strong></h4>
    <p>
        The 360 Diagnostic provides a unique opportunity to gain valuable insights into your leadership development.
        This resource also provide a rare opportunity to reflect and analyse your leadership style and objectives, providing the
        foundations for your targeted leadership development.
    </p>
    <br>
    <div class="row">
	    <?php if (validation_errors()): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			    <?php echo validation_errors();?>
            </div>
	    <?php endif; ?>

        <div class="col-md-10 col-md-offset-2">

            <?php echo form_open('users/login', array('id'=>'login-small', 'class'=> 'form-horizontal', 'role'=> 'form')); ?>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="prependedInput" class="col-sm-6 control-label">Your username</label>
                    <div class="col-sm-6">
                        <?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '','class="span11" id="prependedInput" placeholder="'.lang('global:email').'"')?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-6 control-label">Your password: </label>
                    <div class="col-sm-6">
                        <input type="password" name="password" maxlength="20" class="span11" id="password" placeholder="{{helper:lang line='user:password_label'}}" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-6">
                        <label class="checkbox">
                            <?php echo form_checkbox('remember', '1', FALSE); ?> <?php echo lang('user:remember'); ?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-10">
                        <button type="submit" value="<?php echo lang('user:login_btn') ?>" name="btnLogin" class='btn btn-info'>{{helper:lang line="user:login_btn"}}</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-10">
                        <a href="<?php echo site_url('register');?>" class="btn btn-danger">{{helper:lang line='user:register_btn'}}</a>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-10">
                        <a href="<?php echo site_url('users/reset_pass');?>" class="btn btn-danger">{{helper:lang line='user:reset_password_link'}}</a>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>

        </div>
    </div>
    <div class="row">
        <p>For further information please feel free to contact us at CoLabMoodle@ioe.ac.uk</p>
    </div>
</div>





    