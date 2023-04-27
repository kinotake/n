<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>お問い合わせ</title>
</head>
<body>



<div class="contact-form__content">
 <div class="contact-form__heading">
    <h>お問い合わせ</h>
 </div>
 <form class="form" action="/confirm"  method="post"onsubmit="test(this)">
    @csrf
  <div class="form__group">
    <div class="form-table__header">
      <span class="name-header">お名前</span><span class="※">※</span> 
    </div>
    <div class="form__group-content-name">
      
      <span class="form__input--text">
           <input class="name-fillout" type="text" name="first-name" value="{{ old('first-name') }}"/>
            <p class="example-name">例）山田</p>
      </span>
      <div class="form__error_name">
          @error('first-name')
          {{ $message }}
          @enderror
        </div>
      <span class="form__input--text">
           <input class="name-fillout" type="text" name="second-name" value="{{ old('second-name') }}"/>
           <p class="example-name">例）太郎</p>
      </span>
      <div class="form__error_name">
          @error('second-name')
          {{ $message }}
          @enderror
        </div>
    </div>
  </div>
  <div class="form__group">
    <div class="form-table__header">
      <span class="gender-header">性別</span><span class="※">※</span>
    </div>
    <div class="form__group-content-gender">
        <input type="radio" name="gender" value="0"style="transform:scale(1.5);"checked >男性
        <input type="radio" name="gender" value="1"style="transform:scale(1.5);">女性
    </div>
   </div>

   <div class="form__group">
      <div class="form-table__header">
      <span class="mail-header">メールアドレス</span><span class="※">※</span>
      </div>
      <div class="form__group-content">
        <input class="fillout" type="email" name="email" value="{{ old('email') }}">
         <p class="example">例）test@example.com</p>
         <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
   </div>
   <div class="form__group">
    <div class="form-table__header">
      <span class="number-header">郵便番号</span>
      <span class="※">※</span>
      <span>〒</span>
    </div>
    <div class="form__group-content">
        <input class="fillout"type="text" name="zip11" pattern="\d{3}-\d{4}" value="{{ old('zip11') }}" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');">
        <p class="example">例）123-4567</p>
        <div class="form__error">
          @error('zip11')
          {{ $message }}
          @enderror
    </div>
    </div>
   </div>
   <div class="form__group">
    <div class="form-table__header">
       <span class="address-header">住所 </span><span class="※">※</span>
    </div>
    <div class="form__group-content">
       <span class="confirm-table__text">
         <input class="fillout"type="text" name="addr11" value="{{ old('addr11') }}">
         <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
       </span>
       <div class="form__error">
          @error('addr11')
          {{ $message }}
          @enderror
        </div>
    </div>
   </div>
   <div class="form__group">
    <div class="form-table__header">
       <span class="building-header">建物名</span>
    </div>
    <div class="form__group-content">
       <span class="form-table__text">
          <input class="fillout"type="text" name="building_name"value="{{ old('building_name') }}">
          <p class="example">例）千駄ヶ谷マンション101</p>
       </span>
       <div class="form__error">
          @error('building_name')
          {{ $message }}
          @enderror
        </div>
    </div>
   </div>
   <div class="form__group">
    <div class="form-table__header">
       <span class="comment-header">ご意見</span><span class="※">※</span>
    </div>
    <div class="form__group-content">
       <span class="form-table__text">
          <textarea name="opinion" value="{{ old('opinion') }}" cols="58" rows="5" name="opinion">
          </textarea>
       </span>
       <div class="form__error">
           @error('opinion')
          {{ $message }}
           @enderror
        </div>
    </div>
   </div>
   <div class="form__button">
         <button class="form__button-submit" type="submit">確認</button>
   </div>
 </form>
</div>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</body>

</html>