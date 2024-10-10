@extends("base")

@section("content")
    <div class="p-5">
        <h1 class="font-bold text-3xl mb-4">Organizer</h1>
        <form action="" method="POST" class="flex flex-col gap-4">
            <div>
                <p class="font-bold text-lg mb-1">Organizer Name</p>
                <input type="text" id="" class="outline outline-1 w-full p-2" required>
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Facebook</p>
                <input type="text" id="" class="outline outline-1 w-full p-2" required>
            </div>

            <div>
                <p class="font-bold text-lg mb-1">X</p>
                <input type="text" id="" class="outline outline-1 w-full p-2" required>
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Website</p>
                <input type="text" id="" class="outline outline-1 w-full p-2" required>
            </div>

            <div>
                <p class="font-bold text-lg mb-1">About</p>
                <input type="text" id="" class="outline outline-1 w-full p-2 mb-5 resize" required>
            </div>

            <button type="submit" class="text-white bg-gray-400 hover:bg-gray-500 outline outline-black focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Save
            </button>
        </form>
    </div>
@endsection
