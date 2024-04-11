@extends('layout.asd')
@section('title','KIDNEY FUNCTION TEST (KFT)')
@section('head-script')
@endsection
@section('style')
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
                                    <th>Test Name<p></p>KIDNEY FUNCTION TEST (KFT)</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>Blood Urea</td>
                                    <td>
                                        <input type="number" step="any" name="Blood_Urea" id="Blood_Urea"  value="{{ old('Blood_Urea') }}">
                                        <span style="color:red;">@error('Blood_Urea'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dL</td>
                                    <td>15-36.0</td>
                                </tr>
                                <tr>
                                    <td>Serum Creatinine</td>
                                    <td>
                                        <input type="number" step="any" name="Serum_Creatinine" id="Serum_Creatinine" value="{{ old('Serum_Creatinine') }}">
                                        <span style="color:red;">@error('Serum_Creatinine'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dL</td>
                                    <td>0.5-0.9</td>
                                </tr>
                                <tr>
                                    <td>Uric Acid</td>
                                    <td>
                                        <input type="number" step="any" name="Uric_Acid" id="Uric_Acid" value="{{old('Uric_Acid')}}"> 
                                        <span style="color:red;">@error('Uric_Acid'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dL</td>
                                    <td>2.4 - 5.7</td>
                                </tr>
                                <tr>
                                    <td>Sodium</td>
                                    <td>
                                        <input type="number" step="any" name="Sodium" id="Sodium" value="{{old('Sodium')}}">
                                        <span style="color:red;">@error('Sodium'){{$message}}@enderror</span>
                                    </td>
                                    <td>mmol /L</td>
                                    <td>135-148</td>
                                </tr>
                                <tr>
                                    <td>Potassium</td>
                                    <td>
                                        <input type="number" step="any" name="Potassium" id="Potassium" value="{{old('Potassium')}}">
                                        <span style="color:red;">@error('Potassium'){{$message}}@enderror</span>
                                    </td>
                                    <td>mmol /L</td>
                                    <td>3.7-5.5</td>
                                </tr>
                                <tr>
                                    <td>Chloride</td>
                                    <td>
                                        <input type="number" step="any" name="Chloride" id="Chloride" value="{{old('Chloride')}}">
                                        <span style="color:red;">@error('Chloride'){{$message}}@enderror</span>
                                    </td>
                                    <td>mmol /L</td>
                                    <td>98-107</td>
                                </tr>
                                <tr>
                                    <td>BUN (Blood Urea Nitrogen)</td>
                                    <td>
                                        <input type="number" step="any" name="Blood_Urea_Nitrogen" id="Blood_Urea_Nitrogen" value="{{old('Blood_Urea_Nitrogen')}}">
                                        <span style="color:red;">@error('Blood_Urea_Nitrogen'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dl</td>
                                    <td>4.0-18.0</td>
                                </tr>
                                <tr>
                                    <td>BUN/Creatinine Ratio</td>
                                    <td>
                                        <input type="number" step="any" name="Creatinine_Ratio" id="Creatinine_Ratio" value="{{old('Creatinine_Ratio')}}"/>
                                        <span style="color:red;">@error('Creatinine_Ratio'){{$message}}@enderror</span>
                                    </td>
                                    <td>Ratio</td>
                                    <td>10-20</td>
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
            $('#Blood_Urea').keyup(function(){
                $('#Blood_Urea_Nitrogen').val(($(this).val()/2.14).toFixed(2));
        
                var a = $(this).val();
                if((a>36)||(a<15)){
                    $(this).css('background-color','yellow');
                }else{
                    $(this).css('background-color','');
                }
        
                var b = $('#Blood_Urea_Nitrogen').val();
                if((b>18)||(b<4)){
                    $('#Blood_Urea_Nitrogen').css('background-color','yellow');
                }else{
                    $('#Blood_Urea_Nitrogen').css('background-color','');
                }
            });
        
            $('#Serum_Creatinine').keyup(function(){
                var a = $('#Blood_Urea_Nitrogen').val();
                var b = $(this).val();
                var c = (a/b).toFixed(2)
                $('#Creatinine_Ratio').val(c);
        
                if((b>0.9)||(b<0.5)){
                   $(this).css('background-color','yellow');
                }else{
                   $(this).css('background-color','');
                }
        
                if((c>20)||(c<10)){
                   $('#Creatinine_Ratio').css('background-color','yellow');
                }else{
                   $('#Creatinine_Ratio').css('background-color','');
                }
        
            });
        
            $('#Uric_Acid').keyup(function(){
                var a = $(this).val();
                if((a>5.7)||(a<2.4)){
                   $(this).css('background-color','yellow');
                }else{
                   $(this).css('background-color','');
                }
            });
        
            $('#Sodium').keyup(function(){
                var a = $(this).val();
                if((a>148)||(a<135)){
                   $(this).css('background-color','yellow');
                }else{
                   $(this).css('background-color','');
                }
            });
        
            $('#Potassium').keyup(function(){
                var a = $(this).val();
                if((a>5.5)||(a<3.7)){
                   $(this).css('background-color','yellow');
                }else{
                   $(this).css('background-color','');
                }
            });
        
            $('#Chloride').keyup(function(){
                var a = $(this).val();
                if((a>107)||(a<98)){
                   $(this).css('background-color','yellow');
                }else{
                   $(this).css('background-color','');
                }
            });
       });
   </script>
@endsection