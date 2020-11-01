<?php
 
    include '../includes/header.php';
?>


<title>Admins</title>

</head>
<body>
    
<?php
include '../includes/menu-admin.php';
?>

 <div class="container">
<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="../database/function" method="POST">

            <div class="modal-body">
                <div class="form-group">
                    <label> First Name </label>
                    <input type="text" name="txt_fname" class="form-control" placeholder="Enter First Name">
                </div>

                <div class="form-group">
                    <label> Last Name </label>
                    <input type="text" name="txt_lname" class="form-control" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label> NIC </label>
                    <input type="text" name="txt_nic" class="form-control" placeholder="Enter NIC">
                </div>
                <div class="form-group">
                    <label> Contact </label>
                    <input type="text" name="txt_tp" class="form-control" placeholder="Enter Contact">
                </div>

                <div class="form-group">
                    <label> Email </label>
                    <input type="email" name="txt_email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label> Passowrd </label>
                    <input type="password" name="txt_pwd" class="form-control" placeholder="Enter Password">
                </div>

                 <div class="form-group">
                    <label>Confirm Passowrd </label>
                    <input type="password"  class="form-control" placeholder="Confirm Password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertdata-admin" class="btn btn-secondary">Save Data</button>
            </div>
        </form>

    </div>
  </div>
</div>




<!-- ####################################################################################################################### -->

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Admin </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="../database/function" method="POST">

            <div class="modal-body">

                <input type="hidden" name="id" id="id">

                <div class="form-group">
                    <label> First Name </label>
                    <input type="text" name="txt_fname" id="fname" class="form-control" placeholder="Enter First Name">
                </div>

                <div class="form-group">
                    <label> Last Name </label>
                    <input type="text" name="txt_lname" id="lname" class="form-control" placeholder="Enter Last Name">
                </div>

                <div class="form-group">
                    <label> NIC </label>
                    <input type="text" name="txt_nic" id="nic" class="form-control" placeholder="Enter NIC">
                </div>

                <div class="form-group">
                    <label> Contact </label>
                    <input type="text" name="txt_tp" id="tp" class="form-control" placeholder="Enter Contact Number">
                </div>

                 <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="txt_email" id="email" class="form-control" placeholder="Enter Email">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata-admin" class="btn btn-secondary">Update Data</button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- #################################################################################################### -->





<!-- ####################################################################################################################### -->

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Delete Admin </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="../database/function" method="POST">

            <div class="modal-body">

                <input type="hidden" name="delete_id" id="delete_id">

                <p> Do you want to Delete this Data ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">  NO </button>
                <button type="submit" name="deletedata-admin" class="btn btn-secondary"> Yes !! Delete it. </button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- #################################################################################################### -->



<div class="container">
    <div class="jumbotron">
        <div class="card">
          
        </div>    
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#studentaddmodal">
                    Register Admin
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

            <?php
                $connection = mysqli_connect('localhost', 'root', '','tworings');
             

                $query = "SELECT * from users where ut=1";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table id="datatableid" class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th scope="col"> ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name </th>
                            <th scope="col"> NIC </th>
                            <th scope="col"> Contact </th>
                            <th scope="col"> Email </th>
                            <th scope="col"> Action </th>
                        </tr>
                    </thead>
            <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['Id']; ?> </td>                            
                            <td> <?php echo $row['Fname']; ?> </td>                            
                            <td> <?php echo $row['Lname']; ?> </td>                            
                            <td> <?php echo $row['Nic']; ?> </td>                            
                            <td> <?php echo $row['Tp']; ?> </td>      
                             <td> <?php echo $row['Email']; ?> </td>                         
                            <td> 
                                <button type="button" class="btn btn-success editbtn"> EDIT </button>
                            &nbsp &nbsp
                                <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                            </td>
                        </tr>
                    </tbody>
            <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                </table>
            </div>
        </div>


    </div>
</div>
<script>

$(document).ready(function () {
    $('.editbtn').on('click', function() {
        
        $('#editmodal').modal('show');

        
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#id').val(data[0]);
            $('#fname').val(data[1]);
            $('#lname').val(data[2]);
            $('#nic').val(data[3]);
            $('#tp').val(data[4]);
            $('#email').val(data[5]);
    });
});

</script>



<script>

$(document).ready(function () {

    $('.deletebtn').on('click', function() {
        
        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);
      
    });
});

</script>


</body>
</html>
