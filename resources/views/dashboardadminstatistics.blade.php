@extends('layouts.admintemplate.admin')


@section('content')
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
<div class="bg-white">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ __('messages.lk_admin_panel_admin') }}</h2>
   
      <p class="mt-3 text-lg leading-8 text-gray-600">{{ __('messages.lk_admin_panel_statistics_descript') }}</p>
    </div>
    <div>
      <canvas id="myChart"></canvas>
    </div>
    <div style="display:none;margin-top:3%" id="loading_all_visit">
      <div role="status">
        <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
           <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <div style="width:30%;margin-top:3%">
        
        <div style="display:none;" id="warning_all_visit"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <span id="text_warning_all_visit"  class="block sm:inline"></span>
        </div>

        <div  style="display:none;"  id="success_all_visit"   class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
          <span id="text_success_all_visit"  class="block sm:inline"></span>
        </div>

    </div>

<div class="mx-auto mt-10">
        <div >
          <h4 class="mb-2 mt-0 text-2xl font-medium leading-tight text-primary">
            {{ __('messages.lk_admin_panel_statistics_point_guest') }}
          </h4>
        </div>
  <div >
    <div>
    <table id="table_all_visit" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
          <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_statistics_table_ip_address')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_statistics_table_count_rows')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_statistics_table_data')}}</th>
            </tr>
          </thead>
          <tbody>
           @if(isset($data_result))
            @foreach($data_result->data as $model)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $model->id }}
                </th>
                <td class="px-6 py-4">
                {{ $model->ip_address }}
                </td>
                <td class="px-6 py-4">
                <a href="#" onclick='return openDialog( " {{ $model->ip_address }} ", "{{ $model->day }}")' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $model->count }}</a>
                </td>
                <td class="px-6 py-4">
                {{ $model->day }}
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
        <div style="margin-top:3%;"class="mt-5">
        <nav>
            <ul id="navigable_pages" class="inline-flex items-center -space-x-px">
            @if(isset($data_result->links))
                @foreach($data_result->links as $pages)
                    @if($pages->active)
                    <li>
                        <a href="#" onClick="getPaginationPageFilter(this , '{{ $pages->url }}')" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $pages->label}}</a>
                    </li>
                    @else
                    <li>
                        <a href="#" onClick="getPaginationPageFilter(this , '{{ $pages->url }}')" aria-current="page" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $pages->label}}</a>
                    </li>
                    @endif
               
                @endforeach
                @else
   
            @endif
            </ul>
        </nav>
        </div>
    </div>


    <!-- Таблица с отоброжением зареганых пользователей и их действий -->


    







    <div id="overlay_visit" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- Диалоговое окно статистики визитов -->
<div id="dialog_visit"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-196 bg-white rounded-md px-8 py-6 space-y-15 drop-shadow-lg">
        <h1 class="text-2xl font-semibold">{{ __('messages.lk_admin_panel_visit_statistics_title') }}</h1>
        <div style="margin-top:1%; margin-bottom:1%; width:80%;"class="grid mb-6">
          <div style="display:none;" id="warning_visit"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span id="text_warning_visit"  class="block sm:inline"></span>
          </div>
          <div id="success_visit"  style="display:none;" class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
            <span id="success_text_visit"  class="block sm:inline"></span>
          </div>

              <div style="display:none;margin-top:3%" id="loading_visit">
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
          <table id="table_visit" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
          <tr>
          <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_ip_address')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_open_url')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_count')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_date')}}</th>
            </tr>
          </thead>
          <tbody>
        @if(isset($array_adminchars))
         @foreach($array_adminchars as $model)
         <tr>
            <td class="px-6 py-4 bg-gray-50"></td>
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
            <button id="closeVisit" style="margin-right: 2%;" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
              exit
            </button>
        </div>
      </div>
  
</div>



<div id="overlay_user" class="fixed hidden z-40 w-screen h-screen inset-0 bg-gray-900 bg-opacity-60"></div>

<!-- Диалоговое окно посещения юзеров -->
<div id="dialog_user"
        class="hidden fixed z-50 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-md px-8 py-6 space-y-15 drop-shadow-lg overflow-x-hidden overflow-y-auto max-h-full" >
        <h1 class="text-2xl font-semibold">{{ __('messages.lk_admin_panel_user_statistics_title') }}</h1>
        <div style="margin-top:1%; margin-bottom:1%; width:80%;"class="grid mb-6">
          <div style="display:none;" id="warning_user"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span id="text_warning_user"  class="block sm:inline"></span>
          </div>
          <div id="success_user"  style="display:none;" class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
            <span id="success_text_user"  class="block sm:inline"></span>
          </div>

              <div style="display:none;margin-top:3%" id="loading_user">
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
          <table id="table_user_dialog" style="width:100%;" class="table-autow-full overflow-auto text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
          <tr>
          <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_ip_address')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_open_url')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_status')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_count')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_visit_statistics_date')}}</th>
            </tr>
          </thead>
          <tbody>
        @if(isset($array_adminchars))
         @foreach($array_adminchars as $model)
         <tr>
            <td class="px-6 py-4 bg-gray-50"></td>
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
            <button id="closeUser" style="margin-right: 2%;" class="px-5 py-2 bg-indigo-500 hover:bg-indigo-700 text-white cursor-pointer rounded-md">
              exit
            </button>
        </div>
      </div>
  
</div>






<div style="margin-top:3%;">

        <div >
          <h4 class="mb-2 mt-0 text-2xl font-medium leading-tight text-primary">
            {{ __('messages.lk_admin_panel_statistics_point_users') }}
          </h4>
        </div>


    <div >
      <div>
        <table id="table_all_user" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_statistics_table_ip_address')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_statistics_table_login')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_statistics_table_count_rows')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_statistics_table_data')}}</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($data_result_user))
              @foreach($data_result_user->data as $model)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $model->id }}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $model->ip_address }}
                  </th>
                  <td class="px-6 py-4">
                    {{ $model->login }}
                  </td>
                  <td class="px-6 py-4">
                    <a href="#" onclick='return openDialogUser( " {{ $model->accounts_expansion_id }} " , " {{ $model->ip_address }} ", "{{ $model->day }}")' class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $model->count }}</a>
                  </td>
                  <td class="px-6 py-4">
                  {{ $model->day }}
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
    <div style="margin-top:3%;"class="mt-5">
        <nav>
          <ul id="navigable_pages_users" class="inline-flex items-center -space-x-px">
          @if(isset($data_result_user->links))
            @foreach($data_result_user->links as $pages)
              @if($pages->active)
                <li>
                  <a href="#" onClick="getPaginationUserPageFilter(this , '{{ $pages->url }}')" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $pages->label}}</a>
                </li>
              @else
                <li>
                  <a href="#" onClick="getPaginationUserPageFilter(this , '{{ $pages->url }}')" aria-current="page" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $pages->label}}</a>
                </li>
              @endif
 
            @endforeach
            @else

          @endif
          </ul>
        </nav>
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
    <script src="{{asset('/js/adminstatistics.js') }}"></script>
    <script src="https://flowbite.com/docs/flowbite.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
   const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [ 
            @if(isset($arrayDays))
              @foreach($arrayDays as $item)
                  "{{ $item }}",
              @endforeach
            @else

            @endif
            ],
    datasets: [
      {
      label: '{{ __('messages.lk_admin_panel_statistics_point_guest') }}',
      data: [ 
             @if(isset($resultMouth))
               @foreach($resultMouth as $item)
                 {{ $item->count }},
               @endforeach
             @else
             @endif
            ],
      borderWidth: 1
    },

    {
      label: '{{ __('messages.lk_admin_panel_statistics_point_users') }}',
      data: [ 
             @if(isset($resultUserMouth))
               @foreach($resultUserMouth as $item)
                 {{ $item->count }},
               @endforeach
             @else
             @endif
            ],
      borderWidth: 1
    }
  
  ]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

        var dialog_visit = document.getElementById('dialog_visit');
        var overlay_visit = document.getElementById('overlay_visit');


        var dialog_user = document.getElementById('dialog_user');
        var overlay_user = document.getElementById('overlay_user');
        var closeButtonVisit = document.getElementById('closeVisit')
        var closeButtonUser = document.getElementById('closeUser')


function openDialog(ip_address , day){
             dialog_visit.classList.remove('hidden');
             overlay_visit.classList.remove('hidden');

             initSend(ip_address.trim() , day.trim());
       return false;
}


function openDialogUser(accounts_expansion_id , ip_address , day){
            dialog_user.classList.remove('hidden');
            overlay_user.classList.remove('hidden');

            initSendUser(accounts_expansion_id , ip_address.trim() , day.trim());
       return false;
}

        closeButtonVisit.addEventListener('click', function () {
            dialog_visit.classList.add('hidden');
            overlay_visit.classList.add('hidden');
        });

        closeButtonUser.addEventListener('click', function () {
            dialog_user.classList.add('hidden');
            overlay_user.classList.add('hidden');
        });


function getPaginationPageFilter(e , nextlink){
    event.preventDefault();
    initSendPage(nextlink);
}

function getPaginationUserPageFilter(e , nextlink){
    event.preventDefault();
    initSendPageUser(nextlink);
}

</script>

@endsection
