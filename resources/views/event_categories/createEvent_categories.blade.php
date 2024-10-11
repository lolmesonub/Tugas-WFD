@extends("base")

@section("content")
@extends("../navbar")
    <div class="p-5">
        <h1 class="font-bold text-3xl mb-4">Event Categories</h1>
        <form action="{{ route('event_categories.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            @method('POST')
            <div>
                <p class="font-bold text-lg mb-1">Event Category Name</p>
                <input type="text" name="name" class="outline outline-1 w-full p-2" required placeholder="Event Category Name">
            </div>

            <button type="submit" class="text-white bg-gray-400 hover:bg-gray-500 outline outline-black focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Save
            </button>

            <button type="button" onclick="window.history.back()" class="text-white bg-gray-400 hover:bg-gray-500 outline outline-black focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Cancel
            </button>
        </form>
    </div>
@endsection
