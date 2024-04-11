@extends('layout.asd')
@section('title','URINE PREGNANCY TEST')
@section('head-script')
@endsection
@section('style')
    <style>
        select {
            width: 200px;
            border-radius: 4px;
            color: #000000;
            cursor: pointer;
            font-weight: bold;
        }
        select option{
            font-size: 17px;
            text-align:center;
            color:rgb(0, 0, 0);
            cursor: pointer;
            font-weight: bold;
        }
        input{
            width: 200px;
            height: 30px;
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
                                    <th>Test Name<p>URINE PREGNANCY TEST</p></th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>UPT</td>
                                    <td>
                                        <select name="UPT" class="form-select form-select-sm">
                                            <option disabled selected>Select</option>
                                            <option value="Negative">Negative</option>
                                            <option value="Positive">Positive</option>
                                        </select>
                                        <span style="color:red;">
                                            @error('UPT')
                                               {{$message}}
                                            @enderror
                                        </span>
                                    </td>
                                    <td></td>
                                    <td>Non Reactive</td>
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
            $('select').change(function(){
                if ($(this).val()=="Positive") {
                    $(this).css('color','red');
                    $(this).css('border','1px solid red');
                } else {
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
       });
   </script>
@endsection