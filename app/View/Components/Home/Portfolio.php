<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     */

    public function __construct()
    {
        //
    
       // $html = '<a href="https://drive.google.com/file/d/1IEBvsAinLfQy2l9y4HArB8FNTfBefaqH/view " target="_blank"></a>';
        $this->items = [
            /*
            [
                'category' => ['Java'],
                'title' => 'Pharmacy Mangement System using Javafx',
                'image' => url('/img/pr1.jpg'),
                
                'github' => ''
            ],
*/
            [
                'category' => ['Java'],
                'title' => 'Top Down parser and lexical analyser ,compiler',
                'image' => url('/img/compiling.jpg'),
                
                'link' => 'https://drive.google.com/file/d/1oIQBJ5TgJkDz9pCCoXaQc22od02mLvWI/view?usp=sharing',
            ],
            [
                'category' => ['Java'],
                'title' => 'Gui java applicaion for Ip adress and subnet masks ',
                'image' => url('/img/rc.jpg'),
                
                'link' => 'https://drive.google.com/file/d/1DZLZOc9E15_5JFdcWlQr6ZazZOUSLMnI/view?usp=sharing'
            ],
            [
                'category' => ['Python'],
                'title' => '
                 hierarchical clustering for improving synchronization between electronic devices',
                'image' => url('/img/dm2.jpg'),
                'link' => 'https://drive.google.com/file/d/1IEBvsAinLfQy2l9y4HArB8FNTfBefaqH/view'
            ],
            [
                'category' => ['Python'],
                'title' => 'Implement an application inspired by ant colonies to solve a TSP Problem',
                'image' => url('/img/mhtp.jpg'),
                'link' => 'https://drive.google.com/file/d/16wRsGzL9uXZj8zJzwiufSv96Aynb44m3/view'
            ],
            [
                'category' => ['Laravel', 'Tailwind.css','Alpine js'],
                'title' => 'my personal website',
                'image' => url('/img/por2.jpg'),
                'link' => 'https://github.com/abderrahmane-18/my-portfolio'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'crud operation query builder',
                'image' => url('/img/query.png'),
                'link' => 'https://github.com/abderrahmane-18/crud_wtih_query_builder_larvel'
            ],
           
            
           
           
          
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
