@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <table class="table table-success table-striped">
    <thead class="text-center">
        <th>ID</th>
        <th>AUTHOR</th>
        <th>TITLE</th>
        <th>Button</th>

    </thead>
    <tbody class="text-center">
        @forelse ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->author}}</td>
            <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></td>
            <td>
                <a href="{{route('admin.posts.edit', $post->id)}}" class="btn px-3 mx-2  btn-sm btn-primary">Edit</a>
                <form action="" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn px-3 mx-2  btn-sm btn-danger">Remove</button>
                </form>
            </td>
        </tr>
        @empty
        @endforelse   
    </tbody>
    </table>
</div>



@endsection