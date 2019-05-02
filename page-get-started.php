<?php /* Template Name: Get Started */ ?>

<?php $path = get_template_directory_uri() . '/html_template/build/'; ?>

<?php get_header() ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <section class="poll">
            <a class="poll__item" href="#enjoy" style="background-image: url(<?php echo $path; ?>assets/img/img-1.jpg);"
               data-js="clip-it-outside">
                <div class="poll__item__title">
                    <h2>Enjoy Solo</h2>
                </div>
            </a>
            <a class="poll__item" href="#family"
               style="background-image: url(<?php echo $path; ?>assets/img/canwas-1.jpg);" data-js="clip-it">
                <div class="poll__item__title">
                    <h2>Family First</h2>
                </div>
            </a>
            <a class="poll__item" href="#f-group"
               style="background-image: url(<?php echo $path; ?>assets/img/img-3.jpg);" data-js="clip-it">
                <div class="poll__item__title">
                    <h2>Friends / Group</h2>
                </div>
            </a>
            <a class="poll__item" href="#loveAir"
               style="background-image: url(<?php echo $path; ?>assets/img/img-4.jpg);" data-js="clip-it-outside">
                <div class="poll__item__title">
                    <h2>Love is in the Air </h2>
                </div>
            </a>
        </section>
        <!-- section Enjoy Solo -->
        <section class="get-started sliders" id="enjoy" data-js="slider-1">
            <div class="slider-bg position-absolute w-100 h-100"
                 style="background-image:url(<?php echo $path; ?>assets/img/get-started-1.jpg);">
                <form action="<?php echo get_template_directory_uri() . '/mail.php'; ?>" method="POST">

                    <div class="container h-100" style="overflow-y: auto; overflow-x: hidden;">
                        <div class="row h-100 justify-content-end align-items-start">
                            <div class="col-12 col-lg-9 h-100 ">
                                <span class="steps" data-js="steps"></span>
                                <div class="slider">

                                    <!-- Step 1 - Page 1 -->
                                    <div class="slider__slide" data-step="1" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>What is your country of residency?</label>
                                                <div class="country-and-city-selects">
                                                    <div class="my-4">
                                                        <select class="country-select" name="residency-country">
                                                            <!-- From JS -->
                                                        </select>
                                                    </div>
                                                    <div class="my-4">
                                                        <input type="text" name="residance-city"
                                                               placeholder="Type city">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 1 - Page 1 -->

                                    <!-- Step 2 - Page 2 -->
                                    <div class="slider__slide" data-step="2" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>Where are you going?</label>
                                                <div class="country-and-city-selects">
                                                    <div class="my-4">
                                                        <input type="text" name="country-to">
                                                        <select class="country-select" data-name="country-to">
                                                        </select>
                                                        <div class="country-tags"></div>
                                                    </div>
                                                    <div class="my-4">
                                                        <input type="text" name="city-to" placeholder="Type city">
                                                    </div>
                                                </div>
                                                <div data-allow-to-select="1">
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">I want to include all the above selected
                                                            destinations in my trip</label>
                                                    </div>
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">
                                                            I want to visit at least
                                                            <input type="text" name="destinations" class="d-inline">
                                                            locations from the above seleted destiantions
                                                        </label>
                                                    </div>
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">
                                                            I don’t have a preference yet, I’ll choose by holiday type
                                                            (Activities) in the next page.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 2 - Page 2 -->

                                    <!-- Step 3 - Page 3 -->
                                    <div class="slider__slide" data-step="3" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>What are your dates?</label>
                                                <div class="mb-4">
                                                    <input type="text" name="dates-1" id="" class="dates">
                                                    <label for="">Total Length: <span>0 day</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 3 - Page 3 -->

                                    <!-- Step 4 - Page 4 -->
                                    <div class="slider__slide" data-step="4" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    How old are you and what is your gender?
                                                </label>
                                                <div class="my-3">
                                                    <select name="years-old">
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                        <option value="60">60</option>
                                                        <option value="61">61</option>
                                                        <option value="62">62</option>
                                                        <option value="63">63</option>
                                                        <option value="64">64</option>
                                                        <option value="65">65</option>
                                                    </select>
                                                </div>
                                                <div class="my-3">
                                                    <select name="gender">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 4 - Page 4 -->

                                    <!-- Step 5-1 - Page 5 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Sightseeing</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-1" id="">
                                                            <label for="">
                                                                Main cities, Metropols
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-2" id="">
                                                            <label for="">
                                                                Historic Small Towns
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-3" id="">
                                                            <label for="">
                                                                Religious Sites
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-4" id="">
                                                            <label for="">
                                                                World War Memorials
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-5" id="">
                                                            <label for="">
                                                                Built World Wonders
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-6" id="">
                                                            <label for="">
                                                                UNESCO World Heritage Sites
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-1 - Page 5 -->

                                    <!-- Step 5-2 - Page 6 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Beach Holiday</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-7" id="">
                                                            <label for="">
                                                                Relaxing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-8" id="">
                                                            <label for="">
                                                                Swimming
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-9" id="">
                                                            <label for="">
                                                                Snorkelling
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-10" id="">
                                                            <label for="">
                                                                Sailing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-11" id="">
                                                            <label for="">
                                                                Surfing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-2 - Page 6 -->

                                    <!-- Step 5-3 - Page 7 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Sports and Games</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-12" id="">
                                                            <label for="">
                                                                Tennis
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-13" id="">
                                                            <label for="">
                                                                Golf
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-14" id="">
                                                            <label for="">
                                                                Skiing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-15" id="">
                                                            <label for="">
                                                                Snowboarding
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-16" id="">
                                                            <label for="">
                                                                Sailing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-17" id="">
                                                            <label for="">
                                                                Horse Riding
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-3 - Page 7 -->

                                    <!-- Step 5-4 - Page 8 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Adventure</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-18" id="">
                                                            <label for="">
                                                                Rock Climbing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-19" id="">
                                                            <label for="">
                                                                Rafting
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-20" id="">
                                                            <label for="">
                                                                Hiking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-21" id="">
                                                            <label for="">
                                                                Paragliding
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-22" id="">
                                                            <label for="">
                                                                Surfing, Kite Surfing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-4 - Page 8 -->

                                    <!-- Step 5-5 - Page 9 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Enjoying Nature</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-23" id="">
                                                            <label for="">
                                                                Natural Wonders
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-24" id="">
                                                            <label for="">
                                                                National Parks
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-25" id="">
                                                            <label for="">
                                                                Nature World Heritage Sites
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-26" id="">
                                                            <label for="">
                                                                Rainforest Trecking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-27" id="">
                                                            <label for="">
                                                                Hunting
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-28" id="">
                                                            <label for="">
                                                                Fishing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-5 - Page 9 -->

                                    <!-- Step 5-6 - Page 10 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Cultural & Sports Events</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-29" id="">
                                                            <label for="">
                                                                Classical Music Concerts
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-30" id="">
                                                            <label for="">
                                                                Opera
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-31" id="">
                                                            <label for="">
                                                                Pop - Rock Concerts, Festivals
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-32" id="">
                                                            <label for="">
                                                                Olympic Games
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-33" id="">
                                                            <label for="">
                                                                Formule-1 Races
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-34" id="">
                                                            <label for="">
                                                                ATP Tennis Tour
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-35" id="">
                                                            <label for="">
                                                                Americas Cup
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-36" id="">
                                                            <label for="">
                                                                Major Football Games
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-6 - Page 10 -->

                                    <!-- Step 5-7 - Page 11 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Other Attractions</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-37" id="">
                                                            <label for="">
                                                                Michelin Star Restaurants
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-38" id="">
                                                            <label for="">
                                                                Shopping
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-39" id="">
                                                            <label for="">
                                                                Night Life
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-40" id="">
                                                            <label for="">
                                                                Cruising
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-41" id="">
                                                            <label for="">
                                                                Theme and Water Parks
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-7 - Page 11 -->

                                    <!-- Step 6 - Page 12 -->
                                    <div class="slider__slide" data-step="6" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What type(s) of transportation(s) are you prefer to use between
                                                    destinations “If applicable”?
                                                    <span class="small d-block">Please select the best three for you</span>
                                                </label>
                                                <div class="checkboxes-container mt-4" data-allow-to-select="3">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-42" id="">
                                                        <label for="">
                                                            Airline "Plane", helicopter
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-43" id="">
                                                        <label for="">
                                                            Rental Car, limusine
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-44" id="">
                                                        <label for="">
                                                            Train
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-45" id="">
                                                        <label for="">
                                                            Bus
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-46" id="">
                                                        <label for="">
                                                            Taxi
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-47" id="">
                                                        <label for="">
                                                            Cruise, ship
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-48" id="">
                                                        <label for="">
                                                            Public transport
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 6 - Page 12 -->

                                    <!-- Step 7 - 1 - Page 13 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Where would you like to stay?
                                                            <span class="small">Please select the best two for you</span>
                                                        </label>
                                                        <div class="checkboxes-container mt-4" data-allow-to-select="2">
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-49" id="">
                                                                <label for="">
                                                                    Hotel, resort
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-50" id="">
                                                                <label for="">
                                                                    Private Villa
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-51" id="">
                                                                <label for="">
                                                                    Serviced or Furnished Appartment
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-52" id="">
                                                                <label for="">
                                                                    Luxury Guesthouse
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 1 - Page 13 -->

                                    <!-- Step 7 - 2 - Page 14 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            What ratings are you prefer?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-53" id="">
                                                            <label for="">
                                                                5 stars
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-54" id="">
                                                            <label for="">
                                                                4 stars
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-55" id="">
                                                            <label for="">
                                                                Between 8.6-9.0 on booking.com
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-56" id="">
                                                            <label for="">
                                                                Super host on airbnb.com
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-57" id="">
                                                            <label for="">
                                                                Minimum traveler rating 4-5 on tripadvisor.com
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 2 - Page 14 -->

                                    <!-- Step 7 - 3 - Page 15 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            What specifics are important for you?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-58" id="">
                                                            <label for="">
                                                                Double Bed
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-59" id="">
                                                            <label for="">
                                                                King Size Bed
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-60" id="">
                                                            <label for="">
                                                                Suite
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-61" id="">
                                                            <label for="">
                                                                Free Wifi
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-62" id="">
                                                            <label for="">
                                                                Parking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-63" id="">
                                                            <label for="">
                                                                Central Location
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-64" id="">
                                                            <label for="">
                                                                Close to Airport
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-65" id="">
                                                            <label for="">
                                                                Quiet Location
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-66" id="">
                                                            <label for="">
                                                                Room With a View
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-67" id="">
                                                            <label for="">
                                                                Balcony
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-68" id="">
                                                            <label for="">
                                                                Beauty Salon
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-69" id="">
                                                            <label for="">
                                                                Fitness Center
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-70" id="">
                                                            <label for="">
                                                                Spa
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 3 - Page 15 -->

                                    <!-- Step 8 - 1 - Page 16 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Type of cuisine you want to experience?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-71" id="">
                                                            <label for="">
                                                                International
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-72" id="">
                                                            <label for="">
                                                                Arabic
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-73" id="">
                                                            <label for="">
                                                                Italian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-74" id="">
                                                            <label for="">
                                                                Asian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-75" id="">
                                                            <label for="">
                                                                Sea food
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-76" id="">
                                                            <label for="">
                                                                Vegetarian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-77" id="">
                                                            <label for="">
                                                                Mediterranean
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-78" id="">
                                                            <label for="">
                                                                American
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 1 - Page 16 -->

                                    <!-- Step 8 - 2 - Page 17 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Type of restaurants you prefer?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-79" id="">
                                                            <label for="">
                                                                Fine Dining
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-80" id="">
                                                            <label for="">
                                                                Casual Dining
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-81" id="">
                                                            <label for="">
                                                                Cafe
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-82" id="">
                                                            <label for="">
                                                                Buffet
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-83" id="">
                                                            <label for="">
                                                                Fast Food
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-84" id="">
                                                            <label for="">
                                                                Steak House
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 2 - Page 17 -->

                                    <!-- Step 8 - 3 - Page 18 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Please indicate if you're on specific diet
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-85" id="">
                                                            <label for="">
                                                                Halal
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-86" id="">
                                                            <label for="">
                                                                Gluten Free
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-87" id="">
                                                            <label for="">
                                                                Lactose free
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-88" id="">
                                                            <label for="">
                                                                Nut-free
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 3 - Page 18 -->

                                    <!-- Step 9 - Page 19 -->
                                    <div class="slider__slide" data-step="9" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="my-5">
                                                            <label>
                                                                What is your budget for this vacation?
                                                            </label>
                                                            <input type="text" name="budget"
                                                                   placeholder="Type your budget">
                                                        </div>
                                                        <div class="mt-5">
                                                            <label>
                                                                Please indicate how would you like to divide your budget
                                                                (%)
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Accomodation:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-1" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Travel:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-2" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Dining:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-3" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Sights at destination:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-4" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Events and programs:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-5" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 9 - Page 19 -->

                                    <!-- Step 10 - Page 20 -->
                                    <div class="slider__slide" data-step="10" data-filled="0" data-must-fill="0">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Additional Questions:</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="my-2">
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s14" id="">
                                                                <label for="">
                                                                    Do you have any kind of disability?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s15" id="">
                                                                <label for="">
                                                                    Are you traveling pregnant "Applicable for females"?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s16" id="">
                                                                <label for="">
                                                                    Are you traveling with pets?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s17" id="">
                                                                <label for="">
                                                                    Will you be having a birthday during your vacation?
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="my-2">
                                                            <label>
                                                                Is there anything else you feel it's important to tell
                                                                us about:
                                                            </label>
                                                            <textarea name="additional-comment" cols="30" rows="5"
                                                                      placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 10 - Page 20 -->

                                    <!-- Step 11 - Page 21 -->
                                    <div class="slider__slide" data-step="11" data-filled="0" data-must-fill="3">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 col-md-7">
                                                        <div class="my-5">
                                                            <label>
                                                                What should I call you?
                                                            </label>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Mr"
                                                                       checked>
                                                                <label for="">Mr.</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Mrs">
                                                                <label for="">Mrs.</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Ms">
                                                                <label for="">Ms.</label>
                                                            </div>
                                                        </div>
                                                        <div class="my-5">
                                                            <div class="row all-inputs-w-100">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <input type="text" name="first-name"
                                                                                   placeholder="First Name">
                                                                        </div>
                                                                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                                                                            <input type="text" name="last-name"
                                                                                   placeholder="Last Name">
                                                                        </div>
                                                                        <div class="col-12 mt-5 col-md-8">
                                                                            <input type="email" name="email"
                                                                                   placeholder="Email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-8">
                                                                    <div class="d-flex h-100 pt-3 flex-column justify-content-between">
                                                                        <label>When to contact you?</label>
                                                                        <select name="time-to-call">
                                                                            <option value="11-12">9:00 - 12:00</option>
                                                                            <option value="11-12">13:00 - 17:00</option>
                                                                            <option value="12-13">18:00 - 21:00</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-right">
                                                                    <button type="submit" class="btn btn--default mb-0">
                                                                        HERE WE GO!
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 11 - Page 21 -->

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="slider-ctrls">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-12 col-lg-9 text-right">
                            <a href="#" class="btn btn--default btn--slide-prev" data-slider-target="slider-1">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="btn btn--default btn--slide-next" data-slider-target="slider-1">
                                next
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section Family First -->
        <section class="get-started sliders" id="family" data-js="slider-2">
            <div class="slider-bg position-absolute w-100 h-100"
                 style="background-image:url(<?php echo $path; ?>assets/img/canwas-1.jpg);">
                <form action="<?php echo get_template_directory_uri() . '/mail.php'; ?>" method="POST">
                    <input type="hidden" name="subject" value="<?php the_field('subject', 'option'); ?>">
                    <input type="hidden" name="content" value="<?php the_field('content', 'option'); ?>">
                    <div class="container h-100" style="overflow-y: auto; overflow-x: hidden;">
                        <div class="row h-100 justify-content-end align-items-start">
                            <div class="col-12 col-lg-9 h-100 ">
                                <span class="steps" data-js="steps"></span>
                                <div class="slider">
                                    <!-- Step 1 - Page 1 -->
                                    <div class="slider__slide" data-step="1" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>What is your country of residency?</label>
                                                <div class="country-and-city-selects">
                                                    <div class="my-4">
                                                        <select class="country-select" name="residency-country">
                                                            <!-- From JS -->
                                                        </select>
                                                    </div>
                                                    <div class="my-4">
                                                        <!-- <select class="cities-select" name="residance-city">
                          From JS
                        </select> -->
                                                        <input type="text" name="residance-city"
                                                               placeholder="Type city">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 1 - Page 1 -->

                                    <!-- Step 2 - Page 2 -->
                                    <div class="slider__slide" data-step="2" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>Where are you going?</label>
                                                <div class="country-and-city-selects">
                                                    <div class="my-4">
                                                        <input type="text" name="country-to">
                                                        <select class="country-select" data-name="country-to">
                                                        </select>
                                                        <div class="country-tags"></div>
                                                    </div>
                                                    <div class="my-4">
                                                        <input type="text" name="city-to" placeholder="Type city">
                                                    </div>
                                                </div>
                                                <div data-allow-to-select="1">
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">I want to include all the above selected
                                                            destinations in my trip</label>
                                                    </div>
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">
                                                            I want to visit at least
                                                            <input type="text" name="destinations" class="d-inline">
                                                            locations from the above seleted destiantions
                                                        </label>
                                                    </div>
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">
                                                            I don’t have a preference yet, I’ll choose by holiday type
                                                            (Activities) in the next page.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 2 - Page 2 -->

                                    <!-- Step 3 - Page 3 -->
                                    <div class="slider__slide" data-step="3" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>What are your dates?</label>
                                                <div class="mb-4">
                                                    <input type="text" name="dates-1" id="" class="dates">
                                                    <label for="">Total Length: <span>0 day</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 3 - Page 3 -->

                                    <!-- Step 4 - Page 4 -->
                                    <div class="slider__slide" data-step="4" data-filled="0" data-must-fill="3">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="my-4">
                                                    <label>
                                                        What are the number of travelers “Adults”?
                                                    </label>
                                                    <input type="text">
                                                </div>
                                                <div class="my-4">
                                                    <label>
                                                        What are their ages?
                                                    </label>
                                                    <input type="text">
                                                </div>
                                                <div class="my-4">
                                                    <label>
                                                        What are the numbers of travelers “Kids”?
                                                    </label>
                                                    <input type="text">
                                                </div>
                                                <div class="my-4">
                                                    <label>
                                                        What are their ages?
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 4 - Page 4 -->

                                    <!-- Step 5-1 - Page 5 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Sightseeing</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-1" id="">
                                                            <label for="">
                                                                Main cities, Metropols
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-2" id="">
                                                            <label for="">
                                                                Historic Small Towns
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-3" id="">
                                                            <label for="">
                                                                Religious Sites
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-4" id="">
                                                            <label for="">
                                                                World War Memorials
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-5" id="">
                                                            <label for="">
                                                                Built World Wonders
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-6" id="">
                                                            <label for="">
                                                                UNESCO World Heritage Sites
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-1 - Page 5 -->

                                    <!-- Step 5-2 - Page 6 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Beach Holiday</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-7" id="">
                                                            <label for="">
                                                                Relaxing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-8" id="">
                                                            <label for="">
                                                                Swimming
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-9" id="">
                                                            <label for="">
                                                                Snorkelling
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-10" id="">
                                                            <label for="">
                                                                Sailing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-11" id="">
                                                            <label for="">
                                                                Surfing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-2 - Page 6 -->

                                    <!-- Step 5-3 - Page 7 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Sports and Games</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-12" id="">
                                                            <label for="">
                                                                Tennis
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-13" id="">
                                                            <label for="">
                                                                Golf
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-14" id="">
                                                            <label for="">
                                                                Skiing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-15" id="">
                                                            <label for="">
                                                                Snowboarding
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-16" id="">
                                                            <label for="">
                                                                Sailing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-17" id="">
                                                            <label for="">
                                                                Horse Riding
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-3 - Page 7 -->

                                    <!-- Step 5-4 - Page 8 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Adventure</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-18" id="">
                                                            <label for="">
                                                                Rock Climbing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-19" id="">
                                                            <label for="">
                                                                Rafting
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-20" id="">
                                                            <label for="">
                                                                Hiking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-21" id="">
                                                            <label for="">
                                                                Paragliding
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-22" id="">
                                                            <label for="">
                                                                Surfing, Kite Surfing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-4 - Page 8 -->

                                    <!-- Step 5-5 - Page 9 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Enjoying Nature</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-23" id="">
                                                            <label for="">
                                                                Natural Wonders
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-24" id="">
                                                            <label for="">
                                                                National Parks
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-25" id="">
                                                            <label for="">
                                                                Nature World Heritage Sites
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-26" id="">
                                                            <label for="">
                                                                Rainforest Trecking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-27" id="">
                                                            <label for="">
                                                                Hunting
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-28" id="">
                                                            <label for="">
                                                                Fishing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-5 - Page 9 -->

                                    <!-- Step 5-6 - Page 10 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Cultural & Sports Events</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-29" id="">
                                                            <label for="">
                                                                Classical Music Concerts
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-30" id="">
                                                            <label for="">
                                                                Opera
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-31" id="">
                                                            <label for="">
                                                                Pop - Rock Concerts, Festivals
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-32" id="">
                                                            <label for="">
                                                                Olympic Games
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-33" id="">
                                                            <label for="">
                                                                Formule-1 Races
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-34" id="">
                                                            <label for="">
                                                                ATP Tennis Tour
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-35" id="">
                                                            <label for="">
                                                                Americas Cup
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-36" id="">
                                                            <label for="">
                                                                Major Football Games
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-6 - Page 10 -->

                                    <!-- Step 5-7 - Page 11 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Other Attractions</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-37" id="">
                                                            <label for="">
                                                                Michelin Star Restaurants
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-38" id="">
                                                            <label for="">
                                                                Shopping
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-39" id="">
                                                            <label for="">
                                                                Night Life
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-40" id="">
                                                            <label for="">
                                                                Cruising
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-41" id="">
                                                            <label for="">
                                                                Theme and Water Parks
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-7 - Page 11 -->

                                    <!-- Step 6 - Page 12 -->
                                    <div class="slider__slide" data-step="6" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What type(s) of transportation(s) are you prefer to use between
                                                    destinations “If applicable”?
                                                    <span class="small d-block">Please select the best three for you</span>
                                                </label>
                                                <div class="checkboxes-container mt-4" data-allow-to-select="3">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-42" id="">
                                                        <label for="">
                                                            Airline "Plane", helicopter
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-43" id="">
                                                        <label for="">
                                                            Rental Car, limusine
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-44" id="">
                                                        <label for="">
                                                            Train
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-45" id="">
                                                        <label for="">
                                                            Bus
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-46" id="">
                                                        <label for="">
                                                            Taxi
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-47" id="">
                                                        <label for="">
                                                            Cruise, ship
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-48" id="">
                                                        <label for="">
                                                            Public transport
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 6 - Page 12 -->

                                    <!-- Step 7 - 1 - Page 13 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Where would you like to stay?
                                                            <span class="small">Please select the best two for you</span>
                                                        </label>
                                                        <div class="checkboxes-container mt-4" data-allow-to-select="2">
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-49" id="">
                                                                <label for="">
                                                                    Hotel, resort
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-50" id="">
                                                                <label for="">
                                                                    Private Villa
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-51" id="">
                                                                <label for="">
                                                                    Serviced or Furnished Appartment
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-52" id="">
                                                                <label for="">
                                                                    Luxury Guesthouse
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 1 - Page 13 -->

                                    <!-- Step 7 - 2 - Page 14 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            What ratings are you prefer?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-53" id="">
                                                            <label for="">
                                                                5 stars
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-54" id="">
                                                            <label for="">
                                                                4 stars
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-55" id="">
                                                            <label for="">
                                                                Between 8.6-9.0 on booking.com
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-56" id="">
                                                            <label for="">
                                                                Super host on airbnb.com
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-57" id="">
                                                            <label for="">
                                                                Minimum traveler rating 4-5 on tripadvisor.com
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 2 - Page 14 -->

                                    <!-- Step 7 - 3 - Page 15 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            What specifics are important for you?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-58" id="">
                                                            <label for="">
                                                                Double Bed
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-59" id="">
                                                            <label for="">
                                                                King Size Bed
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-60" id="">
                                                            <label for="">
                                                                Suite
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-61" id="">
                                                            <label for="">
                                                                Free Wifi
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-62" id="">
                                                            <label for="">
                                                                Parking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-63" id="">
                                                            <label for="">
                                                                Central Location
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-64" id="">
                                                            <label for="">
                                                                Close to Airport
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-65" id="">
                                                            <label for="">
                                                                Quiet Location
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-66" id="">
                                                            <label for="">
                                                                Room With a View
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-67" id="">
                                                            <label for="">
                                                                Balcony
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-68" id="">
                                                            <label for="">
                                                                Beauty Salon
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-69" id="">
                                                            <label for="">
                                                                Fitness Center
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-70" id="">
                                                            <label for="">
                                                                Spa
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 3 - Page 15 -->

                                    <!-- Step 8 - 1 - Page 16 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Type of cuisine you want to experience?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-71" id="">
                                                            <label for="">
                                                                International
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-72" id="">
                                                            <label for="">
                                                                Arabic
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-73" id="">
                                                            <label for="">
                                                                Italian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-74" id="">
                                                            <label for="">
                                                                Asian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-75" id="">
                                                            <label for="">
                                                                Sea food
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-76" id="">
                                                            <label for="">
                                                                Vegetarian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-77" id="">
                                                            <label for="">
                                                                Mediterranean
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-78" id="">
                                                            <label for="">
                                                                American
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 1 - Page 16 -->

                                    <!-- Step 8 - 2 - Page 17 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Type of restaurants you prefer?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-79" id="">
                                                            <label for="">
                                                                Fine Dining
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-80" id="">
                                                            <label for="">
                                                                Casual Dining
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-81" id="">
                                                            <label for="">
                                                                Cafe
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-82" id="">
                                                            <label for="">
                                                                Buffet
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-83" id="">
                                                            <label for="">
                                                                Fast Food
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-84" id="">
                                                            <label for="">
                                                                Steak House
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 2 - Page 17 -->

                                    <!-- Step 8 - 3 - Page 18 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Please indicate if you're on specific diet
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-85" id="">
                                                            <label for="">
                                                                Halal
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-86" id="">
                                                            <label for="">
                                                                Gluten Free
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-87" id="">
                                                            <label for="">
                                                                Lactose free
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-88" id="">
                                                            <label for="">
                                                                Nut-free
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 3 - Page 18 -->

                                    <!-- Step 9 - Page 19 -->
                                    <div class="slider__slide" data-step="9" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="my-5">
                                                            <label>
                                                                What is your budget for this vacation?
                                                            </label>
                                                            <input type="text" name="budget"
                                                                   placeholder="Type your budget">
                                                        </div>
                                                        <div class="mt-5">
                                                            <label>
                                                                Please indicate how would you like to divide your budget
                                                                (%)
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Accomodation:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-1" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Travel:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-2" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Dining:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-3" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Sights at destination:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-4" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Events and programs:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-5" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 9 - Page 19 -->

                                    <!-- Step 10 - Page 20 -->
                                    <div class="slider__slide" data-step="10" data-filled="0" data-must-fill="0">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Additional Questions:</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="my-2">
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s14" id="">
                                                                <label for="">
                                                                    Do you have any kind of disability?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s15" id="">
                                                                <label for="">
                                                                    Are you traveling pregnant "Applicable for females"?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s16" id="">
                                                                <label for="">
                                                                    Are you traveling with pets?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s17" id="">
                                                                <label for="">
                                                                    Will you be having a birthday during your vacation?
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="my-2">
                                                            <label>
                                                                Is there anything else you feel it's important to tell
                                                                us about:
                                                            </label>
                                                            <textarea name="additional-comment" cols="30" rows="5"
                                                                      placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 10 - Page 20 -->

                                    <!-- Step 11 - Page 21 -->
                                    <div class="slider__slide" data-step="11" data-filled="0" data-must-fill="3">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 col-md-7">
                                                        <div class="my-5">
                                                            <label>
                                                                What should I call you?
                                                            </label>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Mr"
                                                                       checked>
                                                                <label for="">Mr.</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Mrs">
                                                                <label for="">Mrs.</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Ms">
                                                                <label for="">Ms.</label>
                                                            </div>
                                                        </div>
                                                        <div class="my-5">
                                                            <div class="row all-inputs-w-100">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <input type="text" name="first-name"
                                                                                   placeholder="First Name">
                                                                        </div>
                                                                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                                                                            <input type="text" name="last-name"
                                                                                   placeholder="Last Name">
                                                                        </div>
                                                                        <div class="col-12 mt-5 col-md-8">
                                                                            <input type="email" name="email"
                                                                                   placeholder="Email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-8">
                                                                    <div class="d-flex h-100 pt-3 flex-column justify-content-between">
                                                                        <label>When to contact you?</label>
                                                                        <select name="time-to-call">
                                                                            <option value="11-12">9:00 - 12:00</option>
                                                                            <option value="11-12">13:00 - 17:00</option>
                                                                            <option value="12-13">18:00 - 21:00</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-right">
                                                                    <button type="submit" class="btn btn--default mb-0">
                                                                        HERE WE GO!
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 11 - Page 21 -->

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="slider-ctrls">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-12 col-lg-9 text-right">
                            <a href="#" class="btn btn--default btn--slide-prev" data-slider-target="slider-2">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="btn btn--default btn--slide-next" data-slider-target="slider-2">
                                next
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section Friends/Group -->
        <section class="get-started sliders" id="f-group" data-js="slider-3">
            <div class="slider-bg position-absolute w-100 h-100"
                 style="background-image:url(<?php echo $path; ?>assets/img/get-started-friends.jpg);">
                <form action="<?php echo get_template_directory_uri() . '/mail.php'; ?>" method="POST">
                    <input type="hidden" name="subject" value="<?php the_field('subject', 'option'); ?>">
                    <input type="hidden" name="content" value="<?php the_field('content', 'option'); ?>">
                    <div class="container h-100" style="overflow-y: auto; overflow-x: hidden;">
                        <div class="row h-100 justify-content-end align-items-start">
                            <div class="col-12 col-lg-9 h-100 ">
                                <span class="steps" data-js="steps"></span>
                                <div class="slider">

                                    <!-- Step 1 - Page 1 -->
                                    <div class="slider__slide" data-step="1" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>What is your country of residency?</label>
                                                <div class="country-and-city-selects">
                                                    <div class="my-4">
                                                        <select class="country-select" name="residency-country">
                                                            <!-- From JS -->
                                                        </select>
                                                    </div>
                                                    <div class="my-4">
                                                        <!-- <select class="cities-select" name="residance-city">
                          From JS
                        </select> -->
                                                        <input type="text" name="residance-city"
                                                               placeholder="Type city">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 1 - Page 1 -->

                                    <!-- Step 2 - Page 2 -->
                                    <div class="slider__slide" data-step="2" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>Where are you going?</label>
                                                <div class="country-and-city-selects">
                                                    <div class="my-4">
                                                        <input type="text" name="country-to">
                                                        <select class="country-select" data-name="country-to">
                                                        </select>
                                                        <div class="country-tags"></div>
                                                    </div>
                                                    <div class="my-4">
                                                        <!-- <select class="cities-select" name="city-to">

                        </select> -->
                                                        <input type="text" name="city-to" placeholder="Type city">
                                                    </div>
                                                </div>
                                                <div data-allow-to-select="1">
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">I want to include all the above selected
                                                            destinations in my trip</label>
                                                    </div>
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">
                                                            I want to visit at least
                                                            <input type="text" name="destinations" class="d-inline">
                                                            locations from the above seleted destiantions
                                                        </label>
                                                    </div>
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">
                                                            I don’t have a preference yet, I’ll choose by holiday type
                                                            (Activities) in the next page.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 2 - Page 2 -->

                                    <!-- Step 3 - Page 3 -->
                                    <div class="slider__slide" data-step="3" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>What are your dates?</label>
                                                <div class="mb-4">
                                                    <input type="text" name="dates-1" id="" class="dates">
                                                    <label for="">Total Length: <span>0 day</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 3 - Page 3 -->

                                    <!-- Step 4 - Page 4 -->
                                    <div class="slider__slide" data-step="4" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="my-5">
                                                    <label>
                                                        What are the number of travelers?
                                                    </label>
                                                    <input type="text">
                                                </div>
                                                <div class="my-5">
                                                    <label>
                                                        What are their ages?
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 4 - Pgae 4 -->

                                    <!-- Step 5-1 - Page 5 -->
                                    <div class="slider__slide" data-step="5">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Sightseeing</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-1" id="">
                                                            <label for="">
                                                                Main cities, Metropols
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-2" id="">
                                                            <label for="">
                                                                Historic Small Towns
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-3" id="">
                                                            <label for="">
                                                                Religious Sites
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-4" id="">
                                                            <label for="">
                                                                World War Memorials
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-5" id="">
                                                            <label for="">
                                                                Built World Wonders
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-6" id="">
                                                            <label for="">
                                                                UNESCO World Heritage Sites
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-1 - Page 5 -->

                                    <!-- Step 5-2 - Page 6 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Beach Holiday</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-7" id="">
                                                            <label for="">
                                                                Relaxing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-8" id="">
                                                            <label for="">
                                                                Swimming
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-9" id="">
                                                            <label for="">
                                                                Snorkelling
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-10" id="">
                                                            <label for="">
                                                                Sailing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-11" id="">
                                                            <label for="">
                                                                Surfing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-2 - Page 6 -->

                                    <!-- Step 5-3 - Page 7 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Sports and Games</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-12" id="">
                                                            <label for="">
                                                                Tennis
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-13" id="">
                                                            <label for="">
                                                                Golf
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-14" id="">
                                                            <label for="">
                                                                Skiing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-15" id="">
                                                            <label for="">
                                                                Snowboarding
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-16" id="">
                                                            <label for="">
                                                                Sailing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-17" id="">
                                                            <label for="">
                                                                Horse Riding
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-3 - Page 7 -->

                                    <!-- Step 5-4 - Page 8 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Adventure</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-18" id="">
                                                            <label for="">
                                                                Rock Climbing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-19" id="">
                                                            <label for="">
                                                                Rafting
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-20" id="">
                                                            <label for="">
                                                                Hiking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-21" id="">
                                                            <label for="">
                                                                Paragliding
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-22" id="">
                                                            <label for="">
                                                                Surfing, Kite Surfing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-4 - Page 8 -->

                                    <!-- Step 5-5 - Page 9 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Enjoying Nature</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-23" id="">
                                                            <label for="">
                                                                Natural Wonders
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-24" id="">
                                                            <label for="">
                                                                National Parks
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-25" id="">
                                                            <label for="">
                                                                Nature World Heritage Sites
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-26" id="">
                                                            <label for="">
                                                                Rainforest Trecking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-27" id="">
                                                            <label for="">
                                                                Hunting
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-28" id="">
                                                            <label for="">
                                                                Fishing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-5 - Page 9 -->

                                    <!-- Step 5-6 - Page 10 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Cultural & Sports Events</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-29" id="">
                                                            <label for="">
                                                                Classical Music Concerts
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-30" id="">
                                                            <label for="">
                                                                Opera
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-31" id="">
                                                            <label for="">
                                                                Pop - Rock Concerts, Festivals
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-32" id="">
                                                            <label for="">
                                                                Olympic Games
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-33" id="">
                                                            <label for="">
                                                                Formule-1 Races
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-34" id="">
                                                            <label for="">
                                                                ATP Tennis Tour
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-35" id="">
                                                            <label for="">
                                                                Americas Cup
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-36" id="">
                                                            <label for="">
                                                                Major Football Games
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-6 - Page 10 -->

                                    <!-- Step 5-7 - Page 11 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Other Attractions</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-37" id="">
                                                            <label for="">
                                                                Michelin Star Restaurants
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-38" id="">
                                                            <label for="">
                                                                Shopping
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-39" id="">
                                                            <label for="">
                                                                Night Life
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-40" id="">
                                                            <label for="">
                                                                Cruising
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-41" id="">
                                                            <label for="">
                                                                Theme and Water Parks
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-7 - Page 11 -->

                                    <!-- Step 6 - Page 12 -->
                                    <div class="slider__slide" data-step="6" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What type(s) of transportation(s) are you prefer to use between
                                                    destinations “If applicable”?
                                                    <span class="small d-block">Please select the best three for you</span>
                                                </label>
                                                <div class="checkboxes-container mt-4" data-allow-to-select="3">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-42" id="">
                                                        <label for="">
                                                            Airline "Plane", helicopter
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-43" id="">
                                                        <label for="">
                                                            Rental Car, limusine
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-44" id="">
                                                        <label for="">
                                                            Train
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-45" id="">
                                                        <label for="">
                                                            Bus
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-46" id="">
                                                        <label for="">
                                                            Taxi
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-47" id="">
                                                        <label for="">
                                                            Cruise, ship
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-48" id="">
                                                        <label for="">
                                                            Public transport
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 6 - Page 12 -->

                                    <!-- Step 7 - 1 - Page 13 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Where would you like to stay?
                                                            <span class="small">Please select the best two for you</span>
                                                        </label>
                                                        <div class="checkboxes-container mt-4" data-allow-to-select="2">
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-49" id="">
                                                                <label for="">
                                                                    Hotel, resort
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-50" id="">
                                                                <label for="">
                                                                    Private Villa
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-51" id="">
                                                                <label for="">
                                                                    Serviced or Furnished Appartment
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-52" id="">
                                                                <label for="">
                                                                    Luxury Guesthouse
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 1 - Page 13 -->

                                    <!-- Step 7 - 2 - Page 14 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            What ratings are you prefer?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-53" id="">
                                                            <label for="">
                                                                5 stars
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-54" id="">
                                                            <label for="">
                                                                4 stars
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-55" id="">
                                                            <label for="">
                                                                Between 8.6-9.0 on booking.com
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-56" id="">
                                                            <label for="">
                                                                Super host on airbnb.com
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-57" id="">
                                                            <label for="">
                                                                Minimum traveler rating 4-5 on tripadvisor.com
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 2 - Page 14 -->

                                    <!-- Step 7 - 3 - Page 15 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            What specifics are important for you?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-58" id="">
                                                            <label for="">
                                                                Double Bed
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-59" id="">
                                                            <label for="">
                                                                King Size Bed
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-60" id="">
                                                            <label for="">
                                                                Suite
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-61" id="">
                                                            <label for="">
                                                                Free Wifi
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-62" id="">
                                                            <label for="">
                                                                Parking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-63" id="">
                                                            <label for="">
                                                                Central Location
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-64" id="">
                                                            <label for="">
                                                                Close to Airport
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-65" id="">
                                                            <label for="">
                                                                Quiet Location
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-66" id="">
                                                            <label for="">
                                                                Room With a View
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-67" id="">
                                                            <label for="">
                                                                Balcony
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-68" id="">
                                                            <label for="">
                                                                Beauty Salon
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-69" id="">
                                                            <label for="">
                                                                Fitness Center
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-70" id="">
                                                            <label for="">
                                                                Spa
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 3 - Page 15 -->

                                    <!-- Step 8 - 1 - Page 16 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Type of cuisine you want to experience?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-71" id="">
                                                            <label for="">
                                                                International
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-72" id="">
                                                            <label for="">
                                                                Arabic
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-73" id="">
                                                            <label for="">
                                                                Italian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-74" id="">
                                                            <label for="">
                                                                Asian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-75" id="">
                                                            <label for="">
                                                                Sea food
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-76" id="">
                                                            <label for="">
                                                                Vegetarian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-77" id="">
                                                            <label for="">
                                                                Mediterranean
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-78" id="">
                                                            <label for="">
                                                                American
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 1 - Page 16 -->

                                    <!-- Step 8 - 2 - Page 17 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Type of restaurants you prefer?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-79" id="">
                                                            <label for="">
                                                                Fine Dining
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-80" id="">
                                                            <label for="">
                                                                Casual Dining
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-81" id="">
                                                            <label for="">
                                                                Cafe
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-82" id="">
                                                            <label for="">
                                                                Buffet
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-83" id="">
                                                            <label for="">
                                                                Fast Food
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-84" id="">
                                                            <label for="">
                                                                Steak House
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 2 - Page 17 -->

                                    <!-- Step 8 - 3 - Page 18 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Please indicate if you're on specific diet
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-85" id="">
                                                            <label for="">
                                                                Halal
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-86" id="">
                                                            <label for="">
                                                                Gluten Free
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-87" id="">
                                                            <label for="">
                                                                Lactose free
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-88" id="">
                                                            <label for="">
                                                                Nut-free
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 3 - Page 18 -->

                                    <!-- Step 9 - Page 19 -->
                                    <div class="slider__slide" data-step="9" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="my-5">
                                                            <label>
                                                                What is your budget for this vacation?
                                                            </label>
                                                            <input type="text" name="budget"
                                                                   placeholder="Type your budget">
                                                        </div>
                                                        <div class="mt-5">
                                                            <label>
                                                                Please indicate how would you like to divide your budget
                                                                (%)
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Accomodation:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-1" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Travel:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-2" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Dining:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-3" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Sights at destination:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-4" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Events and programs:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-5" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 9 - Page 19 -->

                                    <!-- Step 10 - Page 20 -->
                                    <div class="slider__slide" data-step="10" data-filled="0" data-must-fill="0">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Additional Questions:</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="my-2">
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s14" id="">
                                                                <label for="">
                                                                    Do you have any kind of disability?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s15" id="">
                                                                <label for="">
                                                                    Are you traveling pregnant "Applicable for females"?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s16" id="">
                                                                <label for="">
                                                                    Are you traveling with pets?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s17" id="">
                                                                <label for="">
                                                                    Will you be having a birthday during your vacation?
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="my-2">
                                                            <label>
                                                                Is there anything else you feel it's important to tell
                                                                us about:
                                                            </label>
                                                            <textarea name="additional-comment" cols="30" rows="5"
                                                                      placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 10 - Page 20 -->

                                    <!-- Step 11 - Page 21 -->
                                    <div class="slider__slide" data-step="11" data-filled="0" data-must-fill="3">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 col-md-7">
                                                        <div class="my-5">
                                                            <label>
                                                                What should I call you?
                                                            </label>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Mr"
                                                                       checked>
                                                                <label for="">Mr.</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Mrs">
                                                                <label for="">Mrs.</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Ms">
                                                                <label for="">Ms.</label>
                                                            </div>
                                                        </div>
                                                        <div class="my-5">
                                                            <div class="row all-inputs-w-100">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <input type="text" name="first-name"
                                                                                   placeholder="First Name">
                                                                        </div>
                                                                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                                                                            <input type="text" name="last-name"
                                                                                   placeholder="Last Name">
                                                                        </div>
                                                                        <div class="col-12 mt-5 col-md-8">
                                                                            <input type="email" name="email"
                                                                                   placeholder="Email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-8">
                                                                    <div class="d-flex h-100 pt-3 flex-column justify-content-between">
                                                                        <label>When to contact you?</label>
                                                                        <select name="time-to-call">
                                                                            <option value="11-12">9:00 - 12:00</option>
                                                                            <option value="11-12">13:00 - 17:00</option>
                                                                            <option value="12-13">18:00 - 21:00</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-right">
                                                                    <button type="submit" class="btn btn--default mb-0">
                                                                        HERE WE GO!
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 11 - Page 21 -->

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="slider-ctrls">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-12 col-lg-9 text-right">
                            <a href="#" class="btn btn--default btn--slide-prev" data-slider-target="slider-3">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="btn btn--default btn--slide-next" data-slider-target="slider-3">
                                next
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section Love is in the Air -->
        <section class="get-started sliders" id="loveAir" data-js="slider-4">
            <div class="slider-bg position-absolute w-100 h-100"
                 style="background-image:url(<?php echo $path; ?>assets/img/get-started-4.jpg);">
                <form action="<?php echo get_template_directory_uri() . '/mail.php'; ?>" method="POST" id="sendThis">

                    <input type="hidden" name="subject" value="<?php the_field('subject', 'option'); ?>">
                    <input type="hidden" name="content" value="<?php the_field('content', 'option'); ?>">
                    <div class="container h-100" style="overflow-y: auto; overflow-x: hidden;">
                        <div class="row h-100 justify-content-end align-items-start">
                            <div class="col-12 col-lg-9 h-100 ">
                                <span class="steps" data-js="steps"></span>
                                <div class="slider">

                                    <!-- Step 1 - Page 1 -->
                                    <div class="slider__slide" data-step="1" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>What is your country of residency?</label>
                                                <div class="country-and-city-selects">
                                                    <div class="my-4">
                                                        <select class="country-select" name="residency-country">
                                                            <!-- From JS -->
                                                        </select>
                                                    </div>
                                                    <div class="my-4">
                                                        <!-- <select class="cities-select" name="residance-city">
                          From JS
                        </select> -->
                                                        <input type="text" name="residance-city"
                                                               placeholder="Type city">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 1 - Page 1 -->

                                    <!-- Step 2 - Page 2 -->
                                    <div class="slider__slide" data-step="2" data-filled="0" data-must-fill="2">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>Where are you going?</label>
                                                <div class="country-and-city-selects">
                                                    <div class="my-4">
                                                        <input type="text" name="country-to">
                                                        <select class="country-select" data-name="country-to">
                                                        </select>
                                                        <div class="country-tags"></div>
                                                    </div>
                                                    <div class="my-4">
                                                        <!-- <select class="cities-select" name="city-to">

                        </select> -->
                                                        <input type="text" name="city-to" placeholder="Type city">
                                                    </div>
                                                </div>
                                                <div data-allow-to-select="1">
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">I want to include all the above selected
                                                            destinations in my trip</label>
                                                    </div>
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">
                                                            I want to visit at least
                                                            <input type="text" name="destinations" class="d-inline">
                                                            locations from the above seleted destiantions
                                                        </label>
                                                    </div>
                                                    <div class="toggle mt-4">
                                                        <input type="checkbox" name="toggle-1" id="">
                                                        <label for="">
                                                            I don’t have a preference yet, I’ll choose by holiday type
                                                            (Activities) in the next page.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 2 - Page 2 -->

                                    <!-- Step 3 - Page 3 -->
                                    <div class="slider__slide" data-step="3" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>What are your dates?</label>
                                                <div class="mb-4">
                                                    <input type="text" name="dates-1" id="" class="dates">
                                                    <label for="">Total Length: <span>0 day</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 3 - Page 3 -->

                                    <!-- Step 4 - Page 4 -->
                                    <div class="slider__slide" data-step="4" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is the occasion you want to celebrate?
                                                </label>
                                                <div data-allow-to-select="1">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-s41" id="">
                                                        <label for="">
                                                            Anniversary
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-s42" id="">
                                                        <label for="">
                                                            Honeymoon
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-s43" id="">
                                                        <label for="">
                                                            Romance getaway
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <label>
                                                        What are your ages?
                                                    </label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 4 - Page 4 -->

                                    <!-- Step 5-1 - Page 5 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Sightseeing</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-1" id="">
                                                            <label for="">
                                                                Main cities, Metropols
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-2" id="">
                                                            <label for="">
                                                                Historic Small Towns
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-3" id="">
                                                            <label for="">
                                                                Religious Sites
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-4" id="">
                                                            <label for="">
                                                                World War Memorials
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-5" id="">
                                                            <label for="">
                                                                Built World Wonders
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-6" id="">
                                                            <label for="">
                                                                UNESCO World Heritage Sites
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-1 - Page 5 -->

                                    <!-- Step 5-2 - Page 6 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Beach Holiday</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-7" id="">
                                                            <label for="">
                                                                Relaxing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-8" id="">
                                                            <label for="">
                                                                Swimming
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-9" id="">
                                                            <label for="">
                                                                Snorkelling
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-10" id="">
                                                            <label for="">
                                                                Sailing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-11" id="">
                                                            <label for="">
                                                                Surfing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-2 - Page 6 -->

                                    <!-- Step 5-3 - Page 7 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Sports and Games</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-12" id="">
                                                            <label for="">
                                                                Tennis
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-13" id="">
                                                            <label for="">
                                                                Golf
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-14" id="">
                                                            <label for="">
                                                                Skiing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-15" id="">
                                                            <label for="">
                                                                Snowboarding
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-16" id="">
                                                            <label for="">
                                                                Sailing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-17" id="">
                                                            <label for="">
                                                                Horse Riding
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-3 - Page 7 -->

                                    <!-- Step 5-4 - Page 8 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Adventure</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-18" id="">
                                                            <label for="">
                                                                Rock Climbing
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-19" id="">
                                                            <label for="">
                                                                Rafting
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-20" id="">
                                                            <label for="">
                                                                Hiking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-21" id="">
                                                            <label for="">
                                                                Paragliding
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-22" id="">
                                                            <label for="">
                                                                Surfing, Kite Surfing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-4 - Page 8 -->

                                    <!-- Step 5-5 - Page 9 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Enjoying Nature</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-23" id="">
                                                            <label for="">
                                                                Natural Wonders
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-24" id="">
                                                            <label for="">
                                                                National Parks
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-25" id="">
                                                            <label for="">
                                                                Nature World Heritage Sites
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-26" id="">
                                                            <label for="">
                                                                Rainforest Trecking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-27" id="">
                                                            <label for="">
                                                                Hunting
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-28" id="">
                                                            <label for="">
                                                                Fishing
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-5 - Page 9 -->

                                    <!-- Step 5-6 - Page 10 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Cultural & Sports Events</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-29" id="">
                                                            <label for="">
                                                                Classical Music Concerts
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-30" id="">
                                                            <label for="">
                                                                Opera
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-31" id="">
                                                            <label for="">
                                                                Pop - Rock Concerts, Festivals
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-32" id="">
                                                            <label for="">
                                                                Olympic Games
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-33" id="">
                                                            <label for="">
                                                                Formule-1 Races
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-34" id="">
                                                            <label for="">
                                                                ATP Tennis Tour
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-35" id="">
                                                            <label for="">
                                                                Americas Cup
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-36" id="">
                                                            <label for="">
                                                                Major Football Games
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-6 - Page 10 -->

                                    <!-- Step 5-7 - Page 11 -->
                                    <div class="slider__slide" data-step="5" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What is your vacation type(s)?
                                                    <span class="small">Please select as many as you want</span>
                                                </label>
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Other Attractions</label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-37" id="">
                                                            <label for="">
                                                                Michelin Star Restaurants
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-38" id="">
                                                            <label for="">
                                                                Shopping
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-39" id="">
                                                            <label for="">
                                                                Night Life
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-40" id="">
                                                            <label for="">
                                                                Cruising
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-41" id="">
                                                            <label for="">
                                                                Theme and Water Parks
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 5-7 - Page 11 -->

                                    <!-- Step 6 - Page 12 -->
                                    <div class="slider__slide" data-step="6" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <label>
                                                    What type(s) of transportation(s) are you prefer to use between
                                                    destinations “If applicable”?
                                                    <span class="small d-block">Please select the best three for you</span>
                                                </label>
                                                <div class="checkboxes-container mt-4" data-allow-to-select="3">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-42" id="">
                                                        <label for="">
                                                            Airline "Plane", helicopter
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-43" id="">
                                                        <label for="">
                                                            Rental Car, limusine
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-44" id="">
                                                        <label for="">
                                                            Train
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-45" id="">
                                                        <label for="">
                                                            Bus
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-46" id="">
                                                        <label for="">
                                                            Taxi
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-47" id="">
                                                        <label for="">
                                                            Cruise, ship
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="c-48" id="">
                                                        <label for="">
                                                            Public transport
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 6 - Page 12 -->

                                    <!-- Step 7 - 1 - Page 13 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Where would you like to stay?
                                                            <span class="small">Please select the best two for you</span>
                                                        </label>
                                                        <div class="checkboxes-container mt-4" data-allow-to-select="2">
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-49" id="">
                                                                <label for="">
                                                                    Hotel, resort
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-50" id="">
                                                                <label for="">
                                                                    Private Villa
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-51" id="">
                                                                <label for="">
                                                                    Serviced or Furnished Appartment
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" name="c-52" id="">
                                                                <label for="">
                                                                    Luxury Guesthouse
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 1 - Page 13 -->

                                    <!-- Step 7 - 2 - Page 14 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            What ratings are you prefer?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-53" id="">
                                                            <label for="">
                                                                5 stars
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-54" id="">
                                                            <label for="">
                                                                4 stars
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-55" id="">
                                                            <label for="">
                                                                Between 8.6-9.0 on booking.com
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-56" id="">
                                                            <label for="">
                                                                Super host on airbnb.com
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-57" id="">
                                                            <label for="">
                                                                Minimum traveler rating 4-5 on tripadvisor.com
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 2 - Page 14 -->

                                    <!-- Step 7 - 3 - Page 15 -->
                                    <div class="slider__slide" data-step="7" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            What specifics are important for you?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-58" id="">
                                                            <label for="">
                                                                Double Bed
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-59" id="">
                                                            <label for="">
                                                                King Size Bed
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-60" id="">
                                                            <label for="">
                                                                Suite
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-61" id="">
                                                            <label for="">
                                                                Free Wifi
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-62" id="">
                                                            <label for="">
                                                                Parking
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-63" id="">
                                                            <label for="">
                                                                Central Location
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-64" id="">
                                                            <label for="">
                                                                Close to Airport
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-65" id="">
                                                            <label for="">
                                                                Quiet Location
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-66" id="">
                                                            <label for="">
                                                                Room With a View
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-67" id="">
                                                            <label for="">
                                                                Balcony
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-68" id="">
                                                            <label for="">
                                                                Beauty Salon
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-69" id="">
                                                            <label for="">
                                                                Fitness Center
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-70" id="">
                                                            <label for="">
                                                                Spa
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 7 - 3 - Page 15 -->

                                    <!-- Step 8 - 1 - Page 16 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Type of cuisine you want to experience?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-71" id="">
                                                            <label for="">
                                                                International
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-72" id="">
                                                            <label for="">
                                                                Arabic
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-73" id="">
                                                            <label for="">
                                                                Italian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-74" id="">
                                                            <label for="">
                                                                Asian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-75" id="">
                                                            <label for="">
                                                                Sea food
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-76" id="">
                                                            <label for="">
                                                                Vegetarian
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-77" id="">
                                                            <label for="">
                                                                Mediterranean
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-78" id="">
                                                            <label for="">
                                                                American
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 1 - Page 16 -->

                                    <!-- Step 8 - 2 - Page 17 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Type of restaurants you prefer?
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-79" id="">
                                                            <label for="">
                                                                Fine Dining
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-80" id="">
                                                            <label for="">
                                                                Casual Dining
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-81" id="">
                                                            <label for="">
                                                                Cafe
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-82" id="">
                                                            <label for="">
                                                                Buffet
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-83" id="">
                                                            <label for="">
                                                                Fast Food
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-84" id="">
                                                            <label for="">
                                                                Steak House
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 2 - Page 17 -->

                                    <!-- Step 8 - 3 - Page 18 -->
                                    <div class="slider__slide" data-step="8" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>
                                                            Please indicate if you're on specific diet
                                                        </label>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-85" id="">
                                                            <label for="">
                                                                Halal
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-86" id="">
                                                            <label for="">
                                                                Gluten Free
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-87" id="">
                                                            <label for="">
                                                                Lactose free
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <input type="checkbox" name="c-88" id="">
                                                            <label for="">
                                                                Nut-free
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 8 - 3 - Page 18 -->

                                    <!-- Step 9 - Page 19 -->
                                    <div class="slider__slide" data-step="9" data-filled="0" data-must-fill="1">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="my-5">
                                                            <label>
                                                                What is your budget for this vacation?
                                                            </label>
                                                            <input type="text" name="budget"
                                                                   placeholder="Type your budget">
                                                        </div>
                                                        <div class="mt-5">
                                                            <label>
                                                                Please indicate how would you like to divide your budget
                                                                (%)
                                                            </label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Accomodation:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-1" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Travel:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-2" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Dining:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-3" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Sights at destination:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-4" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6 my-5">
                                                                <label>
                                                                    Events and programs:
                                                                </label>
                                                                <div class="rangeslider-wrap">
                                                                    <input type="range" name="range-5" value="0" min="0"
                                                                           max="100" step="1"
                                                                           labels="0%, 25%, 50%, 75%, 100%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 9 - Page 19 -->

                                    <!-- Step 10 - Page 20 -->
                                    <div class="slider__slide" data-step="10" data-filled="0" data-must-fill="0">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <label>Additional Questions:</label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="my-2">
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s14" id="">
                                                                <label for="">
                                                                    Do you have any kind of disability?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s15" id="">
                                                                <label for="">
                                                                    Are you traveling pregnant "Applicable for females"?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s16" id="">
                                                                <label for="">
                                                                    Are you traveling with pets?
                                                                </label>
                                                            </div>
                                                            <div class="toggle mt-4">
                                                                <input type="checkbox" name="toggle-s17" id="">
                                                                <label for="">
                                                                    Will you be having a birthday during your vacation?
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="my-2">
                                                            <label>
                                                                Is there anything else you feel it's important to tell
                                                                us about:
                                                            </label>
                                                            <textarea name="additional-comment" cols="30" rows="5"
                                                                      placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 10 - Page 20 -->

                                    <!-- Step 11 - Page 21 -->
                                    <div class="slider__slide" data-step="11" data-filled="0" data-must-fill="4">
                                        <div class="d-flex h-100 align-items-start">
                                            <div class="w-100 text-left">
                                                <div class="row">
                                                    <div class="col-12 col-md-7">
                                                        <div class="my-5">
                                                            <label>
                                                                What should I call you?
                                                            </label>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Mr"
                                                                       checked>
                                                                <label for="">Mr.</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Mrs">
                                                                <label for="">Mrs.</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="call-me" id="" value="Ms">
                                                                <label for="">Ms.</label>
                                                            </div>
                                                        </div>
                                                        <div class="my-5">
                                                            <div class="row all-inputs-w-100">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-6">
                                                                            <input type="text" name="first-name"
                                                                                   placeholder="First Name">
                                                                        </div>
                                                                        <div class="col-12 col-md-6 mt-3 mt-md-0">
                                                                            <input type="text" name="last-name"
                                                                                   placeholder="Last Name">
                                                                        </div>
                                                                        <div class="col-12 mt-5 col-md-8">
                                                                            <input type="email" name="email"
                                                                                   placeholder="Email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-md-8">
                                                                    <div class="d-flex h-100 pt-3 flex-column justify-content-between">
                                                                        <label>When to contact you?</label>
                                                                        <select name="time-to-call">
                                                                            <option value="9-12">9:00 - 12:00</option>
                                                                            <option value="13-17">13:00 - 17:00</option>
                                                                            <option value="18-21">18:00 - 21:00</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-right">
                                                                    <button type="submit" class="btn btn--default mb-0">
                                                                        HERE WE GO!
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Step 11 - Page 21 -->

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="slider-ctrls">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-12 col-lg-9 text-right">
                            <a href="#" class="btn btn--default btn--slide-prev" data-slider-target="slider-4">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <a href="#" class="btn btn--default btn--slide-next" data-slider-target="slider-4">
                                next
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>






