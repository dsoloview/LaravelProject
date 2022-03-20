<form class="form-group" action="{{route('tasks.index')}}" method="POST">
        @csrf
        <label class="list-group-item d-flex gap-3 bg-light">
          <input type="text" name="title" class="flex-shrink-0" value="" style="font-size: 1.375em;">
          <button class="btn btn-primary" type="submit" name="button">Добавить</button>
        </label>
        @if ($errors->has('title'))
            <div class="invalid-feedback" style='display:block'>
            {{$errors->first('title')}}
            </div>
        @endif
    </form>
