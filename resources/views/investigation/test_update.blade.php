@extends('layout.asd')
@section('title','worklist')
{{--------------------------------HEAD SCRIPT--------------------------------}}
@section('head-script')
    
@endsection
{{----------------------------- END HEAD SCRIPT ------------------------------}}

{{------------------------------------- STYLE --------------------------------}}
@section('style')
    
@endsection
{{---------------------------------- END STYLE------------------------------}}

{{---------------------------------- MAI BODY ------------------------------}}
@section('main-body')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box" style="padding: 20px;">
                                    <!--Alert Box-->
                                    <div class="row">
                                        <div class="form-group col-md-12 py-1">
                                            <div class="result" role="alert">
                                                {{--RESULT CAME FROM SCRIPT--}}
                                            </div>
                                        </div>
                                    </div>
                                    <!--Alert Box-->

                                    <div class="row">
                                        <span style="padding: 5px; font-weight:bold; color:black; font-size:20px; text-decoration:underline;">UPDATE INVESTIGATION DETAILS</span>
                                        <span style="text-align: right; padding: 5px; padding-right:50px; text-decoration:underline; color:blue; font-weight:bold; cursor: pointer;" id="back">Back to Test Details</span>
                                        <div class="form-group col-md-12 py-1">
                                            <input type="hidden" id="investigation_id" value="{{$investigation_record->id}}">
                                            <input type="text" name="" id="investigation_name" class="form-control" placeholder="{{$investigation_record->test_name}}" value="{{$investigation_record->test_name}}">
                                        </div>
                                        <div class="form-group col-md-12 py-1">
                                            <input type="text" name="" id="short_name" class="form-control" placeholder="Investigation Short Name" value="{{$investigation_record->short_name}}">
                                        </div>
                                        <div class="form-group col-md-12 py-1">
                                            <input type="number" name="price" step="any"  id="price" class="form-control" placeholder="Price" value="{{$investigation_record->price}}">
                                        </div>
                                        <div class="form-group col-md-12 py-1">
                                            <input type="button" class="btn btn-success" value="Update" id="add_test" class="form-control" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main>
@endsection
{{------------------------------- END MAI BODY ------------------------------}}


{{------------------------------- BODY SCRIPT -------------------------------}}
@section('body-script')
    <script type="text/javascript">
        $(document).ready(function(){
            //Add Test
            $('#add_test').on('click', function(){
                var id = $('#investigation_id').val();
                var investigation_name = $('#investigation_name').val();
                var short_name = $('#short_name').val();
                var price = $('#price').val();
                var mv = $('#mv').val();

                if(investigation_name == ""){
                    $('#investigation_name').css("border-color","red");
                }
                if(short_name == ""){
                    $('#short_name').css("border-color","red");
                }
                if(price == ""){
                    $('#price').css("border-color","red");
                }
                

                if(investigation_name != "" && short_name != "" && price != ""){
                    $.ajax({
                        url: "{{ route('update_investigation_test') }}",
                        type: 'GET',
                        data: {'investigation_name': investigation_name, 'short_name':short_name, 'price':price, 'id':id},
                        success: function(data){
                            if(data == 0){
                                $('.result').addClass("alert alert-danger");
                                $('.result').html("Failed ! Investigation not Update");
                            }else{
                                $('.result').addClass("alert alert-success");
                                $('.result').html(data);
                            }
                            
                        }
                    });
                    
                }

            });//End update Test
            
            $('#back').on('click',function(){
                window.location.replace('/test list');
            });
        });
    </script>
@endsection
{{------------------------------- BODY SCRIPT -------------------------------}}
