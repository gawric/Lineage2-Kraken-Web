<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.lk_home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/line-clamp'),
    ],
  }
  ```
-->
<div class="bg-white">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Игровые аккаунты gawric</h2>
   
      <p class="mt-3 text-lg leading-8 text-gray-600">Количество разрешенных аккаунтов 25</p>
    </div>
    <div class="mx-auto mt-10">

    <table style="width:100%;" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    gawric
                </td>
                <td class="px-6 py-4">
                    24.06.2014 09:35:47
                </td>
                <td class="px-6 py-4">
                    Нет персонажей
                </td>
                <td class="px-6 py-4">
                    X50 Nightmare
                </td>
                <td>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Сменить пароль</button>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    2
                </th>
                <td class="px-6 py-4">
                    gawric
                </td>
                <td class="px-6 py-4">
                    24.06.2014 09:35:47
                </td>
                <td class="px-6 py-4">
                    Нет персонажей
                </td>
                <td class="px-6 py-4">
                    X1000 Warland
                </td>
                <td>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Сменить пароль</button>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    3
                </th>
                <td class="px-6 py-4">
                    gawric
                </td>
                <td class="px-6 py-4">
                    24.06.2014 09:35:47
                </td>
                <td class="px-6 py-4">
                    Нет персонажей
                </td>
                <td class="px-6 py-4">
                    X300 Paradise
                </td>
                <td>
                    <button type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Сменить пароль</button>
                </td>
            </tr>
        </tbody>
    </table>

    <div>
        <button type="button" style="margin-top: 3%;"class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">
        {{ __('messages.lk_add_new_account') }}
        </button>
    </div>
</div>


      <!-- More posts... -->
    </div>
  </div>
</div>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
