<!-- resources/views/tasks/create.blade.php -->

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>

    <button type="submit">Create Task</button>
</form>
