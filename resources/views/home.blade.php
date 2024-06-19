<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD menggunakan LIVEWIRE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">CRUD dengan Livewire</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#dosen">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#makul">Mata Kuliah</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-12" id="mahasiswa">
                <h2>Mahasiswa</h2>
                @livewire('mahasiswa')
            </div>
            <div class="col-12 mt-5" id="dosen">
                <h2>Dosen</h2>
                @livewire('dosen')
            </div>
            <div class="col-12 mt-5" id="makul">
                <h2>Mata Kuliah</h2>
                @livewire('makul')
            </div>
        </div>
    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybBogGzj+S8mBzeRvwb5K6cFf9CA5xAvb+0Vb5rx5iq2tj7x1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-p5m6BHJ+Y5oHkIYVpxrF9GLo0rgXWMRQ14MHAz3pewxh8AsLmbf6D55s8RoB6p5a"
        crossorigin="anonymous"></script>
</body>

</html>
