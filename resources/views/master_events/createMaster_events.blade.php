@extends("base")

@section("content")
@extends("../navbar")
    <div class="p-5">
        <h1 class="font-bold text-3xl mb-4">Events</h1>
        <form action="{{ route('master_events.store') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            @method('POST')
            <div>
                <p class="font-bold text-lg mb-1">Event Name</p>
                <input type="text" name="title" class="outline outline-1 w-full p-2" required placeholder="Event Name">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Date</p>
                <input type="date" name="date" class="outline outline-1 w-full p-2" required>
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Start Time</p>
                <input type="time" name="start_time" class="outline outline-1 w-full p-2" required placeholder="Start Time">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Location</p>
                <input type="text" name="venue" class="outline outline-1 w-full p-2" required placeholder="Location">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Organizer</p>
                <select name="organizer_id" class="outline outline-1 w-full p-2" required placeholder="X Username">
                    <option value="" selected disabled>Select Organizer...</option>
                    @foreach ($organizers as $organizer)
                    {
                        <option value="{{ $organizer->id }}">{{ $organizer->name }}</option>
                    }
                    @endforeach
                </select>
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Booking URL</p>
                <input type="text" name="booking_url" class="outline outline-1 w-full p-2" required placeholder="Booking URL">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">About</p>
                <input type="text" name="description" class="outline outline-1 w-full p-2 mb-5 resize" required placeholder="About">
            </div>

            <div>
                <p class="font-bold text-lg mb-1">Tags</p>
                <input type="text" name="tags" class="outline outline-1 w-full p-2 mb-5 resize" required placeholder="Tags">
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
