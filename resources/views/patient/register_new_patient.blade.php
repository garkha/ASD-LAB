@extends('layout.asd')
@section('title','New patient Registration')
{{--------------------------------HEAD SCRIPT--------------------------------}}
@section('head-script')
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
               dateFormat: 'dd-mm-yy',
            });
        });
    </script>
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
        
        
    </style>
@endsection
{{---------------------------------- END STYLE------------------------------}}

{{---------------------------------- MAI BODY ------------------------------}}
@section('main-body')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-lg-6" style="margin-top:-50px;">
                        <form action="" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                            <div class="col-md-12">
                                @if (session('fail'))
                                <div class="alert alert-danger">
                                    {{ session('fail') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col form-group mt-3 d-flex justify-content-center">
                                <label>Register new patient</label>
                            </div>
                            </div>
                            
                            <div class="row">
                                <div class="col form-group mt-3">
                                    <select name="title" id="title" class="form-control title">
                                        <option value="Mr." selected>Mr.</option>
                                        <option value="Miss.">Miss.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Master.">Master.</option>
                                        <option value="Baby.">Baby.</option>
                                        <option value="New Born Baby.">New Born Baby.</option>
                                        <option value="MD.">MD.</option>
                                        <option value="Dr.">Dr.</option>
                                    </select>
                                    @error('title')
                                      <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="col form-group mt-3">
                                    <input type="text" maxlength="21" name="name" id="name" class="form-control" id="name" placeholder="Your Name" value="{{old('name')}}" required>
                                    @error('name')
                                    <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col form-group mt-3">
                                    <input type="number" step="any" class="form-control" name="age" id="age" value="{{old('age')}}" placeholder="Your Age" required>
                                    @error('age')
                                    <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col form-group mt-3">
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="male" value="male" checked > &nbsp;&nbsp;&nbsp;
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" id="female" value="female">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col form-group mt-3">
                                    @php
                                        $current_date_time = Carbon\Carbon::now();
                                        $date = $current_date_time->format('d-m-Y');
                                        $time = $current_date_time->toTimeString();
                                    @endphp

                                    <input type="text" name="date" id="datepicker" class="form-control" value="{{$date}}">
                                    @error('date')
                                        <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col form-group mt-3">
                                    <input type="time" class="form-control" name="time" value="{{date('h:m')}}" />
                                </div>
                            </div>
                            
                            <!--doctor list find from ajax-->
                            <div class="row" id="doctor_list">

                            </div>
                            <!--doctor list find from ajax-->
                            
                            <div class="row">
                                <div class="col form-group mt-3">
                                    <select name="advice_by_doctor" id="advice_by_doctor" class="form-control">
                                        <option value="" selected>Select Doctor Name</option>
                                        @foreach ($doctor as $doc)
                                          <option value="{{$doc->name}}">{{$doc->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('advice_by_doctor')
                                    <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col form-group mt-3">
                                    <input type="tel" maxlength="10" name="mobile" class="form-control" id="mobile" value="{{old('mobile')}}" placeholder="Your Mobile ( optional )">
                                    @error('mobile')
                                    <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col form-group mt-3">
                                    <div class="text-center">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
            $("select.title").change(function(){
                $selectedTitle = $(this).val();
                if ($selectedTitle == "Miss." || $selectedTitle == "Ms." || $selectedTitle == "Mrs.") {
                    $("#female").prop("checked", true);
                } else {
                    $("#male").prop("checked", true);
                }
            });

            $('select,input').css('font-weight','bold');
            $('#name').keyup(function(){
                $text = $(this).val();
                $(this).val($text.toUpperCase());

                
                if ($.isNumeric($(this).val())) {
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
                
        });
    </script>
@endsection
{{------------------------------- BODY SCRIPT -------------------------------}}
