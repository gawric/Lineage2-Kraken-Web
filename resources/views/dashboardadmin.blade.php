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
    <div class="mx-auto mt-10">




    <div id="overlay" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- Диалоговое окно для смены пароля -->
      <div id="dialog"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-196 bg-white rounded-md px-8 py-6 space-y-15 drop-shadow-lg">
        <h1 class="text-2xl font-semibold">{{ __('messages.lk_admin_panel_title_chars') }}</h1>
        <div style="margin-top:3%;">
          <table id="" style="width:100%;" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <tbody>
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_account_name')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_char_name') }}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_number_coins')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_accounts')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_chars')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_blocked')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_last_ip')}}</th>
            </tr>
            <tr>
              <td>  
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                 <td class="px-6 py-4">1</td>
                 <td class="px-6 py-4">account_test</td>
                 <td class="px-6 py-4">test_char_name</td>
                 <td class="px-6 py-4">16</td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                </tr>
            </tr>
        </tbody>
        </table>
        </div>
        <div style="margin-top:10%;"class="flex justify-end">
            <!-- This button is used to close the dialog -->
            <button id="close" style="margin-right: 2%;" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
              exit
            </button>
            <button id="save"  class="px-5 py-2 bg-red-500 hover:bg-red-700 text-white cursor-pointer rounded-md">
              save
            </button>

        </div>
      </div>
</div>







    <table id="table_accounts" style="width:100%;" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tbody>
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
                 {{ $model->count_accounts }}
                </td>
                <td class="px-6 py-4">
                  <a href="#" onclick="return clickOpenDialog()" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $model->count_chars }}</a>
                </td>
                <td class="px-6 py-4">
                  <input {{ $model->is_blocked ? 'checked' : '' }} id="default-checkbox"  type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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


        function clickOpenDialog(){
             dialog.classList.remove('hidden');
             overlay.classList.remove('hidden');
             return false;
        }

        closeButton.addEventListener('click', function () {
            dialog.classList.add('hidden');
            overlay.classList.add('hidden');
        });


    </script>

@endsection
