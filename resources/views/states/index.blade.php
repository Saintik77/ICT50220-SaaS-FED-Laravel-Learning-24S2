<x-guest-layout>
    <h1 class="text-2xl">States </h1>

    <table class="table w-full">
        <thead>
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>Added</th>
            <th>action</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            @foreach($states as $state)
                <td class="px-2">{{ $state->id }}</td>
                <td class="px-2">{{ $state->code }}</td>
                <td class="px-2">{{ $state->name }}</td>
                <td class="px-2">{{ $state->created_at }}</td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td>
                {{ $states->links() }}
            </td>
        </tr>
        </tfoot>
    </table>
</x-guest-layout>
