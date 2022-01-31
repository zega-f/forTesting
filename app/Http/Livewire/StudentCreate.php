<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentCreate extends Component
{
	public $name;

    public function addStudent()
    {
        $student = Student::create(['name' => $this->name]);

        $this->emit('studentAdded');

        $this->name = '';
    }

    public function render()
    {
        return view('livewire.student-create');
    }
}
