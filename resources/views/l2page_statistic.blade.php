@extends('layouts.l2templatefolder.l2templatepages')

<meta name="csrf-token" content="{{ csrf_token() }}">
@section("title" , "Страница описания!")
@section("page-title" , "Регистрация")
@section('inside_info')
<script src="{{asset('/js/registration.js') }}"></script>
<script src="{{asset('/js/alertsMessages.js') }}"></script>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
#customers td {
  color: black;
}

.body_ts {
   display: flex;
   flex-direction: column;
   height: 5rem;
   font-family: 'Open Sans', sans-serif;
   color: white;
}
select {
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:0!important;
   background: #5c6664;
   background-image: none;
   flex: 1;
   padding: 0 .5em;
   color:white;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;
}
select::-ms-expand {
   display: none;
}
.select {
   position: relative;
   display: flex;
   width: 20em;
   height: 3em;
   line-height: 3;
   background: #5c6664;
   overflow: hidden;
   border-radius: .25em;
}
.select::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #2b2e2e;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #23b499;
}

</style>

	<h1 class="page-title"><p style="color:black;">{{ __('messages.static') }}</p></h1>
	<div style="margin: auto;width: 100%;"class="contentHomeStatic">

	<div class="message"></div>
	
	<div id="show_alert">
  		<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  		<strong id="text_alert"></strong>
	</div>
    <div class="container">
        <div class=body_ts>
     

    <div class="select">
        <select name="format" id="format">
            <option selected disabled>Выбрать статистику</option>
            <option value="pvp">Топ ПвП</option>
            <option value="pk">Топ ПК</option>
            <option value="top_klan">Топ Кланов</option>
        </select>
    </div>

        </div>
    <table id="customers">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>CLASS</th>
    <th>CLAN</th>
    <th>LVL</th>
    <th>PVP</th>
    <th>PK</th>
    <th>TIME</th>
    <th>ONLINE</th>
  </tr>
  <tr>
    <td>1</td>
    <td>admin</td>
    <td>Human Figter</td>
    <td>DemonSotone</td>
    <td>55</td>
    <td>145</td>
    <td>243</td>
    <td>135 часов</td>
    <td>В сети</td>
  </tr>
  <tr>
    <td>2</td>
    <td>klisor</td>
    <td>Human Figter</td>
    <td>DemonSotone</td>
    <td>35</td>
    <td>145</td>
    <td>243</td>
    <td>135 часов</td>
    <td>В сети</td>
  </tr>
  <tr>
    <td>3</td>
    <td>gawric</td>
    <td>Human Figter</td>
    <td>DemonSotone</td>
    <td>15</td>
    <td>145</td>
    <td>243</td>
    <td>135 часов</td>
    <td>В сети</td>
  </tr>
</table>

</div>
</div>
		
	</div>
@endsection

