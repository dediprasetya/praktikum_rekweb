<?php

namespace App\Http\Livewire;
use Illuminate\Support\Str;
use Livewire\Component;
//use App\Models\Makul;

class Makul extends Component
{
    public $kodematkul, $nama_matakuliah, $semester, $dosen_pengampu, $updateMakul = false, $addMakul = false; // definisikan variabelnya dulu

    public function render() // function ini yang dipanggil di blade dengan @livewire('makul')
    {
        $makul = \App\Models\Makul::latest()->get();
        return view('livewire.makul', compact('makul'));
    }

    protected $rules = [
        'kodematkul' => 'required',
        'nama_matakuliah' => 'required',
        'semester' => 'required',
        'dosen_pengampu' => 'required'
    ];

    public function resetFields()
    {
        $this->kodematkul = '';
        $this->nama_matakuliah = '';
        $this->semester = '';
        $this->dosen_pengampu = '';
    }

    public function create()
    {
        $this->resetFields();
        $this->addMakul = true;
        $this->updateMakul = false;
    }

    public function store()
    {
        $this->validate();

        try {
            \App\Models\Makul::create([
                'kodematkul' => $this->kodematkul,
                'nama_matakuliah' => $this->nama_matakuliah,
                'semester' => $this->semester,
                'dosen_pengampu' => $this->dosen_pengampu
            ]);

            session()->flash('success', 'Data Mata Kuliah berhasil disimpan!!');
            $this->resetFields();
            $this->addMakul = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan dalam proses penyimpanan!! ' . $ex);
        }
    }

    public function edit($kodematkul)
    {
        try {
            $makul = \App\Models\Makul::findOrFail($kodematkul);
            if (!$makul) {
                session()->flash('error', 'Mata Kuliah tidak ditemukan');
            } else {
                $this->kodematkul = $makul->kodematkul;
                $this->nama_matakuliah = $makul->nama_matakuliah;
                $this->semester = $makul->semester;
                $this->dosen_pengampu = $makul->dosen_pengampu;
                $this->updateMakul = true;
                $this->addMakul = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Gagal mengedit!!');
        }
    }

    public function ups($kodematkul = "")
    {
        $this->updateMakul = true;
    }

    public function update()
    {
        $this->validate();

        try {
            \App\Models\Makul::whereKodematkul($this->kodematkul)->update([
                'kodematkul' => $this->kodematkul,
                'nama_matakuliah' => $this->nama_matakuliah,
                'semester' => $this->semester,
                'dosen_pengampu' => $this->dosen_pengampu,
            ]);

            session()->flash('success', 'Data Mata Kuliah berhasil diupdate!!');
            $this->resetFields();
            $this->updateMakul = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan/gagal update!! ' . $ex);
        }
    }

    public function cancel()
    {
        $this->addMakul = false;
        $this->updateMakul = false;
        $this->resetFields();
    }

    public function destroy($kodematkul)
    {
        try {
            \App\Models\Makul::find($kodematkul)->delete();
            session()->flash('success', "Data Mata Kuliah berhasil dihapus!!");
        } catch (\Exception $e) {
            session()->flash('error', "Terdapat kesalahan/gagal menghapus!!");
        }
    }
}
