<?php require 'dbconfig.php';  ?>
<?php require 'functions.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>crud ajax php</title>

    <!-- Using Axios CDN: -->

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  </head>
<script type="text/javascript">
    //------------ insert data with axios------------------
    function savecont() {
    var nf= document.getElementById("nameField").value;
    var pf= document.getElementById("phoneField").value;
    var ef= document.getElementById("emailField").value;

    let contact = {
        name: nf,
        phone: pf,
        email: ef
    }
    axios.post('all_fn.php',contact)
      .then(resp => {
       console.log(resp.data)
      })
      .catch(err => console.log(err));
  }

// .forEach(user => {
//           console.log(user.name)
//         });
</script>
<script type="text/javascript">
  //------------ delete data------------------
function delcont(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if ( this.responseText === "success") { backidx() }
    }
  };

  xhttp.open("GET", "delete.php?id="+id, true);
  xhttp.send();
}
</script>
<script type="text/javascript">
  //------------ Edit data------------------
  //------ Edit page show--------
function editpage(id) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var fullcont = document.getElementById("fullcont");
      fullcont.innerHTML = this.responseText
    }
  }


  xhttp.open("GET", "edit.php?id="+id, true);
  xhttp.send();
  };
  //save edited data
  function updatecont(id){
  var xhttp = new XMLHttpRequest();
  var nf= document.getElementById("nameField").value;
  var pf= document.getElementById("phoneField").value;
  var ef= document.getElementById("emailField").value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var alrt = document.getElementById("demo");
      backidx()
    }
  }
  xhttp.open("GET", "saveedit.php?nf="+nf+"&pf="+pf+"&ef="+ef+"&id="+id, true);
  xhttp.send();
}

</script>
  <script type="text/javascript">
      // bact to index
    function backidx() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var fullcont = document.getElementById("fullcont");
        fullcont.innerHTML = this.responseText
      }
    };

    xhttp.open("GET", "index.php", true);
    xhttp.send();
  }
  </script>
  <body>

<!-- <button type="button" class="btn btn-info" onclick="loadDoc()">send to page 2</button> -->

<div class="container py-5" id="fullcont">
    <h1 class="display-4">Welcome to Ajax(traditional way) with XAMPP</h1>
    <div class="row my-5">
      <div class="col">
        <input type="text" placeholder="Enter Name" id="nameField" class="form-control">
      </div>
      <div class="col">
        <input type="text" placeholder="Enter Phone" id="phoneField" class="form-control">
      </div>
      <div class="col">
        <input type="email" placeholder="Enter Email" id="emailField" class="form-control">
      </div>
      <div class="col">
        <button id="saveContact" class="btn btn-primary" onclick="savecont()">Save Contact</button>
      </div>
    </div>
<!--     <div id="demo"></div>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>data add success!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id="tbody">

        <?php
        show_data($db);
        function show_data($db){
        $all_dat = read_all_data($db);
        foreach ($all_dat as $all_data){
            ?>
      <tr>
	      <th scope="row"><?php echo $all_data['name'] ?></th>
	      <td><?php echo $all_data['phone'] ?></td>
	      <td><?php echo $all_data['email'] ?></td>
	      <td>
          <button id="del" type="button" class="btn btn-warning mx-1" onclick="editpage(<?php echo $all_data['id'] ?>)">edit</button>
          <button id="del" type="button" class="btn btn-danger mx-1" onclick="delcont(<?php echo $all_data['id'] ?>)">Delete</button>
        </td>
	    </tr>
       <?php } } ?>
      </tbody>
    </table>
  </div>

<!--   	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
	<!-- <script type="text/javascript" src="index.js"></script> -->
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


  </body>
</html>