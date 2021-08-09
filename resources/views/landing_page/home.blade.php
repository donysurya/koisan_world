@extends('landing_page.layout.main')

@section('title', 'KOISAN WORLD')

@section('content')

    <!-- Awal Jumbotron -->
    <div class="jumbotron text-dark">
        <div class="container text-center">
            <h1 class="display-1 fw-normal mb-3 title">KOISAN WORLD</h1>
            <p class="lead fs-2 mt-4">TURN YOUR GAMING</p>
            <p class="lead fs-3 mb-4">PASSION INTO NFTS</p>
            <hr class="my-4">
            <p class="desc">Play and earn instead in the world’s first mobile RPG with a real world economy!</p>
            <a class="btn btn-buy shadow-lg btn-lg mt-5 px-5 py-3" href="{{ url('/store') }}" role="button"><i class="bi bi-cart3 me-2"></i>BUY NOW</a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L60,149.3C120,139,240,117,360,138.7C480,160,600,224,720,240C840,256,960,224,1080,202.7C1200,181,1320,171,1380,165.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </div>
    <!-- Akhir Jumbotron -->  

    <!-- Awal Description -->
    <section id="description" class="description">
        <div class="container">
            <h1 class="display-4 fw-normal text-center mb-3">CHOOSE YOUR PET</h1>
            <div class="col-lg-12 col-md-12 mt-5">
                <div class="row g-3 justify-content-center text-center">
                    <div class="card m-1 shadow" style="width: 15rem;">
                        <img src="img/koisan_kohaku.png" class="card-img-top p-2 mb-3" alt="...">
                        <div class="card-body border-top">
                            <p class="card-text fs-5"> KOHAKU </p>
                        </div>
                    </div>
                    <div class="card m-1 shadow" style="width: 15rem;">
                        <img src="img/koisan_tancho.png" class="card-img-top p-2 mb-3" alt="...">
                        <div class="card-body border-top">
                            <p class="card-text fs-5"> TANCHO </p>
                        </div>
                    </div>
                    <div class="card m-1 shadow" style="width: 15rem;">
                        <img src="img/koisan_shiro.png" class="card-img-top p-2 mb-3" alt="...">
                        <div class="card-body border-top">
                            <p class="card-text fs-5"> SHIRO </p>
                        </div>
                    </div>
                    <div class="card m-1 shadow" style="width: 15rem;">
                        <img src="img/koisan_sanke.png" class="card-img-top p-2 mb-3" alt="...">
                        <div class="card-body border-top">
                            <p class="card-text fs-5"> SANKE </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Description -->

    <!-- Awal Pre-Sale -->
    <section id="pre_sale" class="pre_sale">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,256L60,224C120,192,240,128,360,112C480,96,600,128,720,160C840,192,960,224,1080,224C1200,224,1320,192,1380,176L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
        <div class="container">
            <div class="row gy-3 align-items-center">
                <div class="col-lg-8">
                    <div class="row gy-2 justify-content-center text-light">
                        <img src="img/explore-bali.png" alt="" class="frame_presale">
                    </div>
                </div>
                <div class="col-lg-4 bonus">
                    <p class="fs-5 mb-1">Buy <strong> limited edition pet </strong> and get</p>
                    <h1 class="mb-1 display-3">free bonus</h1>
                    <h2 class="mb-4">Koisan World tokens</h2>
                    <a class="btn btn-button shadow-lg btn-lg px-5 py-3" href="{{ url('/store') }}" role="button"><i class="bi bi-cart3 me-2"></i>BUY NOW</a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L60,122.7C120,149,240,203,360,202.7C480,203,600,149,720,117.3C840,85,960,75,1080,96C1200,117,1320,171,1380,197.3L1440,224L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Pre-Sale -->

    <!-- Awal Introduction -->
    <section id="introduction" class="introduction">
        <h1 class="display-3 fw-normal mb-3 text-center">Introduction of gaming nfts</h1>
        <hr class="my-4">
        <div class="container">
            <div class="row justify-content-center align-items-center gy-5 mt-3">
                <div class="col-lg-6">
                    <ul class="nav nav-pills mb-3 justify-content-center ms-0 ps-0" id="pills-tab" role="tablist">
                        <li class="nav-item btn-introduction rounded" role="presentation">
                            <button class="nav-link active fs-5" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">01</button>
                        </li>
                        <li class="nav-item btn-introduction rounded" role="presentation">
                            <button class="nav-link fs-5" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">02</button>
                        </li>
                        <li class="nav-item btn-introduction rounded" role="presentation">
                            <button class="nav-link fs-5" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">03</button>
                        </li>
                    </ul>
                    <hr class="my-4">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolorem itaque, expedita omnis possimus repudiandae tenetur accusantium provident similique molestiae odit, cupiditate quos exercitationem aspernatur nihil ipsa. Voluptatum possimus explicabo harum est minus asperiores deleniti ullam? Cum maxime eum aperiam!
                        </div>
                        <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis pariatur earum harum sit atque illum sapiente id eligendi, facere, fuga officiis deserunt rem exercitationem error, necessitatibus officia perferendis natus. Nam quaerat ab modi. Reprehenderit quos atque nam nesciunt tenetur quia!
                        </div>
                        <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt optio accusantium tenetur laborum omnis dicta assumenda neque? Ducimus minima ipsum animi nobis, explicabo odit culpa molestias eveniet totam impedit asperiores a doloremque iusto placeat veniam dolor officiis recusandae, sint dolorum.
                        </div>
                    </div>

                    <a class="btn btn-button shadow btn-lg mt-5 px-5 py-3" href="#" role="button"><i class="bi bi-cart3 me-2"></i>BUY NOW</a>
                </div>
                <div class="col-lg-6 text-center position-relative">
                    <img src="img/iphone_koisanworld.png" alt="" class="frame">
                </div>
                <h2 class="text-center mb-4">Our Partners</h2>
                <div class="row justify-content-center text-center g-3">
                    <div class="col-lg-3 col-md-3 m-3">
                        <img src="img/graphie.svg" alt="" width="200">
                    </div>
                    <div class="col-lg-3 col-md-3 m-3">
                        <img src="img/bitcoinee.png" alt="" width="180">
                    </div>
                    <div class="col-lg-3 col-md-3 m-3">
                        <img src="img/ubisoft.png" alt="" width="180">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Introduction -->

    <!-- Awal Game Details -->
    <section id="game_details" class="game_details text-center position-relative">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L80,154.7C160,149,320,139,480,154.7C640,171,800,213,960,218.7C1120,224,1280,192,1360,176L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        <h1 class="display-3 fw-normal mb-3">future of gaming nfts</h1>
        <hr class="my-4">
        <p>Play and earn instead in the world's first mobile RPG</p>
        <p>where every pet is part of a real money economy.</p>
        <a class="btn btn-button shadow btn-lg mt-3 px-5 py-3" href="{{ url('/store') }}" role="button"><i class="bi bi-cart3 me-2"></i>BUY NOW</a>
        
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L80,154.7C160,149,320,139,480,154.7C640,171,800,213,960,218.7C1120,224,1280,192,1360,176L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Game Details -->
    
    <!-- Awal Founder Sale -->
    <section id="founder_sale">
        <div class="container">
            <div class="row align-items-center justify-content-center gy-3 mt-3">
                <div class="col-lg-11 col-md-11 col-sm-11">
                    <div class="row g-3 justify-content-center text-light text-start mb-5">
                        <div class="col-lg-4 col-md-3 col-sm-3 border content1 rounded m-2 d-flex align-items-end">
                            <div class="captions mb-2">
                                <h2 class="mb-0 fw-bold"> epic fantasi rpg </h2>
                                <p class="mb-0 fw-normal"> Explore a rich world of dungeons, magic, orcs, elves, and more. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3 border content2 rounded m-2 d-flex align-items-end">
                            <div class="captions mb-2">
                                <h2 class="mb-0 fw-bold"> loot & trade </h2>
                                <p class="mb-0 fw-normal"> Own your loot for real, forever. Trade any item to other players. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 founder text-center">
                    <h2 class="text-uppercase fw-bold"> STOP WASTING MONEY </h2>
                    <h2 class="text-uppercase mb-4 fw-bold"> ON PET YOU DON’T OWN. </h2>
                    <p class="mb-1 fw-normal fs-5"> Play and earn instead in the world’s first mobile RPG </p>
                    <p class="fw-normal fs-5"> with a real world economy! </p>
                </div>
                <div class="col-lg-6 text-center position-relative">
                    <img src="img/koisan_all.png" alt="" class="frame">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,128L40,117.3C80,107,160,85,240,101.3C320,117,400,171,480,186.7C560,203,640,181,720,165.3C800,149,880,139,960,117.3C1040,96,1120,64,1200,80C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Founder Sale -->

    <!-- Awal Pre Register -->
    <section id="pre_register" class="pre_register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 register border border-primary py-5 bg-primary shadow-lg text-light position-relative rounded mb-5 text-center">
                    <h2 class="text-uppercase fw-bold mb-2"> Buy founder NFTs which will </h2>
                    <h2 class="text-uppercase fw-bold"> NEVER be sold again! </h2>
                    <div class="position-absolute top-50 start-0 translate-middle koisan">
                        <img src="img/koisan_sanke.png" alt="koisan_sanke" width="200">
                    </div>
                    <div class="position-absolute top-100 start-50 translate-middle">
                        <a href="{{ url('/store') }}" class="btn btn-button text-uppercase fw-light shadow-lg py-3 px-5"><i class="bi bi-cart3 me-2 buy"></i>buy now</a>
                    </div>
                </div>

                <div class="col-8 register border border-primary py-5 bg-sanke text-light rounded mt-4 mb-5">
                    <form action="#" method="post" class="row g-3 justify-content-center">
                        <h2 class="text-uppercase fw-bold mb-2 text-upprecase text-center"><i class="bi bi-justify-left me-2"></i> pre-register </h2>
                        <div class="col-9">
                            <input type="text" class="form-control" id="staticEmail1" placeholder="johndoe@gmail.com">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-button shadow fw-light mb-3 text-uppercase">pre-register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,96L40,90.7C80,85,160,75,240,85.3C320,96,400,128,480,122.7C560,117,640,75,720,64C800,53,880,75,960,96C1040,117,1120,139,1200,133.3C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Pre Register -->

@endsection