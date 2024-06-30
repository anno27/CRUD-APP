@extends('layouts.app')
@section('content')
{{-- <div> render index </div> --}}
<a href="{{route('crud.create')}}">Tambah</a>
<button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Red</button><table>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    @forelse ($crud as $item)
    <tr onclick="window.location.href = '{{route('crud.show', ['crud' => $item->id]) }}'">
      <td>{{$loop->iteration}}</td>
      <td>{{ $item->nama }}</td>
      <td>{{$item->is_active ? 'Active' : 'Non Active'}}</td>
      <td>
        <a href="{{ route('crud.edit', ['crud' => $item->id])  }}">Edit</a>
         <form action="{{ route('crud.destroy', ['crud' => $item->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
         </form>

      </td>
    </tr>

    @empty
    @endforelse

</table>

@endsection
