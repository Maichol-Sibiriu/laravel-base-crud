@extends('layouts.main')

@section('content')
    
    <main>

        <div>
           <h1>FORM</h1>
        </div>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('classrooms.store') }}" method="POST">

            @csrf
            @method('POST')
            
            <h2>CLASSROOM NAME</h2>
            <input type="text" name="name" value="{{ old('name') }}">

            <h2>DESCRIPTION</h2>
            <textarea name="description">{{ old('description') }}</textarea>

            <button>create</button>

        </form>
        
    </main>

@endsection