<x-app-layout>
    <main>
        <h1>Transações</h1>
        <div class="flex flex-col w-1/4 justify-center">
            <label for="date">Data da Transação:</label>
            <input type="date" name="date" id="date">
            <label for="number">Valor da Transação:</label>
            <input type="number" id="number" step="0.01" placeholder="R$">
            <input class=" top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" value="Registrar">
        </div>














        {{-- <label class="relative inline-flex items-center mb-4 cursor-pointer">
            <input type="checkbox" value="" class="sr-only peer">
            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Recorrente</span>
          </label> --}}
    </main>
</x-app-layout>