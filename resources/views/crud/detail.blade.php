@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('crud.index') }}" style="display: block; width: fit-content">Back</a>
        <span style="display: block"> Nama: {{ $crud->nama }} </span>
        <span style="display: block"> Status: {{ $crud->is_active ? 'Active' : 'Not Active' }} </span>
    </div>
@endsection
