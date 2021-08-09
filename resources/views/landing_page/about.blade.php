@extends('landing_page.layout.main')

@section('title', 'KOISAN WORLD - FAQ')

@section('content')

    <!-- Awal Jumbotron FAQ-->
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-1 fw-normal mb-3 title">FREQUENTLY</h1>
            <h1 class="display-1 fw-normal mb-3 title">ASKED QUESTIONS</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,165.3C384,171,480,181,576,181.3C672,181,768,171,864,154.7C960,139,1056,117,1152,122.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <!-- Akhir Jumbotron FAQ-->  

    <!-- Awal FAQ -->

    <section id="general">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 p-4 rounded">
                    <h3 class="title mb-4 text-center">NAVIGATION</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><a class="btn btn-navigation text-start" href="#general"><i class="bi bi-arrow-right me-2"></i>General</a></li>
                        <li class="list-group-item"><a class="btn btn-navigation text-start" href="#presale_info"><i class="bi bi-arrow-right me-2"></i>Presale Info</a></li>
                        <li class="list-group-item"><a class="btn btn-navigation text-start" href="#support"><i class="bi bi-arrow-right me-2"></i>Support</a></li>
                    </ul>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-buy shadow-lg btn-lg mt-5 px-4 py-2" href="#" role="button"><i class="bi bi-person-lines-fill me-2"></i>Contact Us</a>
                    </div>    
                </div>

                <div class="col-lg-8 ms-4 mt-0">
                    <section id="general">
                        <h1 class="section_title mt-4">General</h1>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        What is Koisan World?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iure enim nihil quisquam nemo delectus itaque iste ipsum debitis obcaecati doloribus magni sed cumque quod praesentium eaque cum, accusamus sequi adipisci odit magnam necessitatibus provident atque! In, nobis dolor mollitia, sunt dicta ratione aspernatur autem delectus repellendus quod quas? Facere.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Will it be free to play?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto fugit facere porro a minus necessitatibus accusamus praesentium. Ullam eos rem iste eius molestias, exercitationem est optio repellendus quisquam reprehenderit consequuntur nesciunt pariatur hic libero, officiis, doloribus qui vero. Voluptatum esse doloribus ea minima placeat dolore vero itaque fuga quas non.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        How do I play?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        When does the game come out?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Is it pay-to-win?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        What technology do you use to allow for true digital ownership?
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        Where can I learn more about the game?
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingEight">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                        Who is the team behind the game?
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="presale_info">
                        <h1 class="section_title mt-4">Presale Info</h1>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-presaleOne">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePsOne" aria-expanded="false" aria-controls="flush-collapsePsOne">
                                    How do I purchase?
                                    </button>
                                </h2>
                                <div id="flush-collapsePsOne" class="accordion-collapse collapse" aria-labelledby="flush-presaleOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iure enim nihil quisquam nemo delectus itaque iste ipsum debitis obcaecati doloribus magni sed cumque quod praesentium eaque cum, accusamus sequi adipisci odit magnam necessitatibus provident atque! In, nobis dolor mollitia, sunt dicta ratione aspernatur autem delectus repellendus quod quas? Facere.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-presaleTwo">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePsTwo" aria-expanded="false" aria-controls="flush-collapsePsTwo">
                                    Do I get anything from inviting my friends?
                                    </button>
                                </h2>
                                <div id="flush-collapsePsTwo" class="accordion-collapse collapse" aria-labelledby="flush-presaleTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto fugit facere porro a minus necessitatibus accusamus praesentium. Ullam eos rem iste eius molestias, exercitationem est optio repellendus quisquam reprehenderit consequuntur nesciunt pariatur hic libero, officiis, doloribus qui vero. Voluptatum esse doloribus ea minima placeat dolore vero itaque fuga quas non.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-presaleThree">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePsThree" aria-expanded="false" aria-controls="flush-collapsePsThree">
                                    What is a Wallet?
                                    </button>
                                </h2>
                                <div id="flush-collapsePsThree" class="accordion-collapse collapse" aria-labelledby="flush-presaleThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-presaleFour">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePsFour" aria-expanded="false" aria-controls="flush-collapsePsFour">
                                    How do I setup a wallet?
                                    </button>
                                </h2>
                                <div id="flush-collapsePsFour" class="accordion-collapse collapse" aria-labelledby="flush-presaleFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-presaleFive">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePsFive" aria-expanded="false" aria-controls="flush-collapsePsFive">
                                    How do I get BTE?
                                    </button>
                                </h2>
                                <div id="flush-collapsePsFive" class="accordion-collapse collapse" aria-labelledby="flush-presaleFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-presaleSix">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePsSix" aria-expanded="false" aria-controls="flush-collapsePsSix">
                                    How do I send Ether to Bitcoinee?
                                    </button>
                                </h2>
                                <div id="flush-collapsePsSix" class="accordion-collapse collapse" aria-labelledby="flush-presaleSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, amet, ut, suscipit dolorem tempora deleniti ex architecto recusandae fuga tempore assumenda natus quae perferendis earum possimus nesciunt voluptatum fugit debitis atque. Corporis cumque natus saepe fuga at eius commodi. Quibusdam, dicta. Beatae porro consequuntur odio recusandae natus ad quidem commodi!</div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="support">
                        <h1 class="section_title mt-4">Support</h1>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-supportOne">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSupportOne" aria-expanded="false" aria-controls="flush-collapseSupportOne">
                                    I need help!
                                    </button>
                                </h2>
                                <div id="flush-collapseSupportOne" class="accordion-collapse collapse" aria-labelledby="flush-supportOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi iure enim nihil quisquam nemo delectus itaque iste ipsum debitis obcaecati doloribus magni sed cumque quod praesentium eaque cum, accusamus sequi adipisci odit magnam necessitatibus provident atque! In, nobis dolor mollitia, sunt dicta ratione aspernatur autem delectus repellendus quod quas? Facere.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-supportTwo">
                                    <button class="accordion-button ps-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSupportTwo" aria-expanded="false" aria-controls="flush-collapseSupportTwo">
                                    How can I reach out about business opportunities?
                                    </button>
                                </h2>
                                <div id="flush-collapseSupportTwo" class="accordion-collapse collapse" aria-labelledby="flush-supportTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto fugit facere porro a minus necessitatibus accusamus praesentium. Ullam eos rem iste eius molestias, exercitationem est optio repellendus quisquam reprehenderit consequuntur nesciunt pariatur hic libero, officiis, doloribus qui vero. Voluptatum esse doloribus ea minima placeat dolore vero itaque fuga quas non.</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,181.3C384,192,480,160,576,138.7C672,117,768,107,864,122.7C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir FAQ -->

@endsection