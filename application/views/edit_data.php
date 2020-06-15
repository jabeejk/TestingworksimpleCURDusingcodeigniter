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
</head>
<body>

<div class="container col-md-4">
	  <h2>Editing Data Entry Form</h2>
 		 <hr/>
     <?php if($this->session->flashdata('msg')) { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
   <?php } ?>
	 <form method="post" action="<?php echo base_url('index.php/index_ctrl/update_value') ?>" >

    <input type="hidden" name="id_" id="id_" value="<?php  echo $value['id']; ?>" >

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" value="<?php  echo $value['name']; ?>" placeholder="Enter name" name="name">
      
    </div>
   
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address" value="<?php  echo $value['address']; ?>"  placeholder="Enter address" name="address">
     
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date_" value="<?php  echo $value['date_']; ?>" placeholder="Enter date" name="date_">
     
    </div>



    <input type="submit" name="btn" id="btn" value="Update" class="btn btn-success">

    <a href="<?php echo base_url('index.php/index_ctrl/view_data') ?>" name="back" id="back" class="btn btn-danger">Back</a>
  </form>
</div>
</body>
</html>

