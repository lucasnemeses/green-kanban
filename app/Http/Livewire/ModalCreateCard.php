<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Exception;
use Livewire\Component;

class ModalCreateCard extends Component
{
    public $name;
    public $project;
    public $category;
    public $team = [];
    public $forecast;
    public $description;
    public $hidden = true;
    public $loading = false;

    protected $rules = [
        'name' => 'required',
        'project' => 'required',
        'category' => 'required',
        'team' => 'required',
        'forecast' => 'required|date',
        'description' => 'required',
    ];

    public function save()
    {
        $this->loading = true;
        $this->hidden = false;
        $this->validate();

        try {
            $card = new Card;
            $card->name = $this->name;
            $card->project = $this->project;
            $card->category = $this->category;
            $card->team = json_encode($this->team);
            $card->forecast = $this->forecast;
            $card->description = $this->description;
            $card->save();

            $this->loading = false;
            $this->hidden = true;

        } catch(Exception $e) {
            dd($e);
        }
    }

    public function render()
    {
        return view('livewire.modal-create-card');
    }
}
