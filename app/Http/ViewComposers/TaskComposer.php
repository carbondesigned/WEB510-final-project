<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class TaskComposer
{
    public function compose(View $view)
    {
        if (auth()->check()) {
            $pendingTasksCount = auth()->user()->tasks()->where('status', 'pending')->count();
            $view->with('pendingTasksCount', $pendingTasksCount);
        }
    }

}
