<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                @if(!$addMakul)
                <button wire:click="create()" class="btn btn-primary btn-sm float-end">Tambah Data Mata Kuliah</button>
                @endif
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Semester</th>
                                <th>Dosen Pengampu</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($makul as $data)
                            <tr>
                                <td>{{ $data->kodematkul }}</td>
                                <td>{{ $data->nama_matakuliah }}</td>
                                <td>{{ $data->semester }}</td>
                                <td>{{ $data->dosen_pengampu }}</td>
                                <td>
                                    <button wire:click="edit('{{ $data->kodematkul }}')" class="btn btn-primary btn-sm">Edit</button>
                                    <button wire:click="destroy('{{ $data->kodematkul }}')" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" align="center">Data Mata Kuliah Kosong</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <hr />

    <div class="col-md-12 mb-2">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif

        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
        @endif

        @if($addMakul)
        @include('livewire.create-makul')
        @endif

        @if($updateMakul)
        @include('livewire.update-makul')
        @endif
    </div>
</div>
