@php
$title = 'お問い合わせ';
@endphp

@extends('layouts.layout')

@section('content')
<div class="contact-box">
  <h1 class="title">お問い合わせ</h1>
  <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
  <form action="confirm" method="post" class="contactform h-adr">
    @csrf
    <table class="contact-table">
      <tr>
        <th class="contact-name">お名前<span class="require">※</span></th>
        <td><input type="text" name="lastname"></td>
        <td><input type="text" name="firstname"></td>
      </tr>
      @error('lastname')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      @error('firstname')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td class="example">例）山田</td>
        <td class="example">例）太郎</td>
      </tr>
      <tr>
        <th class="contact-name">性別<span class="require">※</span></th>
        <td colspan="2"><input type="radio" name="gender" value="男" checked>男 <input type="radio" value="女">女</td>
      </tr>
      @error('gender')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th class="contact-name">メールアドレス<span class="repuire">※</span></th>
        <td colspan="2"><input type="email" name="email"></td>
      </tr>
      @error('email')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td colspan="2" class="example"> 例）test@example.com</td>
      </tr>
      <span class="p-country-name" style="display: none;">Japan</span>
      <tr>
        <th class="contact-name">郵便番号<span class="require">※</span></th>
        <td colspan="2">〒　<input type="text" class="p-postal-code" size="8" maxlength="8" name="postcode"></td>
      </tr>
      @error('postcode')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td colspan="2">&emsp;&emsp;例）123-4567</td>
      </tr>
      <tr>
        <th class="contact-name">住所<span class="require">※</span></th>
        <td colspan="2"><input type="text" class="p-region p-locality p-street-address p-extended-address" name="address" /></td>
      </tr>
      @error('address')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th></th>
        <td colspan="2" class="example">&emsp;例）東京都渋谷区千駄ヶ谷1－2－3</td>
      </tr>
      <tr>
        <th class="contact-name">建物名</th>
        <td colspan="2"><input type="text" name="building_name"></td>
      </tr>
      <tr>
        <th></th>
        <td colspan="2" class="example">&emsp;例）千駄ヶ谷マンション101</td>
      </tr>
      <tr>
        <th class="contact-name">ご意見<span class="require">※</span></th>
        <td colspan="2"><textarea name="opinion" cols="50" rows="8"></textarea></td>
      </tr>
      @error('opinion')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
    </table>
    <input type="submit" value="確認" class="contact-button">
  </form>
</div>
@endsection