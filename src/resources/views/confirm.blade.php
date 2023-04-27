<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
    <title>内容確認</title>
</head>
<body>
<div class="contact-form__content">
 <div class="contact-form__heading">
    <h>内容確認</h>
 </div>
 
 <form class="form" action="" method="post">
    @csrf




  <div class="form__group">
    <div class="form-table__header">
      <span class="name-header">お名前</span>
    </div>
    <div class="form__group-content-name">
       {{ $contact['first-name'] }}
       {{ $contact['second-name'] }}
    </div>
  </div>
  <div class="form__group">
    <div class="form-table__header">
      <span class="gender-header">性別</span>
    </div>
    <div class="form__group-content">
         @if ($contact['gender']<1)
         男性
          @else
        女性
          
        @endif
    </div>
   </div>
   <div class="form__group">
      <div class="form-table__header">
      <span class="mail-header">メールアドレス</span>
      </div>
      <div class="form__group-content">
        <div>{{ $contact['email'] }}</div>
      </div>
   </div>
   <div class="form__group">
    <div class="form-table__header">
      <span class="number-header">郵便番号</span>
    </div>
    <div class="form__group-content">
        <div>{{ $contact['zip11'] }}</div>
    </div>
   </div>
   <div class="form__group">
    <div class="form-table__header">
       <span class="address-header">住所 </span>
    </div>
    <div class="form__group-content">
       <div>{{ $contact['addr11'] }}</div>
       </span>
    </div>
   </div>
   <div class="form__group">
    <div class="form-table__header">
       <span class="building-header">建物名</span>
    </div>
    <div class="form__group-content">
       <div>{{ $contact['building_name'] }}</div>
    </div>
   </div>
   <div class="form__group">
    <div class="form-table__header">
       <span class="comment-header">ご意見</span>
    </div>
    <div class="form__group-content">
       <div>{{ $contact['opinion'] }}</div>
    </div>
   </div>
   <div class="form__button">
         <button class="form__button-submit" 
         type="submit">送信</button>
   </div>
 </form>
      <div class="fix-botton">
          <button onclick="history.back()" class="fix">修正する</button>
      </div>
</div>

</body>
</html>
