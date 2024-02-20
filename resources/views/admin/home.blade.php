@extends('layouts.admin')
@section('content')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="background-color:#433483a3 ; min-hight:3rem">
                    &emsp;
                </div>
                <div class="card">

                    <div class="container py-1">
                        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 justify-content-center">







                            @foreach ($items as $item)



                                <div class="col-lg-2 col-sm-6 grid-column py-3">
                                    <a href="#" class="">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ url('lines') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> إضافة خدمات جديدة </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col">
                        <div class=" mb-2">
                            <span>إسم الخدمة :&nbsp;</span>
                            <input type="text" id="start_at" name="year_name_from" class="form-control"
                                placeholder="" required>&nbsp;
                        </div>
                        <div class=" mb-2">
                            <span> الخدمة الاساسية :&nbsp;</span>
                            <select class="form-control" id="exampleFormControlSelect1" name="line_catogery">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>&nbsp;

                        </div>



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-2">إضافة</button>
                </div>
            </form>
        </div>
    </div>
</div>
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
        $(".btn").click(function (e) {
            e.perventDefault();
            alert("hi");
        })
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
