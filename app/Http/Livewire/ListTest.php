<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListTest extends Component
{
    public $list = [
        'test1',
        'test2',
        'test3',
        'test4',
        'test5',
        'test6',
        'test7'
    ];

    public $search;

    public function updatedSearch()
    {
        $this->search ? $this->changeList() : $this->reset('list');
    }

    public function changeList()
    {
        $this->list = [
        'test10',
        'test11',
        'test12'
        ];
    }

    public function render()
    {
        return view('livewire.list-test');
    }
}
