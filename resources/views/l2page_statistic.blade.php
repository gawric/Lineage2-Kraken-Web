@extends('layouts.l2templatefolder.l2templatepages')

@section("title" , "Статистика по серверам")
@section("page-title" , "Статистика по серверам")
@section('inside_info')
<script src="{{asset('/js/statistics.js') }}"></script>
<script src="{{asset('/js/alertsMessages.js') }}"></script>

	<h1 style="margin: auto;padding-left:0px;" class="page-title"><p style="color:black;">{{ __('messages.static') }}</p></h1>
	<div style="margin: auto;width: 100%;"class="contentHomeStatic">

	<div class="message"></div>

	<div id="show_alert" class="alert info">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  		<strong id="text_alert">{{ __('messages.info_first_page_static') }}</strong>
	</div>

  <div style="margin-bottom: 1%;margin-right: 95%;"id="loading_reg"></div>
  <div class="container">
    <div style="display:block; float: left;" class=body_ts>

    <div style="display:inline-block;">
        <div  class="select">
            <select name="sel_server" id="select_server" onchange="GetSelectedServer(this)" >
                <option selected disabled>{{ __('messages.select_server') }}</option>
                @foreach ($arrayNameServers as $arr)
                  <option value={{$arr[0]}}>{{$arr[1]}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div style="display:inline-block;">
        <div  class="select">
            <select name="sel_static" id="select_static" onchange="GetSelectedTop(this)">
                <option selected disabled>{{ __('messages.select_static') }}</option>
                @foreach ($arrayNameStatistic as $multiArr)
                    @foreach ($multiArr as $arr)
                      <option value={{$arr['id']}}>{{ $arr['name'] }}</option>
                    @endforeach
                @endforeach
            </select>
        </div>
    </div>

</div>


  <table id="customers" class="table_top">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>CLASS</th>
    <th>CLAN</th>
    <th>LVL</th>
    <th>PVP</th>
    <th>PK</th>
    <th>ONLINE</th>
  </tr>
  <tr align="center">
  <td colspan="9">{{ __('messages.no_data') }}</td>
  </tr>

 </table>

 <table id="customers_clan" class="table_top" style="display:none;">
  <tr>
    <th>ID</th>
    <th>C.NAME</th>
    <th>C.LEVEL</th>
    <th>REP.</th>
    <th>CASTLE</th>
    <th>ALLY</th>
    <th>MEMBER</th>
  </tr>
  <tr align="center">
  <td colspan="9">{{ __('messages.no_data') }}</td>
  </tr>

 </table>

</div>
</div>
</div>
<script>
  var select_server_id;

  function GetSelectedServer(education) {
    var sleTex = education.options[education.selectedIndex].innerHTML;
    var selVal = education.value;
    select_server_id= selVal;
    //console.log(education.value);
}

function GetSelectedTop(education) {
    var sleTex = education.options[education.selectedIndex].innerHTML;
    var id_static = education.value;
    //alert("Selected Text: " + sleTex + " Value: " + selVal + "Id select сервер " + select_server_value);
    getStatistics(select_server_id , id_static);
}
</script>
@endsection

