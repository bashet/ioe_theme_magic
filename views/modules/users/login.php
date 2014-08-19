<h2 class="page-title" id="page_title">Login to 360 Diagnostic</h2>

<div class="row-fluid">
    <div  class='span6 input-form'>


        <?php if (validation_errors()): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <?php echo validation_errors();?>
        </div>
        <?php endif; ?>
        <div class="row-fluid">
            <?php echo form_open('users/login', array('id'=>'login-small', 'class'=> 'form-horizontal', 'role'=> 'form')); ?>
                <div class="form-group">
                    <label for="prependedInput" class="col-sm-2 control-label">Your username</label>
                    <div class="col-sm-10">
                        <?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '','class="span11" id="prependedInput" placeholder="'.lang('global:email').'"')?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Your password: </label>
                    <div class="col-sm-10">
                        <input type="password" name="password" maxlength="20" class="span11" id="password" placeholder="{{helper:lang line='user:password_label'}}" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-10">
                        <label class="checkbox">
                            <?php echo form_checkbox('remember', '1', FALSE); ?> <?php echo lang('user:remember'); ?>
                        </label>
                    </div>
                </div>

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

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
    