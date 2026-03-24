<div>
    <h1>Add New User</h1>
{{session('message')}}
    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter User name">
        <br>
        <br>
          <input type="text" name="email" placeholder="Enter User email">
        <br>
        <br>
          <input type="text" name="phone" placeholder="Enter User phone">
        <br>
        <br>
        <button>Add New User</button>
    </form>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
