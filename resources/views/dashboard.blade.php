<x-app-layout>
    <main class="py-6 px-6">

      {{-- section "header" --}}
      <div class="flex-col grid gap-4 border-solid">
          <div class="flex flex-row justify-around">
              <h1 class="text-3xl">Dashboard</h1>
          </div>

          <div class="flex flex-row justify-center gap-24">
              <div class="bg-slate-800 text-white rounded-xl py-3 px-8">
                  <h2 class="pb-2">Total de Lucros:</h2>
                  <p>R$ 00,00</p>
              </div>

              <div class="bg-slate-800 text-white rounded-xl py-3 px-8">
                  <h2 class="align-top">Total de Gastos:</h2>
                  <p>R$ 00,00</p>
              </div>
          </div>

          {{-- section "recent sales" --}}
          <div class="flex flex-col">
              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                      <div class="overflow-hidden">
                          <table class="min-w-full text-left text-sm font-light w-2/5">
                              <thead
                                  class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                  <tr>
                                      <th scope="col" class="px-6 py-4 text-center">Data</th>
                                      <th scope="col" class="px-6 py-4 text-center">Valor (R$)</th>
                                      <th scope="col" class="px-6 py-4 text-center">Categoria</th>
                                  </tr>
                              </thead>
                              <tbody>
                                    @foreach ($registers as $register)
                                        @if ($register->type == 1)
                                            <tr class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600">
                                                <td class="whitespace-nowrap px-6 py-4 text-center">{{$register->date}}</td>
                                                <td class="whitespace-nowrap px-6 py-4 text-center">{{$register->value}}</td>
                                                <td class="whitespace-nowrap px-6 py-4 text-center">{{$register->category}}</td>
                                            </tr>
                                        @else
                                        <tr class="border-b bg-white dark:border-neutral-500 dark:bg-neutral-600  text-red-500">
                                            <td class="whitespace-nowrap px-6 py-4 text-center">{{$register->date}}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-center">{{$register->value}}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-center">{{$register->category}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          
            <figure class="highcharts-figure">
                <div id="container"></div>
            </figure>

      </div>
    </main>
</x-app-layout>
