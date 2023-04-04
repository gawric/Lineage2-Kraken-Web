<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Главная
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   

<div class="bg-white">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Главная 2</h2>
      <p class="mt-3 text-lg leading-8 text-gray-600">Главная 3</p>
    </div>
    <div class="mx-auto mt-10">

    <table id="table_accounts" style="width:100%;" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tbody>
         <tr>
            <th scope="col" class="px-6 py-4">#</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_name_char') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_name_account') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_name_server') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_lvl') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_clan_name') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_pvp') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_pk') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_last_data') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_online') }}</th>
         </tr>
        @if(isset($arrayInfoDashboardChars))
         @foreach($arrayInfoDashboardChars as $model)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $model->id }}
                </th>
                <td class="px-6 py-4">
                {{ $model->char_name }}
                </td>
                <td class="px-6 py-4">
                {{ $model->account_name }}
                </td>
                <td class="px-6 py-4">
                {{ $model->server_name }}
                </td>
                <td align="center">
                {{ $model->lvl }}
                </td>
                <td class="px-6 py-4">
                {{ $model->clan_name }}
                </td>
                <td align="center">
                {{ $model->pvp }}
                </td>
                <td align="center">
                {{ $model->pk }}
                </td>
                <td class="px-6 py-4">
                {{ $model->last_data }}
                </td>
                <td class="px-6 py-4">
                {{ $model->online }}
                </td>
            </tr>
         @endforeach
         @else
            <tr>
              <td>  
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td align="center" colspan="10" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                         Нет данных
                    </th>
                </tr>

            </tr>
        @endif
        
           
        </tbody>
    </table>

    </div>

      <!-- More posts... -->
    </div>
  </div>
</div>




                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{asset('/js/alertsMessages.js') }}"></script>

      <script>
      </script>
</x-app-layout>
