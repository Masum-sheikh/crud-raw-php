<?php
session_start();
require '../bd.php';

?>


<?php require '../admin_header.php';?>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					 <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Profile update</h3>
                            </div>
                            <div class="card-body">
                            <?php if(isset($_SESSION['update'])) {?>
          <div class="alert alert-success">
            <?php echo $_SESSION['update'] ?>
          </div>
       <?Php } unset($_SESSION['update']) ?>
       
                                <form action="profile_update.php" method="POST" >
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="<?= $after_assoc_user_info['name']?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="" class="form-label">password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <input type="hidden" name="user_id" value="<?= $after_assoc_user_info['id']?>">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary" >update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Profile update</h3>
                            </div>
                            <div class="card-body">
                                <form action="profile_update.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                  
                                    <div class="mb-3">
                                        <label for="" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    <div class="my-2">
                                    <img width="200px" src="" id="blah" alt="">
                                    </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary" >update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                     </div>


				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <?php require '../admin_footer.php';?>



