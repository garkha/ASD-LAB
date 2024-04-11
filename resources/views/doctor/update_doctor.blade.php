@extends('layout.asd')
@section('title','Update Doctor Details')
{{--------------------------------HEAD SCRIPT--------------------------------}}
@section('head-script')
    
@endsection
{{----------------------------- END HEAD SCRIPT ------------------------------}}

{{------------------------------------- STYLE --------------------------------}}
@section('style')
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even){background-color: #f2f2f2}
        tr:first-child{background-color:#3fbbc0;}
        
        tr[data-href] {
            cursor: pointer;
        }
        tr:hover {
            background-color: coral;
            color:#f2f2f2;
        }
        a{ 
            color: crimson;
        }
        a:hover{
            color: yellow;
        }
        @media only screen and (max-width: 600px) {
            input{
                margin-top: 5px;
            }
        }
    </style>
@endsection
{{---------------------------------- END STYLE------------------------------}}

{{---------------------------------- MAI BODY ------------------------------}}
@section('main-body')
    <main id="main">
        <section id="contact" class="contact">
            <div class="container">
                <div class="row mt-5 shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="col-md-12">
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center py-3">
                                <h4>UPDATE DOCTOR</h4>
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" class="form-control" name="id" id="" value="{{$doctor->id}}">
                                <input type="text" class="form-control" name="name" id="" value="{{$doctor->name}}">
                                <span style="color:red;">
                                    @error('doctor')
                                    {{$message}}
                                    @enderror
                                </span><br>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="form-control btn btn-primary mb-2" value="submit">
                            </div>
                        </div>
                    </form>
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
            
        });
    </script>
@endsection
{{------------------------------- BODY SCRIPT -------------------------------}}
