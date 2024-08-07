@extends('layouts.back.main')
@section('title', __('Landing Page'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Home') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), ['']) !!}</li>
            <li class="breadcrumb-item">{{ __('Home') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-xl-3">
                    <div class="card sticky-top">
                        <div class="list-group list-group-flush" id="useradd-sidenav">
                            @include('back.landing-page.landing-page-sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="card">
                            <div class="tab-pane fade show active" id="home-setting" role="tabpanel"
                                aria-labelledby="landing-home-about-us-setting">
                                {!! Form::open([
                                    'route' => ['landing.home-about-us.store'],
                                    'method' => 'Post',
                                    'id' => 'froentend-form',
                                    'enctype' => 'multipart/form-data',
                                    'data-validate',
                                    'no-validate',
                                ]) !!}
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <h5 class="mb-0">{{ __('Home About Us Setting') }}</h5>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-end">
                                            <div class="form-switch custom-switch-v1 d-inline-block">
                                                {!! Form::checkbox(
                                                    'home_about_us_setting_enable',
                                                    null,
                                                    Utility::getsettings('home_about_us_setting_enable') == 'on' ? true : false,
                                                    [
                                                        'class' => 'custom-control custom-switch form-check-input input-primary',
                                                        'id' => 'homeSettingEnableBtn',
                                                        'data-onstyle' => 'primary',
                                                        'data-toggle' => 'switchbutton',
                                                    ],
                                                ) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {{ Form::label('title', __('Home Title Name'), ['class' => 'form-label']) }}
                                                {!! Form::text('title', Utility::getsettings('landing.home.about-us.title'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter home title name'),
                                                ]) !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {{ Form::label('sub-title', __('Home Sub-Title Name'), ['class' => 'form-label']) }}
                                                {!! Form::text('sub-title', Utility::getsettings('landing.home.about-us.sub-title'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter home title name'),
                                                ]) !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {{ Form::label('sub-title_2', __('Home Title_3 Name'), ['class' => 'form-label']) }}
                                                {!! Form::text('sub-title_2', Utility::getsettings('landing.home.about-us.sub-title_2'), [
                                                    'class' => 'form-control',
                                                    'placeholder' => __('Enter home title name'),
                                                ]) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::label('cover', __('cover'), ['class' => 'form-label']) }} *
                                                {!! Form::file('cover', ['class' => 'form-control', 'required' => 'required']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {{ Form::label('background', __('background'), ['class' => 'form-label']) }}
                                                *
                                                {!! Form::file('background', ['class' => 'form-control', 'required' => 'required']) !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                {{ Form::label('Home About Us Description', __('home about us description'), ['class' => 'form-label']) }}
                                                {!! Form::textarea('home-about-us-description', Utility::getsettings('landing.home.about-us.description'), [
                                                    'class' => 'form-control',
                                                    'rows' => '3',
                                                    'placeholder' => __('Enter home description'),
                                                ]) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-end">
                                        {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
