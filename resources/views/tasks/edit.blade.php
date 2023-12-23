<!-- resources/views/tasks/edit.blade.php -->

<form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT') <!-- Utilisez cette directive pour indiquer que c'est une requête PUT (mise à jour) -->

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $task->title }}" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description">{{ $task->description }}</textarea>

    <button type="submit">Update Task</button>
</form>
