<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;

class MessagesController extends Controller
{
  public function submit(Request $request){
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'message' => 'required'
    ]);
    // Create New Message
    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('message');
    // Save Message
    $message->save();

    //Redirect
    return redirect('contact')->with('success', 'Message Sent');
  }

  public function getContact(){
    $messages = Message::all();
    return view('messages.contact')->with('messages', $messages);
  }

  public function edit($id)
  {
    $message = Message::find($id);
    return view('messages.edit')->with('message', $message);
  }
  public function update(Request $request, $id){
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required',
      'message' => 'required'
    ]);
  // Create New Message
  $message = Message::find($id);
  $message->name = $request->input('name');
  $message->email = $request->input('email');
  $message->message = $request->input('message');
  // Save Message
  $message->save();

  //Redirect
  return redirect('contact')->with('success', 'Message Updated');
  }

  public function destroy($id)
  {
  $message = Message::find($id);
  $message->delete();
  return redirect('contact')->with('success', 'Message Deleted :D!');
  }

}
