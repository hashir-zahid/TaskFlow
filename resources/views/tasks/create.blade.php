@extends('layout.app')
<style>
    label {
        display: block;
        margin-bottom: 0.25rem;
        font-weight: 600;
        color: #ddd;
    }

    input[type="text"],
    input[type="time"],
    textarea {
        width: 100%;
        padding: 0.5rem;
        border-radius: 0.375rem;
        background-color: #1f2937;
        border: 1px solid #374151;
        color: #f9fafb;
        font-size: 1rem;
        font-family: inherit;
        box-sizing: border-box;
        transition: border-color 0.2s ease;
    }

    input[type="text"]:focus,
    input[type="time"]:focus,
    textarea:focus {
        border-color: #7c3aed;
        outline: none;
    }

    .time-container {
        display: flex;
        gap: 1rem;
    }

    .time-input {
        flex: 1;
    }

    .btn {
        display: block;
        width: 100%;
        background-color: #7c3aed;
        color: white;
        padding: 0.75rem 1.25rem;
        margin-top: 1.5rem;
        border-radius: 0.375rem;
        font-weight: 600;
        font-size: 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease;
        border: none;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

    .btn:hover {
        background-color: #6d28d9;
        transform: translateY(-1px);
    }

    .btn:active {
        background-color: #5b21b6;
        transform: translateY(0);
    }

    .btn:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
        box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.5);
    }
</style>
@section('content')

<div class="max-w-xl mx-auto mt-10 p-6 rounded-xl shadow-lg bg-gray-900 text-white">
    <h2 class="text-2xl font-bold mb-6">Add New Task</h2>

    {{-- Success message --}}
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-600 rounded text-white text-center">
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation errors --}}
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-500 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-white">- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <div class="mb-6">
            <label for="name">Task Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-6">
            <div class="time-container">
                <div class="time-input">
                    <label for="start_time">Start Time</label>
                    <input type="time" name="start_time" id="start_time" value="{{ old('start_time') }}" required>
                </div>
                <div class="time-input">
                    <label for="end_time">End Time</label>
                    <input type="time" name="end_time" id="end_time" value="{{ old('end_time') }}" required>
                </div>
            </div>
        </div>

        <div class="mb-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4">{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn">Create Task</button>
    </form>
</div>
@endsection
