@extends('layouts.back.main')
@section('title', 'Create Category')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Create Category') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('gallery-category.index') }}">{{ __('Blog Category') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Category') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5>{{ __('Create Category') }}</h5>
                    {!! Form::open([
                        'route' => 'gallery-category.store',
                        'method' => 'Post',
                        'data-validate',
                    ]) !!}
                </div>
                <div class="card-body">
                    @foreach ($allLanguages as $localeCode => $language)
                        <div class="row mb-5 p-3  rounded-3" style="background-color: rgb(235, 233, 233) !important">
                            <div class="col-sm-12">
                                <h4>{{ $language }}</h4>
                            </div>
                            <div class="form-group">
                                {{ Form::label('name', __('Name'), ['class' => 'form-label']) }}
                                {!! Form::text('name_' . $localeCode, null, [
                                    'placeholder' => __('Enter name'),
                                    'class' => 'form-control',
                                    'required',
                                ]) !!}
                            </div>

                        </div>
                    @endforeach
                    <div class="form-group">
                        {{ Form::label('status', __('Status'), ['class' => 'form-label']) }}
                        <select name="status" class="custom_select form-select" id="status" data-trigger>
                            <option value="" selected disabled>{{ __('Select Category Status') }}</option>
                            <option value="1">{{ __('Active') }}</option>
                            <option value="2">{{ __('Deactive') }}</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        {!! Html::link(route('gallery-category.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                        {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
