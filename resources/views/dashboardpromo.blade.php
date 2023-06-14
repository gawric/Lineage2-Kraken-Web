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
            <select id="select_items" onchange="GetSelectedServer(this)" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>{{ __('messages.lk_admin_panel_promo_select_default')}}</option>

                @if(isset($accessItems))
                    @foreach($accessItems as $arr)
                        <option value="{{ $arr[1] }}">{{ $arr[0] }}</option>
                    @endforeach
                    @else
                    @endif
            </select>
        </div>



        <div style="margin-bottom:2%;">
                <button onClick="CreatePromo(this)" type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('messages.lk_admin_panel_promo_text_button') }}</button>
        </div>
        <div style="margin-bottom:5%;">
              <div class="flex items-center mb-4">
                <input id="check_box_only_used_id" onclick="ckeckBoxClick(this)" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="check_box_only_used_id"  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __('messages.lk_admin_panel_promo_checkbox_used')}}</label>
              </div>
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
<table id="table_all_promo" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
           <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_id')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_quantity')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_item_name')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_create_name') }}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_data') }}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_promo_table_activate') }}</th>
           </tr>
          </thead>
          <tbody>
          <!--var id = item.id;
          var code = item.code;
          var count = item.count;
          var item_id = item.item_id;
          var create_name = item.create_name;
          var created_at =  new Date(item.created_at);-->
           @if(isset($data_result))
            @foreach($data_result->data as $model)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $model->id }}
                </th>
                <td class="px-6 py-4">
                {{ $model->code }}
                </td>
                <td class="px-6 py-4">
                {{ $model->count }}
                </td>
                <td class="px-6 py-4">
                {{ $model->item_id }}
                </td>
                <td class="px-6 py-4">
                {{ $model->create_name }}
                </td>
                <td class="px-6 py-4">
                {{ \Carbon\Carbon::parse($model->created_at)->format('Y-d-m H:m:s')}}
                </td>
                <td class="px-6 py-4">
                @if($model->is_used)
                  {{ __('messages.lk_admin_panel_promo_table_used') }}
                @else
                  {{ __('messages.lk_admin_panel_promo_table_no_used') }}
                @endif
                </td>
            </tr>
           @endforeach
         @else

        @endif

        </tbody>
        </table>

        <div style="margin-top:3%;"class="mt-5">
        <nav>
          <ul id="navigable_pages_promo" class="inline-flex items-center -space-x-px">
          @if(isset($data_result->links))
            @foreach($data_result->links as $pages)
              @if($pages->active)
                <li>
                  <a href="#" onClick="getPaginationPromoFilter(this , '{{ $pages->url }}')" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $pages->label}}</a>
                </li>
              @else
                <li>
                  <a href="#" onClick="getPaginationPromoFilter(this , '{{ $pages->url }}')" aria-current="page" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $pages->label}}</a>
                </li>
              @endif
 
            @endforeach
            @else

          @endif
          </ul>
        </nav>
     </div>


     <div id="overlay_admin_promo" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- Диалоговое окно просмотр кто использовал промо -->
<div id="dialog_admin_promo"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-196 bg-white rounded-md px-8 py-6 space-y-15 drop-shadow-lg">
        <h1 class="text-2xl font-semibold">{{ __('messages.lk_table_dashboardchars_promo_dialog_title') }}</h1>
        <div style="margin-top:2%; margin-bottom:1%; width:80%;"class="grid mb-6">
          <div style="display:none;" id="warning_admin_promo"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span id="text_warning_admin_promo"  class="block sm:inline"></span>
          </div>
          <div id="success_admin_promo"  style="display:none;" class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
            <span id="success_text_admin_promo"  class="block sm:inline"></span>
          </div>

              <div style="display:none;margin-top:3%" id="loading_admin_promo">
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
            <label for="account_name_dialog" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_table_dashboardchars_name_char') }}</label>
            <input type="text" id="account_name_dialog" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
          </div>

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


        var overlay_admin_promo = document.getElementById('dialog_admin_promo');
        var dialog_admin_promo = document.getElementById('overlay_admin_promo');

        closeUserPromo.addEventListener('click', function () {
          overlay_admin_promo.classList.add('hidden');
          dialog_admin_promo.classList.add('hidden');
        });



  function openDialogAdminPromo(promo_code){
        overlay_admin_promo.classList.remove('hidden');
        dialog_admin_promo.classList.remove('hidden');
        initGetInfoPromo(promo_code);
  }

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

  function getPaginationPromoFilter(event , nextlink){
        //console.log(event);
        //event.preventDefault();
        initSendPromoPagination(nextlink);
  }

  function ckeckBoxClick(event){
 
    if (event.checked == true){
      initSendOnlyUsedPromo("/adminPromo/promo_used?page=1");
    } else {
      initSendPromoPagination("/adminPromo/promo_filter?page=1");
   }
  }

</script>

@endsection
