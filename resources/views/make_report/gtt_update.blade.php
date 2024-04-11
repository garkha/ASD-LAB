@extends('layout.asd')
@section('title','GLUCOSE TOLERANCE TEST (GTT) 3 SAMPLE')
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
                                    <th>Test Name<p></p>GLUCOSE TOLERANCE TEST (GTT) 3 SAMPLE</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <td>BLOOD SUGAR (FASTING)</td>
                                    <td>
                                      <input type="number" step="any" name="bs_fasting" id="bs_fasting" value="{{$test->bs_fasting}}"/>
                                      <span style="color:red;">@error('bs_fasting'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dl</td>
                                    <td>70-110</td>
                                </tr>
                                <tr>
                                    <td>Blood Sugar 1 Hour</td>
                                    <td>
                                      <input type="number" step="any" name="bs_after_one_hour" id="bs_after_one_hour" value="{{$test->bs_after_one_hour}}"/>
                                      <span style="color:red;">@error('bs_after_one_hour'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dl</td>
                                    <td>Les Then 180</td>
                                </tr>
                                <tr>
                                    <td>Blood Sugar 2 Hour</td>
                                    <td>
                                      <input type="number" step="any" name="bs_after_two_hour" id="bs_after_two_hour" value="{{$test->bs_after_two_hour}}"/>
                                      <span style="color:red;">@error('bs_after_two_hour'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dl</td>
                                    <td>Les Then 153</td>
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
            $('#bs_fasting').keyup(function(){
                if($(this).val()>110 || $(this).val()<70){
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#bs_after_one_hour').keyup(function(){
                if($(this).val()>180 || $(this).val()<70){
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#bs_after_two_hour').keyup(function(){
                if($(this).val()>153 || $(this).val()<70){
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
       });
   </script>
@endsection
