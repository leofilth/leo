<div class="container" xmlns="http://www.w3.org/1999/html">
    <h1>Inicie Sesión</h1>
    <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'form','name'=>'form');
    echo form_open(null,$atributos);//utulizar siempre null, recomendado
    ?>
    <h3 style="color: orangered"><?php if($this->session->flashdata('ControllerMessage')!='')
        {
            echo " <span class='glyphicon glyphicon-info-sign'></span> ".$this->session->flashdata('ControllerMessage');
        }
        ?>
    </h3>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Usuario: </label>
            <?php
            $value=set_value("user");
            $datos=array
            (
                'name'=>'user',
                'id'=>'user',
                'class'=>'form-control',
                'value'=>$value
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('user'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Contraseña: </label>
            <?php
            $value=set_value("pass");
            $datos=array
            (
                'name'=>'pass',
                'id'=>'pass',
                'class'=>'form-control',
                'value'=>$value,
                'type'=>'password'
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('pass'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <button type="submit" name="boton" id="boton" class="btn btn-primary btn-md">
                <span class="glyphicon glyphicon-save"></span> Login
            </button>

        </div>
    </div>
    <?php
    echo form_close();
    ?>
</div>