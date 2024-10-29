<div>
    <h1>Add new user</h1>
    {{ session('message') }}
    <form action="add" method="post">
        @csrf
        <input type="text" name="user" placeholder="Enter your name"/>
        <br><br>
        <input type="email" name="email" placeholder="Enter your email"/>
        <br><br>
        <input type="number" name="number" placeholder="Enter your contact no."/>
        <br><br>
        <button>Add user</button>
    </form>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
