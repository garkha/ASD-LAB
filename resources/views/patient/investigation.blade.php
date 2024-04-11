@extends('layout.asd')
@section('title','Investigation')
{{--------------------------------HEAD SCRIPT--------------------------------}}
@section('head-script')
    
@endsection
{{----------------------------- END HEAD SCRIPT ------------------------------}}

{{------------------------------------- STYLE --------------------------------}}
@section('style')
    <style>
        ol{
            color:black;
            font-weight:bold;
            font-size:18px;
        }
        ol li:hover{
            color:green;
            cursor: pointer;
        }
        input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{
            -webkit-appearance: none;
            margin:0;
        }
        .price{
            height: 30px;
            width: 100px;
            border: none;
            background: #f5aa94;
        }
        input[type=number]:focus {
            background-color: aqua;
            font-weight: bold;
        }
        .button {
            background-color: #f4511e;
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
        }
        .button:hover {
            opacity: 1;
            background-color:yellow;
            color: #f4511e;
        }
        
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 600px;
            line-height: 1cm;
        }
        th, td {
           text-align: left;
        }
        tr:nth-child(even){
            background-color: #e9e8e8;
        }
        @media only screen and (max-width: 600px) {
            table {
                width: 600px;
            }
            #test,#submit_and_close{
                width:100%;
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
            <div class="row mt-5">
                <!--End Add Investigation-->
                <div class="col-lg-6">
                    <form action="" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                @if (session()->has('patient_id'))
                                   <input type="hidden" id="patient_id" value="{{ session()->get('patient_id') }}">
                                @endif
                            </div>
                            
                            <div class="col-md-12">
                                <button type="button" class="button" id="submit_and_close">submit and close</button>
                            </div>
                            
                            <div class="col-md-12">
                                <span style="font-family: 'Times New Roman', Times, serif; font-size:20px; color:rgb(10, 5, 4);">
                                    Search Investigations...
                                </span> 
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col form-group mt-3">
                                <input type="text" name="investigation" class="form-control" id="test" placeholder="Serch Investigation">
                            </div>
                        </div>
                        <div class="my-3" id="test_list">
                            {{--TEST LIST CAME FROM AJAX--}}
                        </div>
                    </form>
                </div><!--End Add Investigation-->
                
                <!--Investigation List-->
                <div class="col-lg-6" style="padding: 0; margin:0;">
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            @if (session('message'))
                                <div class="alert alert-success">
                                  {{ session('message') }}
                                </div>
                            @endif
                            @if (session('fail'))
                               <div class="alert alert-danger">
                                  {{ session('fail') }}
                                </div>
                            @endif
                            
                            <div class="col-md-12 d-flex justify-content-center">
                                <label style="font-weight: bold; text-decoration:underline; padding-bottom:10px;">PATIENT ADVICE TEST</label>
                            </div>
                            <div class="row">
                                <div id="inv" style="overflow-x:auto;">
                                    @if (count($test)>0)
                                        @php
                                          $sn = 1;
                                        @endphp
                                        
                                        <table class="test_list">
                                            <thead>
                                                <tr class="bg-primary" style="color:white;">
                                                    <th>#</th>
                                                    <th>TEST NAME</th>
                                                    <th>PRICE</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($test as $tests)
                                                    <tr>
                                                       <td>{{$sn++}}.</td>
                                                       <td>{{$tests->test_name}}</td>
                                                       <td><input type="number" name="" id="price" class="price" value="{{$tests->price}}">
                                                           <input type="hidden" name="" id="" class="price" value="{{$tests->id}}">
                                                        </td>
                                                       <td><a href={{ url("delete/$tests->id")}}>DELETE</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
    
                                    @else
                                        <table class='table table-sm'>
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th style="color:white;">Empty test list...</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    @endif
    
                                </div><!--end Envestigation--->
                            </div>
                        </div>
                    </form>
                </div><!--End Investigation List-->
            </div>
        </div>
   </section><!-- End container Section -->
</main>
@endsection
{{------------------------------- END MAI BODY ------------------------------}}


{{------------------------------- BODY SCRIPT -------------------------------}}
@section('body-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#test').on('keyup', function(){
                var a = $(this).val();
                $.ajax({
                    url: "{{ route('findtest') }}",
                    type: 'GET',
                    data: {'name':a},
                    success: function(data){
                        $('#test_list').html(data);
                    }
                });
            });

            $(document).on('click','li', function(){
                var tetst_name = $(this).text();
                var patient_id = $('#patient_id').text();
                
                $.ajax({
                    url: "{{ route('addtest') }}",
                    type: 'GET',
                    data: {'test_name':tetst_name, 'patient_id':patient_id},
                    success: function(data){
                    
                        if(data == "Test Allready Added"){
                            alert(data);
                        }else if(data == "save"){
                            window.location.href="/investigation";
                        }else{
                            window.location.href="/investigation";
                        }
                        
                    }
                });

            })

            $('#closeBT').on('click', function(){
                window.location.href="destroy_session";
            });

            $('input[type=number]').on('focusout', function(){
                var price = $(this).val();
                var test_id = $(this).next().val();
                window.location.href="update_price/"+test_id+"/"+price; 
            });

            $('#submit_and_close').on('click',function(){
                window.location.href="/close investigation";
            })
        });
    </script>
@endsection
{{------------------------------- BODY SCRIPT -------------------------------}}
