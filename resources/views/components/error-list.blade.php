@if ($errors->any())
    <div class="p-6 mb-4 border-b border-gray-200 bg-red-500 text-white rounded-lg">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif