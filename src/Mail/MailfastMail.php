<?php

namespace Patrixsmart\Mailfast\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage; 


class MailfastMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
   
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {  
        $messageBody= $request->message; 
        $email = $request->email;
        // $file = $request->file;
        $emailSubject = $request->subject;

        if($request->hasFile('file')){
            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('file')->storeAs('public/mailfast_files',$fileNameToStore);
        }
 
        if($request->hasFile('file')){
            $this->view('mailfast::mailfastEmail',compact('messageBody'))
                ->to($email)
                // ->from('patrixsmart@gmail.com', "PatriXsmarT Global's")
                // ->sender('patrixsmart@gmail.com', "PatriXsmarT Global's")
                // ->cc('patrixsmart@gmail.com', "PatriXsmarT Global's")
                // ->bcc('patrixsmart@gmail.com', "PatriXsmarT Global's")
                // ->replyTo('patrixsmart@gmail.com', "PatriXsmarT Global's")
                ->subject($emailSubject)
                ->priority(3)
                ->attach('storage/mailfast_files/'.$fileNameToStore);
        }else{
            $this->view('mailfast::mailfastEmail',compact('messageBody'))
                ->to($email)
                // ->from('patrixsmart@gmail.com', "PatriXsmarT Global's")
                // ->sender('patrixsmart@gmail.com', "PatriXsmarT Global's")
                // ->cc('patrixsmart@gmail.com', "PatriXsmarT Global's")
                // ->bcc('patrixsmart@gmail.com', "PatriXsmarT Global's")
                // ->replyTo('patrixsmart@gmail.com', "PatriXsmarT Global's")
                ->subject($emailSubject)
                ->priority(3);
        }


    }
}
