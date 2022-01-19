<?php

namespace App\Repository;

use App\Interfaces\UserInterface;
use App\Models\User;
use App\Models\UserDetails;
use App\Traits\FileManageTrait;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserRepository implements UserInterface
{

    use FileManageTrait;

    public function createUser($data)
    {
        $userPhoto = null;
//        dd($data->file('user_photo'));
        if(Arr::has($data, 'user_photo')){
            $userPhoto = $this->uploadFile(
                '../public/uploads/userImages',
                $data->file('user_photo'),
                Str::slug($data->user_name).'-'.time().'.'.$data->file('user_photo')->getClientOriginalExtension()
            );


        }

        $user = User::create([
            'name' => $data['user_name'],
            'email' => $data['user_email'],
            'phone' => $data['mobile_number'],
            'password' => Hash::make($data['password'])
        ]);

        UserDetails::create([
            'userId' => $user->id,
            'voter_id' => $data['voter_id'],
            'installment' => $data['installment'],
            'address' => $data['user_address'],
            'user_image' => $userPhoto
        ]);

        return $user;

    }
}
