@extends("base")

@section("content")
    <h1 class="font-bold text-3xl p-3">Organizer</h1>
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
                        About
                    </th>
                    <th scope="col" class="text-lg px-6 py-3 border border-black border-t-0 border-r-0">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($organizers as $organizer)
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $organizer->id }}
                    </th>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0">
                        <a href="">
                            {{ $organizer->name }}
                        </a>
                    </td>
                    <td class="px-6 py-4 border border-black border-b-0 border-t-0">
                        {{ $organizer->description }}
                    </td>
                    <td class="px-6 py-4">
                        Action
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
