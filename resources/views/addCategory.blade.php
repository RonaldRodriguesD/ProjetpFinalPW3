<x-app-layout>
    <main class="flex flex-col justify-center items-center">
        <h1 class="text-violet-700 mt-5 mb-5 text-3xl">Cadastro de Categorias</h1>
        <div class="flex flex-row text-center bg-violet-200 p-6 rounded-lg ">
            <form action="/categories" method="POST">
                @csrf
                <label for="">Nome da categoria:</label>
                <input type="text" name="category" placeholder="Ex: Alimentação" class="rounded-lg">
                <input type="submit" class="bg-violet-400 rounded-lg px-3 py-2 ease-out duration-200 hover:bg-violet-700 hover:text-sky-50 cursor-pointer">
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