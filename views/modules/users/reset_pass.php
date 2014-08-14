<h2 class="page-title" id="page_title"><span><?php echo lang('user:reset_password_title');?></span></h2>

<?php if(!empty($error_string)):?>
<!-- Woops... -->
<div class="alert alert-error">
	<?php echo $error_string;?>
</div>
<?php endif;?>
<div class="row-fluid">

    <?php if(!empty($success_string)): ?>
        <div class="alert alert-success">
            <?php echo $success_string; ?>
        </div>
    <?php else: ?>

        <?php echo form_open('users/reset_pass', array('id'=>'reset-pass', 'class'=> 'form-horizontal', 'role'=> 'form')); ?>

            <h4 class="reset-instructions"><?php echo lang('user:reset_instructions'); ?></h4>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label"><?php echo lang('global:email') ?></label>
                <div class="col-sm-10">
                    <input type="text" name="email" id="email" maxlength="100" value="<?php echo set_value('email'); ?>" />
                </div>
            </div>

            <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label"><?php echo lang('user:username') ?></label>
                <div class="col-sm-10">
                    <input type="text" name="user_name" id="user_name" maxlength="40" value="<?php echo set_value('user_name'); ?>" />
                </div>
            </div>
            <div class="col-sm-4">
                <button type="submit" style="float: right" value="<?php echo lang('user:reset_pass_btn') ?>" name="btnSubmit" class='btn btn-info'>{{helper:lang line="user:reset_pass_btn"}}</button>
            </div>

        <?php echo form_close(); ?>
    <?php endif; ?>

</div>