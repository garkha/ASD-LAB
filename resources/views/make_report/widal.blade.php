@extends('layout.asd')
@section('title','WIDAL SLDE METHOD (TYPHOID)')
@section('head-script')
@endsection
@section('style')
    <style>
        select {
                font-weight: bold;
                font-size: 17px;
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
            #test th{
                border: 0px;
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
                                <tr style="border: 1px solid black;">
                                    <th>Test Name<p>WIDAL TEST (SLIDE METHOD)</p></th>
                                    <th>1/40</th>
                                    <th>1/80</th>
                                    <th>1/160</th>
                                    <th>1/320</th>
                                </tr>
                                <tr>
                                    <th colspan="5" style="padding-top:20px; "></th>
                                </tr>
                                <tr>
                                    <th>TYPHI "O"</th>
                                    <th><select name="TYPHI_O_1_40" id="TYPHI_O_1_40"><option value="+">+</option><option value="-">-</option></select></th>
                                    <th><select name="TYPHI_O_1_80" id="TYPHI_O_1_80"><option value="+">+</option><option value="-">-</option></select></th>
                                    <th><select name="TYPHI_O_1_160" id="TYPHI_O_1_160"><option value="+">+</option><option value="-">-</option></select></th>
                                    <th><select name="TYPHI_O_1_320" id="TYPHI_O_1_320"><option value="-">-</option><option value="+">+</option></select></th>
                                </tr>
                                <tr>
                                    <th colspan="5" style="padding-top:20px; "></th>
                                </tr>
                                <tr>
                                    <th>TYPHI "H"</th>
                                    <th><select name="TYPHI_H_1_40" id="TYPHI_H_1_40"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_H_1_80" id="TYPHI_H_1_80"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_H_1_160" id="TYPHI_H_1_160"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_H_1_320" id="TYPHI_H_1_320"><option value="-">-</option><option value="+">+</option></select></th>
                                </tr>
                                <tr>
                                    <th colspan="5" style="padding-top:20px; "></th>
                                </tr>
                                <tr>
                                    <th>TYPHI "AH"</th>
                                    <th><select name="TYPHI_AH_1_40" id="TYPHI_AH_1_40"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_AH_1_80" id="TYPHI_AH_1_80"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_AH_1_160" id="TYPHI_AH_1_160"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_AH_1_320" id="TYPHI_AH_1_320"><option value="-">-</option><option value="+">+</option></select></th>
                                </tr>
                                <tr>
                                    <th colspan="5" style="padding-top:20px; "></th>
                                </tr>
                                <tr>
                                    <th>TYPHI "BH"</th>
                                    <th><select name="TYPHI_BH_1_40" id="TYPHI_BH_1_40"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_BH_1_80" id="TYPHI_BH_1_80"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_BH_1_160" id="TYPHI_BH_1_160"><option value="-">-</option><option value="+">+</option></select></th>
                                    <th><select name="TYPHI_BH_1_320" id="TYPHI_BH_1_320"><option value="-">-</option><option value="+">+</option></select></th>
                                </tr>
                                <tr>
                                    <th colspan="5" style="padding-top:20px; "></th>
                                </tr>
                                <tr>
                                    <th>Result</th>
                                    <th colspan=4>
                                      <select name="RESULT" id="RESULT">
                                        <option value="Negative">Negative</option>
                                        <option value="Positive">Positive</option>
                                        <option value="Rising Titres are significant">Rising Titres are significant</option>
                                      </select>
                                    </th>
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
            $("#RESULT").change(function(){
                if($(this).val() == "Positive"){
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                    alert('Make sure! You have selected Positive value.');

                    $("#TYPHI_O_1_40").val("+");
                    $("#TYPHI_O_1_80").val("+");
                    $("#TYPHI_O_1_160").val("+");
                    $("#TYPHI_O_1_320").val("-");

                    $("#TYPHI_H_1_40").val("+");
                    $("#TYPHI_H_1_80").val("+");
                    $("#TYPHI_H_1_160").val("-");
                    $("#TYPHI_H_1_320").val("-");

                    $("#TYPHI_AH_1_40").val("-");
                    $("#TYPHI_AH_1_80").val("-");
                    $("#TYPHI_AH_1_160").val("-");
                    $("#TYPHI_AH_1_320").val("-");

                    $("#TYPHI_BH_1_40").val("-");
                    $("#TYPHI_BH_1_80").val("-");
                    $("#TYPHI_BH_1_160").val("-");
                    $("#TYPHI_BH_1_320").val("-");

                }else if ($(this).val()=="Negative") {
                    $(this).css('color','');
                    $(this).css('border','');

                    $("#TYPHI_O_1_40").val("+");
                    $("#TYPHI_O_1_80").val("+");
                    $("#TYPHI_O_1_160").val("+");
                    $("#TYPHI_O_1_320").val("-");

                    $("#TYPHI_H_1_40").val("-");
                    $("#TYPHI_H_1_80").val("-");
                    $("#TYPHI_H_1_160").val("-");
                    $("#TYPHI_H_1_320").val("-");

                    $("#TYPHI_AH_1_40").val("-");
                    $("#TYPHI_AH_1_80").val("-");
                    $("#TYPHI_AH_1_160").val("-");
                    $("#TYPHI_AH_1_320").val("-");

                    $("#TYPHI_BH_1_40").val("-");
                    $("#TYPHI_BH_1_80").val("-");
                    $("#TYPHI_BH_1_160").val("-");
                    $("#TYPHI_BH_1_320").val("-");

                } else if($(this).val()=="Rising Titres are significant"){
                    $(this).css('color','blue');
                    $(this).css('border','2px solid blue');

                    $("#TYPHI_O_1_40").val("+");
                    $("#TYPHI_O_1_80").val("+");
                    $("#TYPHI_O_1_160").val("+");
                    $("#TYPHI_O_1_320").val("-");

                    $("#TYPHI_H_1_40").val("+");
                    $("#TYPHI_H_1_80").val("-");
                    $("#TYPHI_H_1_160").val("-");
                    $("#TYPHI_H_1_320").val("-");

                    $("#TYPHI_AH_1_40").val("-");
                    $("#TYPHI_AH_1_80").val("-");
                    $("#TYPHI_AH_1_160").val("-");
                    $("#TYPHI_AH_1_320").val("-");

                    $("#TYPHI_BH_1_40").val("-");
                    $("#TYPHI_BH_1_80").val("-");
                    $("#TYPHI_BH_1_160").val("-");
                    $("#TYPHI_BH_1_320").val("-");
                    
                }else{
                    alert("You have not select any value");
                    $("#TYPHI_O_1_40").val("-");
                    $("#TYPHI_O_1_80").val("-");
                    $("#TYPHI_O_1_160").val("-");
                    $("#TYPHI_O_1_320").val("-");

                    $("#TYPHI_H_1_40").val("-");
                    $("#TYPHI_H_1_80").val("-");
                    $("#TYPHI_H_1_160").val("-");
                    $("#TYPHI_H_1_320").val("-");

                    $("#TYPHI_AH_1_40").val("-");
                    $("#TYPHI_AH_1_80").val("-");
                    $("#TYPHI_AH_1_160").val("-");
                    $("#TYPHI_AH_1_320").val("-");

                    $("#TYPHI_BH_1_40").val("-");
                    $("#TYPHI_BH_1_80").val("-");
                    $("#TYPHI_BH_1_160").val("-");
                    $("#TYPHI_BH_1_320").val("-");
                }
            });
       });
   </script>
@endsection
