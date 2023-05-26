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
   
      <p class="mt-3 text-lg leading-8 text-gray-600">{{ __('messages.lk_admin_panel_payments_descript') }}</p>
    </div>
    <div id="chartdiv"></div>
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
        
  <div style="width:30%">
    <div style="width:50%; margin-bottom:3%;">
        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('messages.lk_admin_panel_payments_date') }}</label>
        <input type="text" name="daterange" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="01/01/2023">
    </div>
    <div id="exampleWrapper" class="dark:bg-gray-800">
        <form>
         <div class="flex">
            <label for="location-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
            <button id="dropdown-button-2" data-dropdown-toggle="dropdown-search-city" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
                {{ __('messages.lk_admin_panel_payments_filter') }} <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <div id="dropdown-search-city" class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 hidden" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(73px, 72px);">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button-2">
            @if(isset($filter_items))
             @foreach($filter_items as $item)
                 <li>
                    <button  type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                        <div class="inline-flex items-center">
                            <div class="flex items-center mb-4">
                                <input onClick="clickSelectFilter(this , {{ $loop->index }})" id="select{{ $loop->index }}" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                 <label for="{{ $loop->index }}" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ __($item) }}</label>
                            </div>
                        </div>
                    </button>
                </li>
            @endforeach
            </ul>
            @else
             <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button-2">
                  Нет данных 
             </ul>
            @endif
          </div>
          
         <div class="relative w-full">
            <input type="search" id="location-search" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="{{ __('messages.lk_admin_panel_payments_search') }}" required="">
            <button type="submit" onClick="initFilter(this)" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
          </div>

          </div>
        </form>
    </div>
</div>

    <div style="margin-top:3%;">
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
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_online')}}</th>
              <th scope="col" class="px-6 py-4">{{ __('messages.lk_admin_panel_windows_chars_last_data')}}</th>
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
        <div style="margin-top:3%;"class="mt-5">
        <nav>
            <ul id="navigable_pages" class="inline-flex items-center -space-x-px">
            @if(isset($data_result->links))
                @foreach($data_result->links as $pages)
                    @if($pages->active)
                    <li>
                        <a href="#" onClick="getPaginationPage(this , '{{ $pages->url }}')" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $pages->label}}</a>
                    </li>
                    @else
                    <li>
                        <a href="#" onClick="getPaginationPage(this , '{{ $pages->url }}')" aria-current="page" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $pages->label}}</a>
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

  <div>
  <button onClick="resetFilter()"style="margin-top:3%;"type="button" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('messages.lk_admin_panel_payments_reset_filter')}}</button>
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

    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script>
    $(function() {
        $('input[name="daterange"]').daterangepicker({
        opens: 'left'
    }, function(start, end, label) {
    
        const elem = document.getElementById("location-search");
        elem.value = start.format('YYYY-MM-DD') + ' | ' + end.format('YYYY-MM-DD');
    //console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});

am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: true,
  panY: true,
  wheelX: "panX",
  wheelY: "zoomX",
  pinchZoomX: true
}));

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
cursor.lineY.set("visible", false);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
xRenderer.labels.template.setAll({
  rotation: -90,
  centerY: am5.p50,
  centerX: am5.p100,
  paddingRight: 15
});

xRenderer.grid.template.setAll({
  location: 1
})

var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  maxDeviation: 0.3,
  categoryField: "country",
  renderer: xRenderer,
  tooltip: am5.Tooltip.new(root, {})
}));

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 0.3,
  renderer: am5xy.AxisRendererY.new(root, {
    strokeOpacity: 0.1
  })
}));


// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  name: "Series 1",
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "value",
  sequencedInterpolation: true,
  categoryXField: "country",
  tooltip: am5.Tooltip.new(root, {
    labelText: "{valueY}"
  })
}));

series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
series.columns.template.adapters.add("fill", function(fill, target) {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add("stroke", function(stroke, target) {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

    
// Set data
var data = [{
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_01')}}",
  value: 2025
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_02')}}",
  value: 1882
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_03')}}",
  value: 1809
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_04')}}",
  value: 1322
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_05')}}",
  value: 1122
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_06')}}",
  value: 1114
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_07')}}",
  value: 984
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_08')}}",
  value: 711
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_09')}}",
  value: 665
},
{
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_10')}}",
  value: 665
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_11')}}",
  value: 443
}, {
  country: "{{ __('messages.lk_admin_panel_payments_date_mount_12')}}",
  value: 441
}];

xAxis.data.setAll(data);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); 


function getPaginationPage(e , nextlink){
    event.preventDefault();
    initSend(nextlink);
}
var statArrayFilter;
function clickSelectFilter(e , filterId){
    
    if(e.checked){
        statArrayFilter = filterId;
    }
   

    unCheckedSelect(filterId);
}

function unCheckedSelect(current_select_id){
  var allIdSelect = <?php echo json_encode($filter_items); ?>;

  allIdSelect.forEach(function(elem , index) {
        if(current_select_id != index){
          // document.getElementById("location-search").value;
           document.getElementById("select"+index).checked = false;
        }
    });

}



function initFilter(e){
    event.preventDefault();
    const search_text = document.getElementById("location-search").value;


    if (statArrayFilter != undefined && statArrayFilter.length != 0){
        var strget = generateParametr(statArrayFilter);
        var strget = strget + "&text="+search_text;
        //console.log(strget);
        initFilterJson(strget);
    }
}

function resetFilter(){
  unCheckedSelect(-1);
  initSend("/adminPayments/orders?page=1");
}


function generateParametr(statArrayFilter){
   return "arrayfil[]="+statArrayFilter;
}

</script>

@endsection
