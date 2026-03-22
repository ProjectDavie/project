<x-app-layout>
    <div style="padding:20px;">
        <h1>Add Property</h1>

        @if(session('success'))
            <p style="color:green">{{ session('success') }}</p>
        @endif

        <form action="{{ route('properties.store') }}" method="POST">
            @csrf
            <div>
                <label>Name:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Description:</label>
                <textarea name="description"></textarea>
            </div>
            <div>
                <label>Type:</label>
                <input type="text" name="type">
            </div>
            <button type="submit">Create Property</button>
        </form>
    </div>
</x-app-layout>