@extends('layout.asd')
@section('title','MANTOUX TEST')
@section('head-script')
    <script>
        $( function() {
            $( ".datepicker" ).datepicker({
            dateFormat: 'dd-mm-yy',
            });
        });
    </script>
@endsection
@section('style')
    <style>
        select {
            font-weight: bold;
            width: 200px;
            border-radius: 4px;
            color: #000000;
            cursor: pointer;
        }
        select option{
            font-size: 17px;
            text-align:center;
            color:rgb(17, 17, 1);
            cursor: pointer;
            font-weight: bold;
        }
        input{
            width: 200px;
        }
    </style>
@endsection
@section('main-body')
    <main id='main'>
        <section id='contact' class='contact'>
            <div class='container'>
                <div class='row mt-5'>
                    <div class='info-box' style='padding: 20px; overflow-x:auto;'>
                        <form action='' method='post'>
                            @csrf
                            <table id='test'>
                                <tr>
                                    <th>Test Name<p></p>MANTOUX TEST</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                @php
                                    date_default_timezone_set('Asia/Kolkata');
                                    $date = date("d-m-Y");
                                    $time = date("H:i");
                                @endphp
                                <tr>
                                    <td>Date of inoculation</td>
                                    <td>
                                        <input type="text" name="Date_of_inoculation" class="datepicker"  value="{{ $date }}" style="width: 100px;" required />
                                        <input type="time" name="Time_of_inoculation" value="{{ $time }}" style="width: 107px;" />
                                        <span style="color:red;">
                                            @error('Date_of_inoculation')
                                               {{$message}}
                                            @enderror
                                            @error('Time_of_inoculation')
                                               {{$message}}
                                            @enderror
                                        </span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Date of reporting</td>
                                    <td>
                                        <input type="text" name="Date_of_reporting" class="datepicker"  value="{{ $date }}" style="width: 100px;" required/>
                                        <input type="time" name="Time_of_reporting" value="{{ $time }}" style="width: 107px;" />
                                        <span style="color:red;">
                                            @error('Date_of_reporting')
                                               {{$message}}
                                            @enderror
                                            @error('Time_of_reporting')
                                               {{$message}}
                                            @enderror
                                        </span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>ANTIGEN</td>
                                    <td>
                                        <input type="text" name="ANTIGEN"  value="PPD" required>
                                        <span style="color:red;">@error('ANTIGEN'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>DOSE</td>
                                    <td>
                                        <input type="number" step="any" name="DOSE"  value="{{ old('DOSE') }}" required>
                                        <span style="color:red;">@error('DOSE'){{$message}}@enderror</span>
                                    </td>
                                    <td>T.U.</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>MODE</td>
                                    <td>
                                        <input type="text" name="MODE" value="Intradermal" required>                                    <span style="color:red;">@error('MODE'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>OBSERVATION</td>
                                    <td>
                                        <input type="number" step="any" name="OBSERVATION" id="OBSERVATION"  value="{{ old('OBSERVATION') }}" placeholder="In Hours" required>
                                        <span style="color:red;">@error('OBSERVATION'){{$message}}@enderror</span>
                                    </td>
                                    <td>hrs</td>
                                    <td>48 Hours - 72 Hours</td>
                                </tr>
                                <tr>
                                    <td>INDURATION</td>
                                    <td>
                                        <input type="number" step="any" name="INDURATION" id="INDURATION"  value="{{ old('INDURATION') }}" required>
                                        <span style="color:red;">@error('INDURATION'){{$message}}@enderror</span>
                                    </td>
                                    <td>mm</td>
                                    <td>0-5 mm : Negative <br>
                                        6-9 mm : Equivocal <br>
                                        More than 10 mm : Positive
                                    </td>
                                </tr>
                                <tr>
                                    <td>IMPRESSION</td>
                                    <td>
                                        <select name="IMPRESSION" id="IMPRESSION">
                                            <option value="NEGATIVE">NEGATIVE</option>
                                            <option value="POSITIVE">POSITIVE</option>
                                            <option value="Equivocal">Equivocal</option>
                                        </select>
                                        <span style="color:red;">@error('IMPRESSION'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>NEGATIVE</td>
                                </tr>
                            </table><br>
                            <button type='reset' class='btn btn-outline-success'>Clear</button>
                            <button type='submit' class='btn btn-outline-success'>Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('body-script')
   <script type='text/javascript'>
       $(document).ready(function(){
            $("#INDURATION").keyup(function(){
                var a = $(this).val();
                if(a>10){
                    $('#IMPRESSION').val("POSITIVE");
                    $('#IMPRESSION').css('color','red');
                    $('#IMPRESSION').css('border','2px solid red');
                    $(this).css('color','red');
                }else if(a>5 && a<11){
                    $('#IMPRESSION').val('Equivocal');
                    $('#IMPRESSION').css('color','orange');
                    $(this).css('color','red');
                    $('#IMPRESSION').css('border','2px solid orange');
                }else{
                    $('#IMPRESSION').val('NEGATIVE');
                    $('#IMPRESSION').css('color','');
                    $(this).css('color','');
                    $('#IMPRESSION').css('border','');
                }
            });

            $('#OBSERVATION').keyup(function(){
                if($(this).val()>72){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });

            $('select').change(function(){
                if($(this).val() == "POSITIVE"){
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                }else if($(this).val() == "Equivocal"){
                    $(this).css('color','orange');
                    $(this).css('border','2px solid orange');
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
       });
   </script>
@endsection
