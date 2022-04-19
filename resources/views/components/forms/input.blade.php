<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}"
           value="{{old("$name", ($model) ? $model->$name : '')}}">
    @if ($errors->has("$name"))
        <div class="text-danger">{{ $errors->first("$name")}}</div>
    @endif
</div>
