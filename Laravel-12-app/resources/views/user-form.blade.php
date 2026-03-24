<div>
    <h2>Add New User</h2>


<!-- @if($errors->any())
@foreach($errors->all() as $error)
<div style="color: red">
    {{$error}}
</div>
@endforeach
@endif -->
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your name" value="{{old('username')}}" name="username">
            <br>
            <span style="color: brown">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your email" name="email">
            <br>
            <span style="color: brown">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your city" name="city">
            <br>
            <span style="color: brown">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <h4>Skills</h4>
            <input type="checkbox" name="skills" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skills" id="javascript" value="javascript">
            <label for="javascript">Javascript</label>
            <input type="checkbox" name="skills" id="figma" value="figma">
            <label for="figma">Figma</label>
            <br>
            <span style="color: brown">@error('skills'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>

    </form>
</div>

<style>
    input {
        border: orange 1px solid;
        /* height: 35px; */
        /* width: 200px; */
        border-radius: 2px;
        color: orange;
    }

    .input-wrapper {
        margin: 10px;
    }

    button {
        border: orange 1px solid;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        color: orange;
        background-color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: orange;
        color: #fff;
        transition: background-color 0.3s ease;
    }
</style>