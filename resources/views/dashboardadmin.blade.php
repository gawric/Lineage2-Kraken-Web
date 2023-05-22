@extends('layouts.admintemplate.admin')


@section('content')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
<div class="bg-white">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('messages.lk_admin_panel_admin') }}</h2>
   
      <p class="mt-3 text-lg leading-8 text-gray-600">{{ __('messages.lk_admin_panel_descript') }}</p>
    </div>
    <div style="display:none;margin-top:3%" id="loading_all_accounts">
      <div role="status">
        <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
           <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <div style="width:30%;margin-top:3%">
        
        <div style="display:none;" id="warning_all_accounts"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <span id="text_warning_all_accounts"  class="block sm:inline"></span>
        </div>

        <div  style="display:none;"  id="success_all_accounts"   class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
          <span id="text_success_all_accounts"  class="block sm:inline"></span>
        </div>

    </div>


    <div class="mx-auto mt-10">
    <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- Диалоговое окно для чаров -->
      <div id="dialog"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-196 bg-white rounded-md px-8 py-6 space-y-15 drop-shadow-lg">
        <h1 class="text-2xl font-semibold">{{ __('messages.lk_admin_panel_title_chars') }}</h1>
        <div style="margin-top:1%; margin-bottom:1%; width:50%;">
          <div style="display:none;" id="warning_all_chars"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span id="text_warning_all_chars"  class="block sm:inline"></span>
          </div>
          <div id="success_all_chars"  style="display:none;" class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
            <span id="success_text_all_chars"  class="block sm:inline"></span>
          </div>
        </div>
        <div>
          <div style="display:none;margin-top:3%" id="loading_all_chars">
            <div role="status">
            <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
              <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
            </svg>
          <span class="sr-only">Loading...</span>
        </div>
    </div>
        </div>
        <div style="margin-top:3%;width: 50%;"class="grid mb-6 md:grid-cols-3">
          <div>
             <label for="select_chars_items" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_windows_chars_select_item')}}</label>
              <select id="select_chars_items" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option id="-1" selected> {{ __('messages.lk_admin_panel_windows_chars_select_choose_item_title')}}</option>
              </select>
          </div>
          <div style="margin-left:5%;width: 50%;">
              <label for="text_count_items" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_windows_chars_select_count')}}</label>
              <input type="text" id="text_count_items" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10" required>
          </div>
          <div style="float:left;margin-top:1px;" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            <label for="last_name_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_windows_chars_select_add')}}</label>
            <button id="button_add_items_char" onClick="addItemsChar()" type="button" class="p-2 mb-6 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5  mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">{{ __('messages.lk_admin_panel_windows_chars_select_add')}}</button>
          </div>
        </div>
        <div style="margin-top:3%;">
          <table id="table_all_chars" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
          <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_select_row')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_account_name')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_char_name') }}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_number_coins')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_server_name')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_server_lvl')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_online')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_last_data')}}</th>
            </tr>
          </thead>
          <tbody>
         @if(isset($array_adminchars))
         @foreach($array_adminchars as $model)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            
                </th>
                <td class="px-6 py-4">
                  <input  id="select_chars" onclick='clickBlockCheckbox(this , {{ $model->id }});' type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </td>
                <td class="px-6 py-4">
          
                </td>
                <td class="px-6 py-4">
          
                </td>
                <td class="px-6 py-4">
              
                </td>
                <td class="px-6 py-4">
                
                </td>
                <td class="px-6 py-4">
                  
                </td>
                <td class="px-6 py-4">
                  
                </td>
                <td class="px-6 py-4">
                
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
        <div style="margin-top:10%;"class="flex justify-end">
            <!-- This button is used to close the dialog -->
            <button id="close" style="margin-right: 2%;" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
            {{ __('messages.lk_new_accounts_button_exit')}}
            </button>
        </div>
      </div>
  
</div>





<div id="overlay_accounts" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- Диалоговое окно для аккаунтов -->
<div id="dialog_accounts"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-196 bg-white rounded-md px-8 py-6 space-y-15 drop-shadow-lg">
        <h1 class="text-2xl font-semibold">{{ __('messages.lk_admin_panel_title_accounts') }}</h1>
        <div style="margin-top:1%; margin-bottom:1%; width:80%;"class="grid mb-6">
          <div style="display:none;" id="warning_user_all_accounts"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span id="text_warning_user_all_accounts"  class="block sm:inline"></span>
          </div>
          <div id="success_user_all_accounts"  style="display:none;" class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
            <span id="success_text_user_all_accounts"  class="block sm:inline"></span>
          </div>

              <div style="display:none;margin-top:3%" id="loading_user_all_accounts">
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
          <table id="table_user_all_accounts" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
          <tr>
          <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_account_select_row')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_account_name')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboardchars_name_server')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_account_data_auth')}}</th>
            </tr>
          </thead>
          <tbody>
        @if(isset($array_adminchars))
         @foreach($array_adminchars as $model)
         <tr>
            <td class="px-6 py-4 bg-gray-50"></td>
            <td class="px-6 py-4 bg-gray-50"></td>
            <td class="px-6 py-4 bg-gray-50"></td>
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
        <div style="margin-top:10%;"class="flex justify-end">
            <!-- This button is used to close the dialog -->
            <button id="closeAccounts" style="margin-right: 2%;" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
              exit
            </button>
            <button id="saveAccounts"  class="px-5 py-2 bg-red-500 hover:bg-red-700 text-white cursor-pointer rounded-md">
              save
            </button>
        </div>
      </div>
  
</div>







    <table id="table_all_accounts" style="width:100%;" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead>
          <tr>
            <th scope="col" class="px-6 py-4">#</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_username')}}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_email') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_data_reg')}}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_accounts')}}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_chars')}}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_blocked')}}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_last_ip')}}</th>
          </tr>
      </thead>
      <tbody>
        @if(isset($array_admindashboard))
         @foreach($array_admindashboard as $model)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $model->id }}
                </th>
                <td class="px-6 py-4">
                {{ $model->username }}
                </td>
                <td class="px-6 py-4">
                {{ $model->email }}
                </td>
                <td class="px-6 py-4">
                {{ $model->datereg }}
                </td>
                <td class="px-6 py-4">
                <a href="#" onclick='return clickOpenDialogAccouts( {{ $model->id }})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $model->count_accounts }}</a>
                </td>
                <td class="px-6 py-4">
                  <a href="#" onclick='return clickOpenDialog( {{ $model->id }})' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $model->count_chars }}</a>
                </td>
                <td class="px-6 py-4">
                  <input {{ $model->is_blocked ? 'checked' : '' }} id="block_checkbox" onclick='clickBlockCheckbox(this , {{ $model->id }});' type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                </td>
                <td class="px-6 py-4">
                  {{$model->last_ip }}
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
    <div style="margin-top:3%;" >
    <div class="flex flex-col ">
  <!-- Help text -->
  <span class="text-sm text-gray-700 dark:text-gray-400">
  {{ __('pagination.Showing')}} <span id="cnumber" class="font-semibold text-gray-900 dark:text-white">{{ __('pagination.to')}} {{ $data_result->from }}</span>{{ __('pagination.of')}} <span id="tonumber" class="font-semibold text-gray-900 dark:text-white">{{ $data_result->to }}</span> {{ __('pagination.on')}}  <span class="font-semibold text-gray-900 dark:text-white">{{ $data_result->total }}</span> {{ __('pagination.Entries')}}
  </span>
  <div class="inline-flex mt-2 xs:mt-0">
    <!-- Buttons -->
    <button id="lastButton" onClick="clickLastNext('{{$data_result->last_page_url}}')" class="inline-flex  px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
        {{ __('pagination.previous')}} 
    </button>
    <button id="nextButton" onClick="clickButtonNext('{{$data_result->next_page_url}}')" class="inline-flex  px-4 py-2 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    {{ __('pagination.next')}} 
        <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
</div>


    
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

    <script src="{{asset('/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{asset('/js/adminDashboard.js') }}"></script>
    <script src="{{asset('/js/alertsMessages.js') }}"></script>

      <script>
       
        var openButton = document.getElementById('open');
        var dialog = document.getElementById('dialog');
        var closeButton = document.getElementById('close');
        var overlay = document.getElementById('overlay');


        var dialog_accounts = document.getElementById('dialog_accounts');
        var overlay_accounts = document.getElementById('overlay_accounts');
        var closeButtonAccouts = document.getElementById('closeAccounts')

        function clickOpenDialog(accountExpansionId){
             dialog.classList.remove('hidden');
             overlay.classList.remove('hidden');
             getAllCharsUser(accountExpansionId);
             return false;
        }

        function clickOpenDialogAccouts(accountExpansionId){
             dialog_accounts.classList.remove('hidden');
             overlay_accounts.classList.remove('hidden');
             getAllAccountsUser(accountExpansionId);
             return false;
        }

        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });

        closeButtonAccouts.addEventListener('click', function () {
            dialog_accounts.classList.add('hidden');
            overlay_accounts.classList.add('hidden');
        });


        




        function clickButtonNext(nextPage){
          if(nextPage != "null" || nextPage){
           // console.log(" clickButtonNext>>> " +nextPage);
            createNextPage(nextPage)
          }
         
        }

        function clickLastNext(lastPage){
          if(lastPage != "null" || lastPage){
           // console.log(" clickLastNext>>> " + lastPage);
            createNextPage(lastPage);
          }
        }

        function clickBlockCheckbox(checkbox , id){
           
            if(checkbox.checked){
              blockOrunblock("/adminDashboard/block?accountId="+id);
            }
            else{
              blockOrunblock("/adminDashboard/unblock?accountId="+id);
            }
        }

        function clickBlockAccountCheckbox(checkbox , l2account_name , account_expansion_id , server_name){
           //console.log(l2account_name);
          // console.log(account_expansion_id);

           if(checkbox.checked){
               blockOrunblockSinglAccountL2("/adminDashboard/blockusersingl_account?accountId="+account_expansion_id+"&accountname="+l2account_name+"&servername="+server_name);
            // blockOrunblock("/adminDashboard/block?accountId="+id);
           }
           else{
               blockOrunblockSinglAccountL2("/adminDashboard/blockusersingl_account?accountId="+account_expansion_id+"&accountname="+l2account_name+"&servername="+server_name);
            // blockOrunblock("/adminDashboard/unblock?accountId="+id);
           }
       }
    </script>

@endsection
