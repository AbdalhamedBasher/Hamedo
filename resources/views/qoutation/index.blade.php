@extends('layouts.admin')
@section('content')

    {{-- @extends('layouts.main') --}}





@section('content')
    <div class="flex items-center markdown">

    </div>


    <div class="card mt-1">
        <div class="card-header d-flex justify-content-between" style="background-color: #433483a3 ; color:aliceblue">
<h1 class=" text-5xl">نظام التسعيرة</h1> <a href="{{route('qoute.create')}}" class="btn  btn-secondary  btn-md"> <i class="icon-pencil"></i>تسعيرة جديدة</a>
        </div>
        <div id="chart"></div>




    </div>
    <div class="card mt-1 card-detail">
        <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

        </div>

        <div class="card-body">
            <div class="line_form">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputZip">المرجع</label>
                        <input type="text" name="id" class="form-control"   id="inputZip">


                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">المشروع</label>
                        <input type="text" class="form-control project" name="projec" id="inputZip">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputZip">النشاط</label>
                        <input type="text" class="form-control line" name="factor" id="inputZip">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip">الحالة</label>
                        <input type="text" class="form-control statues" name="statues" id="inputZip">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">                    تاريخ إصادار التسعيرة
                        </label>
                        <input type="date" class="form-control issue_date" name="statues" id="inputZip">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip"> &emsp14; </label>
                        <input type="text" class="form-control issue_from" name="issue_from" id="inputZip">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip"> &emsp14; </label>
                        <input type="text" class="form-control issue_todate" name="todate" id="inputZip">
                    </div>
                    {{-- تاريخ الانتهاء --}}
                    <div class="form-group col-md-4">
                        <label for="inputZip">                    تاريخ إنتهاء التسعيرة
                        </label>
                        <input type="date" class="form-control expire_date" name="expire_date" id="inputZip">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip"> &emsp14; </label>
                        <input type="text" class="form-control from_expire_date" name="from_expire_date" id="inputZip">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip"> &emsp14; </label>
                        <input type="text" class="form-control expire_date" name="expire_date" id="inputZip">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip"> &emsp14; </label>
                        <input type="submit" value=" بحث" class="form-control btn-bd-primary new_product"
                            id="inputZip">
                    </div>
                    {{-- statues --}}
                </div>

            </div>
        </div>

        </form>
    </div>


    <div class="card mt-1">
        <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

        </div>

        <div class="card-body">


            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Course overflow-x-scroll"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th width="10">
                                #
                            </th>

                            <th style="text-align: center">
                                اسم المادة
                            </th>
                            <th style="text-align: center">
                                الوحدات
                            </th>
                            <th style="text-align: center">
                                الكمية
                            </th>
                            <th style="text-align: center">
                                مج/المواد </th>
                            <th style="text-align: center">
                                المواد المساعدة
                            </th>
                            <th style="text-align: center">
                                د/المواد
                            </th>
                            <th style="text-align: center">
                                -غير ذلك المواد
                            </th>
                            <th style="text-align: center">
                                الايادي العاملة</th>
                            <th style="text-align: center">
                                الايادي العاملة</th>
                            <th style="text-align: center">
                                د/ الايادي </th>
                            <th style="text-align: center">
                                غير ذلك- الايادي </th>

                            &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
     {{-- @foreach ($qouations as  $qoute)
         <tr></tr>
     @endforeach --}}






                    </tbody>
                </table>
            </div>


        </div>
    </div>
    <div class="card mt-1">
        <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

        </div>

        <div class="card-body">



            <div class="form-row">





                <div class="form-group col-md-2">
                    <label for="inputZip"> مجموع المواد المساعدة</label>
                    <input type="text" class="form-control" id="inputZip" readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip"> مجموع الايادي العاملة</label>
                    <input type="text" class="form-control" id="inputZip" readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">مجموع الموادالمساعدة/الايادي </label>
                    <input type="text" class="form-control" id="inputZip" readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">التوقع للمواد </label>
                    <input type="text" class="form-control" id="inputZip" readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">ت/الايادي العاملة</label>
                    <input type="text" class="form-control" id="inputZip" readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">المجموع </label>
                    <input type="text" class="form-control" id="inputZip" readonly>
                </div>

            </div>

        </div>

        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="card">
                        <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                        </div>

                        <div class="card-body">
                            <form action="#" method="POST" class="form-inlineform-row"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label for="name">اﻹسم*</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                                        @if ($errors->has('name'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </em>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('cruds.user.fields.name_helper') }}
                                        </p>
                                    </div>
                                    <div class=" {{ $errors->has('price') ? 'has-error' : '' }}">
                                        <label for="price">السعر*</label>
                                        <input type="text" id="price" name="price" class="form-control"
                                            value="{{ old('price') }}" required
                                            onkeypress="return
                                        onlyNumberKey(event)">
                                        @if ($errors->has('price'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('price') }}
                                            </em>
                                        @endif

                                    </div>


                                    <div class=" {{ $errors->has('price') ? 'has-error' : '' }}"
                                        style="border-radius: 50%;border:1px">
                                        <span style="border-radius: 3rem">
                                        </span>
                                    </div>

                                    <div class=" {{ $errors->has('line_catogery') ? 'has-error' : '' }}">
                                        <label for="line_catogery">التصنيف</label>


                                        <select class="form-control" id="exampleFormControlSelect1 main_catog"
                                            name="catogery">
                                            <option selected value="">-- إختر --</option>
                                            @foreach ($catogery as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>



                                        @if ($errors->has('main_line'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('main_line') }}
                                            </em>
                                        @endif


                                    </div>


                                    <div class=" {{ $errors->has('line_catogery') ? 'has-error' : '' }}">
                                        <label for="line_catogery">النوع</label>


                                        <select class="form-control" id="exampleFormControlSelect1 main_catog"
                                            name="type">
                                            <option selected value="">-- إختر --</option>
                                            @foreach ($type as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>



                                        @if ($errors->has('main_line'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('main_line') }}
                                            </em>
                                        @endif


                                    </div>
                                    <div class=" {{ $errors->has('line_catogery') ? 'has-error' : '' }}">
                                        <label for="line_catogery" class="m-1">المقاس</label>
                                        <div class=" {{ $errors->has('price') ? 'has-error' : '' }}">
                                            <div class="form-row">
                                                <input type="text" id="price" name="size_number"
                                                    class="form-control col-8" value="{{ old('price') }}" required>
                                                @if ($errors->has('price'))
                                                    <em class="invalid-feedback">
                                                        {{ $errors->first('price') }}
                                                    </em>
                                                @endif
                                                <select class="form-control col-4"
                                                    id="exampleFormControlSelect1 main_catog" name="size">
                                                    <option selected value="">-- إختر --</option>
                                                    @foreach ($size as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                        </div>
                                    </div>

                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('main_line') }}
                                        </em>
                                    @endif


                                </div>
                                <div class=" {{ $errors->has('line_catogery') ? 'has-error' : '' }}">
                                    <label for="line_catogery">الماركة</label>


                                    <select class="form-control" id="exampleFormControlSelect1 main_catog"
                                        name="brand">
                                        <option selected value="">-- إختر --</option>
                                        @foreach ($brand as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('main_line') }}
                                        </em>
                                    @endif


                                </div>

                                <hr>

                        </div>
                        <div>

                            <input class="btn btn-primary" style="" type="submit" value="حفظ">
                        </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- modal for terms --}}
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                    </div>

                    <div class="card-body">
                        <form action="{{ url('brand/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" id="formupdate">
                                <input type="hidden" id="id" name="id" class="form-control"
                                    value="{{ old('name', isset($user) ? $user->name : '') }}" required>

                                <label for="name">اﻹسم*</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                                @if ($errors->has('name'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </em>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.user.fields.name_helper') }}
                                </p>
                            </div>
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" id="formupdate">
                                <input type="hidden" id="id" name="id" class="form-control"
                                    value="{{ old('name', isset($user) ? $user->name : '') }}" required>

                                <label for="name">الشركة الصنعة*</label>
                                <input type="text" id="company" name="company" class="form-control"
                                    value="{{ old('name', isset($user) ? $user->name : '') }}" required>
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
                            <hr>
                            <div>

                                <input class="btn btn-primary" style="" type="submit" value="حفظ">
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
                            هل تريد مسح الخدمة؟
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
                            <form action="{{ url('brand/delete') }}" method="POST" enctype="multipart/form-data">
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
        // $(function() {
        //     let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
        //     @can('course_delete')
        //         let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
        //         let deleteButton = {
        //             text: deleteButtonTrans,
        //             url: "#1",
        //             className: 'btn-danger',
        //             action: function(e, dt, node, config) {
        //                 var ids = $.map(dt.rows({
        //                     selected: true
        //                 }).nodes(), function(entry) {
        //                     return $(entry).data('entry-id')
        //                 });

        //                 if (ids.length === 0) {
        //                     alert('{{ trans('global.datatables.zero_selected') }}')

        //                     return
        //                 }

        //                 if (confirm('{{ trans('global.areYouSure') }}')) {
        //                     $.ajax({
        //                             headers: {
        //                                 'x-csrf-token': _token
        //                             },
        //                             method: 'POST',
        //                             url: config.url,
        //                             data: {
        //                                 ids: ids,
        //                                 _method: 'DELETE'
        //                             }
        //                         })
        //                         .done(function() {
        //                             location.reload()
        //                         })
        //                 }
        //             }
        //         }
        //         dtButtons.push(deleteButton)
        //     @endcan

        //     $.extend(true, $.fn.dataTable.defaults, {
        //         order: [
        //             [1, 'desc']
        //         ],
        //         pageLength: 100,
        //     });
        //     $('.datatable-Course:not(.ajaxTable)').DataTable({
        //         buttons: dtButtons
        //     })
        //     $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        //         $($.fn.dataTable.tables(true)).DataTable()
        //             .columns.adjust();
        //     });
        // })
        $(document).ready(function() {

        });
    </script>
    <script>
        var options = {
            series: [{
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
        console.log(chart);
    </script>
@endsection

@section('script')


@endsection
