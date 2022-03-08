<div class="flex justify-between h-16 border-2 border-green-87 absolute top-0 bg-white" style="width: calc(100% - 256px); left: 128px">
    <div class="h-full flex items-center">
        <div class="bg-green-87 w-3 h-full mr-6"></div>
        <h1 class="h-max text-2xl text-green-38 font-semibold mr-8">Tarefas</h1>
        <div class="h-max flex items-center">
            <x-icons.clock class="w-4 h-4 fill-green-75" />
            <span class="ml-1 mt-1 mr-3 text-sm text-green-75 font-bold">5h</span>
            <span class="bg-green-75 text-white text-xs font-bold rounded-full w-5 h-5 flex justify-center items-center">10</span>
        </div>
    </div>

    <div class="flex p-2 items-center">
        <div class="flex items-center py-2 px-4 shadow-md rounded-lg h-full w-full max-w-lg">
            <x-icons.search class="w-4 h-4 fill-green-38" />
            <input type="text" placeholder="Pesquisar por Tarefa..." class="h-full border-0 placeholder:text-grey-4D placeholder:font-bold">
        </div>
        <button class="flex items-center py-2 px-4 bg-green-87 shadow-md rounded-lg ml-5 mr-7">
            <span class="uppercase text-green-38 font-bold mr-1">Filtro</span>
            <x-icons.filter class="fill-green-38 w-4 h-4"/>
        </button>
        <div class="w-max h-max relative">
            <x-icons.bell-full class="fill-green-38 w-7 h-7"/>
            <span class="bg-pink text-white text-xs absolute right-0 bottom-0 w-3 h-3 flex items-center justify-center rounded-full">2</span>
        </div>
        <div class="w-max h-max relative ml-5 mr-2">
            <x-icons.fullscreen class="fill-green-38 w-5 h-5"/>
        </div>
    </div>
</div>
