@extends('layout.asd')
@section('title','DENGUE NS1 ANTIGEN METHOD IMMUNOFLUORESCENT ELISA')
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
                                    <th>Test Name<p></p>DENGUE NS1 ANTIGEN METHOD IMMUNOFLUORESCENT ELISA</th>
                                    <th>Result</th>
                                    <th>Unit</th>
                                    <th>Biological Ref.Interval</th>
                                </tr>
                                <tr>
                                    <td>Dengue NS1 antigen, serum <br> Method : Immunofluorescent ELISA</td>
                                    <td><input type="number" step="any" name="dengue" id="dengue" value="{{old('dengue')}}"/></td>
                                    <td>unit</td>
                                    <td>{{"< 0.9"}}</td>
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
            $('#dengue').keyup(function(){
                if($(this).val()>0.9){
                    $(this).css('color','red');
                    $(this).css('border','2px solid red');
                }else{
                    $(this).css('color','');
                    $(this).css('border','');
                }
            });
       });
   </script>
@endsection
