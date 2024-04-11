@extends('layout.asd')
@section('title','HBA1C (GLYCATED HEMOGLOBIN)')
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
                                    <th>Test Name<p></p>HBA1C (GLYCATED HEMOGLOBIN)</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <td>Glycosylated Hb (HbA1c)</td>
                                    <td>
                                        <input type="number" step="any" name="hb" id="hb" value="{{$test->hb}}" required />
                                        <span style="color:red;">@error('hb'){{$message}}@enderror</span>
                                    </td>
                                    <td>%</td>
                                    <td>4.2-6.5</td>
                                </tr>
                                <tr>
                                    <td>Average Glucose</td>
                                    <td>
                                        <input type="number" step="any" name="ag" id="ag" value="{{$test->ag}}" />
                                        <span style="color:red;">@error('ag'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dl</td>
                                    <td>73-140</td>
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
            $('#hb').keyup(function(){
                if($(this).val()>6.5 || $(this).val()<4.2){
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
            $('#ag').keyup(function(){
                if($(this).val()>140 || $(this).val()<73){
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
       });
   </script>
@endsection