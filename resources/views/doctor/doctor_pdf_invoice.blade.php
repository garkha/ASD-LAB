@php
    use App\Models\investigation;
    use App\Models\patient;
    $Total_amount = 0;
    $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
    $invoice_id = rand();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOCTOR INVOICE</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }
        body {
            margin-top: 3.7cm;
            margin-left: 0.9cm;
            margin-right: 0.9cm;
            margin-bottom: 3cm;
            
            font-family:Arial, Helvetica, sans-serif;
        }
        header {
            position: fixed;
            top: 0.9cm;
            left: 0.9cm;
            right: 0.9cm;
            text-align: center;
            line-height: 0.6cm;
            font-family:Arial, Helvetica, sans-serif;
        }
        .heading{
            color:brown;
            font-size: 28px;
        }
        .shubHedding{
            color:rgb(0, 0, 0);
            font-size: 24px;
        }

        /** Define the footer rules **/
        footer {
            position: fixed; 
            bottom: 0cm; 
            left: 0.5cm;
            right: 0.5cm;
            height: 3cm;
            text-align: right;
            font-family:Arial, Helvetica, sans-serif;
            
            
        }
        footer .pagenum:before {
            content: counter(page);
            font-family:Arial, Helvetica, sans-serif;
        }
        #test{
            width: 100%;
            padding-left: 5px;
            line-height: 20px;
            font-family:Arial, Helvetica, sans-serif;
            width: 70%;

        }
        #patient{
            width: 100%;
            border: 1px solid;
            padding-left: 5px;
            font-weight: bold;
            font-family:Arial, Helvetica, sans-serif;
        }
        #comment{
            text-align: center;
            font-family:Arial, Helvetica, sans-serif;
        }
        #barcode{
            width: 100%;
            padding-left: 5px;
            font-family:Arial, Helvetica, sans-serif;
        }
        #data,#info{
            width: 100%;
            border-collapse: collapse;
        }
        #data, #data td, #data th{
            border: 1px solid;
        }
        #info{
            font-weight: bold;
        }
        
    </style> 
</head>
<body>
    <!---------------Header------------------>
    <header>
        <Span class="heading">ASD Laboratory</Span><br>
            <Span>
                C-75 Gali No-36 Mahavir Enclave Part-3 New Delhi , Pincode-110059
            </Span><br>
            <span>
                Call : +91 8920871162 , +91 8882335434
            </span><br>
            <span>
                Email : info@asdlabs.onlin
            </span>
            <hr>
    </header>
    <!---------------End Header------------------>
    <!---------------Footer------------------>
    <footer>
        <table style="width:100%;line-height:5px;">
            <tr>
                <td style="width:40%;text-align:center;">
                    Page <span class="pagenum"></span>
                </td>
                <td style="width:45%; text-align:center;">
                    <img src="temp/asd.JPG" width="65px" height="65px;">
                    <!--<img src="{{ url('temp/asd.JPG')}}" width="65px" height="65px;">-->
                    <span style="font-size:10px;"></span>
                
                </td>
                <td style="width:45%; text-align:right;line-height:20px;">
                    <img src="temp/shrinath.jpg" width="150px" height="50px;">
                    <!--<img src="{{ url('temp/shrinath.jpg') }}" width="150px" height="50px;">-->
                    
                </td>
            </tr>
        </table>  
    </footer>
    <!---------------End Footer------------------>
     <!-- Wrap the content of your PDF inside a main tag -->
     <main>
        <!--------------INVOICE DETAILS--------->
        

        <table id="info">
           <tr>
              <th colspan="4"  style="font-size:18px; font-weight:bold;">
                 INVOICE DETAILS
              </th>
           </tr>
           <tr>
            <td style="width: 10%">{!! $generator->getBarcode("123456789", $generator::TYPE_CODE_128) !!}</td>
            <td colspan="3"></td>
           </tr>
           <tr>
            <td style="width: 10%">INVOICE ID : {{$invoice_id}}</td>
            <td colspan="3"></td>
           </tr>

           <tr>
              <td style="text-align: left; width:35%;">To </td>
              <td colspan="3" style="text-align: left;">: &nbsp;&nbsp;&nbsp;{{ "Dr. ". strtoupper($doctor)}}</td>
           </tr>

            <tr>
              <td style="text-align: left;">STATEMENT FROM </td>
              <td style="text-align: left; width:15%;">: &nbsp;&nbsp;&nbsp;{{date_format(date_create($from_date),"d-m-Y")}}</td>

              <td style="text-align: left; width:10%">&nbsp;&nbsp;&nbsp; To </td>
              <td style="text-align: left;">&nbsp;&nbsp;&nbsp;{{date_format(date_create($to_date),"d-m-Y")}}</td>
           </tr>

        </table><br>
        <!-------------END-INVOICE DETAILS--------->
        @php
            $patient_number = 0;
        @endphp
        @foreach ($patient as $patients)
          @php
              $test = patient::find($patients->id)->investigation;
              $Amount = 0;
              $sn = 0;
              $patient_number++;
          @endphp
          <table id="data">
               <tr>
                  <th style="width: 85%; background-color:rgb(245, 230, 63); text-align:left;">({{$patient_number }}). {{ strtoupper($patients->name). " / ".strtoupper($patients->gender)." / ".strtoupper($patients->age)}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DATE : &nbsp;{{date_format(date_create($patients->date),'d-m-Y')}}</th>
                  <th style="background-color:rgb(245, 230, 63);">AMOUNT</th>
               </tr>
               @foreach ($test as $tests)
                   @php
                      $Amount +=$tests->price;
                      $sn ++;
                      $Total_amount +=$tests->price;
                   @endphp
                   <tr>
                      <td style="background-color:rgba(234, 220, 64, 0.419);">&nbsp;&nbsp;{{$sn}}. &nbsp;&nbsp; {{strtoupper($tests->test_name)}}</td>
                      <td style="background-color:rgba(234, 220, 64, 0.419);">{{$tests->price}}</td>
                   </tr>
               @endforeach
               <tr>
                  <td style="text-align:right; background-color:rgba(234, 220, 64, 0.419);">TOTAL AMOUNT :</td>
                  <td style="background-color:rgba(234, 220, 64, 0.419);">{{$Amount}}</td>
               </tr>
          </table><br>
       @endforeach
        <span style="font-size:18px; font-weight:bold;">TOTAL AMOUNT : {{$Total_amount}}</span>
        <br>
        <span>Total amount in Words : {{$amount_in_words = ucwords(NumConvert::word($Total_amount))}} only.</span>
    </main>
</body>
</html>