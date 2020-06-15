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

<div class="container">
  <h2>Data Entry Form</h2>
  <hr/>

  <?php if($this->session->flashdata('msg')) { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
  <?php } ?>
  <?php if($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
  <?php } ?>
  <form method="post" action="<?php echo base_url('index.php/index_ctrl/set_value') ?>" >
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" value="<?php  echo set_value('name'); ?>" placeholder="Enter name" name="name" >
      <div class="text-danger col-md-4"><?php echo form_error("name"); ?></div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  id="pwd" placeholder="Enter password" name="pwd">
      <div class="text-danger col-md-4"><?php echo form_error("pwd"); ?></div>
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" value="<?php  echo set_value('address'); ?>" id="address" placeholder="Enter address" name="address">
      <div class="text-danger col-md-4"><?php echo form_error("add"); ?></div>
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" value="<?php  echo set_value('date_'); ?>" id="date_" placeholder="Enter date" name="date_">
      <div class="text-danger col-md-4 "><?php echo form_error("date_"); ?></div>
    </div>



    <input type="submit" name="btn" id="btn" value="Insert" class="btn btn-success">
    <a href="<?php echo base_url('index.php/index_ctrl/view_data') ?>" name="view_info" id="view_info" class="btn btn-dark">view</a>
    <a href="<?php echo base_url('index.php/index_ctrl') ?>" name="back" id="back" class="btn btn-danger">Back</a>
  </form>
</div>

</body>
</html>