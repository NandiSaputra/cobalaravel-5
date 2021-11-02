@extends('layouts.app')

@section('title', 'Groups')

@section('content')
    <a href="/groups/create" class="btn btn-primary">Tambah Groups</a>
    @foreach ($groups as $group)

        <div class="card" style="width: 18rem;">
            <h5 class="card-header"><a href="/groups/{{ $group['id'] }}" style="color:black">{{ $group['name'] }}</a>
            </h5>
            <div class="card-body">
                <p class="card-text">{{ $group['description'] }}</p>
                <hr>
                <a href="" class="btn btn-primary">Tambah Anggota</a>
                @foreach ($group->friends as $friend)
                    <li>{{ $friend->nama }}</li>
                @endforeach
                <hr>
                <form action="/groups/{{ $group['id'] }}" method="POSt">
                    <a href="/groups/{{ $group['id'] }}/edit" class="btn btn-warning">Edit Group</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete Group</button>
                </form>
            </div>
        </div>

    @endforeach
    <div>
        {{ $groups->links() }}
    </div>
@endsection
