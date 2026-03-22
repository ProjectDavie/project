<x-app-layout>
    <div style="padding:20px;">
        <h1>All Properties</h1>

        <a href="{{ route('properties.create') }}">Create New Property</a>

        <table border="1" cellpadding="5" cellspacing="0" style="margin-top:20px;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($properties as $property)
                <tr>
                    <td>{{ $property->name }}</td>
                    <td>{{ $property->description }}</td>
                    <td>{{ $property->type }}</td>
                    <td>{{ $property->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>