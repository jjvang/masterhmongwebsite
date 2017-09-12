<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;

class MessagesController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function getContact(){
    $messages = Message::all();
    return view('messages.contact')->with('messages', $messages);
  }

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

  public function edit($id)
{
      $message = Message::find($id);
      return view('messages.edit')->with('message', $message);
}

public function update(Request $request, $id){

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

public function destroy($id)
{
  $message = new Message;
  $message->delete();
  return redirect('contact')->with('success', 'Message Deleted :D!');
}


  // if ($user_id > 0){
  //   $user = User::find($user_id);
  //   return view('contact')->with('messages', $user->messages);
  // }
  // else {
  // $messages = Message::all();
  // return view('contact')->with('messages', $messages);
  // }

//   public function edit($id)
// {
//     $messages = Message::find($id);
//       return view('edit')->with('messages', $messages);
// }
  //
  //   public function update(Request $request, $id)
  // {
  //   $messages = Message::find($id);
  //   $messages->text = $request->input('text');
  //   $messages->message = $request->input('message');
  //
  //   $messages->save();
  //   return redirect('contact')->with('success', 'Message Updated :D!');
  // }
//
//   public function destroy($id)
//   {
//     $messages = Message::find($id);
//     $messages->delete();
//     return redirect('contact')->with('success', 'Todo Deleted :D!');
//   }



}
