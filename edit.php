<?php require 'dbconfig.php';  ?>
<?php require 'functions.php' ?>
<?php $id = $_GET["id"] ;
  $all_dat = read_sindge_data($db,$id);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>crud  axios php</title>
  </head>
  <body>
<div class="container py-5">
  	<h1 class="display-5">Update your contact</h1>
    <div class="row my-5">
      <div class="col">
        <input type="text" placeholder="Enter Name" value="<?php $name = true ? $all_dat['name'] :'N/a' ; echo $name ?>" id="nameField" class="form-control">
      </div>
      <div class="col">
        <input type="text" placeholder="Enter Phone" value="<?php $phone = true ? $all_dat['phone'] :'N/a' ; echo $phone ?>" id="phoneField" class="form-control">
      </div>
      <div class="col">
        <input type="email" placeholder="Enter Email" value="<?php $email = true ? $all_dat['email'] :'N/a' ; echo $email ?>" id="emailField" class="form-control">
      </div>

      <div class="col">
        <button id="saveContact" class="btn btn-primary" onclick="updatecont('<?php echo $id ?>')">Update Contact</button>
      </div>
    </div>
    <button href="index.php"  onclick="backidx()">← back to index page</button>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  </body>
</html>