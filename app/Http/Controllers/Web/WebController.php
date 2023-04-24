<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Message;
use App\User;

class WebController extends Controller
{
    public function home() {
        return view('web.home.home');
    }

    public function getMessages() {

        $messages = Message::all();
        $users = User::all();
        return view('web.message.index', compact('messages', 'users'));
    }

    /* Tạo */

    public function createMessages() {
        return view('web.message.create');
    }


    public function storeMessages(Request $request ) {
        // $message = new Message();
        // $message->name = $request->name;
        // $message->description = $request->description;
        // $message->content = $request->content;
        // $message->save();

        Message::create($request->all());
        return redirect()->route('web.home.create-messages')->with('success','Create successfully');
    }

    public function editMessages($id) {
        $message = Message::find($id);
        
        return view('web.message.edit', compact('message'));
    }

    public function updateMessages(Request $request, $id ) {
        // $message = Message::find($id);
        // $message->name = $request->name;
        // $message->description = $request->description;
        // $message->content = $request->content;
        // $message->save();
        $message = Message::find($id);
        $message -> update($request->all());

        return redirect()->route('web.home.edit-messages', $id)->with('success','Update successfully');
    }


    public function deleteMessages($id) {
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('web.home.get-messages', $id)->with('success','Delete successfully');    
    }
}
