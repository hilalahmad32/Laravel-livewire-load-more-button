<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class LoadMore extends Component
{
    public $page_number=10;

    use WithPagination;
    public function render()
    {
        $posts=Post::orderBy('id','DESC')->paginate($this->page_number);
        return view('livewire.load-more',['posts'=>$posts])->layout('layouts.app');
    }

    public function load_more()
    {
        $this->page_number += 11;
    }
}
