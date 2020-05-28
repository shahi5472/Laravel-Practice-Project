<?php

namespace App\Imports;

use App\Transaction;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class TransactionsImport implements ToModel
{
    use Importable;

    public function model(array $row)
    {
        return new Transaction([
            'email' => $this->valid_email($row[4])
        ]);
    }

    function valid_email($str)
    {
        if (preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) {
            return $str;
        }
    }
}
