<form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" >
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password">
    </div>

    <button type="submit">Register</button>
</form>
