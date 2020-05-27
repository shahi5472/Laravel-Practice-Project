<?php

namespace App;

use Maatwebsite\Excel\Concerns\ToModel;

class EmailMarket implements ToModel
{
    use Importable;

    public function model(array $row)
    {
        return new EmailStore([
            'name' => $row[0],
            'email' => $row[1],
        ]);
    }
}
