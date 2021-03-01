@extends('dashboard.master')
@section('content')

    <a href="{{route('post.create')}}" class="btn btn-primary mt-3 mb-3">Crear</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Contenido</th>
            <th scope="col">Posteado</th>
            <th scope="col">Creacion</th>
            <th scope="col">Actualizacion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="col">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td style="font-weight: 30">{{$post->content}}</td>
                <td>{{$post->posted}}</td>
                <td>{{$post->created_at->format('d-M-Y')}}</td>
                <td>{{$post->updated_at->format('d-M-Y')}}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$posts->links()}}

<link rel="stylesheet" href="{{asset('css/app.css')}}">

@endsection
