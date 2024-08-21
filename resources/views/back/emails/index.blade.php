@extends('layouts.back.main')
@section('title', __('Emails'))
@section('breadcrumb')
    <div class="col-md-12">
        <div class="page-header-title">
            <h4 class="m-b-10">{{ __('Emails') }}</h4>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item">{!! Html::link(route('home'), __('Dashboard'), []) !!}</li>
            <li class="breadcrumb-item active">{{ __('Emails') }}</li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="float-left">
                    <a href="{{ route('emails.create') }}" class="btn btn-light-primary">{{ __('Create Email') }}</a>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('Recipient Name') }}</th>
                    <th>{{ __('Recipient Email') }}</th>
                    <th>{{ __('Subject') }}</th>
                    <th>{{ __('Created At') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($emails as $email)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $email->name }}</td>
                        <td>{{ $email->email }}</td>
                        <td>{{ $email->subject }}</td>
                        <td>{{ \App\Facades\UtilityFacades::date_time_format($email->created_at) }}</td>
                        <td>
                            <form action="{{ route('emails.destroy', $email->id) }}" method="POST"
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
    </div>
    {{ $emails->links() }}
@endsection
