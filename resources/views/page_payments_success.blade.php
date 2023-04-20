@extends('layouts.paymentstemplate.paytemplate')


@section('content')
<div id="toast-top-center" class="decoration-rose-950 items-center p-4 space-x-4 text-gray-500 bg-white divide-x divide-gray-200 rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
    <div style="text-align:center;"class="text-2xl  text-sm font-normal">{{ __('messages.payments_success') }}</div>
</div>
@endsection
