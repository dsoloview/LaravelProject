<label class="list-group-item d-flex gap-3">
  <form class="" action="{{route('tasks.update', ['task' => $task])}}" method="POST">
    @csrf
    @method('patch')
    <input class="form-check-input flex-shrink-0" name="done" type="checkbox" {{($task->done) ? 'checked' : ''}} style="font-size: 1.375em;" onclick="this.form.submit()">
    <span class="pt-1 form-checked-content {{($task->done) ? 'text-decoration-line-through' : ''}}">
      {{$task->title}}
    </span>
  </form>
  <form class="" action="{{route('tasks.destroy', ['task' => $task])}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn-close" aria-label="Close"></button>
  </form>
</label>
