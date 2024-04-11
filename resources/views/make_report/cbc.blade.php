@extends('layout.asd')
@section('title','COMPLETE BLOOD COUNT (CBC)')
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
                                    <th>Test Name<p>COMPLETE BLOOD COUNT (CBC)</p></th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>Haemoglobin</td>
                                    <td>
                                        <input type="number" step="any" name="Haemoglobin" id="Haemoglobin" value="{{old('Haemoglobin')}}">
                                        <span style="color:red;">@error('Haemoglobin'){{$message}}@enderror</span>
                                    </td>
                                    <td>gm/dl</td>
                                    <td>
                                        <p>Female : 11.0-14.0 </p>
                                        <p>Male : 11 - 16</p>
                                    </td>
                                </tr>
                                <tr>
                                  <td>RBC</td>
                                  <td>
                                      <input type="number" step="any" name="RBC" id="RBC" value="{{old('RBC')}}">
                                      <span style="color:red;">@error('RBC'){{$message}}@enderror</span>
                                  </td>
                                  <td>millions/cmm</td>
                                  <td>3.8-4.8</td>
                              </tr>
                              <tr>
                                  <td>HCT</td>
                                  <td>
                                      <input type="number" step="any" name="HCT" id="HCT" value="{{old('HCT')}}">
                                      <span style="color:red;">@error('HCT'){{$message}}@enderror</span>
                                  </td>
                                  <td>%</td>
                                  <td>36-46</td>
                              </tr>
                              <tr>
                                  <td>MCV</td>
                                  <td>
                                      <input type="number" step="any" name="MCV" id="MCV" value="{{old('MCV')}}">
                                      <span style="color:red;">@error('MCV'){{$message}}@enderror</span>
                                  </td>
                                  <td>fl</td>
                                  <td>83-101</td>
                              </tr>
                              <tr>
                                  <td>MCH</td>
                                  <td>
                                      <input type="number" step="any" name="MCH" id="MCH" value="{{old('MCH')}}">
                                      <span style="color:red;">@error('MCH'){{$message}}@enderror</span>
                                  </td>
                                  <td>pg</td>
                                  <td>27-32</td>
                              </tr>
                              <tr>
                                  <td>MCHC</td>
                                  <td>
                                      <input type="number" step="any" name="MCHC" id="MCHC" value="{{old('MCHC')}}">
                                      <span style="color:red;">@error('MCHC'){{$message}}@enderror</span>
                                  </td>
                                  <td>g/dl</td>
                                  <td>31.5-34.5</td>
                              </tr>
                              <tr>
                                  <td>RDW- SD</td>
                                  <td>
                                      <input type="number" step="any" name="RDWSD" id="RDWSD" value="{{old('RDWSD')}}">
                                      <span style="color:red;">@error('RDWSD'){{$message}}@enderror</span>
                                  </td>
                                  <td>fl</td>
                                  <td>35-56</td>
                              </tr>
                              <tr>
                                  <td>RDW- CV</td>
                                  <td>
                                      <input type="number" step="any" name="RDWCV" id="RDWCV" value="{{old('RDWCV')}}">
                                      <span style="color:red;">@error('RDWCV'){{$message}}@enderror</span>
                                  </td>
                                  <td>%</td>
                                  <td>11.6-14.0</td>
                              </tr>
                            </table><br>

                            <table id="test">
                    
                                <tr>
                                    <th>Test Name <p>Complete Blood Count (CBC EXT)</p></th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>TLC (Total Leucocyte Count)</td>
                                    <td>
                                        <input type="number" step="any" name="TLC" id="TLC" value="{{old('TLC')}}">
                                        <span style="color:red;">@error('TLC'){{$message}}@enderror</span>
                                    </td>
                                    <td>th/cumm</td>
                                    <td>4000-10000</td>
                                </tr>
                                <tr>
                                    <td>Platelet Count</td>
                                    <td>
                                        <input type="number" step="any" name="Platelet" id="Platelet" value="{{old('Platelet')}}">
                                        <span style="color:red;">@error('Platelet'){{$message}}@enderror</span>
                                    </td>
                                    <td>thou/µL</td>
                                    <td>150-410</td>
                                </tr>
                                <tr>
                                    <td>ESR [Westergren]</td>
                                    <td>
                                        <input type="number" step="any" name="ESR" id="ESR" value="{{old('ESR')}}">
                                        <span style="color:red;">@error('ESR'){{$message}}@enderror</span>
                                    </td>
                                    <td>mm/ 1 hr</td>
                                    <td>
                                        <p>MALE : 0-15</p>
                                        <p>FEMALE : 0-20</p>
                                    </td>
                                </tr>
                            </table><br>

                            <table id="test">
                                <tr>
                                    <th colspan="4">DIFFERENTIAL LEUCOCYTE COUNT</th>
                                </tr>
                                <tr>
                                    <th>Test Name<p>Complete Blood Count (CBC EXT)</p></th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>Neutrophil</td>
                                    <td>
                                        <input type="number" step="any" name="Neutrophil" id="Neutrophil" value="{{old('Neutrophil')}}">
                                        <span style="color:red;">@error('Neutrophil'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td>40-80</td>
                                </tr>
                                <tr>
                                    <td>Lymphocytes</td>
                                    <td>
                                        <input type="number" step="any" name="Lymphocytes" id="Lymphocytes" value="{{old('Lymphocytes')}}">
                                        <span style="color:red;">@error('Lymphocytes'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td>20-40</td>
                                </tr>
                                <tr>
                                    <td>Eosinophils</td>
                                    <td>
                                        <input type="number" step="any" name="Eosinophils" id="Eosinophils" value="{{old('Eosinophils')}}">
                                        <span style="color:red;">@error('Eosinophils'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td>1-6</td>
                                </tr>
                                <tr>
                                    <td>Monocytes</td>
                                    <td>
                                        <input type="number" step="any" name="Monocytes" id="Monocytes" value="{{old('Monocytes')}}">
                                        <span style="color:red;">@error('Monocytes'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td>2-10</td>
                                </tr>
                                <tr>
                                    <td>Basophils</td>
                                    <td>
                                        <input type="number" step="any" name="Basophils" id="Basophils" value="{{old('Basophils')}}">
                                        <span style="color:red;">@error('Basophils'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td>0-1</td>
                                </tr>
                                <tr>
                                  <th colspan="4" id="total" style="background-color: papayawhip;">Total = </th>
                                </tr>
                            </table><br>

                            <table id="test">
                                <tr>
                                    <th colspan="4">{{strtoupper("automatic calculated value")}}</th>
                                </tr>
                                <tr>
                                    <th>Test Name<p>Complete Blood Count (CBC EXT)</p></th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>Absolute Neutrophil Count</td>
                                    <td>
                                        <input type="number" step="any" name="ANC" id="ANC" value="{{old('ANC')}}">
                                        <span style="color:red;">@error('ANC'){{$message}}@enderror</span>
                                    </td>
                                    <td>/cumm</td>
                                    <td>2000-7000</td>
                                </tr>
                                <tr>
                                    <td>Absolute Lymphocyte Count</td>
                                    <td>
                                        <input type="number" step="any" name="ALC" id="ALC" value="{{old('ALC')}}">
                                        <span style="color:red;">@error('ALC'){{$message}}@enderror</span>
                                    </td>
                                    <td>/cumm</td>
                                    <td>1000-3000</td>
                                </tr>
                                <tr>
                                    <td>Absolute Eosinophil Count</td>
                                    <td>
                                        <input type="number" step="any" name="AEC" id="AEC" value="{{old('AEC')}}">
                                        <span style="color:red;">@error('AEC'){{$message}}@enderror</span>
                                    </td>
                                    <td>/cumm</td>
                                    <td>20-500</td>
                                </tr>
                                <tr>
                                    <td>Absolute Monocyte Count</td>
                                    <td>
                                        <input type="number" step="any" name="AMC" id="AMC" value="{{old('AMC')}}">
                                        <span style="color:red;">@error('AMC'){{$message}}@enderror</span>
                                    </td>
                                    <td>/cumm</td>
                                    <td>20-1000</td>
                                </tr>
                                <tr>
                                    <td>Absolute Basophils Count</td>
                                    <td>
                                        <input type="number" step="any" name="ABC" id="ABC" value="{{old('ABC')}}">
                                        <span style="color:red;">@error('ABC'){{$message}}@enderror</span>
                                    </td>
                                    <td>/cumm</td>
                                    <td>20-100</td>
                                </tr>
                            </table><br>
                            <table id="test">
                                <tr>
                                    <th colspan="4">{{strtoupper("automatic calculated value")}}</th>
                                </tr>
                                <tr>
                                    <th>Test Name<p>Complete Blood Count (CBC EXT)</p></th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
    
                                <tr>
                                    <td>Neutrophil - Lymphocyte Ratio (NLR)</td>
                                    <td>
                                    <input type="number" step="any" name="NLR" id="NLR" value="{{old('NLR')}}">
                                    <span style="color:red;">@error('NLR'){{$message}}@enderror</span>
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
    
                                <tr>
                                    <td>Lymphocyte - Monocyte Ratio (LMR)</td>
                                    <td>
                                    <input type="number" step="any" name="LMR" id="LMR" value="{{old('LMR')}}">
                                    <span style="color:red;">@error('LMR'){{$message}}@enderror</span>
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
    
                                <tr>
                                    <td>Platelet - Lymphocyte Ratio (PLR)</td>
                                    <td>
                                    <input type="number" step="any" name="PLR" id="PLR" value="{{old('PLR')}}">
                                    <span style="color:red;">@error('PLR'){{$message}}@enderror</span>
                                    </td>
                                    <td colspan="2"></td>
                                </tr>
                            </table><br>

                            <table id="test">
                                <tr>
                                    <th colspan="4">{{strtoupper("optional values")}}</th>
                                </tr>
                                <tr>
                                    <th>Test Name<p>Complete Blood Count (CBC EXT)</p></th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
    
                                <tr>
                                    <td>MPV</td>
                                    <td>
                                    <input type="number" step="any" name="MPV" id="MPV" value="{{old('MPV')}}">
                                    <span style="color:red;">@error('MPV'){{$message}}@enderror</span>
                                    </td>
                                    <td>fl</td>
                                    <td>7.4-10.4</td>
                                </tr>
    
                                <tr>
                                    <td>PCT</td>
                                    <td>
                                    <input type="number" step="any" name="PCT" id="PCT" value="{{old('PCT')}}">
                                    <span style="color:red;">@error('PCT'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td>0.10-0.28</td>
                                </tr>
    
                                <tr>
                                    <td>PDW</td>
                                    <td>
                                    <input type="number" step="any" name="PDW" id="PDW" value="{{old('PDW')}}">
                                    <span style="color:red;">@error('PDW'){{$message}}@enderror</span>
                                    </td>
                                    <td>fl</td>
                                    <td>9.0-17.0</td>
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
            var Total = 0;

            $("#Haemoglobin").focusout(function(){
                var hb = $(this).val();

                var rbc = ((hb/3)+0.17).toFixed(2);
                var hct = ((hb*3)+0.3).toFixed(2);
                var mcv = ((hct/rbc)*10).toFixed(2);
                var mch = ((hb/rbc)*10).toFixed(2);
                var mchc = ((hb/hct)*100).toFixed(2);
                var rdwsd = ((38/mcv)*100).toFixed(2);
                var rdwcv = ((12/mcv)*100).toFixed(2);

                $("#RBC").val(rbc);
                $("#HCT").val(hct);
                $("#MCV").val(mcv);
                $("#MCH").val(mch);
                $("#MCHC").val(mchc);
                $("#RDWSD").val(rdwsd);
                $("#RDWCV").val(rdwcv);
                
            });
            $('#MPV').keyup(function(){
                if($(this).val()>10.4 || $(this).val()<7.4){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#PCT').keyup(function(){
                if($(this).val()>0.28 || $(this).val()<.10){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#PDW').keyup(function(){
                if($(this).val()>17 || $(this).val()<9){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#Haemoglobin').keyup(function(){
                if($(this).val()>16 || $(this).val()<11){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#TLC').keyup(function(){
                if($(this).val()>10000 || $(this).val()<4000){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#Platelet').keyup(function(){
                if($(this).val()>410 || $(this).val()<150){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#ESR').keyup(function(){
                if($(this).val()>20 || $(this).val()<0){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#Neutrophil').keyup(function(){
                if($(this).val()>80 || $(this).val()<40){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#Lymphocytes').keyup(function(){
                if($(this).val()>40 || $(this).val()<20){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#Eosinophils').keyup(function(){
                if($(this).val()>6 || $(this).val()<1){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#Monocytes').keyup(function(){
                if($(this).val()>10 || $(this).val()<2){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $('#Basophils').keyup(function(){
                if($(this).val()>1 || $(this).val()<0){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
            $("#Neutrophil,#Lymphocytes,#Eosinophils,#Monocytes,#Basophils").keyup(function(){
                
                $n = Number($('#Neutrophil').val());
                $l = Number($('#Lymphocytes').val());
                $e = Number($('#Eosinophils').val());
                $m = Number($('#Monocytes').val());
                $b = Number($('#Basophils').val());
                $("#total").html($result = ($n+$l+$e+$m+$b).toFixed(2));

            });

            $('#Basophils').focusout(function(){
                if ($result == 100.00) {
                    $("#Neutrophil,#Lymphocytes,#Eosinophils,#Monocytes,#Basophils").css('color','');
                    $("#Neutrophil,#Lymphocytes,#Eosinophils,#Monocytes,#Basophils").css('border','');
                    var TLC = Number($("#TLC").val());
                    var ANC = ((TLC/100)*$n).toFixed(2);
                    var ALC = ((TLC/100)*$l).toFixed(2);
                    var AEC = ((TLC/100)*$e).toFixed(2);
                    var AMC = ((TLC/100)*$m).toFixed(2);
                    var ABC = ((TLC/100)*$b).toFixed(2);

                    $("#ANC").val(Math.ceil(ANC));
                    $("#ALC").val(Math.ceil(ALC));
                    $("#AEC").val(Math.ceil(AEC));
                    $("#AMC").val(Math.ceil(AMC));
                    $("#ABC").val(Math.ceil(ABC));

                    $("#NLR").val(($n/$l).toFixed(2));
                    $("#LMR").val(($l/$m).toFixed(2));
                    $("#PLR").val((($("#Platelet").val()*1000)/ALC).toFixed(2));
                } else {
                    $("#Neutrophil,#Lymphocytes,#Eosinophils,#Monocytes,#Basophils").css('color','red');
                    $("#Neutrophil,#Lymphocytes,#Eosinophils,#Monocytes,#Basophils").css('border','1px solid red');
                }
            });
       });
   </script>
@endsection
