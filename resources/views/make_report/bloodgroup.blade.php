@extends('layout.asd')
@section('title','Blood Group ABO')
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
            @media only screen and (max-width: 600px) {
                #test {
                    width:1000px;
                }
            }
    </style>
@endsection
@section('main-body')
    <main id='main'>
        <section id='contact' class='contact'>
            <div class='container'>
                <div class='row mt-5'>
                    <div class='info-box' style="padding: 20px; overflow-x:auto;">
                        <form action='' method='post'>
                            @csrf
                            <table id='test'>
                                <tr>
                                    <th>Test Name<p></p>BLOOD GROUP (ABO & RH) TEST</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>BLOOD GROUP</td>
                                    <td>
                                        <select name="blood_group" class="form-select form-select-sm" style="font-weight: bold;">
                                            <option disabled selected>Select</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                        @error('blood_group')
                                           <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                        @enderror
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>RH TYPING</td>
                                    <td>
                                        <select name="rh_typing" class="form-select form-select-sm" style="font-weight: bold;">
                                            <option disabled selected>Select</option>
                                            <option value="Positive">Positive</option>
                                            <option value="Negative">Negative</option>
                                        </select>
                                        @error('rh_typing')
                                           <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                        @enderror
                                    </td>
                                    <td></td>
                                    <td></td>
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
