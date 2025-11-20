<?php

namespace App\Repositories;

use App\Models\Quota;
use App\Models\User;

class QuotaRepository
{
    public function all()
    {
        return Quota::all();
    }

    public function find($id)
    {
        return Quota::findOrFail($id);
    }

    public function create(array $data)
    {
        return Quota::create($data);
    }

    public function update(Quota $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    public function delete(Quota $user)
    {
        return $user->delete();
    }

}
