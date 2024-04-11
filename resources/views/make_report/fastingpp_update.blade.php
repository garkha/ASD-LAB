@extends('layout.asd')
@section('title','GLUCOSE FASTING + POST PRANDIAL')
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
                                    <th>Test Name<p></p>GLUCOSE FASTING + POST PRANDIAL</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <td>BLOOD SUGAR (FASTING)</td>
                                    <td>
                                      <input type="number" step="any"  name="fasting" id="fasting" value="{{$test->fasting}}">
                                      <span style="color:red;">@error('fasting'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dl</td>
                                    <td>70-100</td>
                                </tr>
                                <tr>
                                    <td>BLOOD SUGAR (PP)</td>
                                    <td>
                                      <input type="number" step="any"  name="pp" id="pp" value="{{$test->pp}}">
                                      <span style="color:red;">@error('pp'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/dl</td>
                                    <td>70-140</td>
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
