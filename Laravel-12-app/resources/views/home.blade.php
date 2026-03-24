
<x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User Signup Successfully" class="success"/>

<br>
<br>
<br>

<x-message-banner msg="User Signup Failed" class="error"/>


<style>
    .success{
        background-color: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .error{
        background-color: lightcoral;
        color: red;
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
</style>
<h1>Home Page</h1>
<a href="/">Welcome Page</a>
<a href="/about/waqas">About Page</a>

<!-- <h1>{{rand()}}</h1> -->

<!-- @if($name == 'waqas')
    <h2>this is waqas</h2>
@elseif($name == 'ahmad')
    <h2>this is ahmad</h2>
@else
    <h2>other user</h2>
@endif -->


<div>
    @foreach($users as $user)
    <h5>{{$user}}</h5>
    @endforeach
</div>

<div>
    @for($i=0; $i<=10; $i++)
    <h3>{{$i}} </h3>
    @endfor
</div>

