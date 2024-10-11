@extends("base")

@section("content")
@extends("navbar")
    <h1 class="font-bold text-3xl p-3 mb-3 ">
        Event Category
        <form action="{{ route('event_categories.create') }}" method="GET">
            @csrf
            @method('create')
            <button type="submit" class="text-white bg-gray-400 hover:bg-gray-500 outline outline-black focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                +create
            </button>
        </form>
    </h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right">
            <thead class="text-xs uppercase">
                <tr>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0 border-l-0">
                        No
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0">
                        Organizer Name
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0 border-r-0">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event_categories as $event_category)
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0">
                        <a href="{{ route('organizers.show', $event_category->id) }}">
                            {{ $event_category->name }}
                        </a>
                    </td>
                    <td class="px-6 py-4 flex space-x-4">
                        <form action="{{ route('event_categories.edit', $event_category->id) }}" method="GET">
                            @csrf
                            @method('edit')
                            <button type="submit">
                                <i class="fa-solid fa-pencil"></i>
                            </button>
                        </form>
                        <form action="{{ route('event_categories.destroy', $event_category->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">
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
