<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index part</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/designwork.css">
</head>
<body>

<div class="container col-md-4">
		<h2>Dark Striped Table</h2>
		<hr/>            
		  <table class="table table-dark table-striped">
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>Address</th>
		        <th>Date</th>
		        <th>Edit</th>
		        <th>Delete</th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php foreach($fields as $row) { ?>

		      <tr>
		        <td><?php echo $row['name']; ?></td>
		        <td><?php echo $row['address']; ?></td>
		        <td><?php echo $row['date_']; ?></td>
		        <td><a class="btn btn-danger"  href="<?php echo base_url('index.php/index_ctrl/Edit_process/').$row['id'] ?>">Edit</a></td>
		      </tr>
		   <?php } ?>
		    </tbody>
		  </table>

</div>
</body>
</html>