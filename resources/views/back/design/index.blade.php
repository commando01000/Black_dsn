@extends('layouts.back.main')
@section('title', __('Projects'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Projects') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Projects') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                {{-- @if (Auth::user()->can('create-testimonial')) --}}
                <div class="float-left">
                    <a href="{{ route('designs.create') }}" class="btn btn-light-primary">{{ __('Create Design') }}</a>
                </div>
                {{-- @endif --}}
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('Title') }}</th>
                    <th>{{ __('Category') }}</th>
                    <th>{{ __('Created At') }}</th>
                    <th>{{ __('cover') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($designs as $design)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $design->title }}</td>
                        <td>{{ $design->category->name }}</td>

                        <td>{{ \App\Facades\UtilityFacades::date_time_format($design->created_at) }}</td>
                        <td>
                            @if ($design->cover && Storage::exists($design->cover))
                                <img src="{{ Storage::url($design->cover) }}" width="50" />
                            @else
                                <img src="{{ Storage::url('not-exists-data-images/350x250.png') }}" width="50" />
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('designs.show', $design->id) }}"
                                class="btn btn-success">{{ __('View') }}</a>
                            <a href="{{ route('designs.edit', $design->id) }}"
                                class="btn btn-warning">{{ __('Edit') }}</a>
                            <form action="{{ route('designs.destroy', $design->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $designs->links() }}
    </div>
@endsection

@push('style')
    @include('layouts.includes.datatable-css')
@endpush
@push('script')
    @include('layouts.includes.datatable-js')
@endpush
