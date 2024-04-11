@extends('layout.asd')
@section('title','BLEEDING TIME AND CLOTTING TIME TEST')
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
                                    <th>Test Name<p></p>BLEEDING TIME AND CLOTTING TIME TEST</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <td>BLEEDING TIME</td>
                                    <td> 
                                        <input type="text" name="BLEEDING_TIME" id="BLEEDING_TIME" value="{{$test->BLEEDING_TIME}}" placeholder="00 MIN 00 SEC">
                                        <span style="color:red;">@error('BLEEDING_TIME'){{$message}}@enderror</span>
                                    </td>
                                    <td>Minute</td>
                                    <td>2 - 7</td>
                                </tr>
                                <tr>
                                    <td>CLOTTING TIME</td>
                                    <td>
                                        <input type="text" name="CLOTTING_TIME" id="CLOTTING_TIME" value="{{$test->CLOTTING_TIME}}" placeholder="00 MIN 00 SEC">
                                        <span style="color:red;">@error('CLOTTING_TIME'){{$message}}@enderror</span>
                                    </td>
                                    <td>Minute</td>
                                    <td>5 - 10</td>
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
       });
   </script>
@endsection
