<?php namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller {

	public function contact(){

        //$ms  = Contact::orderby('created_at', 'desc')->first();
        return view('contact');


    }

    /**
     * @param Requests\ContactFormRequest $request
     */
    public function store(ContactFormRequest $request){

        Contact::create($request->all());
        //Request::flash();
        //$message = $request->old('message');
        if (!isset($ms)) {
            $ms = $request->old();
        }

        return redirect('/')
                ->with(['message'=> 'Thank you for contacting us'])->with('ms',$ms);
    }

}
