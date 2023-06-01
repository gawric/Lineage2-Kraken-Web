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
    <div style="display:none;margin-top:3%" id="loading_all_payments">
      <div role="status">
        <svg aria-hidden="true" class="w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
           <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <div style="width:30%;margin-top:3%">
        
        <div style="display:none;" id="warning_all_payments"  class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
          <span id="text_warning_all_payments"  class="block sm:inline"></span>
        </div>

        <div  style="display:none;"  id="success_all_payments"   class="bg-green-100 border border-green-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
          <span id="text_success_all_payments"  class="block sm:inline"></span>
        </div>

    </div>

<div class="mx-auto mt-10">
        
  <div >
    <div>
    <table id="table_all_payments" style="width:100%;" class="table-autow-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead>
          <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_name_userweb')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_account_name')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_char_name') }}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_number_coins')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_server_name')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_payments_name_donation')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_last_data')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_payments_name_status')}}</th>
              
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
    <script src="{{asset('/js/adminpayments.js') }}"></script>
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
                  "{{ $loop->index+1 }}",
              @endforeach
            @else

            @endif
            ],
    datasets: [{
      label: '{{ __('messages.lk_admin_panel_statistics_point_users') }}',
      data: [ 
             @if(isset($resultMouth))
               @foreach($resultMouth as $item)
                 {{ $item->count }},
               @endforeach
             @else
             @endif
            ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

</script>

@endsection
