@extends('landing_page.layout.main')

@section('title', 'KOISAN WORLD - REWARDS')

@section('content')

    <!-- Awal Jumbotron Store-->
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-1 fw-normal mb-3 title">EARN REWARDS</h1>
            <h3 class="display-6 fw-normal mb-3 title">FOR A LIMITED TIME ONLY</h3>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,165.3C384,171,480,181,576,181.3C672,181,768,171,864,154.7C960,139,1056,117,1152,122.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <!-- Akhir Jumbotron Store-->  

    <!-- Awal Rewards -->
    <section id="rewards_community">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11 col-md-11 shadow-lg border bg-sanke rounded">
                    <div class="row justify-content-between text-center align-items-center">
                        <div class="rewards_community col-lg-4 col-md-4 border border-light m-3 rounded position-relative">
                            <h2 class="mt-5">0</h2>
                            <h3 class="mb-5">Gems</h3>
                            <div class="position-absolute bottom-0 start-50 translate-middle-x">
                                <p>From Community Milestone</p>
                            </div>
                        </div>
                        <div class="rewards_community col-lg-3 col-md-3">
                            <h2>YOUR TOTAL</h2>
                            <h3 class="mb-4">REWARDS ARE:</h3>
                            <a class="btn btn-buy shadow-lg btn-lg px-5 py-3 me-2" href="{{ url('/store') }}" role="button"><i class="bi bi-person me-2"></i>Connect</a>
                        </div>
                        <div class="rewards_community col-lg-4 col-md-4 border border-light m-3 rounded position-relative">
                            <h2 class="mt-5">0</h2>
                            <h3 class="mb-5">BTE</h3>
                            <div class="position-absolute bottom-0 start-50 translate-middle-x">
                                <p>From Referrals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="display-3 fw-normal title text-center mt-5">Community milestones</h1>
        <p class="text-center">~1.4% of total Gem supply will be given for free as a bonus for buying in the presale.</p>
        <p class="text-center">Spend more and spend first to earn more!</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,181.3C384,192,480,160,576,138.7C672,117,768,107,864,122.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Rewards -->

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
                                <a class="btn btn-share shadow-lg btn-lg px-5 py-3 me-2" href="{{ url('/store') }}" role="button">Copy Link<i class="bi bi-files ms-2"></i></a>
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