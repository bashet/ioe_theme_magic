<h2 class="page-title" id="page_title"><span><?php echo lang('user:register_header') ?></span></h2>



<?php if ( ! empty($error_string)):?>
<!-- Woops... -->
<div class="alert alert-error">
	<?php echo $error_string;?>
</div>
<?php endif;?>
<div class="row-fluid">
    <div class="span6 input-form">
        <div class="alert alert-info">
                <span id="active_step"><?php echo lang('user:register_step1') ?></span> -&gt;
                <span><?php echo lang('user:register_step2') ?></span>
        </div>
        <?php echo form_open('register', array('id' => 'register','class'=>'form-horizontal', 'role' => 'form')); ?>

            <?php if ( ! Settings::get('auto_username')): ?>
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label"><?php echo lang('user:username') ?></label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" maxlength="30" value="<?php echo $_user->username; ?>" />
                    </div>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label"><?php echo lang('global:email') ?></label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" maxlength="30" value="<?php echo $_user->email; ?>" />
                    <?php echo form_input('d0ntf1llth1s1n', ' ', 'class="default-form" style="display:none"'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 control-label"><?php echo lang('global:password') ?></label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" maxlength="30" />
                </div>
            </div>



            <?php foreach($profile_fields as $field) { if($field['required'] and $field['field_slug'] != 'display_name') { ?>
            <div class="form-group">
                <label for="<?php echo $field['field_slug']; ?>" class="col-sm-2 control-label"><?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?></label>
                <div class="col-sm-10">
                    <?php echo $field['input']; ?>
                </div>
            </div>
            <?php } } ?>

        <div class="form-group">
            <label for="uni" class="col-sm-2 control-label">Name of the college or university</label>
            <div class="col-sm-10">
                <select name="uni" id="uni" class="form-control" required="required">
                    <option value=""></option>
                    <?php
                    $clients = get_all_clients();
                    if($clients){
                        foreach($clients as $c){
                            echo '<option value="'.$c->id.'">'.$c->name.'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

            <div class="form-group">
                <button type="submit" value="<?php echo lang('user:register_btn') ?>" name="btnSubmit" class='btn btn-info'>{{helper:lang line="user:register_btn"}}</button>
            </div>

        <?php echo form_close(); ?>
    </div>
</div>