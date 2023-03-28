<?php $form = \App\core\form\Form::begin('', "post") ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'first_name'); ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'last_name'); ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email')->getEmail(); ?>
    <?php echo $form->field($model, 'password')->getPassword(); ?>
    <?php echo $form->field($model, 'password_confirmation')->getPassword(); ?>
    <button type="submit" class="btn btn-info">Submit</button>
<?php $form->end(); ?>
<!-- <form action="" method="post">
    <h1>Create a new user</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" value="<?= $model->first_name ?>" name="first_name" id="first_name" class="form-control<?= $model->hasError('first_name') ? ' is-invalid' : '' ?>">
                <div class="invalid-feedback"><?= $model->getFirstError('first_name') ?></div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
    </div>
    
    <div class="form-group mt-2">
        <label for=""></label>
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
</form> -->