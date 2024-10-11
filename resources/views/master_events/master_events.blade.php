@extends("base")

@section("content")
@extends("../navbar")
    <h1 class="font-bold text-3xl p-3 mb-3 ">
        Master Events
        <form action="{{ route('master_events.create') }}" method="GET">
            @csrf
            @method('create')
            <button type="submit" class="text-white bg-gray-400 hover:bg-gray-500 outline outline-black focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                +create
            </button>
        </form>
    </h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right">
            <thead class="text-xs uppercase text-center">
                <tr>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0 border-l-0">
                        No
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0">
                        Event Name
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0">
                        Date
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0">
                        Location
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0">
                        Organizer
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0">
                        About
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0 border-r-0">
                        Tags
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0 border-r-0">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-center align-middle">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0 text-center align-middle">
                        <a href="{{ route('master_events.show', $event->id) }}">
                            {{ $event->title }}
                        </a>
                    </td>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0 text-center align-middle">
                        {{ $event->date }} {{ $event->time }}
                    </td>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0 text-center align-middle">
                        {{ $event->venue }}
                    </td>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0 text-center align-middle">
                        {{ $event->organizer->name }}
                    </td>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0 text-center align-middle">
                        {{ $event->description }}
                    </td>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0 text-center align-middle">
                        {{ $event->tags }}
                    </td>
                    <td class="px-6 py-4 flex space-x-4 align-middle text-center">
                        <form action="{{ route('master_events.edit', $event->id) }}" method="GET">
                            @csrf
                            @method('edit')
                            <button type="submit" class="flex items-center justify-center">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </form>
                        <form action="{{ route('master_events.destroy', $event->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="flex items-center justify-center">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
