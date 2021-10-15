<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Thanks for writing. We will contact you shortly!');
    }

    public function allData()
    {
        $contact = new Contact;
       // return view('messages', ['data' => [$contact->find(1)]] );
       // return view('messages', ['data' => $contact->orderBy('id', 'asc')->get() ]); //->skip()
       // return view('messages', ['data' => $contact->orderBy('id', 'asc')->take(2)->get() ]);
       // return view('messages', ['data' => $contact->where('name', '=', 'Murad')->get( ) ]); // <> - ne ravno
        return view('messages', [ 'data' => $contact->all() ]);
    }

    public function showOneMessage($id)
    {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id)
    {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Update successfully completed!'); // ?
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Message successfully deleted!');

    }


}


