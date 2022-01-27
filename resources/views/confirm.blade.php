@php
$title = '確認画面'
@endphp

@extends('layouts.layout')

@section('content')

<div class="confirm-box">
  <h1 class="title">内容確認</h1>
  <form action="thanks" method="post">
    @csrf
    <table class="confirm-table">
      <tr>
        <th class="confirm-name">お名前</th>
        <td>{{$inputs["lastname"]}}</td>
        <td>{{$inputs["firstname"]}}</td>
      </tr>
      <tr>
        <th class="contact-name">性別</th>
        <td colspan="2">{{$inputs["gender"]}}</td>
      </tr>
      <tr>
        <th class="contact-name">メールアドレス</th>
        <td colspan="2">{{$inputs["email"]}}</td>
      </tr>
      <tr>
        <th class="contact-name">郵便番号</th>
        <td colspan="2">{{$inputs["postcode"]}}</td>
      </tr>
      <tr>
        <th class="contact-name">住所</th>
        <td colspan="2">{{$inputs["address"]}}</td>
      </tr>
      <tr>
        <th class="contact-name">建物名</th>
        <td colspan="2">{{$inputs["building_name"]}}</td>
      </tr>
      <tr>
        <th class="contact-name">ご意見</th>
        <td colspan="2">{{$inputs["opinion"]}}</td>
      </tr>
    </table>
    <input type="submit" value="送信する" class="contact-button">
    <a href="">修正する</a>
  </form>
</div>
@endsection