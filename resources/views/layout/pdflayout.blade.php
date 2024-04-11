<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download Report</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }
        body {
            margin-top: 7.3cm;
            margin-left: 0.9cm;
            margin-right: 0.9cm;
            margin-bottom: 3.1cm;
            font-family:Arial, Helvetica, sans-serif;
            line-height: 0.5cm;
        }
        header {
            position: fixed;
            top: 3.8cm;
            left: 0.9cm;
            right: 0.9cm;
            text-align: center;
            line-height: 0.5cm;
            font-family:Arial, Helvetica, sans-serif;
            color: black;
        }

        /** Define the footer rules **/
        footer {
            position: fixed; 
            bottom: 0.2cm; 
            left: 0.9cm;
            right: 0.9cm;
            height: 2.8cm;
            text-align: right;
            font-family:Arial, Helvetica, sans-serif; 
        }
        footer .pagenum:before {
            content: counter(page);
            font-family:Arial, Helvetica, sans-serif;
        }
        #barcode{
            width: 100%;
            padding-left: 5px;
        }
        #patient{
            width: 100%;
            padding-left: 5px;
            font-family:Arial, Helvetica, sans-serif;
            border: 1px solid black;
        }
        h4{
            text-align: center;
        }
        #test{
            width: 100%; 
        }
        #test th{
            text-align: left;
        }
        #test td{
            font-size: 14px;
        }
        .result{
            width: 145px;
        }
        .Biological{
            width: 170px;
        }
        .Unit{
            width: 80px; 
        }
       #test td:first-child{
        padding-left: 10px;
       }
        #end_report{
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
        }
        .method_name{
            font-size: 10px;
        }
        .value_heilight{
            font-weight: bold; 
            text-decoration:underline;
        }
    </style>
    @yield('style')
</head>
<body>
    <header>
        <table id="barcode">
            <tr>
                <th style="width: 80%"></th>
                <th></th>
                <th></th>
                <th>
                    @php
                       $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                    @endphp
                    {!! $generator->getBarcode($patient->uniq_id, $generator::TYPE_CODE_128) !!}
                </th>
            </tr>
        </table>
        <table id='patient'>
            <tr>
                <td>Patient ID</td>
                <td style="font-weight: bold;">: {{$patient->uniq_id}}</td>
                <td>Refered By</td>
                <td style="font-weight: bold;">: {{ $patient->advice_by_doctor }}</td>
            </tr>
            <tr>
                <td>Patient Name</td>
                <td style="font-weight: bold;">: {{$patient->title}} {{$patient->name}}</td>
                <td>Sample Coll. Date</td>
                <td>: {{date_format(date_create($patient->date),"d-m-Y")." ".date('h:i:s A', strtotime($patient->time))}}</td>
            </tr>
            <tr>
                <td>Age/Sex</td>
                <td>: {{$patient->age}} Yrs / {{$patient->gender}}</td>
                <td>Registration Date</td>
                <td>: {{date('d-m-Y h:i:s A', strtotime($patient->created_at))}}</td>
            </tr>
            <tr>
                <td>Patient Mobile No</td>
                   @if ($patient->mobile)
                     <td>: {{$patient->mobile}}</td>
                   @else
                     <td>: Not available</td>
                   @endif
                <td>Reported Date</td>
                <td>: {{date('d-m-Y h:i:s A', strtotime($test->created_at)) }}</td>
            </tr>
        </table>
    </header>
    <footer>
        <table style="width:100%;line-height:5px;">
            <tr>
                <td style="width:40%;text-align:center;">
                    Page <span class="pagenum"></span>
                </td>
                <td style="width:45%; text-align:center;">
                    <img src="temp/asd.JPG" width="65px" height="65px;">
                    <span style="font-size:10px;"></span>
                </td>
                <td style="width:45%; text-align:right;line-height:20px;">
                    <img src="assets/img/doctors/doctor_sig.jpg" width="100px" height="30px;"><br>
                    <span>Dr. Om Prakash Midha <br> MBBS, MD <br> DMC No. 2490</span>
                </td>
            </tr>
        </table>
    </footer>
    <main>
        @yield('body')
    </main>
</body>
</html>