@extends('layouts.main')

@section('content')
    
    <main>

        
        <div>
           <h1>index dettagli classe singola</h1>
        </div>
        
        <div>
            <ul>
                @foreach ($classrooms as $classroom)
                    <li>
                        <h2>ID: {{ $classroom->id }}</h2>
                    </li>
                    <li>
                        <h3>NAME: {{ $classroom->name }}</h3>
                    </li>
                    <li>
                        <a href="{{ route('classrooms.show', $classroom->id) }}">show</a>
                    </li>
                @endforeach
            </ul>
        </div>

    </main>

@endsection