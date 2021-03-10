<html>
<head>
</head>
<body>
<p>hello world!</p>

<form action="{{url('task')}}" method="POST">
@csrf
<input type="text" name="name" value="{{old('name')}}">
<input type="submit" value="登録">
</form>


<p>登録されたタスク</p>
@foreach($tasks as $task)
<tr>
    <th>{{ $task->id }}</th>
    <td>{{ $task->name }}</td>
</tr>
@endforeach
</body>
</html>