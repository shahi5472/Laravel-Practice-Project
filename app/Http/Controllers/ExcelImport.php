<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\EmailMarket;
use App\Events\NewCustomerRegisterEvent;
use App\Imports\TransactionsImport;
use App\Jobs\SendEmail;
use App\Transaction;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImport extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$number = count(Transaction::whereNotNull('email')->get()->unique('email'));
//        return view('excel.index', compact('transactions', 'number'));

        //650 original email
        //716 in database

        $transactions = Transaction::whereNotNull('email')->paginate(50);
        $number = count(Transaction::whereNotNull('email')->get());
        return view('excel.index', compact('transactions', 'number'));
    }

    public function create()
    {
        return view('excel.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            Excel::import(new TransactionsImport, $request->file('file'));
            return back();
        }
        return back();
    }

    public function sendEmail()
    {
        //$transactions[] = ['email' => 'nuheljft@gmail.com', 'name' => "Caca"];
        $transactions[] = ['email' => 's.m.kamalhussain@gmail.com', 'name' => "Kamal Hussain"];
        $transactions[] = ['email' => 's.m.kamalhussain@gmail.com', 'name' => "Kamal Hussain"];
        $transactions[] = ['email' => 's.m.kamalhussain@gmail.com', 'name' => "Kamal Hussain"];
        $transactions[] = ['email' => 's.m.kamalhussain@gmail.com', 'name' => "Kamal Hussain"];
        $transactions[] = ['email' => 's.m.kamalhussain@gmail.com', 'name' => "Kamal Hussain"];
//        $transactions[] = ['email' => 's.m.kamalhussain@hotmail.com', 'name' => "Kamal Hussain"];

        //for ($i = 0; $i < count($transactions); $i++) {
        // SendEmail::dispatch($transactions[$i]);
        // }

        //$transactions[] = ['email' => 's.m.kamalhussainshahi@outlook.com', 'name' => "Kamal Hussain"];
//        $transactions[] = ['email' => 'mustaksayed@hotmail.co.uk', 'name' => "Mustak Sayed"];
        //$transactions[] = ['email' => 's.m.musharaf87@gmail.com', 'name' => "S.m. Sadi"];
        // $transactions[] = ['email' => 'azazul1988@gmail.com', 'name' => "Azazul Sunny"];

        //$transactions = Transaction::whereNotNull('email')->get();
        for ($i = 0; $i < count($transactions); $i++) {
            //echo $i . '   ' . $transactions[$i]['email'] . '<br>';
            event(new NewCustomerRegisterEvent($transactions[$i]));
        }
        return redirect('/');
    }
}
