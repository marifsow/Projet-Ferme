@isset($items)
    <table class="w-full text-left text-sm text-gray-200 border border-gray-700">
        <thead class="bg-gray-700 text-white">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $i)
                <tr class="border-b border-gray-600">
                    <td class="px-4 py-2">{{ $i->id ?? $i }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route($routeName . '.show', $i->id ?? $i) }}" class="text-blue-400 hover:underline">Voir</a>
                        <a href="{{ route($routeName . '.edit', $i->id ?? $i) }}" class="text-yellow-400 hover:underline">Modifier</a>
                        <form action="{{ route($routeName . '.destroy', $i->id ?? $i) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p class="text-red-500">Aucun élément à afficher.</p>
@endisset
