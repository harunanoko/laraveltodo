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
    <td>{{ $loop->iteration }}</td>
    <td>{{ $task->name }}</td>
    <form action="{{ url('task/' . $task->id) }}" method="POST"> 
　　　　　@method('PUT') 
  　　　　@csrf
  　　　　@if( $task->status === 0)
    　　　<td>
            <input class="unCompleted" name="task_btn" type="submit" value="作業中">
         </td>
            <input type="hidden" name="status" value="0"> 
         
         @else( $task->status === 1)
  
         <td>
            <input class="completed" name="task_btn" type="submit" value="完了">
         </td> 
            <input type="hidden" name="status" value="1"> 
        
         @endif
    </form>
    
    <td><form action="{{ url('task/' . $task->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            削除
        </button>
    </form></td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>