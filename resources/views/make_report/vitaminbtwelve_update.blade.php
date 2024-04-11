@extends('layout.asd')
@section('title','VITAMIN B-12 LEVEL TEST')
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
                                    <th>Test Name<p></p>VITAMIN B-12 LEVEL TEST</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <td>Vitamin B12 Level</td>
                                    <td>
                                      <input type="number" step="any" name="vitaminb" id="vitaminb" value="{{$test->vitaminb}}">
                                      <span style="color:red;">@error('vitaminb'){{$message}}@enderror</span>
                                    </td>
                                    <td>pg/ml </td>
                                    <td>197-711</td>
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
            $('#vitaminb').keyup(function(){
                $result_value = $(this).val();
                if(($result_value > 711) || ($result_value < 197)){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','black');
                }
            });
        });
    </script>
@endsection
