@if (session('success'))
    <div id="success-div" class="contact-form h-75">
        <div class="alert alert-success">
            <p style="padding: 7px"> {{ session('success') }}</p>
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="contact-form h-75">
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p style="padding: 7px">{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif

@section('script')
    <script>
        $("#success-div").fadeOut(2500)
    </script>
@endsection

{{-- @if (session('status'))
<div class="contact-form h-75">
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
</div>
@endif --}}
