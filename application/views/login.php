


<?php if($this->session->userdata('logged_in')) :?>
    <?php  redirect('dashboard'); ?>
<?php else: ?>
<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <img src="<?php echo base_url(); ?>assets/img/logo-invoice.png" />
        </div>
    </div>
     <div class="row ">
           
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                       
                <div class="panel-body">

                <?php echo form_open('login/log_in'); ?>
                    <hr />

                    <h5>Enter Details to Login</h5>
                    <?php if($this->session->flashdata('no_access')) :?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('no_access'); ?></div>
                    <?php endif; ?>
                    
                    <?php if($this->session->flashdata('errors')) : ?>
                        <div class="alert alert-danger"> <?php echo  $this->session->flashdata('errors'); ?> </div>
                    <?php endif; ?>
                    <br />
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>


                        <?php 
                        $attributes = array(
                            'class'       => 'form-control',
                            'placeholder' => 'Your Username',
                            'name'        => 'username'
                            );
                        echo form_input($attributes);
                        ?>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>

                        <?php 
                        $attributes = array(
                            'class'       => 'form-control',
                            'placeholder' => 'Your Password',
                            'name'        => 'password'
                            );
                        echo form_password($attributes);
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" /> Remember me
                        </label>
                        <span class="pull-right">
                               <a href="index.html" >Forget password ? </a> 
                        </span>
                    </div>
                     <div class="form-group input-group">
                        <?php 
                        $attributes = array(
                            'class' => 'btn btn-primary',
                            'value' => 'Login now',
                            'name'  => 'login'
                            );
                        echo form_submit($attributes);
                        ?>
                    </div>
                    <hr />
                    Not register ? <a href="index.html" >click here </a> or go to <a href="index.html">Home</a> 
                <?php echo form_close(); ?>
                </div>
                       
            </div>
            
            
    </div>
</div>
<?php endif; ?>
