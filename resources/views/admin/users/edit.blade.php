@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            تعديل مستخدم
        </div>

        <div class="card-body">
            <form action="{{ route('admin.users.update', [$user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">الاسم*</label>
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
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">البريد الالكتروني*</label>
                    <input type="email" id="email" name="email" class="form-control"
                        value="{{ old('email', isset($user) ? $user->email : '') }}" required>
                    @if ($errors->has('email'))
                        <em class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.user.fields.email_helper') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">كلمة المرور</label>
                    <input type="password" id="password" name="password" class="form-control">
                    @if ($errors->has('password'))
                        <em class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.user.fields.password_helper') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">التوقيع</label>
                    <input type="file" name="image">

                </div>
                <div class="form-group {{ $errors->has('rank') ? 'has-error' : '' }}">
                    <label for="name">الرتبة*</label>
                    <select class="form-control" required name="rank" aria-label="Default select example">
                        <option selected>الرتبة</option>
                        <option value="جندي"> جندي
                        </option>
                        <option value="جندي أول"> جندي أول
                        </option>

                        <option value="عريف"> عريف </option>

                        <option value="وكيل رقيب"> وكيل رقيب
                        </option>

                        <option value="رقيب"> رقيب
                        </option>

                        <option value="رقيب أول"> رقيب أول
                        </option>

                        <option value="رئيس رقباء"> رئيس رقباء
                        </option>

                        <option value="ملازم"> ملازم
                        </option>

                        <option value="ملازم أول"> ملازم أول
                        </option>

                        <option value="نقيب"> نقيب
                        </option>

                        <option value="رائد"> رائد
                        </option>

                        <option value="مقدم"> مقدم
                        </option>

                        <option value="عقيد"> عقيد
                        </option>

                        <option value="عميد"> عميد
                        </option>

                        <option value="لواء"> لواء
                        </option>
                        <option value="فريق"> فريق
                        </option>

                        <option value="فريق أول"> فريق أول
                        </option>
                        <option value="موظف"> موظف
                        </option>

                    </select>

                    {{-- <input type="text" id="name" name="rank" class="form-control" value="{{ old('rank', isset($user) ? $user->rank : '') }}" required> --}}
                    @if ($errors->has('rank'))
                        <em class="invalid-feedback">
                            {{ $errors->first('rank') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.user.fields.name_helper') }}
                    </p>
                </div>
                <div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
                    <label for="roles">{{ trans('cruds.user.fields.roles') }}*
                        <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                        <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                    <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                        @foreach ($roles as $id => $roles)
                            <option value="{{ $id }}"
                                {{ in_array($id, old('roles', [])) || (isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>
                                {{ $roles }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('roles'))
                        <em class="invalid-feedback">
                            {{ $errors->first('roles') }}
                        </em>
                    @endif
                    <p class="helper-block">
                        {{ trans('cruds.user.fields.roles_helper') }}
                    </p>
                </div>
                {{-- <div class="form-group {{ $errors->has('institution_id') ? 'has-error' : '' }}" id="institutionGroup" style="{{ (in_array(2, old('roles', [])) || isset($user) && $user->roles->contains(2)) ? '' : 'display:none'}}">
                <label for="institution">{{ trans('cruds.user.fields.institution') }}</label>
                <select name="institution_id" id="institution" class="form-control select2">
                    @foreach ($institutions as $id => $institution)
                        <option value="{{ $id }}" {{ (isset($user) && $user->institution ? $user->institution->id : old('institution_id')) == $id ? 'selected' : '' }}>{{ $institution }}</option>
                    @endforeach
                </select>
                @if ($errors->has('institution_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('institution_id') }}
                    </em>
                @endif
            </div> --}}
                <div class="form-group {{ $errors->has('unit_id') ? 'has-error' : '' }}">
                    <label for="unit">الوحدة</label>
                    <select name="unit_id" id="unit" class="form-control select2">
                        <option selected disabled>-- إختر --</option>
                        @foreach ($units as $unit)
                            @if (filled($unit->unit_id))
                                <option value="{{ $unit->id }}"
                                    {{ (isset($user) && $user->unit_id ? $user->unit->id : old('unit_id')) == $unit->id ? 'selected' : '' }}>
                                    &nbsp; &nbsp; &crarr; {{ $unit->name }}</option>
                            @else
                                <option value="{{ $unit->id }}"
                                    {{ (isset($user) && $user->unit_id ? $user->unit->id : old('unit_id')) == $unit->id ? 'selected' : '' }}>
                                    {{ $unit->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @if ($errors->has('unit_id'))
                        <em class="invalid-feedback">
                            {{ $errors->first('unit_id') }}
                        </em>
                    @endif
                </div>
                <div>
                    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                </div>
            </form>


        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#roles').change(function() {
                if ($("#roles option:selected:contains('Institution')").val())
                    $("#institutionGroup:hidden").show(150);
                else
                    $("#institutionGroup:visible").hide(150);
            });
        });
    </script>
@endsection
