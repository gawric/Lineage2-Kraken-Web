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
                   

<div class="bg-white">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('messages.lk_all_chars') }}</h2>
      <p class="mt-3 text-lg leading-8 text-gray-600">{{ __('messages.lk_all_chars_description') }}</p>
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
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_promo') }}</th>
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
                <td class="px-6 py-4">
                <a href="#" onclick='return openDialogPromo( " {{ $model->char_name }} " , " {{ $model->server_name }} ")'' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __('messages.lk_table_dashboardchars_promo_actvate') }}</a>
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


<div id="overlay_user_promo" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- Диалоговое окно активация промокода -->
<div id="dialog_user_promo"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-196 bg-white rounded-md px-8 py-6 space-y-15 drop-shadow-lg">
        <h1 class="text-2xl font-semibold">{{ __('messages.lk_table_dashboardchars_promo_dialog_title') }}</h1>
        <div style="margin-top:2%; margin-bottom:1%; width:80%;"class="grid mb-6">
          <div style="display:none;" id="warning_promo"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span id="text_warning_promo"  class="block sm:inline"></span>
          </div>
          <div id="success_promo"  style="display:none;" class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
            <span id="success_text_promo"  class="block sm:inline"></span>
          </div>

              <div style="display:none;margin-top:3%" id="loading_promo">
                <div role="status">
                  <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                  </svg>
                  <span class="sr-only">Loading...</span>
                </div>
              </div>

        </div>
        <div style="margin-top:3%;">
          

        <div style="margin-bottom:5%;margin-top:5%;">
            <label for="char_name_dialog" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_table_dashboardchars_name_char') }}</label>
            <input type="text" id="char_name_dialog" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
          </div>

          <div style="margin-bottom:5%;">
            <label for="server_name_dialog" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_table_dashboardchars_name_server') }}</label>
            <input type="text" id="server_name_dialog" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
          </div>

          <div style="margin-bottom:5%;">
            <label for="field_promo_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_table_dashboardchars_promo_dialog_field_promocode') }}</label>
            <input type="text" id="field_promo_code" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          </div>

          <div style="margin-bottom:5%;margin-top:5%;">
            <button type="button" onClick="initPromoData()" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('messages.lk_table_dashboardchars_promo_actvate') }}</button>
          </div>


        </div>
        <div style="margin-top:10%;"class="flex justify-end">
            <!-- This button is used to close the dialog -->
            <button id="closeUserPromo" style="margin-right: 2%;" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
              exit
            </button>
        </div>
      </div>
  
</div>








                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{asset('/js/alertsMessages.js') }}"></script>
    <script src="{{asset('/js/adminuserpromo.js') }}"></script>

      <script>

        var overlay_user_promo = document.getElementById('dialog_user_promo');
        var dialog_user_promo = document.getElementById('overlay_user_promo');

        closeUserPromo.addEventListener('click', function () {
            dialog_user_promo.classList.add('hidden');
            overlay_user_promo.classList.add('hidden');
        });

        function openDialogPromo(char_name , server_name){
            dialog_user_promo.classList.remove('hidden');
            overlay_user_promo.classList.remove('hidden');
            document.getElementById('char_name_dialog').value = char_name;
            document.getElementById('server_name_dialog').value = server_name;
        }

        function initPromoData(){
          char_name = document.getElementById('char_name_dialog').value;
          server_name = document.getElementById('server_name_dialog').value;
          promo_code = document.getElementById('field_promo_code').value;
          initSendActivatePromo(char_name , server_name , promo_code);
        }
      </script>
</x-app-layout>
