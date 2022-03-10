<div class="flex absolute left-0 top-0">
    <div class="bg-green-87 w-16 h-screen rounded-md shadow-2xl z-10">
        <figure class="w-11/12 my-1 mx-auto rounded-full aspect-square shadow-lg">
            <img class="w-full h-full" src="{{ asset('img/logo.png') }}" alt="Logo Company" title="Company">
        </figure>

        @php
            $iconStyles = 'transition cursor-pointer fill-green-38 hover:fill-white w-full h-full';
        @endphp

        <nav class="my-8 space-y-6">
            <div class="w-5 m-auto">
                <x-icons.hamburgue class="{{ $iconStyles }}"/>
            </div>

            <div class="relative">
                <div class="w-5 m-auto after:content-[''] after:h-full after:w-1 after after:bg-black after:absolute after:top-0 after:left-0">
                    <x-icons.board class="transition cursor-pointer fill-black w-full h-full"/>
                </div>
            </div>

            <div class="w-5 m-auto">
                <x-icons.bell-stroke class="{{ $iconStyles }}"/>
            </div>

            <div class="w-5 h-5 m-auto">
                <x-icons.calendar-clock class="{{ $iconStyles }}"/>
            </div>

            <div class="w-5 h-5 m-auto">
                <x-icons.bulleseye-arrow class="{{ $iconStyles }}"/>
            </div>

            <div class="w-5 h-5 m-auto">
                <x-icons.file-chart-outline class="{{ $iconStyles }}"/>
            </div>

            <div class="w-5 h-5 m-auto">
                <x-icons.add class="{{ $iconStyles }}"/>
            </div>

            <div class="w-5 h-5 m-auto">
                <x-icons.config class="{{ $iconStyles }}"/>
            </div>
        </nav>

        <div class="group transition cursor-pointer rw-6 w-6 h-6 m-auto bg-pink rounded-full shadow">
            <div class="flex justify-center items-center w-full h-full relative">
                <x-icons.plus class="fill-white w-4 h-4 z-10 pointer-events-none"/>
                <span data-modal="open" class="hidden group-hover:block transition rounded-lg py-1 pl-6 pr-2 bg-pink w-max text-white text-base font-extrabold uppercase absolute" style="top:50%;left:0;transform:translateY(-50%)">Criar card</span>
            </div>
        </div>
    </div>
    <div class="bg-white w-16 h-screen shadow-2xl">
        <nav class="my-8 space-y-3">
            <div class="w-5 m-auto">
                <x-icons.suitcase class="fill-green-38 w-full h-full"/>
            </div>

            <div class="w-4 h-4 m-auto">
                <x-icons.arrow-right class="fill-green-38 w-full h-full"/>
            </div>

            <div class="m-auto bg-green-38 text-white text-sm font-semibold rounded-full w-5 h-5 flex justify-center items-center">
                3
            </div>
        </nav>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        document.querySelector('[data-modal="open"]').addEventListener('click', function(e) {
            document.querySelector('[data-modal="container"]').classList.remove('hidden');
        });

        document.querySelector('[data-modal="overlay"]').addEventListener('click', function(e) {
            document.querySelector('[data-modal="container"]').classList.add('hidden');
            document.querySelector('#form-card').reset();
        });
    });
</script>
