@extends('layout.asd')
@section('title','Doctor Invoice')
@section('head-script')
<script>
    $( function() {
      $( ".datepicker" ).datepicker({
            dateFormat: 'dd-mm-yy'
      });
    });
</script>
@endsection
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
    </style>
@endsection
@php
  date_default_timezone_set('Asia/Kolkata');
  $dt = date("d-m-Y");
@endphp
@section('main-body')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12" style="text-align: center;">
                        <h4 style="text-decoration: underline;">DOCTORS INVOICE</h4>
                    </div>
                </div>
                <div class='row'>
                    <div class="col-md-3 pt-3">
                        <span>SELECT DATE FROM</span>
                        <input type="text" class="btn btn-outline-primary datepicker"  id="from_date" value="{{$dt}}" style="width:100%;">
                    </div> 
                    <div class="col-md-3 pt-3">
                        <span>SELECT DATE TO</span>
                        <input type="text" class="btn btn-outline-primary datepicker"  id="to_date" value="{{$dt}}" style="width:100%;">
                    </div> 
                    <div class="col-md-3 pt-3">
                        <span>SELECT DATE DOCTOR</span>
                        <select name="advice_by_doctor" id="doctor" class="form-control">
                            <option disabled selected>SELECT DOCTOR</option>
                            @foreach ($doctors as $doctor)
                              <option value="{{$doctor->name}}">{{$doctor->name}}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="col-md-3" style="margin-top: 40px;">
                        <input type="button" class="btn btn-primary"  id="submit" value="submit" style="width:100%;">
                    </div> 
                </div>
                <div class="row pt-5">
                    <div class="col-md-12" id="worklist_data">

                    </div>
                </div> 
            </div>
        </section>
    </main>
@endsection




@section('body-script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#submit').click(function(){
                $from_date = $('#from_date').val();
                $to_date = $('#to_date').val();
                $doctor = $('#doctor').val();
                if ($doctor != null) {
                    $.ajax({
                        url: "{{ route('get_doctor_invoice') }}",
                        type: 'GET',
                        data: {'from_date': $from_date, 'to_date': $to_date, 'doctor':$doctor},
                        success: function(data){
                            $('#worklist_data').html(data);
                        }//end success

                    });//end ajax
                } else {
                    $('#doctor').css('border','1px solid red');
                }
            });
            $('select').click(function(){
                $(this).css('border','');
            });
        });
    </script>
@endsection
