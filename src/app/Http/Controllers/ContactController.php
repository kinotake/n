<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
   // データ追加用ページの表示
  public function index()
  {     
        return view('index');
    }
  
  public function confirm(ContactRequest $request){
        $contact = $request->only(['first-name','second-name','gender','email', 'zip11', 'addr11','building_name','opinion']);
        return view('confirm', ['contact' => $contact]);
    }
  
  // データの生成
   public function create(ContactRequest $request){
        $form = [
           'first-name'+'second-name' => $request->fullname,
           'gender' => $request->gender,
           'zip11' => $request->postcode,
           'addr11' => $request->address,
           'building_name' => $request->building_name,
           'opinion' => $request->opinion,
            ];
        Contact::create($form);
        return view('thanks');
    }

  public function thanks()
  {
        return view('thanks');
    }

  public function administrator()
  {
        $contacts = Contact::simplePaginate(4);
    return view('administrator', ['contacts' => $contacts]);
    }

  public function destroy(Request $request)
   {
    Todo::find($request->id)->delete();
    return redirect('/administrator');
   }
}
