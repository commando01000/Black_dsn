@extends('layouts.back.main')
@section('title', 'Create Category/Service')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Create Category') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('service-category.index') }}">{{ __('Service_Category') }}</a></li>
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
                        'route' => 'service-category.store',
                        'method' => 'Post',
                        'data-validate',
                    ]) !!}
                </div>
                <div class="card-body">
                    <div class="form-group">
                        {{ Form::label('name', __('Name'), ['class' => 'form-label']) }}
                        {!! Form::text('name', null, ['placeholder' => __('Enter name'), 'class' => 'form-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('status', __('Status'), ['class' => 'form-label']) }}
                        <select name="status" class="custom_select form-select" id="status" data-trigger>
                            <option value="" selected disabled>{{ __('Select Category Status') }}</option>
                            <option value="1">{{ __('Active') }}</option>
                            <option value="2">{{ __('Deactive') }}</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('description', __('Short Description'), ['class' => 'form-label']) }}
                            *
                            {!! Form::textarea('description', null, [
                                'class' => 'form-control ',
                                'placeholder' => __('Enter short description'),
                            ]) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{ Form::label('images', __('cover'), ['class' => 'form-label']) }} *
                            {!! Form::file('cover', ['class' => 'form-control', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        {!! Html::link(route('service-category.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                        {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
