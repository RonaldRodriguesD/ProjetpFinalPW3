<x-app-layout>
    <main class="flex flex-col justify-center items-center py-10">
        <div class="flex flex-col">
            <h1>Adicionar nova categoria:</h1>
            <form class="flex flex-row" action="">
                <label for="">Nome da categoria:</label>
                <input type="text" name="category" placeholder="Ex: Alimentação">
                <input type="submit">
            </form>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="text-left text-sm font-light w-1/2">
                            <thead
                                class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                <tr>
                                    <th scope="col" class="px-6 py-4 text-center">Categorias</th>
                                    <th scope="col" class="px-6 py-4 text-center"></th>
                                    <th scope="col" class="px-6 py-4 text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                                        <td class="whitespace-nowrap px-6 py-4 text-center">{{$category->name}}</td>
                                        <td class="whitespace-nowrap px-6 py-4 text-center"><a class="bg-red-500" href="">Alterar</a></td> 
                                        <td class="whitespace-nowrap px-6 py-4 text-center"><a class="bg-cyan-500" href="">Deletar</a></td>
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>