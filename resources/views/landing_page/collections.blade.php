@extends('landing_page.layout.main')

@section('title', 'KOISAN WORLD - COLLECTIONS')

@section('content')

    <!-- Awal Jumbotron Collections-->
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-1 fw-normal mb-3 title">KOISAN</h1>
            <h1 class="display-1 fw-normal mb-3 title">COLLECTIONS</h1>
        </div>
        <div class="container-fluid collections py-3">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 search">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-search w-50" type="submit"><i class="bi bi-search me-2"></i>Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron Collections-->  

    <!-- Awal Collections -->

    <section id="general">
        <div class="container">
            <div class="row gy-3 justify-content-between">
                <div class="col-lg-3 p-4 rounded">
                    <h5 class="title mb-4 text-center">Rarity</h5>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Common</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Rare</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Epic</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Legendary</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                    </div>
                    <hr class="my-4">
                    <h5 class="title mb-4 text-center">Faction</h5>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Empire</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Glade</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Horde</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                    </div>
                    <hr class="my-4">
                    <h5 class="title mb-4 text-center">Element</h5>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Water</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Earth</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Fire</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Light</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Dark</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                    </div>
                    <hr class="my-4">
                    <h5 class="title mb-4 text-center">Special Edition</h5>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Normal</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Warrior</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Elite</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                        <div class="col-lg-12 d-flex justify-content-between mb-0">
                            <p class="text-collections mb-0">Mythic</p>
                            <input type="checkbox" class="form-check-input" name="" id="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-share shadow-lg mt-5 px-1 py-3" href="#" role="button">Share Collections<i class="bi bi-files ms-2"></i></a>
                    </div>    
                </div>

                <div class="col-lg-8 ms-4 text-end">
                    <div class="row">
                        <div class="dropdown mt-4">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Sorted By
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Oldest</a></li>
                                <li><a class="dropdown-item" href="#">Most Recent</a></li>
                            </ul>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,181.3C384,192,480,160,576,138.7C672,117,768,107,864,122.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Collections -->

@endsection