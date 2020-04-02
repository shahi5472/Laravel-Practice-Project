<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\Events\NewCustomerRegisterEvent;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $customers = Customer::all();
        $customers = Customer::with('company')->paginate(10);
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('customer', 'companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Customer::class);

        $customer = Customer::create($this->validateRequest($request));

        if ($request->hasFile('image')) {
            $imageName = $imageName = "IMG_" . rand(10000000000, 9999999999999) . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $imageName);
            // save new image $file_name to database
            $customer->update(['image' => $imageName]);
        }

        event(new NewCustomerRegisterEvent($customer));

        return redirect('/customers')->with('message', 'New Customer Add');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Customer::where('id', $id)->update($this->validateRequest($request));

        if ($request->has('image')) {
            $imageName = "IMG_" . rand(10000000000, 9999999999999) . '.' . $request->image->extension();

            $request->image->move(public_path('images'), $imageName);
            // save new image $file_name to database
            Customer::where('id', $id)->update(['image' => $imageName]);
        }

        return redirect('/customers/' . $request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Customer::where('id', $id)->first());

        $img = Customer::where('id', $id)->first();
        $imagePath = $img->image;
        unlink(public_path('images/' . $imagePath));//for image delete from folder

        Customer::where('id', $id)->delete();
        return redirect('/customers');
    }

    private function validateRequest(Request $request)
    {
        return $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
            'company_id' => 'required',
            'image' => 'sometimes|file|image|mimes:jpeg,png,jpg,gif,svg|max:5000'
        ]);

//        return tap($request->validate([
//            'name' => 'required|min:3',
//            'email' => 'required|email',
//            'status' => 'required',
//            'company_id' => 'required',
//        ]), function () use ($request) {
//            if ($request->hasFile('image')) {
//                $request->validate([
//                    'image' => 'file|image|mimes:jpeg,png,jpg,gif,svg|max:5000'
//                ]);
//            }
//        });
    }
}
