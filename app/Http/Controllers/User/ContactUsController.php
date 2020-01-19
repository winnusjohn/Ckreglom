<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
// use Mail;
use Illuminate\Http\Request;
use App\Model\user\contactUS;

class ContactUsController extends Controller
{
    public function contactUS()
    {
        return view('user.contact_us');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function contactSaveData(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        contactUs::create($request->all());

        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function ($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('wnnrjohnson@gmail.com')->subject("CKReglom Contact Us Website Message");
        });

        return redirect()->back()->with("flash_message", "Thank you for contacting us");
        // contactUS::create($request->all());
        // \Mail::send(
        //     'emails.contactus',
        //     array(
        //         'name' => $request->get("fullname"),
        //         'email' => $request->get("email"),
        //         'phone' => $request->get("phone"),
        //         'subject' => $request->get("subject"),
        //         'user_message' => $request->get("message")
        //     ),
        //     function ($message) use ($request) {
        //         $message->from('winneronaolapo@gmail.com');
        //         $message->to("wnnrjohnson@gmail.com", 'Admin')->subject($request->get('subject'));
        //     }
        // );
        // return back()->with("Success", "Thanks for contacting Us!");
    }
    // public function contactSaveData(Request $request)
    // {
    //     $this->validate($request, [
    //         'fullname' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'subject' => 'required',
    //         'message' => 'required'
    //     ]);

    // contact_us::create($request->all());
    //     return back()->with('success', 'Thanks for contacting us!!!');
    // }
}
