<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Nrc;

class Nrcs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nrc, $id_campus, $id_departamento, $id_materia, $id_docentes, $id_periodoacademico;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.nrcs.view', [
            'nrcs' => Nrc::latest()
						->orWhere('nrc', 'LIKE', $keyWord)
						->orWhere('id_campus', 'LIKE', $keyWord)
						->orWhere('id_departamento', 'LIKE', $keyWord)
						->orWhere('id_materia', 'LIKE', $keyWord)
						->orWhere('id_docentes', 'LIKE', $keyWord)
						->orWhere('id_periodoacademico', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->nrc = null;
		$this->id_campus = null;
		$this->id_departamento = null;
		$this->id_materia = null;
		$this->id_docentes = null;
		$this->id_periodoacademico = null;
    }

    public function store()
    {
        $this->validate([
		'nrc' => 'required',
		'id_campus' => 'required',
		'id_departamento' => 'required',
		'id_materia' => 'required',
		'id_docentes' => 'required',
		'id_periodoacademico' => 'required',
        ]);

        Nrc::create([ 
			'nrc' => $this-> nrc,
			'id_campus' => $this-> id_campus,
			'id_departamento' => $this-> id_departamento,
			'id_materia' => $this-> id_materia,
			'id_docentes' => $this-> id_docentes,
			'id_periodoacademico' => $this-> id_periodoacademico
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Nrc Successfully created.');
    }

    public function edit($id)
    {
        $record = Nrc::findOrFail($id);
        $this->selected_id = $id; 
		$this->nrc = $record-> nrc;
		$this->id_campus = $record-> id_campus;
		$this->id_departamento = $record-> id_departamento;
		$this->id_materia = $record-> id_materia;
		$this->id_docentes = $record-> id_docentes;
		$this->id_periodoacademico = $record-> id_periodoacademico;
    }

    public function update()
    {
        $this->validate([
		'nrc' => 'required',
		'id_campus' => 'required',
		'id_departamento' => 'required',
		'id_materia' => 'required',
		'id_docentes' => 'required',
		'id_periodoacademico' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Nrc::find($this->selected_id);
            $record->update([ 
			'nrc' => $this-> nrc,
			'id_campus' => $this-> id_campus,
			'id_departamento' => $this-> id_departamento,
			'id_materia' => $this-> id_materia,
			'id_docentes' => $this-> id_docentes,
			'id_periodoacademico' => $this-> id_periodoacademico
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Nrc Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Nrc::where('id', $id)->delete();
        }
    }
}