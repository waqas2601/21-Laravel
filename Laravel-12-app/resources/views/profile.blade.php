<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
     <h1>Profile Page</h1>
     @if(session('user'))
     <h1>welcome, {{session('user')}}</h1>
     @else
     <h1>No user found in session</h1>
     @endif
</div>
