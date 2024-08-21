@extends('layouts.back.main')
@section('title', 'Create Email')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Create Email') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('emails.index') }}">{{ __('Email') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Email') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-sm-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h5>{{ __('Create Email') }}</h5>
                    {!! Form::open([
                        'route' => 'emails.store',
                        'method' => 'Post',
                        'data-validate',
                    ]) !!}
                </div>
                <div class="card-body">
                    <div class="form-group">
                        {{ Form::label('name', __('Recipient Name'), ['class' => 'form-label']) }} *
                        {!! Form::text('name', null, [
                            'placeholder' => __('Enter recipient name'),
                            'class' => 'form-control',
                            'required',
                        ]) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', __('Recipient Email'), ['class' => 'form-label']) }} *
                        {!! Form::email('email', null, [
                            'placeholder' => __('Enter recipient email'),
                            'class' => 'form-control',
                            'required',
                        ]) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('subject', __('Subject'), ['class' => 'form-label']) }} *
                        {!! Form::text('subject', null, [
                            'placeholder' => __('Enter email subject'),
                            'class' => 'form-control',
                            'required',
                        ]) !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('message', __('Message'), ['class' => 'form-label']) }} *
                        {!! Form::textarea('message', null, [
                            'placeholder' => __('Enter email message'),
                            'class' => 'form-control',
                            'required',
                        ]) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        {!! Html::link(route('emails.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                        {{ Form::button(__('Save & Send'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }

            // Initialize CKEditor for the 'message' textarea
            CKEDITOR.replace('message', {
                removePlugins: 'cloudservices',
                filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                filebrowserUploadMethod: 'form',
                on: {
                    instanceReady: function() {
                        // This will remove the red warning message
                        var warning = document.querySelector('.cke_notifications_area');
                        console.log(warning);

                        if (warning) {
                            warning.style.display = 'none';
                        }
                    }
                }
            });
        });
    </script>
@endpush
