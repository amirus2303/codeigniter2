<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="well panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-12 col-sm-4 text-center">
              <img src="<?php echo base_url() ?>uploads/<?php echo $administrator->file_name; ?>" alt="" class="center-block img-circle img-thumbnail img-responsive">
              
            </div>
            <!--/col--> 
            <div class="col-xs-12 col-sm-8">
              <h2><?php echo $administrator->first_name; ?> <?php echo $administrator->last_name; ?></h2>
              <p><strong>Courriel : </strong> <?php echo $administrator->email; ?> </p>
              <p><strong>Nom d'utilisateur : </strong> <?php echo $administrator->username; ?> </p>
              <p><strong>Date d'inscription : </strong> <?php echo date('j/m/Y',strtotime($administrator->register_date)) ?></p>
            </div>
            <!--/col-->          
            <div class="clearfix"></div>
            <div class="col-xs-4 margin_top_40 col-xs-offset-2">
              <a class="btn btn-primary full_width" href="<?php echo base_url(); ?>administrators/edit/<?php echo $administrator->id; ?>"><span class="glyphicon glyphicon-pencil"> Éditer</span></a>
            </div>
            <!--/col-->
            <div class="col-xs-4 margin_top_40">
              <a class="btn btn-danger full_width" href="<?php echo base_url(); ?>administrators/delete/<?php echo $administrator->id; ?>"><span class="glyphicon glyphicon-remove"> Supprimer</span></a>
            </div>
            <!--/col-->
          </div>
          <!--/row-->
        </div>
        <!--/panel-body-->
      </div>
      <!--/panel-->
    </div>
    <!--/col--> 
  </div>
  <!--/row--> 
</div>
<!--/container-->