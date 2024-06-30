@extends('layouts.app')
@section('content')
    <a href="{{ route('crud.index') }}"style="display: block; width: fit-content">Back</a>
    <span> form create </span>
    <form action="{{ route('crud.update', ['crud' => $crud->id]) }}" method="post">
        @method('put')
        @csrf
        <label for="nama"> Nama </label>
        <input type="text" id="nama" name="nama" style="display: block" value="{{ $crud->nama }}" >
        <label for="is_active"> Status </label>
        <input type="radio" name="is_active" id="active" value="1" {{ $crud->is_active ? 'checked' : ''}}>
        <label for="active">ACTIVE</label>
        <input type="radio" name="is_active" id="not_active" value="0" {{ $crud->is_active ? '' : 'checked'}}>
        <label for="not_active">NOT ACTIVE</label>

        <a href="{{ route('crud.index') }}">Cancel</a>
        <button type="submit">Submit</button>
    </form>

    </form>
@endsection
