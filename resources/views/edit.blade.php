<form action="{{ route('data-providers.update', $dataProvider) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ $dataProvider->name }}" required>
    <label for="url">URL:</label>
    <input type="text" name="url" id="url" value="{{ $dataProvider->url }}" required>
    <button type="submit">Update</button>
</form>