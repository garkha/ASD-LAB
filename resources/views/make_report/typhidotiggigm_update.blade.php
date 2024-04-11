@extends('layout.asd')
@section('title','TYPHIDOT IGG IGM')
@section('head-script')
@endsection
@section('style')
    <style>
        select {
            font-weight: bold;
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
                                <tr>
                                    <th>Test Name<p></p>TYPHIDOT IGG IGM</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <input type='hidden' name='test_id' value='{{$test->id}}'>
                                <tr>
                                    <td>IgG TO SALMONELLA TYPHI</td>
                                    <td>
                                        <select name="igg" class="form-select form-select-sm" style="font-weight: bold;">
                                            <option value="{{$test->igg}}" selected>{{$test->igg}}</option>
                                            <option value="">SELECT</option>
                                            <option value="negative">NEGATIVE</option>
                                            <option value="positive">POSITIVE</option>
                                            <option value="weak positive"> WEAK POSITIVE</option>
                                        </select>
                                        @error('hiv')
                                           <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                        @enderror
                                    </td>
                                    <td></td>
                                    <td>NEGATIVE</td>
                                </tr>
                                <tr>
                                    <td>IgM TO SALMONELLA TYPHI </td>
                                    <td>
                                        <select name="igm" class="form-select form-select-sm" style="font-weight: bold;">
                                            <option value="{{$test->igm}}" selected>{{$test->igm}}</option>
                                            <option value="">SELECT</option>
                                            <option value="negative">NEGATIVE</option>
                                            <option value="positive">POSITIVE</option>
                                            <option value="weak positive"> WEAK POSITIVE</option>
                                        </select>
                                        @error('igm')
                                           <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                        @enderror
                                    </td>
                                    <td></td>
                                    <td>NEGATIVE</td>
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
            $( "select" ).change(function () {
                if($(this).val() == "positive"){
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                    alert('Make sure! You have selected Positive value.')
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
       });
   </script>
@endsection
