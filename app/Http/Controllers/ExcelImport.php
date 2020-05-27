<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\EmailMarket;
use App\Events\NewCustomerRegisterEvent;
use App\Imports\TransactionsImport;
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
        $transactions = Transaction::whereNotNull('card_no')->paginate(20);
        $number = Transaction::whereNotNull('card_no')->count();
        return view('excel.index', compact('transactions', 'number'));
    }

    public function create()
    {
        return view('excel.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            //dd($path);
            $data = Excel::import(new TransactionsImport, $request->file('file'));
            //$data = Excel::import(new EmailMarket, $request->file('file'));
            return $data;
        }
    }

    public function sendEmail()
    {
        //$x = 0;
        $transactions[] = ['email' => 's.m.kamalhussain@gmail.com', 'name' => "Kamal Hussain"];
        //$transactions[] = ['email' => 'azazul1988@gmail.com', 'name' => "Azazul Sunny"];
        //$transactions[] = ['email' => 'shahirahman525@gmail.com', 'name' => "Shahi Rahman"];
        //$transactions = Transaction::all();
        //return $transactions;
        for ($i = 0; $i < count($transactions); $i++) {
//            if (!is_null($transactions[$i]['card_no'])) {
//                $x++;
//                //print_r(count($transactions[$i]['card_no']));
//            }
            event(new NewCustomerRegisterEvent($transactions[$i]));
        }
        //return $x;
        return back();
        //event(new NewCustomerRegisterEvent($transactions));
    }
}
