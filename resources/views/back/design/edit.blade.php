@extends('layouts.back.main')
@section('title', 'edit Project')
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('edit Design') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item"><a href="{{ route('design-category.index') }}">{{ __('Design') }}</a></li>
            <li class="breadcrumb-item active">{{ __('Create Design') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="section-body">
            <div class="m-auto col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5> {{ __('Create Design') }}</h5>
                    </div>
                    {!! Form::open([
                        'route' => ['designs.update', 'design' => $design->id],
                        'method' => 'PUT',
                        'enctype' => 'multipart/form-data',
                        'data-validate',
                    ]) !!}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">

                                    <div class="col-sm-10">
                                        <strong class="d-block">{{ __('Page Builder') }}</strong>
                                    </div>
                                    <div class="col-sm-2 form-check form-switch custom-switch-v1">
                                        <div class="form-switch custom-switch-v1 d-inline-block">
                                            {!! Form::checkbox('builder', null, $design->builder == 'on' ? true : false, [
                                                'class' => 'custom-control custom-switch form-check-input input-primary',
                                                'id' => 'startViewSettingEnableBtn',
                                                'data-onstyle' => 'primary',
                                                'data-toggle' => 'switchbutton',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('title', __('Title'), ['class' => 'form-label']) }} *
                                    {!! Form::text('title', $design->title, [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter title'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('Design Creation Date', __('Design Creation Date'), ['class' => 'form-label']) }}
                                    {!! Form::text('project_date', Utility::date_format($design->created_at), [
                                        'class' => 'form-control',
                                        'placeholder' => __('Enter Project Date'),
                                    ]) !!}
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('Embed', __('Embed'), ['class' => 'form-label']) }}
                                    {!! Form::text('embed', $project->embed ?? "", ['class' => 'form-control','placeholder' => __('Enter video embed ')]) !!}
                                </div>
                            </div> --}}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('project_category', __('Project Category'), ['class' => 'form-label']) }}
                                    <select name="category_id" id="" class="form-control" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($design->design_category == $category->id) {{ 'selected' }} @endif>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    {{ Form::label('project_status', __('Project Status'), ['class' => 'form-label']) }}
                                    {!! Form::text('project_status', null, ['class' => 'form-control','placeholder' => __('Enter Project Status')]) !!}
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('images', __('Images'), ['class' => 'form-label']) }} *
                                    {!! Form::file('images[]', ['class' => 'form-control', 'multiple' => 'multiple']) !!}
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('cover', __('Images'), ['class' => 'form-label']) }} *
                                    {!! Form::file('cover', ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{ Form::label('description', __('Short Description'), ['class' => 'form-label']) }}
                                    *
                                    {!! Form::textarea('description', $design->description, [
                                        'class' => 'form-control ',
                                        'placeholder' => __('Enter short description'),
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="mb-3 btn-flt float-end">
                            {!! Html::link(route('designs.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                            {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
        document.addEventListener('DOMContentLoaded', function() {
            var genericExamples = document.querySelectorAll('[data-trigger]');
            for (i = 0; i < genericExamples.length; ++i) {
                var element = genericExamples[i];
                new Choices(element, {
                    placeholderValue: 'This is a placeholder set in the config',
                    searchPlaceholderValue: 'This is a search placeholder',
                });
            }
        });
    </script>
@endpush
