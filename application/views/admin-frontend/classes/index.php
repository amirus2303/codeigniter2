<h1>Liste des classes</h1>
<?php if($this->session->flashdata('add_classe_success')) : ?>
    <div class="alert alert-success"><?php echo  $this->session->flashdata('add_classe_success'); ?></div>
<?php endif; ?>

<?php if($this->session->flashdata('edit_classe_success')) : ?>
    <div class="alert alert-success"><?php echo  $this->session->flashdata('edit_classe_success'); ?></div>
<?php endif; ?>

<?php if($this->session->flashdata('delete_classe_success')) : ?>
    <div class="alert alert-success"><?php echo  $this->session->flashdata('delete_classe_success'); ?></div>
<?php endif; ?>

<div class="table-responsive">
    <button class="btn btn-inverse"><i class="glyphicon glyphicon-plus"></i><a class="btn btn-inverse" href="classes/add">Ajouter une classe</a></button>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom de la classe</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_classes as $classe) : ?>
            
                <tr>
                    <td><?php echo $classe->id; ?></td>
                    <td><?php echo $classe->classe_name; ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>classes/view/<?php echo $classe->id; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>classes/edit/<?php echo $classe->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>classes/delete/<?php echo $classe->id; ?>"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            
        </tbody>
    </table>
</div>