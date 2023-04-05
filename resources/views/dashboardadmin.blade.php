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
   
      <p class="mt-3 text-lg leading-8 text-gray-600">{{ __('messages.lk_admin_panel_donate_descript') }}</p>
    </div>
    <div class="mx-auto mt-10">

    <table id="table_accounts" style="width:100%;" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <tbody>
        <tr>
            <th scope="col" class="px-6 py-4">#</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboard_account') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboard_last_data') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboard_count_chars') }}</th>
            <th scope="col" class="px-6 py-4">{{ __('messages.lk_table_dashboard_name_server') }}</th>
        </tr>
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
       
    </script>

@endsection
