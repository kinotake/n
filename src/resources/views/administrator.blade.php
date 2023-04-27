<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/administrator.css') }}">
    <title>管理システム</title>
</head>
<body>
       <div class="administrator-form__heading">
           <h2>管理システム</h>
       </div>
       <div class="administrator-contents">
           <div class="search-form-contents">
            <div class="name-gender">
               <span class="form-table__header">
                  <span class="customer-name">お名前</span>
               </span>
              <span class="name-registration-day">
               <input class="search-form" type="text"/>
               <span class="form-table__header">
                   <span class="customer-gender">性別</span>
                </span>
                   <input type="radio" name="gender" value="全て" style="transform:scale(1.5);"checked>全て
                   <input type="radio" name="gender" value="男性
                   "style="transform:scale(1.5);">男性
                   <input type="radio" name="gender" value="女性"style="transform:scale(1.5);">女性
              </span>
            </div>
            <div class="registration-day">
                   <span class="form-table__header">
                       <span class="customer-registration-day">登録日</span>
                   </span>
              <span class="name-registration-day">
                   <input class="search-form" type="text"/>-
                   <input class="search-form" type="text"/>
              </span>
            </div>
            <div class="mail">
                   <span class="form-table__header">
                        <span class="customer-mail">メールアドレス</span>
                    </span>
                        <input class="search-form" type="text"/>
            </div>
           </div>
            <div class="search-contents">
                    <div class="form__button">
                         <button class="form__button-submit" type="submit">検索</button>
                    </div>
                    <p class="fix">リセット</p>
            </div>
        </div>

        <div class="paginate_content">
           <div class="pagination">
              {{ $contacts->links() }}
           </div>
        </div>
        <div class="header">
        <span>ID</span>
         <span>お名前</span>
         <span>性別</span>
         <span>メールアドレス</span>
         <span>ご意見</span>
        </div>

        @foreach ($contacts as $contact)
          <form class="delete-form" action="/administrator" method="POST">
           @method('DELETE')
           @csrf
           <div class="contents">
            <div class=a>
             <span>{{$contact->id}}</span>
            </div>
           
             <div class=b>
             <span>{{$contact->fullname}}</span>
           </div>
           
             <div class=c>
             <span>{{$contact->gender}}</span>
           </div>
           
             <div class=d>
             <span>{{$contact->email}}</span>
           </div>
           
            <div class=e>
             <span>{!! nl2br(e(Str::limit($contact->opinion, 25))) !!}</span>
            </div>
            <div class="form__button">
              <input type="hidden" value="$contacts">
              <button class="delete-form__button" type="submit">削除</button>
            </div>
           </form>
           </div>

           @endforeach
      
             
            
   
</body>
</html>