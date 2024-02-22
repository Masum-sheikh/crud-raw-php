<?php
session_start();
 require '../bd.php';
 $select = "SELECT * FROM users";
 $select_result = mysqli_query($db_connect, $select);

$tottal="SELECT COUNT(*) as tottal FROM users";
$select_query=mysqli_query($db_connect,$tottal);
$select_assocc=mysqli_fetch_assoc($select_query);
?>

<?php

require '../admin_header.php';

?>

<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
        <div class="col-lg-8 m-auto mt3">
            <div class="card">
                <div class="card-header bg-primary">
                    <h2 class="text-center text-white">User List</h2>
                    <p>tottal user:<?= $select_assocc['tottal']?></p>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>sl</th>
                            <th>name</th>
                            <th>email</th>
                            <th>gender</th>
                            <th>action</th>
                        </tr>
                      <?php foreach($select_result as $sl=>$user) {?>
                        <tr>
                            <td><?= $sl+1?></td>
                            <td><?= $user['name']?></td>
                            <td><?= $user['email']?></td>
                            <td><?= $user['gender']?></td>
                            <td><a data-link="user_delete.php?id=<?= $user['id']?>" class="btn btn-danger del">Delete</a></td>
                        </tr>
                        <?php }?>
                    </table>
                </div>
            </div>

        </div>

				</div>
            </div>
        </div>
       

<?php

require '../admin_footer.php';

?>
<script>
   
    
    $('.del').click(function(){
        var link=$(this).attr('data-link');
        Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href=link;
  }
});
  
});


   
</script>
<?php if(isset($_SESSION['delete'])) {?>
<script>
     Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
</script>

    <?php } unset($_SESSION['delete'])?>