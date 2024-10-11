@extends("base")

@section("content")
@extends("../navbar")
    <div class="container p-5">
        <h1 class="font-bold mb-3">Events in Surabaya</h1>
        <div class="grid grid-cols-3 gap-10">
            @foreach ($events as $event )
            <div class="px-3">
                <a href="{{ route('events.show', $event->id) }}">
                    <div class="border rounded-lg shadow-lg">
                        <img class="rounded-t-lg" src="https://i.pinimg.com/736x/3b/75/b3/3b75b3a21cb4fbca4b8f3987227af80a.jpg" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 tracking-tight text-black">{{ $event->title }}</h5>
                            <h5 class="font-bold text-black">{{ $event->date }} {{ $event->start_time }}</h5>
                            <h5 class="text-black">{{ $event->venue }}</h5>
                            <h5 class="mt-5">Free</h5>
                            <h5>Organizer: {{ $event->organizer->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
