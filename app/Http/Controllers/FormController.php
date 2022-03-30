<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $form = Form::all();
        return view('admin.form', [
            'form' => $form,
        ]);
    }

    public function destroy($id)
    {
        Form::where('id', $id)->delete();
        $form = Form::all();
        return view('admin.form', [
            'form' => $form,
        ]);
    }

    public function store(ContactsRequest $request)
    {
        $form = Form::all();
        $validated = $request->validated();
        $contact = new Form();
        $contact->forms_title = $validated['form_name'];
        $contact->save();
        return view('admin.form', [
            'form' => $form
        ]);
    }
}
