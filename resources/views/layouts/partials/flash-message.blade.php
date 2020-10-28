@if ($message = session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>成功送出！</strong> {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endisset
