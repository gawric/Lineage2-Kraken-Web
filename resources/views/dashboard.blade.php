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


    <!-- Overlay element -->
    <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

    <!-- Диалоговое окно для смены пароля -->
      <div id="dialog"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
        <h1 class="text-2xl font-semibold">{{ __('messages.lk_change_password_accounts_title') }}</h1>
        <div id="info_change_pass" style="display:none;" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <span id="info_text_change_pass"  class="block sm:inline"></span>
        </div>
        <div id="info_change_pass_succes"  style="display:none;" class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
          <span id="info_text_change_pass_success"  class="block sm:inline"></span>
        </div>
        <div class="py-5 border-t border-b border-gray-300">
            <p>{{ __('messages.lk_change_password_accounts_descripte') }}</p>
        </div>
        <div>
          <label for="server_id_change_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_change_password_accounts_server_id') }}</label>
              <input type="text" id="server_id_change_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled required>
        </div>
        <div>
          <label for="login_change_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_change_password_accounts_login') }}</label>
              <input type="text" id="login_change_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled required>
        </div>
        <div>
          <label for="password_old" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_change_password_accounts_oldPassword_title') }}</label>
          <input type="password" id="password_old" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
        </div>
        <div>
          <label for="password_new" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_change_password_accounts_newPassword_title') }}</label>
          <input type="password" id="password_new" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
        </div>
        <div>
          <label for="password_new_repeat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_change_password_accounts_newPassword_confirm_title') }}</label>
          <input type="password" id="password_new_repeat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
        </div>
        <div class="flex justify-end">
            <!-- This button is used to close the dialog -->
            <button id="close" style="margin-right: 2%;" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
              {{ __('messages.lk_change_password_accounts_button_exit') }}
            </button>
            <button id="save_change_password" onclick="onChangePassSave()" class="px-5 py-2 bg-red-500 hover:bg-red-700 text-white cursor-pointer rounded-md">
              {{ __('messages.lk_change_password_accounts_button') }}
            </button>
            <button id="loading_change_password" style="display: none;" disabled type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
              <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                  <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
              </svg>
                  Loading...
            </button>
        </div>
      </div>


       <!-- Overlay element -->
<div id="overlay_new_account" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- Диалоговое окно для создания нового аккаунта на l2серверах -->
<div id="dialog_new_account"
    class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 bg-white rounded-md px-8 py-6 space-y-5 drop-shadow-lg">
    <h1 class="text-2xl font-semibold">{{ __('messages.lk_new_accounts_title') }}</h1>

     <div>
      <div id="info_new_account" style="display:none;" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span id="info_text_new_account"  class="block sm:inline"></span>
      </div>
      <div id="info_new_account_succes"  style="display:none;" class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
          <span id="info_text_account_success"  class="block sm:inline"></span>
        </div>
     </div>
    <div class="py-5 border-t border-b border-gray-300">
        <p>{{ __('messages.lk_new_accounts_descripte') }}</p>
    </div>
    <div>
        <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_new_accounts_list_server') }}</label>
        <select id="small" onchange="GetSelectedServer(this)" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>{{ __('messages.lk_new_accounts_select_server') }}</option>
                @foreach ($arrayOnlyNameAndId as $arr)
                  <option value={{$arr[0]}}>{{$arr[1]}}</option>
                @endforeach
        </select>
    </div>
    <div>
        <label for="login_new_account" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_new_accounts_new_login') }}</label>
        <input type="text" id="login_new_account" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John" required>
    </div>
    <div>
      <label for="password_new_account" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_new_accounts_newPassword_title') }}</label>
      <input type="password" id="password_new_account" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
    </div>
    <div>
      <label for="password_new_account_repeat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_new_accounts_newPassword_confirm_title') }}</label>
      <input type="password" id="password_new_account_repeat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
    </div>
    <div class="flex justify-end">
        <!-- This button is used to close the dialog -->
        <button id="close_new_account" style="margin-right: 2%;" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
          {{ __('messages.lk_new_accounts_button_exit') }}
        </button>
        <button id="save_new_account" onclick="onSaveL2user()" class="px-5 py-2 bg-red-500 hover:bg-red-700 text-white cursor-pointer rounded-md">
          {{ __('messages.lk_new_accounts_button') }}
        </button>
        <button id="loading_new_account" style="display: none;" disabled type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
          <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
              <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
          </svg>
              Loading...
        </button>
    </div>
</div>



<div class="bg-white">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Игровые аккаунты {{ $username }}</h2>
   
      <p class="mt-3 text-lg leading-8 text-gray-600">Количество разрешенных аккаунтов {{ $allow_count }}</p>
    </div>
    <div class="mx-auto mt-10">

    <table id="table_accounts" style="width:100%;" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tbody>
        @if(isset($arrayInfoDashboard))
         @foreach($arrayInfoDashboard as $model)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $model->id }}
                </th>
                <td class="px-6 py-4">
                {{ $model->username }}
                </td>
                <td class="px-6 py-4">
                {{ $model->dateauth }}
                </td>
                <td class="px-6 py-4">
                {{ $model->count_characters }}
                </td>
                <td class="px-6 py-4">
                {{ $model->name_server }}
                </td>
                <td>
                    <button id="open" onClick="clickOpenDialog({{ $model->server_id }} , '{{ $model->username }}')" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  text-white cursor-pointer rounded-md">{{ __('messages.lk_change_password_accounts_title') }}</button>
                </td>
            </tr>
         @endforeach
         @else
            <tr>
                <td>   <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Нет данных
                </th>
                <td class="px-6 py-4">
                  Нет данных
                </td>
                <td class="px-6 py-4">
                  Нет данных
                </td>
                <td class="px-6 py-4">

                </td>
                <td class="px-6 py-4">

                </td>
                <td>
               
                </td>
            </tr></td>
            </tr>
        @endif
        
           
        </tbody>
    </table>

    <div>
        <button id="open_new_account" style="margin-top: 3%;"class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40 mr-2 mb-2">
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

    <script src="{{asset('/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{asset('/js/dashboard.js') }}"></script>
    <script src="{{asset('/js/alertsMessages.js') }}"></script>

      <script>
        var openButton = document.getElementById('open');
        var dialog = document.getElementById('dialog');
        var closeButton = document.getElementById('close');
        var overlay = document.getElementById('overlay');

        function clickOpenDialog(server_id , login_server){
          document.getElementById('server_id_change_password').value = server_id;
          document.getElementById('login_change_password').value = login_server;
             dialog.classList.remove('hidden');
             overlay.classList.remove('hidden');
        }


        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });
        newAccountModal();

        function onChangePassSave(){
          var saveButton = document.getElementById('save');
          var loadButton = document.getElementById('loading');

          var server_id = document.getElementById('server_id_change_password').value;
          var login_select = document.getElementById('login_change_password').value;
          var old_password = document.getElementById('password_old').value;
          var password_new= document.getElementById('password_new').value;
          var password_new_repeat = document.getElementById('password_new_repeat').value;


          changePassL2User(server_id ,login_select , old_password , password_new , password_new_repeat);


        }

        

        function newAccountModal(){
          var openButton = document.getElementById('open_new_account');
          var dialog = document.getElementById('dialog_new_account');
          var closeButton = document.getElementById('close_new_account');
          var overlay = document.getElementById('overlay_new_account');

        // show the overlay and the dialog
        openButton.addEventListener('click', function () {
            dialog.classList.remove('hidden');
            overlay.classList.remove('hidden');
        });

        // hide the overlay and the dialog
        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });
      }


      var select_server_id;

      function GetSelectedServer(education) {
        var sleTex = education.options[education.selectedIndex].innerHTML;
        var selVal = education.value;
        select_server_id= selVal;
      }

      
      function onSaveL2user(){

          var login_new_account = document.getElementById('login_new_account').value;
          var password_new_account = document.getElementById('password_new_account').value;;
          var password_new_account_repeat = document.getElementById('password_new_account_repeat').value;
         // console.log({{ count($arrayInfoDashboard) }});
          regL2User(select_server_id , login_new_account , password_new_account ,  password_new_account_repeat , {{ count($arrayInfoDashboard) }} , "{{ __('messages.lk_change_password_accounts_title') }}");
      }
    </script>
</x-app-layout>
