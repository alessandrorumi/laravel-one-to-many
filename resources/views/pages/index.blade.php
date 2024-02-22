@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Tipologia e Progetti</h1>
    <ul>
        @foreach ($types as $type)
            <li>
                <div class="type mt-5">
                    <h3>Tipologia: {{ $type->name }}</h3>
                    <ul>
                        @foreach ($type->projects  as $project)
                            <li>
                                <b>Progetto:</b><span>
                                {{ $project->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
