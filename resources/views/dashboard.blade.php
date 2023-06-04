<x-app-layout>
    <main class="py-12" >

        <div class=" flex flex-col grid gap-4 border-solid " >
            <div class="text-gray-300 border-2 border-sky-500">
                <h1>Olá, Vinicius!</h1>
                <p>Atualizações de Pagamentos</p>
            </div>

            <div class=" grid justify-items-center text-gray-300 flex justify-center" >
                <table class="table-auto border-2 border-sky-500 gap-2">
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
