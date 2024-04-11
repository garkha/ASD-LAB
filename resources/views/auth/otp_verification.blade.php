<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   form{
        padding-left:50px;
        padding-right:50px;
        padding-bottom:30px;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }
      span{
        color:#0f4e20e0; font-size:20px; font-weight:bold;
      }
      a:hover{
        color:red;
      }
      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
       }

       .close:hover,
       .close:focus {
        color: red;
        cursor: pointer;
       }
       .row{
        font-family: Arial, Helvetica, sans-serif;
        font-size:16px;
       }
       h3{
        font-size:15px;
       }
  </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3" id="col">
                <form class="modal-content animate" action="" method="post">
                    
                    @csrf
                    <div class="imgcontainer">
                        <span class="close">&times;</span>
                        <img src="assets/img/logo.png" style="width:100px; height:100px;">
                        <h3>OTP will send to your registered Email ID</h3>
                        
                        @if(Session::has('failed'))
                           <div class="alert alert-danger"> {{ Session::get('failed') }}</div>
                        @endif
                        @if(Session::has('success'))
                           <div class="alert alert-success"> {{ Session::get('success') }}</div>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="OTP">Verify OTP</label>
                        <input type="number" class="form-control" name="otp" value="{{ old('otp') }}" placeholder="Enter OTP">
                        <span class="text-danger">@error('otp') {{$message}} @enderror</span>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button><br>

                </form>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('.close').addEventListener('click', function(){
            window.location.replace("/allClose");
        });
    </script>

</body>
</html>