<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href={{ asset('css/dashbord.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
     <div class="container-fluid" id="header">
         <div class="row" style="background:#1abc9c;">
            <div style="width:100%;">
                <h4 style="color: white; margin-left:20px; padding: 5px; font-weight: bold;" id="ha">ASD Lab</h4>
                <h5 class="logout">Logout</h5>
                <span style="font-size:30px;cursor:pointer" class="bi" onclick="openNav()">&#9776;</span>
            </div>  
         </div>
        
          <div class="row" id="header_down">
            <div class="col-sm-4 col-md-3 col-lg-2" style="background-color: #34495e;" id="menubar">
              <ul>
                <li type="button" ><h5 class="changeColor">Dashboard</h5></li>
                <li>
                  <div class="dropdown">
                        <h5 class=" dropdown-toggle changeColor" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Profile
                        </h5>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="">Update Profile</a>
                          <a class="dropdown-item" href="">Change password</a>
                        </div>
                  </div>
                </li>
                <li>
                    <div class="dropdown" id="new_patient1">
                          <h5 class="changeColor" type="button">
                            Register New Patients
                          </h5>
                    </div>
                  </li>
                  <li id="worklist">
                    <div class="dropdown">
                          <h5 class="changeColor" type="button">
                            Worklist
                          </h5>
                    </div>
                  </li>
              </ul>
            </div>
            <div class="col-sm-8  col-md-9 col-lg-10" style="" id="content">
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('success'))
                          <div class="alert alert-success"> {{Session::get('success')}}</div>
                          <script>
                            setTimeout(function(){$('.alert').hide();}, 5000);
                          </script>
                        @endif
                        <h1>{{ "Welcome ".$data->name }}</h1>
                    </div>
                </div>
                 <div class="row">
                     <div class="col-lg-3 col-md-3 bg" id="worklist1">
                        <div id="total_product">
                            <i class="fa-solid fa-rectangle-list fa-4x"></i>
                             <h5>Worklist</h5>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-3 bg" id="new_patient">
                        <div id="total_customer">
                           <i class="fa-solid fa-monument fa-4x"></i>
                            <h5>Registered New Patient</h5>
                       </div>
                    </div>
                     <div class="col-lg-3 col-md-3 bg">
                        <div id="total_invoice">
                            <i class="fa-solid fa-user fa-4x"></i>
                            <h5>Profile</h5>
                       </div>
                     </div>
                     <div class="col-lg-3 col-md-3 bg" id="add_Investigations">
                        <div id="paid_bill">
                            <i class="fa-solid fa-house-flood-water-circle-arrow-right fa-4x"></i>
                            <h5>Manage Investigations</h5>
                       </div>
                     </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-3 col-md-3 bg" id="Manage_doctors">
                      <div id="total_product">
                         <i class="fa-solid fa-rectangle-list fa-4x"></i>
                         <h5>Manage Doctors</h5>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-3 bg" id="doctors_invoice">
                      <div id="total_product">
                         <i class="fa-solid fa-rectangle-list fa-4x"></i>
                         <h5>Doctors Invoice</h5>
                       </div>
                    </div>
                 </div>
            </div>
          </div>
     </div>
     <!--sidenavbar toggle-->
     <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <ul>
        <li type="button" ><h5 class="changeColor">Dashbord</h5></li>
        <li type="button" ><h5 class="changeColor">Worklist</h5></li>
        <li type="button" id="new_patient2"><h5 class="changeColor">Register New Patient</h5></li>
        <li type="button" ><h5 class="changeColor">Profile</h5></li>
        <li type="button" ><h5 class="changeColor">Add Investigations</h5></li>
        <li type="button" ><h5 class="changeColor logoutMobile">Logout</h5></li>
      </ul>
    </div>
    
     <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }

      </script>
      <script>
        $(document).ready(function(){
            $('.logout,.logoutMobile').on('click',function(){
                if (confirm("Are you sure want to Logout") == true){
                    window.location.replace('logout');
                }
            });

            $('#worklist,#worklist1').on('click',function(){
                    window.location.replace('worklist');
            });
            
            $('#new_patient,#new_patient1,#new_patient2').on('click',function(){
                    window.location.replace('/register new patient');
            });

            $('#add_Investigations').on('click',function(){
                    window.location.replace('/test list');
            });

            $('#doctors_invoice').on('click',function(){
                    window.location.replace('/doctors invoice');
            });

            $('#Manage_doctors').on('click',function(){
                    window.location.replace('/doctors');
            });
        });
      </script>
       
      
</body>
</html>
