<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SendContactUsEmailRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactUsController extends Controller {

	
	/**
	 * Show the contact us form 
	 * 
	 * @return Response 
	 */
	public function index()
	{
		
		return view('contact.index');
	}

	/**
	 * Show the contact us again but with a message 
	 * 	that the email was sent. 
	 * @return Response 
	 */
	public function sent()
	{
		// return view('contact.index');
	}

	/**
	 * Send the email to the approprate accounts
	 * 
	 * @param Response $response 
	 * @return Response
	 */
	public function send(SendContactUsEmailRequest $request)
	{
		\Mail::send('emails.contact-us', [
				'reciever' => 'Joshua', 
				'player' => $request->input('name'), 
				'subject'=> $request->input('subject'), 
				'message_body'=> $request->input('message'), 
				'email'=> $request->input('email')
			], 

			function($message)
			{
			    $message->to('jjjr1122@gmail.com', 'Contact Us - Sandhogs Baseball')
			    	->subject('Contact Us Form')
			    	->from('webmaster@sandhogsbaseball.com');
			}
		);

		\Session::put('flash_success', '<strong><i class="fa fa-check-circle"></i> Success</strong> the email was sent to East Coast Sandhogs Staff. We will try to get back to you as soon as possible.');

		return view('contact.index');





	}

}
