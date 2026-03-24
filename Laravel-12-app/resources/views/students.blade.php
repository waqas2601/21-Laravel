<div>
    <h1>Student List</h1>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
        </tr>
        @foreach ($data as $student)
        <th>{{$student->name}}</th>
        <th>{{$student->email}}</th>
        <th>{{$student->batch}}</th>
        @endforeach
    </table>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>