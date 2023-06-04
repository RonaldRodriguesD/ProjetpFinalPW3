<x-app-layout>
    <main class="py-6 px-6 text-gray-300">

        {{-- section "header" --}}
        <div class="flex-col grid gap-4 border-solid">
            <div class="flex flex-row justify-around">
                <h1 class="text-3xl">Dashboard</h1>
                <input type="search" name="search-dashboard" id="search-dashboard" placeholder="Pesquisar"  class="flex-row rounded-lg bg-sky-950 text-gray-400 w-1/4">
            </div>

            <div class="flex flex-row justify-center gap-24">
                <div class="bg-slate-800 rounded-xl py-3 px-8">
                    <h2 class="pb-2">Total de Lucros:</h2>
                    <p>R$ 00,00</p>
                </div>

                <div  class="bg-slate-800 rounded-xl py-3 px-8">
                    <h2 class="align-top">Total de Gastos:</h2>
                    <p>R$ 00,00</p>
                </div>
            </div>
        


        


        {{-- section "recent sales" --}}
            <div class=" grid justify-items-center flex justify-center" >
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Tags</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>02/06/2023</td>
                            <td>Transporte</td>
                            <td>R$ 24,00</td>
                            <td>Uber</td>
                        </tr>
                        <tr>
                            <td>01/06/2023</td>
                            <td>Restaurante</td>
                            <td>R$ 70,00</td>
                            <td>Alimentação</td>
                        </tr>
                        <tr>
                            <td>31/05/2023</td>
                            <td>Transporte Publico</td>
                            <td>R$ 5,50</td>
                            <td>Transporte</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>
</x-app-layout>
