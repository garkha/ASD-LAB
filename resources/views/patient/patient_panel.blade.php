@extends('layout.asd')
@section('title','Patient Panel')

{{--------------------------------HEAD SCRIPT--------------------------------}}
@section('head-script')
@endsection
{{----------------------------- END HEAD SCRIPT ------------------------------}}



{{------------------------------------- STYLE --------------------------------}}
@section('style')
    <style>
        tr:nth-child(even){background-color: #f2f2f2}
        th {
        background-color: #0d6efd;
        color: #f9fafb;
        font-weight: normal;
        padding: 11px;
        }
        td{
        font-family: "Times New Roman", Times, serif;
        }
        .patient{
            width: 100%;
            border-collapse: collapse;
        }
        .patient td{
            padding-left: 10px;
            padding-top: 8px;
            text-align: left;   
        }

        .test{
            width: 100%;
            border-collapse: collapse;
        }
        .test td, .test th{
            padding-left: 10px;
            padding-top: 8px;
            text-align: left;   
        }

        .btn {
            text-decoration: none;
            cursor: pointer;
            width: 100%
        }
        .btn:hover {
            opacity: 0.5;
        
        }

        .add_result_button {
            background-color: #f72a2a;
            border-radius: 5px;
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            font-size: 16px;
            margin-top: -50px;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
            width: 100%
        }
        .add_result_button:hover {
            opacity: 0.5;
            background-color:rgb(245, 83, 34);
            color: #f5ebe9;
        }
        .update_result_button{
            background: #f4ee3e; 
            color:black;
            border-radius: 5px;
            border: none;
            padding: 5px 15px;
            text-align: center;
            font-size: 16px;
            margin-top: -50px;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
            width: 100%
        }
        .update_result_button:hover {
            opacity: 0.5;
            background-color:rgb(245, 83, 34);
            color: #f5ebe9;
        }
        .download_button{
            background: #4da708f7;
            border-radius: 5px;
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            font-size: 16px;
            margin-top: -50px;
            opacity: 1;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
            width: 100%
        }
        .download_button:hover {
            opacity: 0.5;
            background-color:rgb(245, 83, 34);
            color: #f5ebe9;
        }

        
        @media only screen and (max-width: 600px) {
            .patient td{
                padding-left: 10px;
                padding-top: 3px;
                padding-bottom: 3px;
            }
            .test{
                width:1100px;
                
            }
            .my_btn{
                margin-top: 12px;
            }
            th{
                padding: 11px;
            }
            .add_result_button,.update_result_button,.download_button {
                width: 200px;
            }
        }
    </style>
@endsection
{{---------------------------------- END STYLE------------------------------}}

{{---------------------------------- MAI BODY ------------------------------}}
@section('main-body')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mt-5 shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="col-md-12">
                        @if (session('success'))
                          <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('fail'))
                          <div class="alert alert-danger">{{ session('fail') }}</div>
                        @endif
                    </div>
                    <div class="col-md-6">

                        <table class="patient">
                            <tr>
                                <th colspan="2">PATIENT DETAILS</th>
                            </tr>
                            <tr>
                                <td>Patient ID</td>
                                <td>: {{$patient->id}}</td>
                            </tr>
                            <tr>
                                <td>Patient Name</td>
                                <td>: {{ucwords($patient->title)  }} {{ ucwords(strtolower($patient->name)) }}</td>
                            </tr>
                            <tr>
                                <td>Gender / Age</td>
                                <td>: {{ucwords($patient->gender)  }} / {{ ucwords(strtolower($patient->age)) }}</td>
                            </tr>
                            <tr>
                                <td>Refer By</td>
                                <td>: {{ucwords(strtolower($patient->advice_by_doctor))}}</td>
                            </tr>
                            <tr>
                                <td>Registration Date</td>
                                <td>: {{date_format(date_create($patient->date.$patient->time),"d-m-Y h:i:A")}}</td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                @if ($patient->mobile)
                                    <td>: {{$patient->mobile}}</td>
                                @else
                                    <td>: NULL</td>
                                @endif
                            </tr>
                        </table>
                    
                    </div>

                    <div class="col-md-6 my_btn">
                        <div class="row">
                            <div class="col-md-12">
                                <button id="update_patient_details" class="btn btn-info btn-lg btn-block">
                                    UPDATE PATIENT DETAILS
                                </button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button id="invoice" class="btn btn-success btn-lg btn-block">
                                    PATIENT INVOICE
                                </button>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button id="add_and_cancel_test" class="btn btn-warning btn-lg btn-block">
                                    Add / Cancel Test
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div style="overflow-x:auto;" id="as">
                            @if (count($Tests)>0)
                                <table class="test">
                                    <tr>
                                        <th>SN</th>
                                        <th>Test Name</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                    @php
                                    $sn = 0;
                                    @endphp
                                    @foreach ($Tests as $Test)
                                        <tr>
                                            <td>{{++$sn}}</td>
                                            <td>{{$Test->test_name}}</td>
                                            <td><a href="/add result value/{{$Test->mv_name}}/{{base64_encode($patient->id)}}" class="add_result_button" style="height:30px;">Add result value</a></td>
                                            <td><a href="/update result value/{{$Test->mv_name}}/{{base64_encode($patient->id)}}" class="update_result_button" style="height:30px;">Update result value</a></td>
                                            <td><a href="/download report/{{$Test->mv_name}}/{{base64_encode($patient->id)}}" class="download_button" style="height:30px;">Download Report</a></td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                            <table class="test">
                                    <tr>
                                        <tr>
                                            <th>SN</th>
                                            <th>Test Name</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                        <tr>
                                            <td colspan="5" style="text-align: center; font-weight:bold;">
                                                !----------- No Tests selected for {{ucwords($patient->title)  }} {{ ucwords(strtolower($patient->name)) }} please add test. -----------!
                                            </td>
                                        </tr>
                                    </tr>
                            </table>
                        @endif
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Contact Section -->
    </main>
@endsection
{{------------------------------- END MAI BODY ------------------------------}}


{{------------------------------- BODY SCRIPT -------------------------------}}
@section('body-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#add_and_cancel_test').on('click',function(){
                window.location.replace("/investigation");
            });
            $('#update_patient_details').on('click',function(){
                window.location.replace("/update patient details");
            });
            $('#invoice').on('click',function(){
                window.location.replace("/invoice");
            });
        });
    </script>
@endsection
{{------------------------------- BODY SCRIPT -------------------------------}}
