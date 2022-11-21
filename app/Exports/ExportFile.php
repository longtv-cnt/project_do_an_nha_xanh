<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportFile implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    public function headings(): array {
        return [
            'ID',
            'Name',
            'Email',
            "Created",
            "Updated"

        ];
    }

    public function map($user): array {
        return [
            $user->id,
            $user->name,
            $user->email,
            $user->created_at,
            $user->updated_at
        ];
    }
}
