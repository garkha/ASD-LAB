@php
    $patient_detals = session('patient_detals');
    $patient_test = session('patient_test');
    date_default_timezone_set("Asia/Kolkata");
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>invoice</title>
    <style>
        .outer{
            border: 1px solid black; 
             
            
        }
        .company{
            border: 1px solid black; 
            height:170px; 
            padding: 10px;
        }
        .invoice{
            text-align: center; 
            margin-top:0px; 
            text-shadow: 2px 2px #8f86f3; 
            font-family: "Lucida Console", "Courier New", monospace;
        }
        .company_name{
            text-align: left; 
            margin-top: -10px;
            margin-left: 10px;
            font-family: "Lucida Console", "Courier New", monospace;
        }
        .address{
            margin-top:-20px;
            padding: 5px;
        }
        .a{
            height: 90px;
            padding: 5px;
            width: 300px;
        }
        .b{
            height: 125px;
            padding: 10px;
        }
        .test{
            height: auto;
            width: 97%;
            padding: 5px;
        }
        .footer{
            width: 97%;
            height: auto;
            padding: 5px;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 3px;
            text-align: center;
        }
        #customers tr{background-color: #f2f2f2;}
        #customers tr:hover {background-color: #ddd;}
        #customers th {
            padding-top: 1px;
            padding-bottom: 5px;
            text-align: left;
            background-color: #e5c581;
            color: #161513;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="outer">
        <div class="company">
            <h1 class="invoice">Invoice<hr></h1>
            <h2 class="company_name">ASD Laboratory</h2>
            <p class="address">C-75 Gali No-36
            Mahavir Enclave Part-3
            New Delhi , Pincode-110059 <br>
            <b>Call :</b> +91 8920871162 , +91 8882335434 <br>
            <b>Email :</b> info@asdlab.online</p>
        </div>
        <div class="a">
            @foreach ($patient_detals as $patient)
            <p>Inovoice Date : {{date_format(date_create($patient->date),"d-m-Y")}}
                <br>
                Inovoice No   : {{$patient->uniq_id}}
                <br>
                {!! $generator->getBarcode($patient->uniq_id, $generator::TYPE_CODE_128) !!}
            </p>
        </div>
        <div class="b">
            <p><b>Bill To</b><br>
                <b>{{$patient->title }} {{ strtoupper($patient->name)}} <br>
                Age : {{$patient->age}} <br>
                Gender : {{$patient->gender}} <br>
                Refer By : Dr.{{$patient->advice_by_doctor}} <br>
                Mobile Number: {{$patient->mobile}}</b><br>
                @endforeach
            </p>
        </div>
        @php
          $total_amount = 0;
          foreach ($patient_test as $test){
              $total_amount += $test->price;
            }
        @endphp
        <div class="test">
            <table id="customers">
                <tr>
                  <th>Description</th>
                  <th>Qty</th>
                  <th>Amount</th>
                </tr>
                @foreach ($patient_test as $test)
                  <tr>
                     <td style="text-align: left">{{ucwords($test->test_name)}}</td>
                     <td>1</td>
                     <td>{{$test->price}}</td>
                   </tr>
                @endforeach
                <tr>
                    <td style="border: 0px solid rgb(251, 248, 248);"></td>
                    <td colspan="2" style="text-align: left;">Total Amount Rs.&nbsp;&nbsp; {{$total_amount}}</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>I/we hereby certify that the information on this invoice is true and correct.</p>
            <p>SIGNATURE :</p>
        </div>

        
    </div>
</body>
</html>
