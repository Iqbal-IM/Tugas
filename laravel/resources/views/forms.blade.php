<html>

<body>
    // CSRF Field
    <form method="POST" action="/users">
        @csrf

        {{-- isi form --}}
    </form>

    // Method Field
    <form method="POST" action="/users">
        @csrf
        @method('PUT')

        {{-- isi form --}}
    </form>

    // Validation Error

    <label for="name">Name</label>
    <input id="name" type="text" class="@error('name') is-invalid @enderror">

    @error('name')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
</body>

</html>