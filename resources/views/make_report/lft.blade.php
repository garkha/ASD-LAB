@extends('layout.asd')
@section('title','LIVER FUNCTION TEST')
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
                                    <th>Test Name<p>LIVER FUNCTION TEST</p></th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                <td>Total Bilirubin</td>
                                <td>
                                    <input type="number" step="any" name="Total_Bilirubin" id="Total_Bilirubin" value="{{ old('Total_Bilirubin') }}">
                                    <span style="color:red;">@error('Total_Bilirubin'){{$message}}@enderror</span>
                                </td>
                                <td>mg/dl</td>
                                <td>0.1-1.2</td>
                            </tr>
                            <tr>
                                <td>Conjugated (Direct) Bilirubin</td>
                                <td>
                                    <input type="number" step="any" name="Conjugated_Bilirubin" id="Conjugated_Bilirubin" value="{{ old('Conjugated_Bilirubin') }}">
                                    <span style="color:red;">@error('Conjugated_Bilirubin'){{$message}}@enderror</span>
                                </td>
                                <td>mg/dl</td>
                                <td>0.0-0.3</td>
                            </tr>
                            <tr>
                                <td>Unconjugated (Indirect) Bilirubin</td>
                                <td>
                                    <input type="number" step="any" name="Unconjugated_Bilirubin" id="Unconjugated_Bilirubin" value="{{old('Unconjugated_Bilirubin')}}"> 
                                    <span style="color:red;">@error('Unconjugated_Bilirubin'){{$message}}@enderror</span>
                                </td>
                                <td>mg/dl</td>
                                <td>0.2-0.7</td>
                            </tr>
                            <tr>
                                <td>SGOT (AST)</td>
                                <td>
                                    <input type="number" step="any" name="SGOT" id="SGOT" value="{{old('SGOT')}}">
                                    <span style="color:red;">@error('SGOT'){{$message}}@enderror</span>
                                </td>
                                <td>IU/L</td>
                                <td>0-32</td>
                            </tr>
                            <tr>
                                <td>SGPT (ALT)</td>
                                <td>
                                    <input type="number" step="any" name="SGPT" id="SGPT" value="{{old('SGPT')}}">
                                    <span style="color:red;">@error('SGPT'){{$message}}@enderror</span>
                                </td>
                                <td>IU/L</td>
                                <td>0-33</td>
                            </tr>
                            <tr>
                                <td>Alk.Phosphatase</td>
                                <td>
                                    <input type="number" step="any" name="Alk_Phosphatase" id="Alk_Phosphatase" value="{{old('Alk_Phosphatase')}}">
                                    <span style="color:red;">@error('Alk_Phosphatase'){{$message}}@enderror</span>
                                </td>
                                <td>IU/L</td>
                                <td>142-335</td>
                            </tr>
                            <tr>
                                <td>T.Protein</td>
                                <td>
                                    <input type="number" step="any" name="T_Protein" id="T_Protein" value="{{old('T_Protein')}}">
                                    <span style="color:red;">@error('T_Protein'){{$message}}@enderror</span>
                                </td>
                                <td>gm/dl</td>
                                <td>6.4-8.3</td>
                            </tr>
                            <tr>
                                <td>Albumin</td>
                                <td>
                                    <input type="number" step="any" name="Albumin" id="Albumin" value="{{old('Albumin')}}">
                                    <span style="color:red;">@error('Albumin'){{$message}}@enderror</span>
                                </td>
                                <td>gm/dl</td>
                                <td>3.5-5.2</td>
                            </tr>
                            <tr>
                                <td>Globulin</td>
                                <td>
                                    <input type="number" step="any" name="Globulin" id="Globulin" value="{{old('Globulin')}}">
                                    <span style="color:red;">@error('Globulin'){{$message}}@enderror</span>
                                </td>
                                <td>gm/dl</td>
                                <td>2.5-3.8</td>
                            </tr>
                            <tr>
                                <td>A/G Ratio</td>
                                <td>
                                    <input type="number" step="any" name="AG_Ratio" id="AG_Ratio" value="{{old('AG_Ratio')}}">
                                    <span style="color:red;">@error('AG_Ratio'){{$message}}@enderror</span>
                                </td>
                                <td></td>
                                <td>1.30 - 1.70</td>
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
           $("#Unconjugated_Bilirubin").focus(function(){
        var Total_Bilirubin = $('#Total_Bilirubin').val();
        var Conjugated_Bilirubin = $('#Conjugated_Bilirubin').val();
        $(this).val((Total_Bilirubin-Conjugated_Bilirubin).toFixed(2));
        
        var Unconjugated_Bilirubin = $(this).val();
        if (Unconjugated_Bilirubin>0.7||Unconjugated_Bilirubin<0.2) {
          $(this).css("color","red");
        } else {
          $(this).css("color","green");
        }
      });

      $('#Globulin').focus(function(){
        var T_Protein = $('#T_Protein').val();
        var Albumin = $("#Albumin").val();
        $(this).val((T_Protein-Albumin).toFixed(2));

        var Globulin = $(this).val();
        if(Globulin>3.8||Globulin<2.5){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }

      });

      $("#AG_Ratio").focus(function(){
        var Albumin = $('#Albumin').val();
        var Globulin = $('#Globulin').val();
        $(this).val(((Albumin-Globulin)+0.50).toFixed(2));

        var AG_Ratio = $(this).val();

        if(AG_Ratio>1.70||AG_Ratio<1.30){
          $(this).css("color","red");
        }else{
          $(this).css("color","red");
        }

      });

      $("#Total_Bilirubin").focusout(function(){
        if($(this).val()>1.2||$(this).val()<0.1){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#Conjugated_Bilirubin").focusout(function(){
        if($(this).val()>0.3||$(this).val()<0){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#Unconjugated_Bilirubin").focusout(function(){
        if($(this).val()>0.7||$(this).val()<0.2){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#SGOT").focusout(function(){
        if($(this).val()>32||$(this).val()<0){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#SGPT").focusout(function(){
        if($(this).val()>33||$(this).val()<0){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#Alk_Phosphatase").focusout(function(){
        if($(this).val()>335||$(this).val()<142){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#T_Protein").focusout(function(){
        if($(this).val()>8.3||$(this).val()<6.4){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#Albumin").focusout(function(){
        if($(this).val()>5.2||$(this).val()<3.5){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#Globulin").focusout(function(){
        if($(this).val()>3.8||$(this).val()<2.5){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });

      $("#AG_Ratio").focusout(function(){
        if($(this).val()>1.70||$(this).val()<1.30){
          $(this).css("color","red");
        }else{
          $(this).css("color","green");
        }
      });
       });
   </script>
@endsection
