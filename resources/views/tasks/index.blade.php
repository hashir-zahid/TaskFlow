@extends('layout.app')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <div class="flex justify-between items-center mb-8">
        <h1 class="abc text-3xl font-bold text-primary">Tasks Manager</h1>
     
        <a href="{{ route('tasks.create') }}" class="add-task-button">
            + Add Task
        </a>
    </div>

 
    <div class="overflow-x-auto rounded-lg border border-gray-800">
        <table class="w-full">
            <thead>
                <tr class="bg-bg-darker text-text-main">
                    <th class="px-6 py-4 text-left w-12">#</th>
                    <th class="px-6 py-4 text-left">Name</th>
                    <th class="px-6 py-4 text-left">Start Time</th>
                    <th class="px-6 py-4 text-left">End Time</th>
                    <th class="px-6 py-4 text-left">Description</th>
                    <th class="px-6 py-4 text-left w-40">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $index => $task)
                    <tr class="hover:bg-bg-darker/50 transition-colors border-t border-gray-800">
                        <td class="px-6 py-4 text-text-secondary">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">{{ $task->name }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($task->start_time)->format('H:i') }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($task->end_time)->format('H:i') }}</td>
                        <td class="px-6 py-4">{{ $task->description }}</td>
                        <td class="px-6 py-4">
                            <div class="flex gap-3">
                                <a href="{{ route('tasks.edit', $task->id) }}" class="action-button edit">Edit</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-button delete">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class="border-t border-gray-800">
                        <td colspan="6" class="text-center py-8 text-text-secondary">
                            No tasks found. Add your first task above!
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<style>
    .add-task-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.5rem;
        background-color: #7b5fff;
        color: white;
        border-radius: 0.5rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border: none;
        cursor: pointer;
    }

    .add-task-button:hover {
        background-color: #6a4bff;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .add-task-button:active {
        transform: translateY(0);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .action-button {
        padding: 6px 12px;
        border-radius: 20px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 14px;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .action-button.edit {
        background-color: rgba(17, 107, 61, 0.1);
        color: rgba(45, 204, 122, 0.67);
        border: 1px solid rgba(45, 204, 122, 0.67);
    }

    .action-button.edit:hover {
        background-color: rgba(38, 170, 126, 0.42);
    }

    .action-button.delete {
        background-color: rgba(36, 9, 17, 0.52);
        color:  rgba(248, 60, 85, 0.52);
        border: 1px solid rgba(248, 60, 85, 0.52);
    }

    .action-button.delete:hover {
        background-color: rgba(253, 121, 168, 0.2);
    }

    form {
        display: inline;
    }

    th {
        padding-right: 30px;
        color:#6c5ce7;
    }
    .abc{
        display: inline;
    }
    h1{
        color: #7b5fff;
        margin-right: 25%;
    }
   .w-full{
    margin-top: 30px;
    }
    
</style>
@endsection