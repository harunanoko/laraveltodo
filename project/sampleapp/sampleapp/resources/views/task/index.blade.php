<html>
<head>
</head>
<body>


<form action="{{url('task')}}" method="POST">
@csrf
<input type="text" name="name" value="{{old('name')}}">
<input type="submit" value="登録">
</form>


<p>登録されたタスク</p>
<table>

<thead>
    <tr>
      <th>ID</th>
      <th>内容</th>
      <th>状態</th>
      <th></th>
    </tr>
    </thead>
<tbody>
@foreach($tasks as $task)
<tr>
    <td>{{ $task->id }}</td>
    <td>{{ $task->name }}</td>
    <td>{{ $task->status_label }}</td>
    <td><button type="submit">削除</button></td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>