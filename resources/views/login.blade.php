<div>
    <h1>Login Page</h1>
    <form action="/login" method="post">
        @csrf
        <input type="text" name="user" placeholder="Enter your name here:"/>
        <br><br>
        <input type="password" name="password" placeholder="Enter your password here:"/>
        <br><br>
        <button>Login</button>
    </form>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
