@extends('landing_page.layout.main')

@section('title', 'KOISAN WORLD - STORE')

@section('content')

    <!-- Awal Jumbotron Store-->
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-1 fw-normal mb-3 title">Founder Sale</h1>
            <h3 class="display-6 fw-normal mb-3 title">UP TO 20% DISCOUNT FOR A LIMITED TIME ONLY</h3>
            <a class="btn btn-buy shadow-lg btn-lg mt-5 px-5 py-3 me-2" href="#" role="button"><i class="bi bi-cart3 me-2"></i>BUY Pets</a>
            <a class="btn btn-buy shadow-lg btn-lg mt-5 px-5 py-3" href="#" role="button"><i class="bi bi-cart3 me-2"></i>BUY Energy</a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,165.3C384,171,480,181,576,181.3C672,181,768,171,864,154.7C960,139,1056,117,1152,122.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <!-- Akhir Jumbotron Store-->  

    <!-- Awal Pets -->
    <section id="description" class="pets text-center">
        <h1 class="display-3 fw-normal">Pets</h1>
        <h1 class="display-3 fw-normal mb-3">Summon</h1>
        <hr class="my-4">
        <p>Collect Guardians and build your dream team.</p>
        <p>Each hero is unique and offers deep, strategic combinations for you and your Guild.</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,181.3C384,192,480,160,576,138.7C672,117,768,107,864,122.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Pets -->

    <!-- Awal Carousel -->
    <section id="carousel" class="carosel">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <center><img src="img/koisan_kohaku.png" class="d-block w-50" alt="..."></center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>KOHAKU</h5>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <center><img src="img/koisan_tancho.png" class="d-block w-50" alt="..."></center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>TANCHO</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <center><img src="img/koisan_shiro.png" class="d-block w-50" alt="..."></center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SHIRO</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <center><img src="img/koisan_sanke.png" class="d-block w-50" alt="..."></center>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SANKE</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,101.3C384,128,480,160,576,160C672,160,768,128,864,133.3C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Carousel -->

    <!-- Awal Rank -->
    <section id="rank" class="rank">
        <div class="container">
            <div class="row align-items-center justify-content-center gy-3 mt-3">
                <div class="col-lg-11 col-md-11 col-sm-11">
                    <div class="row gy-5 justify-content-center text-light text-start mb-5">
                        <div class="col-lg-3 col-md-3 col-sm-3 rounded m-2 border p-4 position-relative">
                            <div class="captionsRank mb-2">
                                <h2 class="mb-0 fw-bold mt-3"> RARE </h2>
                                <h2 class="mb-4 fw-bold"> PETS </h2>
                                <p class="mb-0 fw-normal"> <i class="bi bi-arrow-right me-2"></i> 1 random Rare or better </p>
                                <p class="mb-0 fw-normal"> <i class="bi bi-arrow-right me-2"></i> Chance for Epic / Legendary </p>
                                <p class="mb-0 fw-normal"> <i class="bi bi-arrow-right me-2"></i> Chance for Chroma skins </p>
                                <p class="mb-4 fw-normal"> <i class="bi bi-arrow-right me-2"></i> Chance for 1 of 1 Mythic </p>
                            
                                <small class="text-muted mb-3">Select how many packs to purchase</small>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </span>
                                </div>
                                <h2 class="mb-0 mt-4 fw-bold text-center text-danger"> $10 <strong class="text-dark text-decoration-line-through">$12.5</strong> </h2>
                                <p class="mb-4 fw-normal text-center"> Coming Soon </p>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle">
                                <a class="btn btn-rank shadow-lg btn-lg px-5 py-3 me-2" href="#" role="button">Not Available</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 rounded m-2 border p-4 position-relative">
                            <div class="captionsRank mb-2">
                                <h2 class="mb-0 fw-bold mt-3"> EPIC </h2>
                                <h2 class="mb-4 fw-bold"> PETS </h2>
                                <p class="mb-0 fw-normal"> <i class="bi bi-arrow-right me-2"></i> 1 random Epic or better </p>
                                <p class="mb-0 fw-normal"> <i class="bi bi-arrow-right me-2"></i> Chance for Legendary </p>
                                <p class="mb-0 fw-normal"> <i class="bi bi-arrow-right me-2"></i> Chance for Chroma skins </p>
                                <p class="mb-4 fw-normal"> <i class="bi bi-arrow-right me-2"></i> Chance for 1 of 1 Mythic </p>

                                <small class="text-muted mb-3">Select how many packs to purchase</small>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </span>
                                </div>
                                <h2 class="mb-0 mt-4 fw-bold text-center text-danger"> $44 <strong class="text-dark text-decoration-line-through">$55</strong> </h2>
                                <p class="mb-4 fw-normal text-center"> Coming Soon </p>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle">
                                <a class="btn btn-rank shadow-lg btn-lg px-5 py-3 me-2" href="#" role="button">Not Available</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 rounded m-2 border p-4 position-relative">
                            <div class="captionsRank mb-2">
                                <h2 class="mb-0 fw-bold mt-3"> LEGENDARY </h2>
                                <h2 class="mb-4 fw-bold"> PETS </h2>
                                <p class="mb-0 fw-normal"> <i class="bi bi-arrow-right me-2"></i> 1 random Legendary </p>
                                <p class="mb-0 fw-normal"> <i class="bi bi-arrow-right me-2"></i> Chance for Chroma skins </p>
                                <p class="mb-5 fw-normal"> <i class="bi bi-arrow-right me-2"></i> Chance for 1 of 1 Mythic </p>

                                <small class="text-muted mb-3">Select how many packs to purchase</small>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </span>
                                </div>
                                <h2 class="mb-0 mt-4 fw-bold text-center"> $250 </h2>
                                <p class="mb-4 fw-normal text-center"> 0 of 7,500 Remaining </p>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle">
                                <a class="btn btn-rank shadow-lg btn-lg px-5 py-3 me-2" href="#" role="button">SOLD OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,165.3C384,149,480,107,576,101.3C672,96,768,128,864,144C960,160,1056,160,1152,149.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Rank -->

    <!-- Awal Pets & Energy -->
    <section id="pets_energy" class="pets_energy text-center">
        <h1 class="display-3 fw-normal">PET AND ENERGY BOOSTS</h1>
        <p>Collect pets or energy tokens which provide a permanent boost to your team.</p>
        <p>More crafting materials, more items or more shards!</p>
        <div class="container mt-5">
            <div class="row align-items-center justify-content-center gy-3 mt-3">
                <div class="col-lg-11 col-md-11 col-sm-11">
                    <div class="row gy-5 justify-content-center text-light text-start mb-5">
                        <div class="col-lg-3 col-md-3 col-sm-3 rounded m-2 border p-4 position-relative">
                            <div class="captionsRank mb-2">
                                <h2 class="mb-0 fw-bold mt-3"> PET </h2>
                                <h2 class="mb-4 fw-bold"> SUMMON </h2>
                                <p class="mb-4 fw-normal"> <i class="bi bi-arrow-right me-2"></i> 1 random pet (Common to Legendary) </p>
                            
                                <small class="text-muted mb-3">Select how many packs to purchase</small>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </span>
                                </div>
                                <h2 class="mb-0 mt-4 fw-bold text-center text-danger"> $60 <strong class="text-dark text-decoration-line-through">$75</strong> </h2>
                                <p class="mb-4 fw-normal text-center"> Coming Soon </p>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle">
                                <a class="btn btn-rank shadow-lg btn-lg px-5 py-3 me-2" href="#" role="button">Not Available</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 rounded m-2 border p-4 position-relative">
                            <div class="captionsRank mb-2">
                                <h2 class="mb-0 fw-bold mt-3"> ENERGY </h2>
                                <h2 class="mb-4 fw-bold"> BOOSTER</h2>
                                <p class="mb-5 fw-normal"> <i class="bi bi-arrow-right me-2"></i> 1 Energy Booster Token </p>

                                <small class="text-muted mb-3">Select how many packs to purchase</small>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </span>
                                </div>
                                <h2 class="mb-0 mt-4 fw-bold text-center text-danger"> $120 <strong class="text-dark text-decoration-line-through">$150</strong> </h2>
                                <p class="mb-4 fw-normal text-center"> Coming Soon </p>
                            </div>
                            <div class="position-absolute top-100 start-50 translate-middle">
                                <a class="btn btn-rank shadow-lg btn-lg px-5 py-3 me-2" href="#" role="button">Not Available</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,170.7C384,192,480,192,576,192C672,192,768,192,864,170.7C960,149,1056,107,1152,106.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Pets -->

    <!-- Awal Share -->
        <section id="share" class="share">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 rounded text-center bg-sanke shadow-lg text-light py-5">
                        <h2>SHARE YOUR UNIQUE LINK TO EARN</h2>
                        <h5>Give your friends 5% off their purchases</h5>
                        <h5>and earn 5% of what they spend</h5>
                        <div class="row justify-content-center mt-4 mb-4">
                            <div class="col-lg-5">
                                <small class="text-muted mb-1">Share link:</small><p></p>
                                <a class="btn btn-share shadow-lg btn-lg px-5 py-3 me-2" href="#" role="button">Copy Link<i class="bi bi-files ms-2"></i></a>
                            </div>
                            <div class="col-lg-5">
                                <small class="text-muted mb-1">Share on:</small><p></p>
                                <a class="btn btn-share shadow-lg btn-lg px-5 py-3 me-2" href="#" role="button"><i class="bi bi-twitter"></i></a>
                            </div>
                        </div>
                        <p class="mb-0">*Referrals only count for ETH purchases.</p>
                        <p class="mb-0">Bots are not allowed to participate.</p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,96C384,96,480,128,576,133.3C672,139,768,117,864,122.7C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </section>
    <!-- Akhir Share -->

@endsection