<form action="{{ route('vendor.register.submit') }}" method="POST">
    @csrf
    <input type="text" name="first_name" placeholder="First Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="password_confirmation" placeholder="Confirm Password">
    <button type="submit">Register</button>
</form>
