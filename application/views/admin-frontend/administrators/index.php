<h1>Liste des administrateurs</h1>
<div class="table-responsive">
    <button class="btn btn-inverse"><i class="glyphicon glyphicon-plus"></i><a class="btn btn-inverse" href="administrators/add">Ajouter un administrateur</a></button>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ($all_administrators as $administrator) : ?>
        	
	            <tr>
	                <td><?php echo $administrator->id; ?></td>
	                <td><?php echo $administrator->first_name; ?></td>
	                <td><?php echo $administrator->last_name; ?></td>
	                <td><?php echo $administrator->username; ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>administrators/edit/<?php echo $administrator->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger" href="<?php echo base_url(); ?>administrators/delete/<?php echo $administrator->id; ?>"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
	            </tr>
        	<?php endforeach; ?>
            
        </tbody>
    </table>
</div>