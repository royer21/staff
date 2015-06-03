<?= form_open('usuario/insert', array('class'=>'form-horizontal')); ?>
    <legend> Crear Registro </legend>

    <?= my_validation_errors(validation_errors()); ?>

    <div class="control-group">
        <?= form_label('Nombre', 'name', array('class'=>'control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'name', 'id'=>'name', 'value'=>set_value('name'))); ?>
    </div>

    <div class="control-group">
        <?= form_label('Login', 'login', array('class'=>'control-label')); ?>
        <?= form_input(array('type'=>'text', 'name'=>'login', 'id'=>'login', 'value'=>set_value('login'))); ?>
    </div>

    <div class="control-group">
        <?= form_label('eMail', 'email', array('class'=>'control-label')); ?>
        <?= form_input(array('type'=>'email', 'name'=>'email', 'id'=>'email', 'value'=>set_value('email'))); ?>
    </div>

    <div class="control-group">
        <?= form_label('Perfil', 'perfil_id', array('class'=>'control-label')); ?>
        <?= form_dropdown('perfil_id', $perfiles, 0); ?>
    </div>

    <div class="form-actions">
        <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
        <?= anchor('usuario/index', 'Cancelar', array('class'=>'btn')); ?>
    </div>
<?= form_close(); ?>
