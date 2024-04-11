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
        <!-- ======= Contact Section ======= -->
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
                                            @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                            @endif
                                            @if (session('fail'))
                                            <div class="alert alert-danger">
                                                {{ session('fail') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <!--Alert Box-->
                                    <div class="row info-box" style="background: rgb(43, 239, 203); padding:30px 15px 30px 15px; border-radius: 5px; margin: 5px 5px;">
                                        <h4>ADD TEST</h4>
                                        <form action="" method="post">
                                            @csrf
                                            <div class="form-group col-md-12 py-1">
                                                <input type="text" name="test_name" id="test_name" value="{{ old('test_name')}}" class="form-control" placeholder="Enter Test Name">
                                                @error('test_name')
                                                <span style="color: rgb(247, 12, 12);">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12 py-1">
                                                <input type="text" name="short_name" id="short_name" value="{{ old('short_name')}}" class="form-control" placeholder="Short cut Name for Fast searching">
                                                @error('short_name')
                                                <span style="color: rgb(247, 12, 12)">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12 py-1">
                                                <input type="number" step="any" name="price" id="price" value="{{ old('price')}}" class="form-control" placeholder="Price">
                                                @error('price')
                                                <span style="color: rgb(247, 12, 12)">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12 py-1">
                                                <input type="text" name="mv" id="mv" value="{{ old('mv')}}" class="form-control" placeholder="Model Name and View Name">
                                                @error('mv')
                                                <span style="color: rgb(247, 12, 12)">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12 py-1">
                                                <input type="submit" class="btn btn-success" value="submit" id="add_test" class="form-control" style="width: 100%">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!--Investigations Table--->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box" style="padding: 20px;">
                                    <div class="row">
                                        <div class="form-group col-md-12 py-1">
                                            <input type="search" id="search" name="" class="form-control" placeholder="Search Investigations">
                                        </div>
                                    </div>
                                    <div class="row" style="overflow-x:auto;">
                                        <div style="overflow-x:auto;" id="investigations_data">
                                            {{--TABLE TEST LIST CAME FROM AJAX--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Investigations Table--->
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
            $(document.body).on('click','tr[data-href]',function(){
                window.location.href = this.dataset.href;
            });

            show_investigations();
            function show_investigations(){
                $.ajax({
                url: "{{ route('show_investigations') }}",
                type: 'GET',
                success: function(data){
                    $('#investigations_data').html(data);
                }
            });
            }

            //Search Invetigation
            $('#search').keyup(function(){
            var a = $(this).val();
            $.ajax({
                    url: "{{ route('searchInvestigation') }}",
                    type: 'GET',
                    data: {'name':a},
                    success: function(data){
                        $('#investigations_data').html(data);
                    }
                });

            });
            //Search Invetigation
        });
    </script>
@endsection
{{------------------------------- BODY SCRIPT -------------------------------}}
