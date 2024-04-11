@extends('layout.asd')
@section('title','MALARIA PARASITE (MP- SLIDE)')
@section('head-script')
@endsection
@section('style')
    <style>
        select {
            font-weight: bold;
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
        input{
            width: 100%;
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
                                    <th>Test Name<p></p>MALARIA PARASITE (MP- SLIDE)</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>Malaria Parasite - Slide</td>
                                    <td>
                                        <select name="mp" class="form-select form-select-sm">
                                            <option value="Not Seen">Not Seen</option>
                                            <option value="Seen">Seen</option>
                                            <option value="Detected">Detected</option>
                                            <option value="Not Detected">Not Detected</option>
                                        </select>
                                        @error('mp')
                                           <p style="color: rgb(247, 12, 12)">{{$message}}</p>
                                        @enderror
                                    </td>
                                    <td></td>
                                    <td>Not Seen</td>
                                </tr>
                                <tr>
                                    <td>COMMENT</td>
                                    <td><input type="text" name="comment" id="comment" placeholder="Optional"/></td>
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
            $( "select" ).change(function () {
                if($(this).val() == "Reactive" || $(this).val() == "Positive" || $(this).val() == "Seen" || $(this).val() == "Detected"){
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                    alert('Make sure! You have selected '+ $(this).val() +' value.')
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
       });
   </script>
@endsection
