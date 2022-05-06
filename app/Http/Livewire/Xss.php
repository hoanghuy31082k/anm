<?php

namespace App\Http\Livewire;

use App\Models\Test;
use Livewire\Component;

class Xss extends Component
{
    public $email,$text,$error_comment,$test;
    public function check(){
        $this->test = Test::create([
            'email' => $this->email,
            'text' => $this->text
        ]);
        if (!$this->test) {
            $this->error_comment['Fail'] = "Gửi thất bại!";
            
        } else {
            $this->error_comment['Success'] = "Gửi thành công!";
        }
    }
    public function render()
    {
        return view('livewire.xss');
    }
}
