<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Music Player</title>

</head>

<body>
    <header>
        <!-- menu-side -->
        <div class="Menu_Section">
            <a href="welcome.php">
                <h1> Your Playlist </h1>
            </a>
            <div class="Playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Your Listening</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>suggestion</h4>
            </div>
            <div class="song_menu">
                <li class="songItem">
                    <span>01</span>
                    <img src="Song Covers/1.png" alt="Demon Slayer">
                    <h5>Gurenge
                        <div class="subtitle">By Lisa</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="Song Covers/2.jpg" alt="Naruto">
                    <h5>Blue Bird
                        <div class="subtitle">Naruto</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="Song Covers/2.jpg" alt="Naruto">
                    <h5> Oshi NO KO
                        <div class="subtitle">By Yaosobi</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="3"></i>
                </li>

                <li class="songItem">
                    <span>04</span>
                    <img src="Song Covers/2.jpg" alt="Naruto">
                    <h5> YaosoBi
                        <div class="subtitle">Racing Into The Nights</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="4"></i>
                </li>

                <li class="songItem">
                    <span>05</span>
                    <img src="Song Covers/2.jpg" alt="Naruto">
                    <h5> Hikaru Nara
                        <div class="subtitle">Goose House</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="5"></i>
                </li>

                <li class="songItem">
                    <span>06</span>
                    <img src="Images/Rascal 1.gif" alt="Naruto">
                    <h5> Fukashigi No Karte
                        <div class="subtitle">RDNDABGS</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="6"></i>
                </li>

                <li class="songItem">
                    <span>07</span>
                    <img src="Song Covers/2.jpg" alt="Naruto">
                    <h5> Sparkel
                        <div class="subtitle">Your Name</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="7"></i>
                </li>

                <li class="songItem">
                    <span>08</span>
                    <img src="Song Covers/2.jpg" alt="Naruto">
                    <h5> Grand Escape
                        <div class="subtitle">Weathering With You</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="8"></i>
                </li>

                <li class="songItem">
                    <span>09</span>
                    <img src="Song Covers/2.jpg" alt="Naruto">
                    <h5> Suzume no Tojimori
                        <div class="subtitle">Suzume No Tojimori</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="9"></i>
                </li>

                <li class="songItem">
                    <span>10</span>
                    <img src="Song Covers/2.jpg" alt="Naruto">
                    <h5> Akuma no ko
                        <div class="subtitle">Attack On Titan</div>
                    </h5>
                    <i class="bi  playlistplay bi-play-circle-fill" id="10"></i>
                </li>
            </div>
        </div>
        <!--  below is song side  -->
        <div class="Song_Section">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li>My library </li>
                    <li>Radio </li>
                  
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                    <div class="search_results">
                        <!-- <a href="" class="card">
                            <img src="Song Covers/1.jpg" alt="">
                            <div class="content">
                                Gurenge
                                <div class="subtitle">
                                    By Lisa
                                </div>
                            </div>
                            
                        </a> -->
                   
                    </div>
                </div>
                <div class="user">
                    <img src="Song Covers\luffy.png" alt="onepiece">
                </div>
            </nav>
            <div class="content">
                <h1>Anime Openings 1 </h1>
                <p>"Anime melodies, like a warm hug for the soul.
                    <br> "Lost in the rhythm of anime tunes.
                <div class="buttons">
                    <button>Play</button>
                    <button>Follow</button>
                </div>
            </div>
            <div class="popular_songs">
                <div class="h4">
                    <h4>Popular Songs</h4>
                    <div class="btn_s">
                        <i class="bi bi-caret-left" id="pop_songs_left"></i>
                        <i class="bi bi-caret-right" id="pop_songs_right"></i>
                    </div>
                </div>
                <div class="pop_songs">

                    <!-- Here are popular Song Music Section s/.//////////////////////////// -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/Ava MAX.jpg" alt="Ava Max">
                            <i class="bi  playlistplay bi-play-circle-fill" id="11"></i>

                        </div>
                        <h5>Into Your Arms
                            <div class="subtitle">Song by Ava Max
                            </div>
                        </h5>
                    </li>

                    <!-- ....................1.................... -->

                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/FF C.webp" alt="onepiece">
                            <i class="bi  playlistplay bi-play-circle-fill" id="12"></i>

                        </div>
                        <h5>Cupid
                            <div class="subtitle">By Fifty Fifty</div>
                        </h5>
                    </li>
                    <!-- ....................2................. -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/Op ED.jpeg" alt="One Piece">
                            <i class="bi  playlistplay bi-play-circle-fill" id="13"></i>

                        </div>
                        <h5>RAISE
                            <div class="subtitle">By Chilli Beans</div>
                        </h5>
                    </li>
                    <!-- ....................3.................... -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Images/jjk 1.gif" alt="JJK Opening">
                            <i class="bi  playlistplay bi-play-circle-fill" id="14"></i>

                        </div>
                        <h5>SpecialZ
                            <div class="subtitle">By JJK</div>
                        </h5>
                    </li>
                    <!-- ....................1.................... -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/Peak Gif.gif" alt="Demon Slayer">
                            <i class="bi  playlistplay bi-play-circle-fill" id="15"></i>

                        </div>
                        <h5>Fukashigi No Karte
                            <div class="subtitle">By RDNDABGS</div>
                        </h5>
                    </li>
                    <!-- ....................1.................... -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/ONF.jpg" alt="Song">
                            <i class="bi  playlistplay bi-play-circle-fill" id="16"></i>

                        </div>
                        <h5>On the Floor
                            <div class="subtitle">By Jennifer Lopez</div>
                        </h5>
                        
                    </li>
                    <!-- ....................1.................... -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/UIFH.jpg" alt="Until I found her">
                            <i class="bi  playlistplay bi-play-circle-fill" id="17"></i>

                        </div>
                        <h5>Until I Found Her
                            <div class="subtitle">By Stephen Sanchez & Em Beihold</div>
                        </h5>
                    </li>
                    <!-- ....................1.................... -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/DDLj.webp" alt="Demon Slayer">
                            <i class="bi  playlistplay bi-play-circle-fill" id="18"></i>

                        </div>
                        <h5> DDLJ
                            <div class="subtitle">By DDLJ</div>
                        </h5>
                    </li>
                    <!-- ....................1.................... -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/JAy Shree Ram.gif" alt="JAy Shree Ram">
                            <i class="bi  playlistplay bi-play-circle-fill" id="19"></i>

                        </div>
                        <h5>हम कथा सुनाते राम सकल गुण धाम की
                            <div class="subtitle">By Luv Kush</div>
                        </h5>
                    </li>
                    <!-- ....................1.................... -->
                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/TG.gif" alt="Tokyo Ghoul">
                            <i class="bi  playlistplay bi-play-circle-fill" id="20"></i>

                        </div>
                        <h5>Tokyo Ghoul
                            <div class="subtitle">Unravel</div>
                        </h5>
                    </li>

                    <li class="songItem">
                        <div class="img_play">
                            <img src="Song Covers/21.jpg" alt="Mashle">
                            <i class="bi  playlistplay bi-play-circle-fill" id="21"></i>

                        </div>
                        <h5>Mashle Op
                            <div class="subtitle">Mashle Opening</div>
                        </h5>
                    </li>

                    <!-- ....................1................... -->

                </div>
            </div>
            <div class="popular_artist">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-caret-left" id="pop_art_left"></i>
                        <i class="bi bi-caret-right" id="pop_art_right"></i>
                    </div>
                </div>


                <div class="item art">
                    <li>
                        <a href="Bollywood.php"><img src="PlaylistS Cover/2.jpg" alt="2"></a>
                    </li>
                    <li>
                        <a href="onepiece.php"><img src="PlaylistS Cover/3.png" alt="3"></a>
                    </li>
                    <li>
                        <a href="ps.php"><img src="PlaylistS Cover/4.jpg" alt="4"></a>
                    </li>
                    <li>
                        <a href="onepiece.php"><img src="PlaylistS Cover/3.png" alt="3"></a>
                    </li>
                    <li>
                        <a href="Bollywood.php"><img src="PlaylistS Cover/2.jpg" alt="2"></a>
                    </li>
                    <li>
                        <a href="onepiece.php"><img src="PlaylistS Cover/3.png" alt="3"></a>
                    </li>
                    <li>
                        <a href="Bollywood.php"><img src="PlaylistS Cover/2.jpg" alt="2"></a>
                    </li>
                    <li>
                        <a href="onepiece.php"><img src="PlaylistS Cover/3.png" alt="3"></a>
                    </li>
                    <li>
                        <a href="Bollywood.php"><img src="PlaylistS Cover/2.jpg" alt="2"></a>
                    </li>
                    <li>
                        <a href="onepiece.php"><img src="PlaylistS Cover/3.png" alt="3"></a>
                    </li>
                    <li>
                        <a href="Bollywood.php"><img src="PlaylistS Cover/2.jpg" alt="2"></a>
                    </li>
                    <li>
                        <a href="onepiece.php"><img src="PlaylistS Cover/3.png" alt="3"></a>
                    </li>
                    <li>
                        <a href="Bollywood.php"><img src="PlaylistS Cover/2.jpg" alt="2"></a>
                    </li>
                    <li>
                        <a href="onepiece.php"><img src="PlaylistS Cover/3.png" alt="3"></a>
                    </li>




                </div>


            </div>
        </div>


        <!-- master play below -->
        <div class="Play_Section">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="Song Covers/5.jpg" alt="" id="poster_play">
            <h5 id="title">Anime Songs <div class="subtitle">By RoshaN</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterplay"></i>
                <i class="bi bi-skip-end-fill" id="Next"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down"></i></a>
            </div>
            <span id="starttime">0.00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>

            </div>
            <span id="endtime">0.30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>


        </div>

    </header>
    <script src="Script.js"></script>
</body>

</html>
