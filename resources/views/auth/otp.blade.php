<!DOCTYPE html>
<html>
<head>

<style>
.card {
  border: 1px solid rgb(0, 0, 0);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white;
}

.date {
  color: grey;
  font-size: 22px;
}

.card button {
  font-weight: 700;
  border: none;
  outline: 0;
  padding: 12px;
  color: black;
  background-color: #d4ecf8;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
.outer{
    background-color:rgb(254, 254, 16);
    padding-top: 25px;
    padding-bottom: 25px;
}
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="outer">
    
    <div class="card">
        <img src={{url('assets/img/mail/inbox.jpg')}} alt="inbox" style="width:100%">
       <p>Dear Customer</p>
       <h2>{{$otp}}</h2>
       <p>is your OTP to continue ASD laboratory Do Not share it with anyone.</p>
       
     </div>
     
</div>
</body>
</html>
