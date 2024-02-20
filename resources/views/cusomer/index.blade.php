@extends('layouts.admin')
@section('content')

    {{-- @extends('layouts.main') --}}





@section('content')
    <div class="flex items-center markdown">

    </div>

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn" id="icons" style="background-color: #433483a3 ; color:aliceblue">
                إضافة عميل جديد
            </a>
        </div>
    </div>
    <div class="card mt-1">
        <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

        </div>

        <div class="card-body">


            <div class="table-responsive">
                <table class=" table table-bordered  table-hover datatable datatable-Course" style="text-align: center">
                    <thead style="background: rgb(124, 124, 183); color:whitesmoke">
                        <tr>
                            <th width="10">
                                #
                            </th>

                            <th style="text-align: center">
                                اسم المستخدم
                            </th>
                            <th style="text-align: center">
                                رقم الهاتف
                            </th>
                            <th style="text-align: center">
                                البريد الألكتروني </th>
                            <th style="text-align: center">
                                الرقم الضريبي
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>


                        @php
                            $i = 1;
                        @endphp
                        @foreach ($customers as $item)
                            <tr data-entry-id="{{ $item->id }}" id="{{ $item->id }}">
                                <td>{{ $i++ }}</td>
                                <td id="name">{{ $item->name }}</td>
                                <td id="price">{{ $item->phone_number }}</td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    {{ $item->tax_number }}
                                </td>




                                <td>

                                    <span class="d-flex space-x-1">
                                        <a class="btn update btn-sm" style="background-color: #433483a3 ; color:aliceblue"
                                            data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                            data-phone_number='{{ $item->phone_number }}' data-email='{{ $item->email }}' data-tax_number='{{ $item->tax_number }}'>
                                            تعديل </a>
                                        {{--  --}}

                                        <button class="btn btn-danger btn-sm  delete" data-id="{{ $item->id }}"
                                            data-name="{{ $item->name }}">مسح</button>

                                    </span>

                                </td>
                            </tr>
                        @endforeach




                    </tbody>
                </table>
            </div>


        </div>
    </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                    </div>

                    <div class="card-body">
                        <form action="{{ route('customer') }}" method="POST" class="form-inlineform-row"
                            enctype="multipart/form-data">
                            @csrf


                           <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="inputZip">الاسم</label>
                                    <input type="text" class="form-control" name="name" id="inputZip">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputZip">رقم العاتف </label>
                                    <input type="text" class="form-control" name="phone_number" id="inputZip">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputZip">البريد الالكتروني </label>
                                    <input type="email" class="form-control" name="email" id="inputZip">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputZip">الرقم الضريبي </label>
                                    <input type="text" class="form-control" name="tax_number" id="inputZip">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputZip"> &emsp14; </label>

                                        <input type="submit" value="حفظ"
                                        class="form-control btn btn-outline-primary" id="inputZip">
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="inputZip"> &emsp14; </label>

                                        <input type="submit" value="خروج"
                                        class="form-control btn btn-outline-danger" id="inputZip">
                                </div>
                            </div>
                        </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal for terms --}}
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                    </div>

                    <div class="card-body">
                        <form action="{{ route('customer.update') }}" method="post" class="form-inlineform-row"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <div class="form-row mt-3">
                                <div class="form-row">
                                    <input type="hidden" class="form-control id" name="id" id="inputZip">
                                    <div class="form-group col-md-6">
                                        <label for="inputZip">الاسم</label>
                                        <input type="text" class="form-control name" name="name" id="inputZip">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputZip">رقم الاتف </label>
                                        <input type="text" class="form-control phone_number" name="phone_number" id="inputZip">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputZip">البريد الالكتروني </label>
                                        <input type="email" class="form-control email" name="email" id="inputZip">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputZip">الرقم الضريبي </label>
                                        <input type="text" class="form-control tax_number" name="tax_number" id="inputZip">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputZip"> &emsp14; </label>

                                            <input type="submit" value="حفظ"
                                            class="form-control btn btn-outline-primary" id="inputZip">
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label for="inputZip"> &emsp14; </label>

                                            <input type="submit" value="خروج"
                                            class="form-control btn btn-outline-danger" id="inputZip">
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                    </div>

                    <div class="card-body">

                        <P class="text-bold">
                            هل تريد مسح المادة؟
                        </P>
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" id="formupdate">



                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ old('name', isset($user) ? $user->name : '') }}" disabled>
                            @if ($errors->has('name'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.name_helper') }}
                            </p>
                        </div>



                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}"
                            style="border-radius: 50%;border:1px">
                            <span style="border-radius: 3rem">
                            </span>
                        </div>


                        <div class="d-flex">
                            <form action="{{ url('customer/delete') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="id" name="id" class="form-control"
                                    value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                                <input class="btn btn-danger b-a-1" style="" type="submit" value="مسح">
                            </form>
                        </div>

                    </div>

                </div>

            </div>

            <div>

            </div>
        </div>

    </div>

    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('course_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "#1",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-Course:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
        $(document).ready(function() {






            $(".update").click(function(e) {


                $('#updateModal').modal('show');
               console.log($('#updateModal .id').val($(this).data('id')));

                $('#updateModal .name').val($(this).data('name'))
                $('#updateModal .phone_number').val($(this).data('phone_number'))
                $('#updateModal .email').val($(this).data('email'))
                $('#updateModal .tax_number').val($(this).data('tax_number'))
            })
            $(".icons_modal").click(function(e) {
                e.preventDefault

                $("#icon_name").val(this.id);

                // console.log( $("#icons_modal").find('.fa')[0].attr('id'));
            })
        });

        $(".delete").click(function(e) {

            $('#deleteModal').modal('show');
            $('#deleteModal #id').val($(this).data('id'))
            $('#deleteModal #name').val($(this).data('name'))



            // $('#updateModal #id').val(this.parent().find('#name'))
            // console.log($(this).parent().parent().find('td #name').val());

        })
    </script>
@endsection


@endsection
