<?php include_once('db/conn.php'); ?>
<?php include_once('header.php');  ?>


<?php 
/*================================================Sport Register==================================*/
if (isset($_POST['register_sport'])) 
{

            $sport_name=mysqli_real_escape_string($conn, $_POST['sport_name']);
            $teacher_incharge=mysqli_real_escape_string($conn, $_POST['teacher_incharge']);

            $sql_select2="SELECT * FROM sports WHERE SportName='$sport_name' LIMIT 1";
            $result2=mysqli_query($conn, $sql_select2);
            $user=mysqli_fetch_array($result2);

            if ($user)
            {
                 if ($user['SportName']===$sport_name)
                 {
                    array_push($error, "<br>Sport already exists");
                 }
            }

            if (count($error)==0)
            {
  /*sports     idSports | SportName | TeacherInCharge | delete_status | status  */

                $sql="INSERT INTO sports(SportName,TeacherInCharge,delete_status,status) VALUES('$sport_name','$teacher_incharge',1,0)";
                if (mysqli_query($conn,$sql)) {
                    ?><script type="text/javascript">alert("Sport Registerd");</script><?php
                }else{
                    ?><script type="text/javascript">alert("Sport Register error");</script><?php
                }

            }else{
             ?><script type="text/javascript">alert("Some Field allready exit");</script><?php
            }
}
/*================================================End Sport Register==================================*/



/*================================================Delete Sport ==================================*/
    if (isset($_GET['delete_id'])) 
    {
        $id=mysqli_real_escape_string($conn,$_GET['delete_id']);
  /*sports     idSports  SportName TeacherInCharge delete_status status  */

         $sql="UPDATE sports SET delete_status = 0 WHERE idSports='$id'";

        if (mysqli_query($conn,$sql))
        {
           echo "<script>window.open('sport_register.php','_self')</script>";
        }
    }

/*================================================End delete sport ==================================*/



/*================================================Update Sport ==================================*/
  /*sports     idSports | SportName | TeacherInCharge | delete_status | status  */

        if (isset($_POST['update_sport'])) 
        {

            $hidden_sport_id=mysqli_real_escape_string($conn, $_POST['hidden_sport_id']);
            $sport_name=mysqli_real_escape_string($conn, $_POST['sport_name']);
            $teacher_incharge=mysqli_real_escape_string($conn, $_POST['teacher_incharge']);


            if (count($error)==0)
            {
               
                        $update_subject = "UPDATE sports SET SportName='$sport_name',TeacherInCharge='$teacher_incharge' WHERE idSports='$hidden_sport_id' LIMIT 1";
                          mysqli_query($conn,$update_subject);     

            }
            else
            {
                 ?><script type="text/javascript">alert("Sport Update error 1");</script><?php
            }

        }
  
 ?>
<!-- /*================================================end update Activity ==================================*/ -->








<!-- =====================================The insert Sport Modal ========================================-->
        <div class="modal fade" id="regspo" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">


                <!-- Modal Header -->
              <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="ion-ios-close"></span>
                </button>
              </div>

                <!-- Modal Body -->
              <div class="row no-gutters">
                  <div class="col-md-6 d-flex">
                      <div class="modal-body p-5 img d-flex color-1 text-center d-flex align-items-center">

                              <?php 

                                if (isset($error)&&!empty($error) ) {
                                    ?><div class="alert alert-danger"><?php
                                    include_once('db/error.php');
                                    ?></div><?php
                                }
                               ?>
                        <div class="text w-100">
                            <div class="div-1">
                            </div>                            
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 d-flex">
                      <div class="modal-body p-5 img d-flex align-items-center color-2">
                        <div class="text w-100 py-0 py-md-5">
                            <h3 class="mb-4">Add New Sport</h3>

                            <form action="sport_register.php" id="mainForm" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Sport's Name" name="sport_name" required data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-trigger="keyup"/>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tic">Select Teacher In Charge</label>
                                                      <select  name="teacher_incharge" class="form-control sl2" required>
                                                        <option selected disabled> Select Activity Head</option>
                                                        <?php
                                                    
                                                            $get_cat = "SELECT * FROM teacher";
                                                            $run_cat = mysqli_query($conn, $get_cat);
                                                                                            
                                                            while ($row_cat=mysqli_fetch_array($run_cat)) {
                                                                $idTeacher = $row_cat['idTeacher'];
                                                                $Name = $row_cat['Name'];
                                                                                                    
                                                                echo " <option value='$idTeacher'> $Name </option>";
                                                                } 
                                                        ?> 
                                                      </select>
                                </div>
                            
                           
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="register_sport">ADD</button>
                            </div>
                          </form>
                          
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
<!-- =================================End insert Sport modal ========================================-->


                    





<div class="col-sm-12">
<div class="form-group">

      <div class="row">
        <div class="col-lg-10">
          <div class="statistic d-flex align-items-center bg-white has-shadow">
            <br>
            <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#regspo">
              Add New Sport
            </button>
            <br>
          </div>
        </div>
      </div>

<br>

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
                  <thead>
                      <tr>
                      
                          <th>Sport id</th>
                          <th>Sport Name</th>
                          <th>Teacher Incharge</th>
                          <th>Action</th>
                      </tr>
                  </thead>

                      <?php 
                                
                          $get_subject = "SELECT * FROM sports WHERE delete_status=1 ORDER BY idSports DESC";
                                    
                          $run_rpro = mysqli_query($conn,$get_subject);
              
                          while($row_rpro=mysqli_fetch_array($run_rpro))
                          {
                            /* idSports  SportName TeacherInCharge delete_status status   */
                              $idSports=$row_rpro['idSports'];
                              $SportName=$row_rpro['SportName'];
                              $TeacherInCharge=$row_rpro['TeacherInCharge'];

                               $get_teacher = "SELECT * FROM teacher WHERE idTeacher='$TeacherInCharge' LIMIT 1";     
                               $res = mysqli_query($conn,$get_teacher);

                               if($result=mysqli_fetch_array($res)){
                                  $teacher_name=$result['Name'];
                               }

                      ?>


                  <tbody>
                      <tr>
                          <td><?php echo $idSports; ?></td>
                          <td><?php echo $SportName; ?></td>
                          <td><?php echo $teacher_name; ?></td>

                          <td>
                            <div class="dropdown">
                              <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-h"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item sport1" href="sport_registration.php" data-id="<?php echo $idSports; ?>" data-toggle="modal" data-target="#update_modal"><i class="fa fa-pencil"></i> Edit</a>

                                    <a class="dropdown-item" href="sport_registration.php?delete_id=<?php echo $idSports; ?>"  onclick="return confirm('Do You Want To Delete Sport');"><i class="fa fa-trash"></i> Delete</a>
                              </div>
                            </div>
                           </td>
                      </tr>

                    </tbody>
                  <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
</div>

    
<?php include_once('footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
      $('#mainForm').parsley();
      $('.sl2').select2();



    $('.sport1').click(function(){

        var sport_id1=$(this).data('id');
        
          $.ajax({

                url:'sport_update_ajax.php',

                type:'post',

                data:{id1:sport_id1},

                cache: false,

                success:function(data){

                    var d=data.split('~');

                    if (d[0]==1) {
                            $('#sport_id').val(d[1]);
                            $('#hidden_sport_id').val(d[1]);
                            $('#sport_name').val(d[2]);
                            $('#teacher_incharge').val(d[3]);
                    }

            }
          });
    });



});
</script>