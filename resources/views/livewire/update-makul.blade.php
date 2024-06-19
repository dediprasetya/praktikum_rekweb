<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Update Data Mata Kuliah</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="update">
                    <div class="mb-3">
                        <label for="kodematkul" class="form-label">Kode Mata Kuliah</label>
                        <input type="text" class="form-control" id="kodematkul" wire:model="kodematkul" readonly>
                        @error('kodematkul') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_matakuliah" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="nama_matakuliah" wire:model="nama_matakuliah">
                        @error('nama_matakuliah') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <input type="text" class="form-control" id="semester" wire:model="semester">
                        @error('semester') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dosen_pengampu" class="form-label">Dosen Pengampu</label>
                        <input type="text" class="form-control" id="dosen_pengampu" wire:model="dosen_pengampu">
                        @error('dosen_pengampu') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" wire:click="cancel">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
