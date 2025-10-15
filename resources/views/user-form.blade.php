@extends('layouts.app')

@section('content')
    <h2 style="text-align:center; color:#333; margin-bottom:20px;">Laravel 12 Form Example</h2>

    {{--  Form Start --}}
    <form action="{{ route('user.store') }}" method="POST" style="display:flex; flex-direction:column; gap:15px;">
        @csrf  {{--  Laravel ka security token (CSRF Protection) --}}

        {{--  Name Field --}}
        <div>
            <label for="name" style="font-weight:bold;">Name:</label><br>
            <input 
                type="text" 
                name="name" 
                value="{{ old('name') }}" 
                placeholder="Enter your name"
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:5px;"
            >
            @error('name')
                <div style="color:red; margin-top:4px;"> {{ $message }}</div>
            @enderror
        </div>

        {{--  Email Field --}}
        <div>
            <label for="email" style="font-weight:bold;">Email:</label><br>
            <input 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                placeholder="Enter your email"
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:5px;"
            >
            @error('email')
                <div style="color:red; margin-top:4px;"> {{ $message }}</div>
            @enderror
        </div>

        {{--  Password Field (optional, user se input lene ke liye) --}}
        <div>
            <label for="password" style="font-weight:bold;">Password:</label><br>
            <input 
                type="password" 
                name="password" 
                placeholder="Enter password"
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:5px;"
            >
            @error('password')
                <div style="color:red; margin-top:4px;"> {{ $message }}</div>
            @enderror
        </div>

        {{--  Submit Button --}}
        <button 
            type="submit" 
            style="background:green; color:white; padding:10px 0; border:none; border-radius:5px; cursor:pointer; font-size:16px;">
            Submit
        </button>
    </form>
@endsection
