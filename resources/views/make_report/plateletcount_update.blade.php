@extends('layout.asd')
@section('title','PLATELET COUNT')
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
                                    <th>Test Name<p></p>PLATELET COUNT</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <td>Platelet Count</td>
                                    <td>
                                      <input type="number" step="any" name="platelet" id="platelet" value="{{$test->platelet}}">
                                      <span style="color:red;">@error('platelet'){{$message}}@enderror</span>
                                    </td>
                                    <td>thou/µL</td>
                                    <td>150-410</td>
                                </tr>
                                <tr>
                                    <td>Reamrak</td>
                                    <td colspan="3"><input type="text" name="reamrak" id="eeamrak" value="{{old('reamrak')}}"></td>
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
            $('#platelet').keyup(function(){
                $result_value = $(this).val();
                if(($result_value > 410) || ($result_value < 150)){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','black');
                }
            });
        });
    </script>
@endsection
