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
        <div style="margin-top:3%;width: 50%;"class="grid mb-6 md:grid-cols-3">
          <div>
             <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_windows_chars_select_item')}}</label>
              <select id="small" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected> {{ __('messages.lk_admin_panel_windows_chars_select_choose_item_title')}}</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
              </select>
          </div>
          <div style="margin-left:5%;width: 50%;">
              <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_windows_chars_select_count')}}</label>
              <input type="text" id="last_name" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="10" required>
          </div>
          <div style="float:left;margin-top:1px;" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            <label for="last_name_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_windows_chars_select_add')}}</label>
            <button type="button" class="p-2 mb-6 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5  mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">{{ __('messages.lk_admin_panel_windows_chars_select_add')}}</button>
          </div>
        </div>
        <div style="margin-top:3%;">
          <table id="" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <tbody>
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
            <tr>
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                  <td class="px-6 py-4 bg-gray-50">1</td>
                  <td class="px-6 py-4 bg-gray-50"> <input checked id="default-checkbox"  type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"></td>
                  <td class="px-6 py-4 bg-gray-50">account_gawric</td>
                  <td class="px-6 py-4 bg-gray-50">gawric_char_name</td>
                  <td class="px-6 py-4 bg-gray-50">999</td>
                  <td class="px-6 py-4 bg-gray-50">X300 Paradise</td>
                  <td class="px-6 py-4 bg-gray-50">54</td>
                  <td class="px-6 py-4 bg-gray-50">offline</td>
                  <td class="px-6 py-4 bg-gray-50">2023-04-12 12:32:53</td>
                </tr>
            </tr>
            <tr>
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">  
                  <td class="px-6 py-4 ">1</td>
                  <td class="px-6 py-4 "> <input  id="default-checkbox"  type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"></td>
                  <td class="px-6 py-4 ">account_test</td>
                  <td class="px-6 py-4 ">test_char_name</td>
                  <td class="px-6 py-4 ">16</td>
                  <td class="px-6 py-4 ">X50 Nightmare</td>
                  <td class="px-6 py-4">16</td>
                  <td class="px-6 py-4">online</td>
                  <td class="px-6 py-4">2023-04-27 06:00:53</td>
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
    <div style="margin-top:3%;" >
   
    <div class="flex flex-col ">
  <!-- Help text -->
  <span class="text-sm text-gray-700 dark:text-gray-400">
  {{ __('pagination.Showing')}} <span class="font-semibold text-gray-900 dark:text-white">{{ __('pagination.to')}} {{ $data_result->from }}</span>{{ __('pagination.of')}} <span class="font-semibold text-gray-900 dark:text-white">{{ $data_result->to }}</span> {{ __('pagination.on')}}  <span class="font-semibold text-gray-900 dark:text-white">{{ $data_result->total }}</span> {{ __('pagination.Entries')}}
  </span>
  <div class="inline-flex mt-2 xs:mt-0">
    <!-- Buttons -->
    <button class="inline-flex  px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
        Prev
    </button>
    <button class="inline-flex  px-4 py-2 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Next
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
