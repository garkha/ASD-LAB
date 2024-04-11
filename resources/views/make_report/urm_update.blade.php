@extends('layout.asd')
@section('title','URINE ROUTINE AND MICROSCOPY')
@section('head-script')
@endsection
@section('style')
    <style>
        select {
                width: 200px;
                border-radius: 4px;
                color: #000000;
                cursor: pointer;
                font-weight: bold;
            }
            select option{
                font-size: 17px;
                text-align:center;
                color:rgb(0, 0, 0);
                cursor: pointer;
                font-weight: bold;
            }
            input{
                width: 200px;
                height: 30px;
                font-weight: bold;
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
                                    <th>Test Name<p>URINE ROUTINE AND MICROSCOPY</p></th>
                                    <th style="width:200px;">Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <th colspan="4" style="text-align:left; background-color:aquamarine;">PHYSICAL EXAMINATION</th>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>
                                        <select name="Color" class="form-select form-select-sm">
                                            <option value="{{$test->Color}}" selected>{{$test->Color}}</option>
                                            <option value="Yellow">Yellow</option>
                                            <option value="Pale Yellow">Pale Yellow</option>
                                            <option value="White">White</option>
                                            <option value="Red">Red</option>
                                        </select>
                                        <span style="color:red;">@error('Color'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>Pale Yellow</td>
                                </tr>
    
                                <tr>
                                    <td>Transparency </td>
                                    <td>
                                        <select name="Transparency" class="form-select form-select-sm">
                                            <option value="{{$test->Transparency}}" selected>{{$test->Transparency}}</option>
                                            <option value="Hazy">Hazy</option>
                                            <option value="Clear">Clear</option>
                                            <option value="NA">NA</option>
                                            <option value="NA">NA</option>
                                        </select>
                                        <span style="color:red;">@error('Transparency'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>Clear</td>
                                </tr>
    
                                <tr>
                                    <td>pH</td>
                                    <td>
                                        <input type="number" step="any" name="pH" id="pH" value="{{ $test->pH }}">
                                        <span style="color:red;">@error('pH'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>4.7-7.5</td>
                                </tr>
    
                                <tr>
                                    <td>Specific Gravity</td>
                                    <td>
                                        <input type="number" step="any" name="Specific_Gravity" id="Specific_Gravity" value="{{ $test->Specific_Gravity }}">
                                        <span style="color:red;">@error('Specific_Gravity'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>1.005-1.035</td>
                                </tr>
    
                                <tr>
                                    <th colspan="4" style="text-align:left; background-color:aquamarine;">CHEMICAL EXAMINATION</th>
                                </tr>
    
                                <tr>
                                    <td>Urine Glucose</td>
                                    <td>
                                        <select name="Urine_Glucose" class="form-select form-select-sm">
                                            <option value="{{$test->Urine_Glucose}}" selected>{{$test->Urine_Glucose}}</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Urine_Glucose'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>Negative</td>
                                </tr>
    
                                <tr>
                                    <td>Urine Protein</td>
                                    <td>
                                        <select name="Urine_Protein" class="form-select form-select-sm">
                                            <option value="{{$test->Urine_Protein}}" selected>{{$test->Urine_Protein}}</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Urine_Protein'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>Negative</td>
                                </tr>
    
                                <tr>
                                    <td>Urine Bilirubin</td>
                                    <td>
                                        <select name="Urine_Bilirubin" class="form-select form-select-sm">
                                            <option value="{{$test->Urine_Bilirubin}}" selected>{{$test->Urine_Bilirubin}}</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Urine_Bilirubin'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>Negative</td>
                                </tr>
    
                                <tr>
                                    <td>Ketones</td>
                                    <td>
                                        <select name="Ketones" class="form-select form-select-sm">
                                            <option value="{{$test->Ketones}}" selected>{{$test->Ketones}}</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Ketones'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>Negative</td>
                                </tr>
    
                                <tr>
                                    <td>Blood</td>
                                    <td>
                                        <select name="Blood" class="form-select form-select-sm">
                                            <option value="{{$test->Blood}}" selected>{{$test->Blood}}</option>
                                            <option value="---">---</option>
                                            <option value="+++">+++</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Blood'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>Negative</td>
                                </tr>
    
                                <tr>
                                    <td>Leukocytes Est</td>
                                    <td>
                                        <select name="Leukocytes_Est" class="form-select form-select-sm">
                                            <option value="{{$test->Leukocytes_Est}}" selected>{{$test->Leukocytes_Est}}</option>
                                            <option value="Trace">Trace</option>
                                            <option value="Not Seen">Not Seen</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Leukocytes_Est'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td>Negative</td>
                                </tr>
    
                                <tr>
                                    <th colspan="4" style="text-align:left; background-color:aquamarine;">MICROSCOPIC EXAMINATION</th>
                                </tr>
    
                                <tr>
                                    <td>Pus Cells</td>
                                    <td>
                                      
                                        <input type="text" name="Pus_Cells" id="Pus_Cells" value="{{ $test->Pus_Cells }}"/>
                                        <span style="color:red;">@error('Pus_Cells'){{$message}}@enderror</span>
                                    </td>
                                    <td>/hpf</td>
                                    <td>3-5</td>
                                </tr>
    
                                <tr>
                                    <td>Epithelial Cells</td>
                                    <td>
                                        <input type="text" name="Epithelial_Cells" id="Epithelial_Cells" value="{{ $test->Epithelial_Cells }}">
                                        <span style="color:red;">@error('Epithelial_Cells'){{$message}}@enderror</span>
                                    </td>
                                    <td>/hpf</td>
                                    <td>3-5</td>
                                </tr>
    
                                <tr>
                                    <td>R.B.C</td>
                                    <td>
                                        <select name="Rbc" class="form-select form-select-sm">
                                            <option value="{{$test->Rbc}}" selected>{{$test->Rbc}}</option>
                                            <option value="Numerous">Numerous</option>
                                            <option value="Not Seen">Not Seen</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Rbc'){{$message}}@enderror</span>
                                    </td>
                                    <td>/hpf </td>
                                    <td>Not Seen</td>
                                </tr>
    
                                <tr>
                                    <td>Crystals</td>
                                    <td>
                                        <select name="Crystals" class="form-select form-select-sm">
                                            <option value="{{$test->Crystals}}" selected>{{$test->Crystals}}</option>
                                            <option value="Cal Oxalate Seen">Cal Oxalate Seen</option>
                                            <option value="Not Seen">Not Seen</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Crystals'){{$message}}@enderror</span>
                                    </td>
                                    <td>/hpf</td>
                                    <td>Not Seen</td>
                                </tr>
    
                                <tr>
                                    <td>Casts</td>
                                    <td>
                                        <select name="Casts" class="form-select form-select-sm">
                                            <option value="{{$test->Casts}}" selected>{{$test->Casts}}</option>
                                            <option value="Not Seen">Not Seen</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Casts'){{$message}}@enderror</span>
                                    </td>
                                    <td>/lpf</td>
                                    <td>Not Seen</td>
                                </tr>
    
                                <tr>
                                    <td>Bacteria</td>
                                    <td>
                                        <select name="Bacteria" class="form-select form-select-sm">
                                            <option value="{{$test->Bacteria}}" selected>{{$test->Bacteria}}</option>
                                            <option value="Trace">Trace</option>
                                            <option value="+">+</option>
                                            <option value="++">++</option>
                                            <option value="+++">+++</option>
                                            <option value="Trace">Trace</option>
                                            <option value="Not Seen">Not Seen</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Detected">Detected</option>
                                        </select>
                                        <span style="color:red;">@error('Bacteria'){{$message}}@enderror</span>
                                    </td>
                                    <td>/hpf</td>
                                    <td>Not Seen</td>
                                </tr>
    
                                <tr>
                                    <td>Others</td>
                                    <td>
                                        <input type="text" name="Others" value="{{ $test->Others }}" />
                                        <span style="color:red;">@error('Others'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td></td>
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
            $('#pH').keyup(function(){
                if ($(this).val()>7.5 || $(this).val()<4.7) {
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#Specific_Gravity').keyup(function(){
                if ($(this).val() > 2 || $(this).val() < 0.9) {
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#Pus_Cells').keyup(function(){
                if ($(this).val() > 5 || $(this).val() <3) {
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#Epithelial_Cells').keyup(function(){
                if ($(this).val() > 5 || $(this).val() <3) {
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('select').change(function(){
                if ($(this).val()=="Positive" || $(this).val()=="Detected" || $(this).val()=="Seen") {
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            
       });
   </script>
@endsection