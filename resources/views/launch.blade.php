
<x-app-layout>
    <main class="flex justify-center w-full">
        <div class="flex flex-col w-96 mt-40 bg-violet-200 p-8 rounded-xl">
            <label for="number" class="text-violet-700 mb-1">Valor da Transação:</label>
            <input type="number" name="value" step="0.01" placeholder="R$ 0,00" class=" border-purple-500 mb-1 rounded-xl p-2">
            <label for="date" class="text-violet-700">Data da Transação:</label>
            <input type="date" name="date" id="date" class=" border-purple-500 mb-2 rounded-xl p-2 text-center ">
            <div>
                <label for="number" class="text-violet-700 mr-2">Categoria:</label>
                <select name="" id="" class="rounded-xl pr-16 text-center mb-3">
                    <option value="">escolha a categoria...</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
                <a href="/categories/create" class="bg-indigo-600 rounded-lg  w-6/12 flex items justify-center">Adicionar Categoria</a>
            <label class="relative inline-flex items-center mb-4 cursor-pointer">
                <input type="checkbox" value="" name="type" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Recorrente</span>
            </label>
            <input class=" top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" onclick="transformarVirgulaPonto()" value="Registrar">
        </div>
    </main>
</x-app-layout>