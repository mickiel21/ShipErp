<div class="container">
    <h1>Providers</h1>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataProviders as $provider)
                    <tr>
                        <td>{{ $provider->name }}</td>
                        <td>{{ $provider->url }}</td>
                        <td>
                            <a href="{{ route('data-providers.edit', $provider->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('data-providers.destroy', $provider->id) }}" method="POST" style="display: inline-block;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('data-providers.create') }}" class="btn btn-success">Add Provider</a>
        </div>
    </div>
</div>