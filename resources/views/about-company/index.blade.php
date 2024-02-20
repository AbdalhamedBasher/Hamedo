
@extends('layouts.app')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('نبذة عن الشركة') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('about_company.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('إسم الشركة') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="{{ $about_company ? $about_company->name : '' }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('رقم الجوال') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" placeholder="{{ $about_company ? $about_company->phone : '' }}">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('الإيميل') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="{{ $about_company ? $about_company->email : '' }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="about" class="col-md-4 col-form-label text-md-right">{{ __('عن الشركة') }}</label>

                                <div class="col-md-6">
                                    <textarea id="about" class="form-control @error('about') is-invalid @enderror" name="about" placeholder="{{ $about_company ? $about_company->about : '' }}">{{ old('about') }}</textarea>
                                    @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('شعار الشركة') }}</label>
                                <div class="col-md-6">
                                    <input id="logo" type="file" class="form-control-file @error('logo') is-invalid @enderror" name="logo" accept="image/*">
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @if ($about_company && $about_company->logo)
                                        <div>
                                            <img src="{{ asset($about_company->logo) }}" alt="Logo" width="100">
                                            <button type="button" class="btn btn-danger" onclick="deleteLogo()">
                                                <i class="fa fa-trash"></i> {{ __('حذف') }}
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- upload images of previous projects -->
                            <div class="form-group row">
                                <label for="previous_projects" class="col-md-4 col-form-label text-md-right">{{ __('مشاريع سابقة') }}</label>
                                <div class="col-md-6">
                                    <input id="previous_projects" type="file" class="form-control-file @error('previous_projects') is-invalid @enderror" name="previous_projects[]" accept="image/*" multiple>
                                    @error('previous_projects')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @if ($about_company && $about_company->previous_projects)
    <div>
        @php
            $previous_projects = json_decode($about_company->previous_projects, true);
        @endphp
        @foreach($previous_projects as $project)
            <img src="{{ asset($project) }}" alt="Previous Projects" width="100">
            
        @endforeach
    </div>
@endif
                                </div>
                            </div>

                            
                                
                            </div>
                            

                    
                            

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary  ml-3 mb-3">
                                        {{ __('حفظ') }}
                                    </button>
                                   
                                </div>
                            </div>
                        </form>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
                                                                           