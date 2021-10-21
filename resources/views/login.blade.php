<h1>User Login</h1>

<form action="/login-attempt" method="post">
    @csrf
    <input type="text" placeholder="username" name="username"> <br>
    <input type="password" name="password"><br>
    <input type="submit">
</form>
