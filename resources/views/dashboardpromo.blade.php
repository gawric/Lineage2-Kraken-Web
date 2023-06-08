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
   
      <p class="mt-3 text-lg leading-8 text-gray-600">{{ __('messages.lk_admin_panel_promo_descript') }}</p>
    </div>



<div class="mx-auto mt-10">

</div>
<div>
</div>


    <!-- Таблица с отоброжением зареганых пользователей и их действий -->


    







    






<div style="margin-top:3%;">

        <div style="width:15%;margin-bottom:1%;">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_promo_field')}}</label>
            <input type="text" id="field_number_item" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div style="width:15%;margin-bottom:2%;">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_promo_field_quantity')}}</label>
            <input type="text" id="field_number_promo" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div style="width:15%;margin-bottom:5%;">
            <select id="small" onchange="GetSelectedServer(this)" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>{{ __('messages.lk_admin_panel_promo_select_default')}}</option>

                @if(isset($accessItems))
                    @foreach($accessItems as $arr)
                        <option value="{{ $arr[1] }}">{{ $arr[0] }}</option>
                    @endforeach
                    @else
                    @endif
            </select>
        </div>



        <div style="margin-bottom:5%;">
                <button onClick="CreatePromo(this)" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('messages.lk_admin_panel_promo_text_button') }}</button>
        </div>

<div>
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
<div style="width:30%;margin-top:3%;margin-bottom:3%;">
        
        <div style="display:none;" id="warning_promo"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <span id="text_warning_promo"  class="block sm:inline"></span>
        </div>

        <div  style="display:none;"  id="success_promo"   class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
          <span id="text_success_promo"  class="block sm:inline"></span>
        </div>

    </div>
<table id="table_all_payments" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
           <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_id')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_quantity')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_data') }}</th>
           </tr>
          </thead>
          <tbody>
           @if(isset($data_result))
            @foreach($data_result->data as $model)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $model->order_id }}
                </th>
                <td class="px-6 py-4">
                {{ $model->username }}
                </td>
                <td class="px-6 py-4">
                {{ $model->l2account_name }}
                </td>
                <td class="px-6 py-4">
                {{ $model->char_name }}
                </td>
                <td class="px-6 py-4">
                {{ $model->col }}
                </td>
                <td class="px-6 py-4">
                {{ $model->server_name }}
                </td>
                <td class="px-6 py-4">
                {{ $model->payment_name }}
                </td>
                <td class="px-6 py-4">
                {{ $model->payment_data }}
                </td>
                <td class="px-6 py-4">
                {{ $model->success_status }}
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

  
</div>


</div>


</div>

</div>


</div>


</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>

    <script src="{{asset('/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{asset('/js/alertsMessages.js') }}"></script>
    <script src="{{asset('/js/adminpromo.js') }}"></script>
    <script src="https://flowbite.com/docs/flowbite.min.js"></script>



<script>

var select_server_id;

  function GetSelectedServer(education) {
        var sleTex = education.options[education.selectedIndex].innerHTML;
        var selVal = education.value;
        select_server_id= selVal;
      }
  
  function CreatePromo(e){
    event.preventDefault();

    const itemsnumber = document.getElementById("field_number_item").value;
    const itemspromonumber = document.getElementById("field_number_promo").value;


    if (Number.isInteger(parseInt(select_server_id)) && Number.isInteger(parseInt(itemspromonumber)) && Number.isInteger(parseInt(itemspromonumber))){
        initSend(itemsnumber , itemspromonumber , select_server_id);
    }
}

</script>

@endsection
