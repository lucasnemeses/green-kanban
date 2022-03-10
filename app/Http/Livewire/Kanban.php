<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Exception;
use Livewire\Component;

class Kanban extends Component
{
    public $name;
    public $project;
    public $category;
    public $team = [];
    public $forecast;
    public $description;
    public $hidden;
    public $loading;
    public $teamFake;

    protected $rules = [
        'name' => 'required',
        'project' => 'required',
        'category' => 'required',
        'team' => 'required',
        'forecast' => 'required|date',
        'description' => 'required',
    ];

    public function mount()
    {
        $this->hidden = true;
        $this->loading = false;
    }

    public function save()
    {
        $this->hidden = false;
        $this->validate();

        $card = new Card;
        $card->name = $this->name;
        $card->project = $this->project;
        $card->category = $this->category;
        $card->team = json_encode($this->team);
        $card->forecast = $this->forecast;
        $card->description = $this->description;
        $card->list = 'Aguardando';
        $ordem = Card::max('ordem');
        $card->ordem = ++$ordem;
        $card->save();
        $this->reset();
        $this->hidden = true;
    }

    public function reorderCards($params)
    {
       $listName = $params['listName'];
       $cardIds = $params['cardIds'];
        Card::query()->findMany($cardIds)
            ->each(function(Card $card) use ($listName, $cardIds) {
                $card->ordem = array_flip($cardIds)[$card->id];
                $card->list = $listName;
                $card->save();
                return $card;
            });
    }

    public function render()
    {
        return view('livewire.kanban', [
            'lists' => Card::orderBy('ordem')->get()->groupBy('list')->toArray()
        ]);
    }
}
