<?= self::extend('layout/user-template') ?>
<?= self::section('content');?>
<main>
    <section class="section-image light ken-burn-center" data-parallax="scroll"
        data-image-src="http://via.placeholder.com/1920x1080">
        <div class="container">
            <hr class="space-lg" />
            <hr class="space-sm" />
            <div class="row justify-content-around">
                <div class="col-lg-6">
                    <h1 data-anima="fade-left" data-time="2000" class="text-lg text-uppercase text-black">Stunning high
                        treks</h1>
                    <hr class="space-sm" />
                    <hr class="space-xs" />
                    <table data-anima="fade-left" data-time="3000"
                        class="table table-grid table-border align-left table-10">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="counter counter-horizontal counter-icon">
                                        <i class="im-cloud-sun text-md"></i>
                                        <div>
                                            <h3>Civetta mountain</h3>
                                            <div class="value">
                                                <span class="text-md" data-to="15" data-speed="2000">15</span>
                                                <span>° C - 1700 m</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="counter counter-horizontal counter-icon">
                                        <i class="im-clouds text-md"></i>
                                        <div>
                                            <h3>San Pellegrino</h3>
                                            <div class="value">
                                                <span class="text-md" data-to="11" data-speed="2000">11</span>
                                                <span>° C - 2100 m</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr class="space-sm" />
                    <hr class="space-xs" />
                    <a href="treks.html" class="btn btn-sm btn-circle" data-anima="fade-left" data-time="3000">View
                        treks</a>
                    <a href="team.html" class="btn btn-sm btn-circle btn-border" data-anima="fade-left"
                        data-time="3000">View team</a>
                </div>
                <div class="col-lg-5 align-right align-left-md">
                    <hr class="space visible-md" />
                    <ul class="slider" data-options="type:slider,perView:1,nav:true,autoplay:3500,controls:out"
                        data-anima="fade-right" data-time="2000">
                        <li>
                            <img class="width-415" src="media/path.png" alt="" />
                            <hr class="space" />
                            <h3 class="text-black text-uppercase">Pellegrino expedition</h3>
                            <p class="no-margin">Price from $ 60</p>
                        </li>
                        <li>
                            <img class="width-415" src="media/path.png" alt="" />
                            <hr class="space" />
                            <h3 class="text-black text-uppercase">Civetta trek</h3>
                            <p class="no-margin">Price from $ 100</p>
                        </li>
                        <li>
                            <img class="width-415" src="media/path.png" alt="" />
                            <hr class="space" />
                            <h3 class="text-black text-uppercase">Mounte De France trip</h3>
                            <p class="no-margin">Price from $ 60</p>
                        </li>
                        <li>
                            <img class="width-415" src="media/path.png" alt="" />
                            <hr class="space" />
                            <h3 class="text-black text-uppercase">Nevegal expedition</h3>
                            <p class="no-margin">Price from $ 90</p>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="space-lg" />
            <hr class="space hidden-sm" />
        </div>
    </section>
    <section class="section-base section-color section-call">
        <div class="container">
            <div class="cnt-box cnt-call">
                <i class="im-paper-plane"></i>
                <div class="caption">
                    <h2>Join the treks</h2>
                    <p>Lorem ipsum dolor sitamet consectetur adipisicing elito sed do eiusmod tempore.</p>
                    <a href="contacts.html" class="btn btn-xs">Contact us</a>
                </div>
            </div>
            <ul class="slider"
                data-options="type:carousel,arrows:true,perView:4,perViewMd:3,perViewSm:2,perViewXs:1,gap:30,controls:out,autoplay:3000">
                <li>
                    <a class="img-box lightbox img-box-caption" href="http://via.placeholder.com/800x1300"
                        data-lightbox-anima="fade-left">
                        <img src="http://via.placeholder.com/800x1300" alt="" />
                        <span>Dolomiti mountains</span>
                    </a>
                </li>
                <li>
                    <a class="img-box lightbox img-box-caption" href="http://via.placeholder.com/800x1300"
                        data-lightbox-anima="fade-left">
                        <img src="http://via.placeholder.com/800x1300" alt="" />
                        <span>Civetta mountain</span>
                    </a>
                </li>
                <li>
                    <a class="img-box lightbox img-box-caption" href="http://via.placeholder.com/800x1300"
                        data-lightbox-anima="fade-left">
                        <img src="http://via.placeholder.com/800x1300" alt="" />
                        <span>San Pellegrino</span>
                    </a>
                </li>
                <li>
                    <a class="img-box lightbox img-box-caption" href="http://via.placeholder.com/800x1300"
                        data-lightbox-anima="fade-left">
                        <img src="http://via.placeholder.com/800x1300" alt="" />
                        <span>Nevegal mountain</span>
                    </a>
                </li>
                <li>
                    <a class="img-box lightbox img-box-caption" href="http://via.placeholder.com/800x1300"
                        data-lightbox-anima="fade-left">
                        <img src="http://via.placeholder.com/800x1300" alt="" />
                        <span>Passo San Boldo</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="section-base">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="title">
                        <h2>About us</h2>
                        <p>Secret wild locations</p>
                    </div>
                    <hr class="space-xs" />
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elitsed do esectetur adipiscing elitsed do
                        eiusmoiusmod tempor incididunt utlabore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-4 no-margin-md">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore
                        eud exercitation ullamco laboris nisi ut alit dolore magna aliqua. Utenim ad minim veniam quis
                        nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
                <div class="col-lg-4">
                    <ul class="text-list text-list-line line-4">
                        <li>
                            <b>Foundation</b>
                            <hr />
                            <p>1995</p>
                        </li>
                        <li>
                            <b>Address</b>
                            <hr />
                            <p>Civetta, Trentino, Italy</p>
                        </li>
                        <li>
                            <b>Email</b>
                            <hr />
                            <p>name@example.com</p>
                        </li>
                        <li>
                            <b>Phone and fax</b>
                            <hr />
                            <p>(02) 123 44 55 666</p>
                        </li>
                        <li>
                            <b>Team members</b>
                            <hr />
                            <p>10+</p>
                        </li>
                        <li>
                            <b>Treks and paths</b>
                            <hr />
                            <p>15+</p>
                        </li>
                        <li>
                            <b>Starting price</b>
                            <hr />
                            <p>from $ 50</p>
                        </li>
                        <li>
                            <b>Founder</b>
                            <hr />
                            <p>Alex Dimitri</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-image light" data-parallax="true" data-natural-height="1080" data-natural-width="1920"
        data-bleed="100" data-image-src="http://via.placeholder.com/1920x1080">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="progress-bar">
                        <h4>Experts only treks</h4>
                        <div>
                            <div data-progress="50">
                                <span class="counter" data-to="50" data-speed="2000" data-unit="%">50%</span>
                            </div>
                        </div>
                    </div>
                    <hr class="space-sm" />
                    <div class="progress-bar">
                        <h4>Emotions and fun</h4>
                        <div>
                            <div data-progress="100">
                                <span class="counter" data-to="100" data-speed="2000" data-unit="%">100%</span>
                            </div>
                        </div>
                    </div>
                    <hr class="space-sm" />
                    <div class="progress-bar">
                        <h4>Treks avarage difficulty</h4>
                        <div>
                            <div data-progress="70">
                                <span class="counter" data-to="70" data-speed="2000" data-unit="%">70%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title">
                        <h2>Top experiences</h2>
                        <p>We know how to do it</p>
                    </div>
                    <p>Lorem ipsum dolor sit ame tion ullamco laboris nisi ut aliqure in reprehenderit ma quiese nostrud
                        exercitation iconsectetur adipiscing elitsed do eiusmo fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-base section-color">
        <div class="container">
            <div class="title">
                <h2>The latest treks</h2>
                <p>Secret wild locations</p>
            </div>
            <hr class="space-sm" />
            <div class="grid-list pagination-top-right" data-columns="3" data-columns-md="2" data-columns-sm="1">
                <div class="grid-box">
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                            <div class="extra-field">From $49</div>
                            <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                    alt="" /></a>
                            <div class="caption">
                                <h2>Glacier expedition</h2>
                                <div class="cnt-info">
                                    <div><span>Days</span><span>3</span></div>
                                    <div><span>Group size</span><span>10</span></div>
                                    <div><span>Difficulty</span><span>Easy</span></div>
                                </div>
                                <p>Glacial is a mountain glacier located in the nature and lakes.</p>
                                <div class="bottom-info">Gusela, Alpes, Franch</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                            <div class="extra-field">From $79</div>
                            <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                    alt="" /></a>
                            <div class="caption">
                                <h2>Family trip</h2>
                                <div class="cnt-info">
                                    <div><span>Days</span><span>3</span></div>
                                    <div><span>Group size</span><span>10</span></div>
                                    <div><span>Difficulty</span><span>Easy</span></div>
                                </div>
                                <p>A trip for the whole family located in the nature and lakes.</p>
                                <div class="bottom-info">Pellegrino, Alpes, Italy</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                            <div class="extra-field">From $449</div>
                            <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                    alt="" /></a>
                            <div class="caption">
                                <h2>Monte Excursion</h2>
                                <div class="cnt-info">
                                    <div><span>Days</span><span>3</span></div>
                                    <div><span>Group size</span><span>10</span></div>
                                    <div><span>Difficulty</span><span>Easy</span></div>
                                </div>
                                <p>Monte Albert is a mountain located in the nature and lakes.</p>
                                <div class="bottom-info">Albert, Colorado, US</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                            <div class="extra-field">From $49</div>
                            <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                    alt="" /></a>
                            <div class="caption">
                                <h2>Bianco Excursion</h2>
                                <div class="cnt-info">
                                    <div><span>Days</span><span>3</span></div>
                                    <div><span>Group size</span><span>10</span></div>
                                    <div><span>Difficulty</span><span>Easy</span></div>
                                </div>
                                <p>Monte bianco is a mountain located in the nature and lakes.</p>
                                <div class="bottom-info">Monte bianco, Alpes, Italy</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                            <div class="extra-field">From $99</div>
                            <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                    alt="" /></a>
                            <div class="caption">
                                <h2>Civetta Trekking</h2>
                                <div class="cnt-info">
                                    <div><span>Days</span><span>3</span></div>
                                    <div><span>Group size</span><span>8</span></div>
                                    <div><span>Difficulty</span><span>Easy</span></div>
                                </div>
                                <p>Civetta mountain is a mountain located in the nature and lakes.</p>
                                <div class="bottom-info">Civetta, Dolomiti, Italy</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-base">
        <div class="container">
            <table class="table table-grid table-border table-6-md">
                <tbody>
                    <tr>
                        <td>
                            <div class="icon-box icon-box-top align-center">
                                <i class="im-foot-2"></i>
                                <div class="caption">
                                    <h3>Experienced team</h3>
                                    <p>We always lived inside our amazing nature</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="icon-box icon-box-top align-center">
                                <i class="im-icq"></i>
                                <div class="caption">
                                    <h3>Easy joining</h3>
                                    <p>Contact us and in 2 minutes you're booked</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="icon-box icon-box-top align-center">
                                <i class="im-landscape"></i>
                                <div class="caption">
                                    <h3>Expert hikers</h3>
                                    <p>Our mountans teached us everything we know</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="icon-box icon-box-top align-center">
                                <i class="im-forest"></i>
                                <div class="caption">
                                    <h3>Secret locations</h3>
                                    <p>Discover hidden natural places with our tours</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
<?= self::endSection('content');?>
<?= self::section('js');?>
<script src="<?= base_url(); ?>/scripts/user/pagination.min.js"></script>
<?= self::endSection('js');?>