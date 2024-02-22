<?php
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
    <style>
      .pas_v{
        position: relative;
      }
      .pas_v i{
        position: absolute;
        top:36px;
        right:0px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
     
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-header bg-success">
            

            <h3 class="text-center text-white">User register</h3>
          </div>
          <div class="card-header">
          <form action="register_post.php" method="POST">
          <?php if(isset($_SESSION['success-err'])) {?>
          <div class="alert alert-success">
            <?php echo $_SESSION['success-err'] ?>
          </div>
       <?Php } unset($_SESSION['success-err']) ?>
        
       <?php if(isset($_SESSION['exit-err'])) {?>
          <div class="alert alert-success">
            <?php echo $_SESSION['exit-err'] ?>
          </div>
       <?Php } unset($_SESSION['exit-err']) ?>

          <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input name="name" type="text" style="border-color:<?php echo isset($_SESSION['name-err'])?'red':''?>;" class="form-control"  placeholder="Enter Name">
   
         <?php if(isset($_SESSION['name-err'])) {?>
          <strong class="text-danger">
            <?php echo $_SESSION['name-err'] ?>
        </strong>
       <?Php } unset($_SESSION['name-err']) ?>
    </div>
    <div class="form-group">
          <label for="exampleInputEmail1">email</label>
          <input name="email" type="text" style="border-color:<?php echo isset($_SESSION['email-err'])?'red':''?>;" class="form-control"  placeholder="Enter email">
   
         <?php if(isset($_SESSION['email-err'])) {?>
          <strong class="text-danger">
            <?php echo $_SESSION['email-err'] ?>
        </strong>
       <?Php } unset($_SESSION['email-err']) ?>
    </div>
    <div class="form-group pas_v">
          <label for="exampleInputEmail1">password</label>
          <input id='pass' name="password" type="password" style="border-color:<?php echo isset($_SESSION['password-err'])?'red':''?>;" class="form-control"  placeholder="Enter email">
   
         <?php if(isset($_SESSION['password-err'])) {?>
          <strong class="text-danger">
            <?php echo $_SESSION['password-err'] ?>
        </strong>
       <?Php } unset($_SESSION['password-err']) ?>
       <i id='show-pass' style="width:30px; height:30px; background:green;color:white;text-align:center;line-height:30px" class="fa fa-eye"></i>
    </div>

    
    <div class="form-group">
          <label for="exampleInputEmail1">select gender</label>
          <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="male" id="gen1">
  <label class="form-check-label" for="gen1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" value="female" name="gender" id="gen2" checked>
  <label class="form-check-label" for="gen2">
    Female
  </label>
</div>
<?php if(isset($_SESSION['gender-err'])) {?>
          <strong class="text-danger">
            <?php echo $_SESSION['gender-err'] ?>
        </strong>
       <?Php } unset($_SESSION['gender-err']) ?>

    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script>
    $('#show-pass').click(function(){
    var pass = document.getElementById('pass');
    if(pass.type== 'password'){
      pass.type='text';
    }else{
      pass.type= 'password';
    }
    })

    
  </script>
  
  </body>
</html>