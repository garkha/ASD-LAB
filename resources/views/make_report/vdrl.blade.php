@extends('layout.asd')
@section('title','VDRL TEST (RPR)')
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
                                    <th>Test Name<p></p>VDRL TEST (RPR)</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>RPR</td>
                                    <td>
                                        <select name="rpr" class="form-select form-select-sm" style="font-weight: bold;">
                                            <option disabled selected>Select</option>
                                            <option value="non reactive">Non reactive</option>
                                            <option value="reactive">Reactive</option>
                                        </select>
                                        @error('rpr')
                                           <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                        @enderror
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
            $( "select" ).change(function () {
                if($(this).val() == "reactive"){
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                    alert('Make sure! You have selected Reactive value.')
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
        });
    </script>
@endsection
