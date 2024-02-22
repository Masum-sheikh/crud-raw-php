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
            

            <h3 class="text-center text-white">User login</h3>
          </div>
          <div class="card-header">
         <form action="login_post.php" method="POST">
         <div class="form-group">
          <label for="exampleInputEmail1">email</label>
          <input name="email" type="text" style="border-color:<?php echo isset($_SESSION['invalaid-err'])?'red':''?>;" class="form-control"  placeholder="Enter email">
          <?php if(isset($_SESSION['invalaid-err'])) {?>
          <strong class="text-danger">
            <?php echo $_SESSION['invalaid-err'] ?>
        </strong>
       <?Php } unset($_SESSION['invalaid-err']) ?>
         
    </div>
    <div class="form-group pas_v">
          <label for="exampleInputEmail1">password</label>
          <input id='pass' name="password" type="password" style="border-color:<?php echo isset($_SESSION['wrong-err'])?'red':''?>;" class="form-control"  placeholder="Enter email">
   
         <?php if(isset($_SESSION['wrong-err'])) {?>
          <strong class="text-danger">
            <?php echo $_SESSION['wrong-err'] ?>
        </strong>
       <?Php } unset($_SESSION['wrong-err']) ?>
       <i id='show-pass' style="width:30px; height:30px; background:green;color:white;text-align:center;line-height:30px" class="fa fa-eye"></i>
    </div>

    

  
  <button type="submit" class="btn btn-primary">login</button>
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