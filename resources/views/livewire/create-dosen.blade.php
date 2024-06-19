<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Dosen</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="nidn" class="form-label">NIDN</label>
                        <input type="text" class="form-control" id="nidn" wire:model="nidn">
                        @error('nidn') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" wire:model="nama">
                        @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="text" class="form-control" id="umur" wire:model="umur">
                        @error('umur') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" wire:model="alamat">
                        @error('alamat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" wire:model="kota">
                        @error('kota') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fakultas" class="form-label">Fakultas</label>
                        <input type="text" class="form-control" id="fakultas" wire:model="fakultas">
                        @error('fakultas') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="matakuliah" class="form-label">Mata Kuliah</label>
                        <input type="text" class="form-control" id="matakuliah" wire:model="matakuliah">
                        @error('matakuliah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" wire:click="cancel">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
