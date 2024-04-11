@extends('layout.asd')
@section('title','CRP- C REACTIVE PROTEIN (QUANTITATIVE)')
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
                                    <th>Test Name<p></p>CRP- C REACTIVE PROTEIN (QUANTITATIVE)</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>CRP QUANTITATIVE</td>
                                    <td>
                                        <input type="number" name="crp" id="crp" step="any" value="{{old('crp')}}" required />
                                        <span style="color:red;">@error('crp'){{$message}}@enderror</span>
                                    </td>
                                    <td>mg/l </td>
                                    <td>0-6</td>
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
            $('#crp').keyup(function () {
                if($(this).val()>6){
                    $(this).css('color','red');
                }else{
                    $(this).css('color','');
                }
            });
       });
   </script>
@endsection