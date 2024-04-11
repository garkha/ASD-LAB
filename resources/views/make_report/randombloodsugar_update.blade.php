@extends('layout.asd')
@section('title','RANDOM BLOOD SUGAR')
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
                                    <th>Test Name<p></p>RANDOM BLOOD SUGAR</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <td>BLOOD SUGAR (Random)</td>
                                    <td>
                                      <input type="number" step="any"  name="random_sugar" id="random_sugar" value="{{$test->random_sugar}}">
                                      <span style="color:red;">@error('random_sugar'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dl</td>
                                    <td>80-160</td>
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
            $('#random_sugar').keyup(function(){
                $result_value = $(this).val();
                if(($result_value > 160) || ($result_value < 80)){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','black');
                }
            });
       });
   </script>
@endsection
