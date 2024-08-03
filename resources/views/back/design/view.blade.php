@extends('layouts.back.main')

@section('title', __('Blogs'))

@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Projects') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Design') }}</li>
        </ul>
    </div>
@endsection

@section('content')

    <main class="container">
        <div class="row">
            <div class="section-body">
                <div class="m-auto col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5> {{ __('Edit Design') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('title', __('Title'), ['class' => 'form-label']) }} *
                                        {!! Form::text('title', $design->title, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group">
                                            {{ Form::label('category_id', __('Category'), ['class' => 'form-label']) }}
                                            @php
                                                $categoryName = $design->category->name ?? 'Default Category';
                                            @endphp
                                            {!! Form::text('category_name', $categoryName, ['class' => 'form-control', 'disabled']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{ Form::label('body', __('Description'), ['class' => 'form-label']) }} *
                                        {!! Form::textarea('short description', $design->description, [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    {{ Form::label('advantage', __('Details'), ['class' => 'form-label']) }} *
                                    @foreach ($design->details as $detail)
                                        <div class="form-group">
                                            {!! Form::text('advantage', $detail->advantage, [
                                                'class' => 'form-control',
                                                'disabled',
                                            ]) !!}
                                        </div>
                                    @endforeach
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        {{ Form::label('project_date', __('Project Date'), ['class' => 'form-label']) }} *
                                        {!! Form::text('project_date', Utility::date_format($design->created_at), [
                                            'class' => 'form-control',
                                            'disabled',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mb-3 btn-flt float-end">
                                {!! Html::link(route('designs.index'), __('Cancel'), ['class' => 'btn btn-secondary']) !!}
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
