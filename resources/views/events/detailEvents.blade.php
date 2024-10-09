@extends("base")

@section("content")
    <div class="p-5">
        <h2 class="text-2xl">{{ $event->event_category->name }}</h2>
        <h1 class="text-3xl font-bold mb-3">{{ $event->title }}</h1>
        <img class="rounded-t-lg" src="https://i.pinimg.com/736x/3b/75/b3/3b75b3a21cb4fbca4b8f3987227af80a.jpg" alt="" />
        <div class="grid-cols-2">
            <div>
                <h3 class="font-bold text-lg">Organizer</h3>
                <p>{{ $event->organizer->name }}</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Booking URL</h3>
                <p>{{ $event->booking_url }}</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Date and Time</h3>
                <p>{{ $event->date }} {{ $event->start_time }}</p>
            </div>
            <div>
                <h3 class="font-bold text-lg">Location</h3>
                <p>{{ $event->venue }}</p>
            </div>
        </div>
        <h3 class="font-bold text-lg"> About This Event</h3>
        <p>{{ $event->description }}</p>
        <h3 class="font-bold text-lg"> Tags</h3>
        <p>{{ $event->tags }}</p>
    </div>
@endsection
