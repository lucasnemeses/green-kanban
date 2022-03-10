<div class="w-80 h-full rounded-tl-lg overflow-hidden bg-grey-4A">
    <div class="flex justify-between items-center bg-green-87 p-4 rounded-br-lg">
        <h3 class="text-base text-white font-extrabold">{{ $listName }}</h3>
        <div class="h-max flex items-center">
            <x-icons.clock class="w-4 h-4 fill-white" />
            <span class="ml-1 mt-1 mr-3 text-sm text-white font-bold">1h</span>
            <span class="bg-white text-green-87 text-xs font-bold rounded-full w-5 h-5 flex justify-center items-center">3</span>
        </div>
    </div>
    <div class="px-2 py-4 h-full overflow-scroll"
        x-data=""
        list-name="{{ $listName }}"
        x-init="Sortablejs.create($el, {
            animation: 150,
            group: 'group',
            onSort({ to }) {
                const listName = to.getAttribute('list-name');
                const cardIds = Array.from(to.children).map(i => i.getAttribute('card-id'));
                @this.reorderCards({ listName, cardIds });
            }
        })"
    >
        @if (!empty($cards))
            @foreach ($cards as $card)
                @php $card = (object)$card; @endphp
                <x-card card-id="{{ $card->id }}" :card="$card" />
            @endforeach
        @endif
    </div>
</div>
