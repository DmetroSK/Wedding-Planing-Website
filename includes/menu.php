
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

 
  <a class="navbar-brand" href="index">Two Rings</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarColor02">

  <div class="mx-auto">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index">Home
        </a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="aboutus">About Us
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index#services">Services</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="booknow">Book Now</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="index#gallery">Gallery</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact">Contact Us</a>
      </li>
      
   
    </ul>
         
</div>
      
     
      <div class="dropdown">
  <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#registermodal"> Register</button>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</button>
 
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" data-toggle="modal" data-target="#loginmodal">Login</a>
    <a class="dropdown-item" href="mybooking">Booking</a>
    <a class="dropdown-item" href="logout">Logout</a>
  </div>
</div>

  
</nav>



<!-- Modal -->
<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="database/function" method="POST">

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
                  <label>Address</label>
                  <textarea class="form-control" name="txt_addr"  type="text" placeholder="Enter Address" rows="3"></textarea>
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
                <button type="submit" name="insertdata-user" class="btn btn-secondary">Register</button>
            </div>
        </form>

    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="database/function" method="POST">

            <div class="modal-body">
                
             
             
                <div class="form-group">
                    <label> Email </label>
                    <input type="email" name="txt_email" class="form-control" placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label> Passowrd </label>
                    <input type="password" name="txt_pwd" class="form-control" placeholder="Enter Password">
                </div>

               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="login" class="btn btn-secondary">Login</button>
            </div>
        </form>

    </div>
  </div>
</div>