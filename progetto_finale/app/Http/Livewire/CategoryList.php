<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class CategoryList extends Component
{
    public function render()
    {
        
        return view('livewire.category-list');
    }
}
