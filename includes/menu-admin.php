


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

 
  <a class="navbar-brand" href="../admin/dashboard">Two Rings</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarColor02">

  <div class="mx-auto" style="width: 20%;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../admin/dashboard">Dashboard
        </a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="../admin/users">Users
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../admin/admin">Admins</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../admin/booking">Bookings</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../admin/contact">Contacts</a>
      </li>
   
    </ul>
         
</div>
          
      <button id="logoutBtn" class="btn btn-secondary my-2 my-sm-0">Logout</button>

  
</nav>

<script type="text/javascript">
    document.getElementById("logoutBtn").onclick = function () {
        location.href = "../logout";
    };
</script>
