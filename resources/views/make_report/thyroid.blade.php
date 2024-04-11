@extends('layout.asd')
@section('title','THYROID FUNCTION TEST')
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
                                    <th>Test Name<p></p>THYROID FUNCTION TEST</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>T3 (Trilodothyronine) </td>
                                    <td>
                                        <input type="number" step="any" name="t3" id="t3" value="{{old('t3')}}">
                                        <span style="color:red;">@error('t3'){{$message}}@enderror</span>
                                    </td>
                                    <td>ng/dl</td>
                                    <td>60-181</td>
                                </tr>
                                <tr>
                                    <td>T4 (Thyroxine)</td>
                                    <td>
                                        <input type="number" step="any" name="t4" id="t4" value="{{old('t4')}}">
                                        <span style="color:red;">@error('t4'){{$message}}@enderror</span>
                                    </td>
                                    <td>ng/dl</td>
                                    <td>4.5-12.6</td>
                                </tr>
                                <tr>
                                    <td>TSH (Ultrasensitive) </td>
                                    <td>
                                        <input type="number" step="any" name="tsh" id="tsh" value="{{old('tsh')}}">
                                        <span style="color:red;">@error('tsh'){{$message}}@enderror</span>
                                    </td>
                                    <td>uIU/mL</td>
                                    <td>0.13-6.33</td>
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
            $('#t3').keyup(function(){
                $result_value = $(this).val();
                if(($result_value > 181) || ($result_value < 60)){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','black');
                }
            });
            $('#t4').keyup(function(){
                $result_value = $(this).val();
                if(($result_value > 12.6) || ($result_value < 4.5)){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','black');
                }
            });
            $('#tsh').keyup(function(){
                $result_value = $(this).val();
                if(($result_value > 6.33) || ($result_value < 0.13)){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','black');
                }
            });
        });
    </script>
@endsection
