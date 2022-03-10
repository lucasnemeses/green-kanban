@props(['card'])

<div data-card-move class="bg-white shadow-xl rounded-lg mb-4" {{ $attributes }}>
    <div class="px-6 pt-3">
        <div class="flex justify-between items-center mb-2">
            <h5 class="h-max px-1.5 py-0.5 border border-grey-80 uppercase text-xs text-grey-80 font-bold rounded">{{ $card->category }}</h5>
            <span class="text-right" style="line-height: 12px !important;">
                <span class="texto text-grey-80 mb-1" style="font-size: 10px !important;">Código:</span> <br>
                <strong class="text-xs text-grey-E6">#{{ $card->id }}</strong>
            </span>
        </div>

        <h4 class="text-sm text-grey-E6 font-extrabold uppercase mb-2">{{ $card->name }}</h4>

        <div class="flex justify-between items-center mb-2">
            <span class="text-left" style="line-height: 14px !important;">
                <span class="texto text-grey-80 mb-1" style="font-size: 10px !important;">Projeto:</span> <br>
                <h6 class="text-sm font-extrabold text-grey-E6">{{ $card->project }}</h6>
            </span>

            <span class="text-right" style="line-height: 14px !important;">
                <span class="texto text-grey-80 mb-1" style="font-size: 10px !important;">Prevista:</span> <br>
                <span class="flex">
                    <x-icons.calendar class="w-4 h-4 fill-grey-E6 text-sm" />
                    <span class="text-sm text-grey-E6 ml-2">
                        {{ date('d/m/Y', strtotime($card->forecast)) }}
                    </span>
                </span>
            </span>
        </div>

        <div class="flex justify-between items-center mb-2 overflow-hidden">
            <span class="text-left" style="line-height: 14px !important;">
                <span class="texto text-grey-80 mb-1" style="font-size: 10px !important;">Projeto:</span> <br>
                <p class="text-sm text-grey-B3 w-max" title="{{ $card->description }}">{{ $card->description }}</p>
            </span>
        </div>
    </div>

    <div class="px-6 flex relative after:content-[''] after:w-full after:border-t after:border-t-grey-29 after:absolute after:inset-y-1/2 after:left-0">
        <span class="texto text-grey-80 bg-white px-2 z-10" style="font-size: 10px !important; margin-left: -0.5rem">Acompanhamento:</span>
    </div>

    <div class="px-6 pt-1 pb-3">
        <div class="flex justify-between items-center">
            <span class="flex text-left items-center" style="line-height: 14px !important;">
                <x-icons.clock class="w-4 h-4 fill-grey-E6 text-sm" />
                <span class="ml-2">
                    <span class="texto text-grey-80 mb-1" style="font-size: 10px !important;">Previsto:</span> <br>
                    <span class="text-xs text-grey-E6">
                        {{ date('H:i', strtotime($card->forecast)) }}
                    </span>
                </span>
            </span>

            <span class="text-left" style="line-height: 14px !important;">
                <span class="h-max px-1.5 py-0.5 uppercase text-xs bg-green-54 text-white font-bold rounded">Em dia</span>
            </span>
        </div>

        <div class="flex justify-between items-center mb-2">
            <span class="flex text-left items-center" style="line-height: 14px !important;">
                <x-icons.clock class="w-4 h-4 fill-grey-E6 text-sm" />
                <span class="ml-2">
                    <span class="texto text-grey-80 mb-2" style="font-size: 10px !important;">Saldo:</span> <br>
                    <span class="text-xs text-green-54 border border-green-54 rounded" style="padding: 1px 3px">
                        +00:10
                    </span>
                </span>
            </span>

            <span class="text-right" style="line-height: 14px !important;">
                <span class="texto text-grey-80 mb-1" style="font-size: 10px !important;">Equipe:</span> <br>
                <span class="flex">
                    @foreach ( json_decode($card->team) as $member)
                        <span class="bg-grey-80 text-white rounded-full ml-1 w-4 h-4 flex justify-center items-center" title="{{ $member }}" style="font-size: 0.55rem;">
                            @php $initials = explode(' ', $member) @endphp
                            {{ $initials[0][0] . $initials[1][0] }}
                        </span>
                    @endforeach
                </span>
            </span>
        </div>
    </div>
</div>
