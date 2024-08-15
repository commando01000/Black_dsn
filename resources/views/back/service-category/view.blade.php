@extends('layouts.back.main')

@section('title', 'View Service Category')


@section('content')

    <main class="container">
        <div class="row">
            <div class="section-body">
                <div class="m-auto col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5> {{ __('View Service Category') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('title', __('Title'), ['class' => 'form-label']) }} *
                                        {!! Form::text('name', $service_category->name, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    @if ($service_category->cover)
                                        <div class="mt-3">
                                            <strong>Current Cover Image:</strong><br>
                                            <img src="{{ Storage::url($service_category->cover) }}" alt="{{ $service_category->name }}"
                                                style="max-width: 100%; height: 80px !important;">
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('body', __('Description'), ['class' => 'form-label']) }} *
                                        <?php
                                        
                                        $var = html_entity_decode($service_category->description);
                                        
                                        ?>
                                        {!! Form::textarea('body', $var, [
                                            'class' => 'form-control ',
                                            'placeholder' => __('Enter description'),
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                {!! Html::link(route('service-category.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
                                {{-- {{ Form::button(__('Save'), ['type' => 'submit', 'class' => 'btn btn-primary']) }} --}}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
