<div data-modal="container" class="@if($hidden) hidden @endif 
    w-full h-full absolute top-0 left-0 flex items-center justify-center">
    <div data-modal="overlay" class="w-full h-full absolute top-0 left-0 bg-modal z-20"></div>
    <div class="w-full max-w-3xl bg-white rounded-md p-8 z-30">
        <h3 class="text-3xl font-semibold mb-4 text-green-87">Novo Card</h3>

        <form id="form-card" wire:submit.prevent="save">
            <div class="flex flex-col w-full mb-4">
                <label class="font-bold text-green-75">Nome</label>
                <input type="text" wire:model.defer="name" class="shadow-md rounded-lg h-full w-full border-1 border-green-75">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="flex space-x-4">
                <div class="flex flex-col w-full mb-4">
                    <label class="font-bold text-green-75">Projeto</label>
                    <select wire:model.defer="project" class="shadow-md rounded-lg h-full w-full border-1 border-green-75">
                        <option selected hidden="true"></option>
                        <option value="Projeto 1">Projeto 1</option>
                        <option value="Projeto 2">Projeto 2</option>
                        <option value="Projeto 3">Projeto 3</option>
                    </select>
                    @error('project') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col w-full mb-4">
                    <label class="font-bold text-green-75">Categoria</label>
                    <select wire:model.defer="category" class="shadow-md rounded-lg h-full w-full border-1 border-green-75">
                        <option selected hidden="true"></option>
                        <option value="Desenvolvimento">Desenvolvimento</option>
                        <option value="UX|UI">UX|UI</option>
                        <option value="Financeiro">Financeiro</option>
                    </select>
                    @error('category') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="flex flex-col w-full mb-4">
                    <label class="font-bold text-green-75">Equipe</label>
                    <input data-select type="text" readonly class="flex justify-start items-center py-2 px-3 shadow-md rounded-lg h-full w-full border border-green-75">
                    <div class="relative z-10">
                        <div data-select-list class="hidden absolute top-0 w-full bg-white rounded-lg border border-green-75 p-3 flex flex-col space-y-1">
                            <input data-checkbox class="w-0 h-0 opacity-0" id="team-option-1" type="checkbox" wire:model.defer="team" value="Pedro Henrique">
                            <label for="team-option-1" data-item class="flex justify-between items-center py-0.5 px-2.5 bg-grey-1A cursor-pointer rounded">
                                Pedro Henrique
                            </label>
                            <input data-checkbox class="w-0 h-0 opacity-0" id="team-option-2" type="checkbox" wire:model.defer="team" value="Afonso Solano">
                            <label for="team-option-2" data-item class="flex justify-between items-center py-0.5 px-2.5 bg-grey-1A cursor-pointer rounded">
                                Afonso Solano
                            </label>
                            <input data-checkbox class="w-0 h-0 opacity-0" id="team-option-3" type="checkbox" wire:model.defer="team" value="Wellington Oliveira">
                            <label for="team-option-3" data-item class="flex justify-between items-center py-0.5 px-2.5 bg-grey-1A cursor-pointer rounded">
                                Wellington Oliveira
                            </label>
                        </div>
                    </div>
                    @error('team') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col w-full mb-4">
                    <label class="font-bold text-green-75">Data prevista</label>
                    <input type="datetime-local" wire:model.defer="forecast" class="shadow-md rounded-lg h-full w-full border-1 border-green-75">
                    @error('forecast') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="flex flex-col w-full">
                <label class="font-bold text-green-75">Descrição</label>
                <textarea wire:model.defer="description" rows="4" class="shadow-md rounded-lg h-full w-full border-1 border-green-75"></textarea>
                @error('forecast') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="flex justify-center mt-8">
                <button type="submit" class="@if(!empty($loading)) pointer-events-none @endif flex justify-center items-center hover:opacity-90 bg-green-87 text-green-38 font-extrabold px-6 py-2 rounded-md">
                    <x-icons.spinner class="@if(!empty($loading)) hidden @endif animate-spin w-4 h-4 text-green-38 mr-4" />
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    [data-checkbox]:checked + [data-item] {
        background: #748B75 !important;
        color: white !important;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var select = document.querySelector('[data-select]');
        var team = document.querySelectorAll('[data-item]');
        var list = document.querySelector('[data-select-list]');

        document.addEventListener('click', function(e) {
            if (e.target.hasAttribute('data-select')) {
                if (list.classList.contains('hidden'))
                    list.classList.remove('hidden');
                else
                    list.classList.add('hidden');
            } else {
                if (!e.target.hasAttribute('data-select-list') && !list.contains(e.target) && !list.classList.contains('hidden'))
                    list.classList.add('hidden');
            }
        });

        team.forEach(function(element) {
            element.addEventListener('click', function() {
                console.log(element);
                if (element.hasAttribute('data-item')) {
                    if (element.previousElementSibling.checked) {
                        var values = select.value.split(', ')
                                    .filter(function(v) {
                                        return v !== element.innerText;
                                    });
                        select.value = values.join(', ');
                        element.removeAttribute('data-item-selected');

                    } else {
                        var values = !select.value ? element.innerText : `, ${element.innerText}`;
                        select.value += values;
                        element.setAttribute('data-item-selected', '');
                    }
                }
            });
        });
    });
</script>
