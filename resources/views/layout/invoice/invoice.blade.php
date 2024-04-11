<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }
        header {
            position: fixed;
            top: 0.9cm;
            left: 0.9cm;
            right: 0.9cm;
            text-align: center;
            line-height: 0.6cm;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        table, td, th {
            border: 0;
        }
        th{
            font-size: 40px;
            text-align: left;
            padding: 25px;
            font-family:Arial,Verdana,sans-serif;
        }
        td{
            padding-left: 25px;
        }

        body {
                margin-top: 11cm;
                margin-left: 0.9cm;
                margin-right: 0.9cm;
                margin-bottom: 2cm;
                font-family:Arial, Helvetica, sans-serif;
                
            }
        .test, .terms_condition{
            width: 100%;
            border-collapse: collapse;
            border: 0;
        }
        .test th, .terms_condition th{
            font-size: 15px;
            padding-left: 25px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 0;
        }
        .test td, .test th{
            border: 1px solid black;
        }
        .terms_condition td{
            border: 0;
            font-size: 12px;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <header>
            <table>
                <tr>
                    <th style="width: 60%">
                        ASD Laboratory <br>

                        <div style="font-size: 14px; line-height: 0.5cm; font-weight:10px;">
                            C-75 Gali No-36 <br>
                            Mahavir Enclave Part-3 New Delhi <br>
                            Delhi Pincode-110059 <br>
                            Website : www.asdlab.online <br>
                            Email :  info@asdlab.online <br>
                        </div>
                    </th>
                    <th style="padding: 20px;">
                        <img src="assets/img/logo.jpg" width="100px" height="100px;">
                        <div style="font-size: 18px; line-height: 0.5cm; font-weight:bold; padding-top:20px;">
                            INVOICE
                        </div>
                    </th>
                </tr>
            </table>
            @php
                $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
            @endphp
            <table>
                <tr>
                    <td style="width: 60%;">Invoice Date : {{date_format(date_create($patient->date.$patient->time),"d-m-Y h:i:A")}}</td>
                    <td>{!! $generator->getBarcode($patient->uniq_id, $generator::TYPE_CODE_128) !!}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Invoice ID : {{$patient->uniq_id}}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td style="font-size:24px; font-weight:bold;">Bill To</td>
                </tr>
                <tr>
                    <td>{{$patient->title}} {{$patient->name}}</td> 
                </tr>
                <tr>
                    <td>{{$patient->gender}} / {{$patient->age}}</td> 
                </tr>
                <tr>
                    <td>Refer By : {{$patient->advice_by_doctor}}</td> 
                </tr>
                <tr>
                    <td>Mobile No : {{$patient->mobile}}</td> 
                </tr>
            </table>
           
        </header>
        <!---------------End Header------------------>
        <!---------------Footer------------------>
        <footer>
           
        </footer>
        <!---------------End Footer------------------>
        
        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <table class="test">
                <tr>
                    <th>SN</th>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Amount</th>
                </tr>
                @if (count($tests)>0)
                   @php
                       $sn=0;
                       $total=0;
                   @endphp
                   @foreach ($tests as $test)
                       @php
                           $total+=$test->price;
                       @endphp
                       <tr>
                           <td>{{++$sn}}</td>
                           <td>{{$test->test_name}}</td>
                           <td>1</td>
                           <td>{{$test->price}}</td>
                           <td>{{$test->price}}</td>
                       </tr>
                   @endforeach
                   <tr>
                       <td colspan="3"></td>
                       <td colspan="2">Total : {{$total}}</td>
                   </tr>
                   
                   <tr>
                       <td colspan="5">Ammount In Words : {{ ucwords(NumConvert::word($total)) }}  Rupees Only.</td>
                   </tr>
                   
                @else
                <tr>
                    <th colspan="5">Empty</th>
                </tr>
                @endif
            </table> 
            <br>
            <table class="terms_condition">
                <tr>
                    <th colspan="5">TERMS AND CONDITIONS</th>
                </tr>
                <tr>
                    <td>1.</td>
                   <td colspan="4">Please submit your payment to ASD Lab Cash Counter only and collect your payment invoice.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td colspan="4">All disputes are subject to ASD Lab only.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td colspan="4">If any disputes or query please contact ASD Lab or you can contact info@asdlab.online, you also send message though website www.asdlab.online contact us section.</td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td>I/we hereby certify that the information on this invoice is true and correct.</td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right:40px;">Signature</td>
                </tr>
                <tr>
                    <td style="text-align: right; padding-right:40px;">
                        <img src="temp/shrinath.jpg" width="150px" height="70px;">
                    </td>
                </tr>
            </table>
        </main>           
    </div>
</body>
</html>