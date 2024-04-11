@extends('layout.asd')
@section('title','SEMEN ANALYSIS')
@section('head-script')
@endsection
@section('style')
    <style>
        select {
            font-weight: bold;
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
            width: 100%;
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
                                    <th>Test Name<p></p>SEMEN ANALYSIS</th>
                                    <th style="width: 200px;">Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <th colspan="4" style="text-align:left; background-color:aquamarine;">PHYSICAL EXAMINATION</th>
                                </tr>
                                <tr>
                                    <td>VOLUME</td>
                                    <td>
                                        <input type="number" step="any" name="VOLUME" id="VOLUME"  value="{{ old('VOLUME') }}" required/>
                                        <span style="color:red;">@error('VOLUME'){{$message}}@enderror</span>
                                    </td>
                                    <td>ml</td>
                                    <td>1.5-3.5</td>
                                </tr>
                                <tr>
                                    <td>COLOUR</td>
                                    <td>
                                        <select name="COLOUR" class="form-select form-select-sm">
                                            <option disabled selected>Select</option>
                                            <option value="YELLOWISH">YELLOWISH</option>
                                            <option value="WHITISH">WHITISH</option>
                                            <option value="CLEAR">CLEAR</option>
                                            <option value="BROWNISH">BROWNISH</option>
                                        </select>
                                        <span style="color:red;">@error('COLOUR'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>REACTION</td>
                                    <td>
                                        <select name="REACTION" class="form-select form-select-sm">
                                            <option disabled selected>Select</option>
                                            <option value="ALKALINE">ALKALINE</option>
                                            <option value="ACIDIC">ACIDIC</option>
                                        </select>
                                        <span style="color:red;">@error('REACTION'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>VISCOCITY</td>
                                    <td>
                                        <select name="VISCOCITY" class="form-select form-select-sm">
                                            <option disabled selected>Select</option>
                                            <option value="NORMAL">NORMAL</option>
                                            <option value="THICK">THICK</option>
                                        </select>
                                        <span style="color:red;">@error('VISCOCITY'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>LIQUEFACTION TIME</td>
                                    <td>
                                        <select name="LIQUEFACTION_TIME" class="form-select form-select-sm">
                                            <option disabled selected>Select</option>
                                            <option value="10 MINUTES">10 MINUTES</option>
                                            <option value="15 MINUTES">15 MINUTES</option>
                                            <option value="20 MINUTES">20 MINUTES</option>
                                            <option value="25 MINUTES">25 MINUTES</option>
                                            <option value="30 MINUTES">30 MINUTES</option>
                                            <option value="35 MINUTES">35 MINUTES</option>
                                            <option value="40 MINUTES">40 MINUTES</option>
                                            <option value="45 MINUTES">45 MINUTES</option>
                                            <option value="50 MINUTES">50 MINUTES</option>
                                            <option value="55 MINUTES">55 MINUTES</option>
                                            <option value="60 MINUTES">60 MINUTES</option>
                                        </select>
                                        <span style="color:red;">@error('LIQUEFACTION_TIME'){{$message}}@enderror</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
    
                                <tr>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <th colspan="4" style="text-align:left; background-color:aquamarine;">MICROSCOPIC EXAMINATION</th>
                                </tr>
    
                                <tr>
                                    <td>TOTAL SPERMCOUNT</td>
                                    <td>
                                        <input type="number" step="any" name="TOTAL_SPERMCOUNT" id="TOTAL_SPERMCOUNT" value="{{old('TOTAL_SPERMCOUNT')}}" required/>
                                        <span style="color:red;">@error('TOTAL_SPERMCOUNT'){{$message}}@enderror</span>
                                    </td>
                                    <td>million / ml</td>
                                    <td>60-150</td>
                                </tr>
    
                                <tr>
                                    <td colspan="4"></td>
                                </tr>
                                <tr>
                                    <th colspan="4" style="text-align:left; background-color:aquamarine;">SPERM MOTILE</td>
                                </tr>
    
                                <tr>
                                    <td>ACTIVE</td>
                                    <td>
                                        <input type="number" step="any" name="ACTIVE" id="ACTIVE" value="{{old('ACTIVE')}}" required />
                                        <span style="color:red;">@error('ACTIVE'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>SLUGGISH</td>
                                    <td>
                                        <input type="number" step="any" name="SLUGGISH" id="SLUGGISH" value="{{old('SLUGGISH')}}" required />
                                        <span style="color:red;">@error('SLUGGISH'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>NON-MOTILE</td>
                                    <td>
                                        <input type="number" step="any" name="NON_MOTILE" id="NON_MOTILE" value="{{old('NON_MOTILE')}}" required />
                                        <span style="color:red;">@error('NON_MOTILE'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>PUS CELLS</td>
                                    <td>
                                        <input type="number" step="any" name="PUS_CELLS" id="PUS_CELLS" value="{{old('PUS_CELLS')}}" required />
                                        <span style="color:red;">@error('PUS_CELLS'){{$message}}@enderror</span>
                                    </td>
                                    <td>/HPF</td>
                                    <td>Range (2-4)</td>
                                </tr>
                                <tr>
                                    <td>EPITHELIAL CELLS</td>
                                    <td>
                                        <input type="number" step="any" name="EPITHELIAL_CELLS" id="EPITHELIAL_CELLS" value="{{old('EPITHELIAL_CELLS')}}" required />
                                        <span style="color:red;">@error('EPITHELIAL_CELLS'){{$message}}@enderror</span>
                                    </td>
                                    <td>/HPF</td>
                                    <td>Range (1-2)</td>
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
            $('#VOLUME').keyup(function(){
                if ($(this).val()>3.5) {
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#TOTAL_SPERMCOUNT').keyup(function(){
                if ($(this).val()>150 || $(this).val()<60) {
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#TOTAL_SPERMCOUNT').keyup(function(){
                if ($(this).val()>150 || $(this).val()<60) {
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#ACTIVE,#SLUGGISH,#NON_MOTILE').keyup(function(){
                if ($(this).val()>100 || $(this).val()<0) {
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#PUS_CELLS').keyup(function(){
                if ($(this).val()>4 || $(this).val()<2) {
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#EPITHELIAL_CELLS').keyup(function(){
                if ($(this).val()>2 || $(this).val()<1) {
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            
       });
   </script>
@endsection
