<x-app-layout>
    <main class="flex flex-row justify-center items-center">
        <div class="flex flex-col text-center border-2 border-purple-700  mt-40 bg-violet-400 p-4">
            <h1>Adicionar nova categoria:</h1>
            <form class="flex flex-col" action="/categories" method="POST">
                @csrf
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                                        <td class="whitespace-nowrap px-6 py-4 text-center">{{$category->name}}</td> 
                                        <td class="whitespace-nowrap px-6 py-4 text-center">
                                            <form action="/categories/{{$category->id}}" method="POST">
                                                @csrf
                                                @method("delete")
                                                <input class="bg-red-500" type="submit" value="Excluir">
                                            </form>
                                        </td>
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