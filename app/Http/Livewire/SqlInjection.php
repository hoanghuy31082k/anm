<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SqlInjection extends Component
{
    public $username,$password,$error_mess;
    public function check(){
        $query = "SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password' limit 1";
        if (DB::select($query)) {
            unset($this->error_mess['Fail']);
            $this->error_mess['Sucess'] = "Đăng nhập thành công! Xin chào ".DB::select($query)[0]->username;
        } else {
            unset($this->error_mess['Sucess']);
            $this->error_mess['Fail'] = "Đăng nhập thất bại";
        }
    }
    public function render()
    {
        return view('livewire.sql-injection');
    }
}
