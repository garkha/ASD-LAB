@extends('layout.asd')
@section('title','doctor')
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
                        @if (session('fail'))
                        <div class="alert alert-danger">{{ session('fail') }}</div>
                        @endif
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center py-3">
                                <h4>ADD DOCTORS</h4>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" id="" value="{{old('name')}}" style="border: 2px solid rgb(71, 203, 226);">
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="form-control btn btn-primary mb-2" value="submit">
                            </div>
                        </div>
                    </form>

                    <div class="rwo">
                        <div class="col-md-12">
                            @if (count($doctors)>0)
                            @php
                                $sn = 0;
                            @endphp
                            <div style="overflow-x:scroll;" id="doctor_list">
                                <table>
                                    <tr>
                                        <th>SN</th>
                                        <th>Doctor Name</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                    @foreach ($doctors as $doctor)
                                        <tr data-href="#">
                                            <td>{{++$sn}}</td>
                                            <td>{{$doctor->name}}</td>
                                            <td><a href="{{ url('delect doctor/'.convert_uuencode($doctor->id) ) }}">Delete</a></td>
                                            <td><a href="{{ url('update doctor/'.convert_uuencode($doctor->id) ) }}">Update</a></td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            @else
                            <table>
                                <tr>
                                    <th>DOCTORS TABLE EMPTY</th>
                                </tr>
                            </table>
                            @endif
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
            $('input[type=text]').on('keyup',function(){
                $search = $(this).val();
                $.ajax({
                    url: "{{ route('get_doctor_list') }}",
                    type: 'GET',
                    data: {'search': $search},
                    success: function(data){
                        $('#doctor_list').html(data);
                    }
                });
            });
        });
    </script>
@endsection
{{------------------------------- BODY SCRIPT -------------------------------}}
