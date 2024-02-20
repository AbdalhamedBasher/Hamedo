@extends('layouts.admin')
@section('content')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="background-color:#433483a3 ; min-hight:3rem ; hight:300px">
                    @include('partials.breadcrumb')
                </div>
                <div class="card">

                    <div class="container py-1">
                        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 justify-content-center">







                            @foreach ($items as $item)



                                <div class="col-lg-2 col-sm-6 grid-column py-3">
                                    <a href="{{url('lines/'.$item->id)}}" class="">
                                        <div
                                            class="grid-item border p-4 rounded-xl text-center position-relative shadow-xl hover:shadow-lg">
                                            <i class="fa fas fa-users fa-2x pb-2" style="
                                     color:#433483a3;
                                                    "></i><br>
                                            <span class="font-weight-bold">{{$item->name}}</span>
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                                <div class="col-lg-2 col-sm-6 grid-column py-3">
                                    <a href="{{isset($master)?url('quote/'.$master):''}}" class="" {{isset($master)?'#':''}}>
                                        <div
                                            class="grid-item border p-4 rounded-xl text-center position-relative shadow-xl hover:shadow-lg">
                                            <i class="fa fas fa fa-file-text-o fa-2x pb-2" style="
                                     color:#433483a3;
                                                    "></i><br>
                                            <span class="font-weight-bold">الفواتير</span>
                                        </div>
                                    </a>
                                </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
@section('scripts')
    <script>
        function sendMarkRequest(id = null) {
            return $.ajax("#", {
                method: 'POST',

                data: {
                    _token: '{{ csrf_token() }}',
                    id
                }
            });
        }
        $(function() {
            $('.mark-as-read').click(function() {
                let request = sendMarkRequest($(this).data('id'));
                request.done(() => {
                    $(this).parents('div.alert').remove();
                });
            });
            $('#mark-all').click(function() {
                let request = sendMarkRequest();
                request.done(() => {
                    $('div.alert').remove();
                })
            });
        });
    </script>
    @parent
@endsection
