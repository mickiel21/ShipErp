<form action="{{ route('data-providers.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="url">URL:</label>
    <input type="text" name="url" id="url" required>
    <button type="submit">Create</button>
</form>