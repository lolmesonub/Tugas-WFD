@extends("base")

@section("content")
@extends("../navbar")
    <div class="p-5">
        <h1 class="font-bold text-3xl mb-4">Organizer</h1>
        <form action="{{ route('organizers.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            @method('POST')
            <div>
                <p class="font-bold text-lg mb-1">Organizer Name</p>
                <input type="text" name="name" class="outline outline-1 w-full p-2" required placeholder="Organizer Name">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Facebook</p>
                <input type="text" name="facebook_link" class="outline outline-1 w-full p-2" required placeholder="Facebook Username">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">X</p>
                <input type="text" name="x_link" class="outline outline-1 w-full p-2" required placeholder="X Username">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Website</p>
                <input type="text" name="website_link" class="outline outline-1 w-full p-2" required placeholder="Website Name">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">About</p>
                <input type="text" name="description" class="outline outline-1 w-full p-2 mb-5 resize" required placeholder="About">
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
