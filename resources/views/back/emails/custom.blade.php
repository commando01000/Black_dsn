@section('content')
    <div class="container">

        <!-- Message Content -->
        <div>
            {!! $email->message !!}
        </div>

        <!-- Footer -->
        <footer style="margin-top: 30px; text-align: center; font-size: 12px; color: #999;">
            <p>&copy; {{ date('Y') }} Digital Media Factory. All rights reserved.</p>
        </footer>
    </div>
@endsection
