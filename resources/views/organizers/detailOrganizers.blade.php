@extends("base")

@section("content")
@extends("../navbar")
    <div class="p-5">
        <h2 class="text-3xl mb-3 font-bold">{{ $organizers->name }}</h2>
        <div class="flex space-x-4 mb-10">
            <form action="{{ route('organizers.edit', $organizers->id) }}" method="GET">
                @csrf
                @method('edit')
                <button type="submit">
                    <i class="fa-solid fa-pencil"></i>
                </button>
            </form>
            <form action="{{ route('organizers.destroy', $organizers->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
        </div>
        <div class="grid grid-cols-[150px,1fr] items-center gap-5">
            <p class="text-xl font-bold">Facebook</p>
            <p class="mt-1">{{ $organizers->facebook_link }}</p>
        </div>
        <div class="grid grid-cols-[150px,1fr] items-center gap-5">
            <p class="text-xl font-bold">X</p>
            <p class="mt-1">{{ $organizers->x_link }}</p>
        </div>
        <div class="grid grid-cols-[150px,1fr] items-center gap-5">
            <p class="text-xl font-bold">Website</p>
            <p class="mt-1">{{ $organizers->website_link }}</p>
        </div>
        <h1 class="font-bold text-2xl mt-5">About</h1>
        <p>{{ $organizers->description }}</p>
    </div>
@endsection
