<x-app-layout>
    <main class="py-12" >

        <div class=" flex flex-col grid gap-4 border-solid border-2 border-sky-500" >
            <div class="text-gray-300 border-2 border-sky-500">
                <h1>Olá, Vinicius!</h1>
                <h2>Atualizações de Pagamentos</h2>
            </div>

            <div class="text-gray-300 border-2 border-sky-500 " >
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
