<div class="overflow-x-auto absolute pt-6 px-4 pb-4 caret-transparent" style="width:calc(100% - 256px); max-width: calc(100% - 256px); height: calc(100% - 64px); top:64px; left:128px;">
    <div class="w-max h-full flex space-x-4">
        @php $listNames = ['Aguardando', 'Em Andamento', 'Pendepência', 'Finalizado', 'Outros'] @endphp

        @foreach ($listNames as $listName)
            @php $cards = $lists[$listName] ?? ''; @endphp
            <x-list :listName="$listName" :cards="$cards" />
        @endforeach
    </div>
</div>
