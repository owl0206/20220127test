@php
$title = '送信しました'
@endphp

@extends('layouts.layout')

@section('content')

<div class="thanks-text">ご意見いただきありがとうございました。</div>
<form action="" method="post">
  <input type="button" value="トップページへ" class="top-button">
  @csrf
</form>

@endsection