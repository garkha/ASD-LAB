@extends('layout.asd')
@section('title','worklist')
{{--------------------------------HEAD SCRIPT--------------------------------}}
@section('head-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $( function() {
                $( "#datepicker" ).datepicker({
                    dateFormat: 'dd-mm-yy'
                });
            });
        });
    </script>
@endsection
{{----------------------------- END HEAD SCRIPT ------------------------------}}

{{------------------------------------- STYLE --------------------------------}}
@section('style')
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }
    
        th, td {
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even){background-color: #f2f2f2}
        tr:first-child{background-color:#3fbbc0;}
        
        tr[data-href] {
            cursor: pointer;
        }

        input{
            border-color: #3fbbc0;
            border-radius: 10px;
            text-align: center;
        }

        #worklist tr:hover {
            background-color: coral;
        }

        @media only screen and (max-width: 600px) {
            table {
                width: 800px;
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
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box" style="padding: 20px;">
                                    @php
                                    date_default_timezone_set('Asia/Kolkata');
                                    $dt = date("d-m-Y");
                                    @endphp
                                    <div class="row">
                                        <div class="col-md-6 py-3">
                                            <span>Select date : </span>
                                            <input type="text" name="date" id="datepicker" value="{{$dt}}">
                                            <input type="checkbox" name="" id="selectdate" value="selectdate">
                                        </div>
                                        <div class="col-md-6 py-3">
                                            <span>Search patient : </span>
                                            <input type="search" name="search" id="search" value="" placeholder="search patient">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row" style="overflow-x:auto;">
                                       <div style="overflow-x:auto;" id="worklist_data">
                                          {{----worklist came from ajax----}}
                                       </div>
                                    </div>
                                <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
{{------------------------------- END MAI BODY ------------------------------}}


{{------------------------------- BODY SCRIPT -------------------------------}}
@section('body-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $(document.body).on('click','tr[data-href]',function(){
               window.location.href = this.dataset.href;
            });

            show_worklist();

            $('#datepicker').on('change', function(){
                show_worklist();
            });
            
            function show_worklist(){
                var inv_date = $('#datepicker').val();
                $.ajax({
                    url: "{{ route('get_patient_list') }}",
                    type: 'GET',
                    data: {'inv_date': inv_date},
                    success: function(data){
                        $('#worklist_data').html(data);
                    }
                });
            }

            $('#search').on('keyup', function(){
                let a = $(this).val();
                let b = $('#datepicker').val();

                if($('#selectdate').is(':checked')){

                    $.ajax({
                    url : "{{ route('search_patient')}}",
                    type: 'GET',
                    data: {'a':a, 'b':b},
                    success: function(data){
                        $('#worklist_data').html(data);
                        }
                    });

                }else{
                    $.ajax({
                    url : "{{ route('search_patient')}}",
                    type: 'GET',
                    data: {'a':a, 'b':0},
                    success: function(data){
                        $('#worklist_data').html(data);
                        }
                    });
                }
                    
            });

        });
    </script>
@endsection
{{------------------------------- BODY SCRIPT -------------------------------}}
