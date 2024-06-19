<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
// use App\Models\Dosen;

class Dosen extends Component
{
    public $nidn, $nama, $umur, $alamat, $kota, $fakultas, $matakuliah, $updateDosen = false, $addDosen = false; // definisikan variabelnya dulu

    public function render() // function ini yang dipanggil di blade dengan @livewire('dosen')
    {
        $dosen = \App\Models\Dosen::latest()->get();
        return view('livewire.dosen', compact('dosen'));
    }

    protected $rules = [
        'nidn' => 'required',
        'nama' => 'required',
        'fakultas' => 'required',
        'matakuliah' => 'required'
    ];

    public function resetFields()
    {
        $this->nidn = '';
        $this->nama = '';
    }

    public function create()
    {
        $this->resetFields();
        $this->addDosen = true;
        $this->updateDosen = false;
    }

    public function store()
    {
        $this->validate();

        try {
            \App\Models\Dosen::create([
                'nidn' => $this->nidn,
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'kota' => $this->kota,
                'umur' => $this->umur,
                'fakultas' => $this->fakultas,
                'matakuliah' => $this->matakuliah
            ]);

            session()->flash('success', 'Data Dosen berhasil disimpan!!');
            $this->resetFields();
            $this->addDosen = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan dalam proses penyimpanan!! ' . $ex);
        }
    }

    public function edit($nidn)
    {
        try {
            $dosen = \App\Models\Dosen::findOrFail($nidn);
            if (!$dosen) {
                session()->flash('error', 'Dosen tidak ditemukan');
            } else {
                $this->nidn = $dosen->nidn;
                $this->nama = $dosen->nama;
                $this->alamat = $dosen->alamat;
                $this->kota = $dosen->kota;
                $this->umur = $dosen->umur;
                $this->fakultas = $dosen->fakultas;
                $this->matakuliah = $dosen->matakuliah;
                $this->updateDosen = true;
                $this->addDosen = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Gagal mengedit!!');
        }
    }

    public function ups($nidn = "")
    {
        $this->updateDosen = true;
    }

    public function update()
    {
        $this->validate();

        try {
            \App\Models\Dosen::whereNidn($this->nidn)->update([
                'nidn' => $this->nidn,
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'kota' => $this->kota,
                'umur' => $this->umur,
                'fakultas' => $this->fakultas,
                'matakuliah' => $this->matakuliah,
            ]);

            session()->flash('success', 'Data Dosen berhasil di update!!');
            $this->resetFields();
            $this->updateDosen = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan/gagal update!! ' . $ex);
        }
    }

    public function cancel()
    {
        $this->addDosen = false;
        $this->updateDosen = false;
        $this->resetFields();
    }

    public function destroy($nidn)
    {
        try {
            \App\Models\Dosen::find($nidn)->delete();
            session()->flash('success', "Data Dosen berhasil dihapus!!");
        } catch (\Exception $e) {
            session()->flash('error', "Terdapat kesalahan/gagal menghapus!!");
        }
    }
}
