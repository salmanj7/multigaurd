<form method="POST" action="{{ route('customer.login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" >
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password">
    </div>

    <button type="submit">Login</button>
</form>
