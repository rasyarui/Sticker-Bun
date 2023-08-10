<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/home.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    />

    <title>Home Page</title>
  </head>
  <body>
    <!-- Tampilan Awal -->
    <div class="First">
      <div class="wrapper">
        <div
          class="nav"
          data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500"
        >
          <div class="logo">
            <a href="">
              <img src="assets/Logo (1).png" alt="" />
            </a>
          </div>
          <ul>
            <a href="#"><li>Home</li></a>
            <a href="#Collab"><li>Stiker Pack</li></a>
            <a href="#Shoes"><li>All Stiker</li></a>
            <a href="#About"><li>About</li></a>
            <a href="#Contact"><li>Contact Us</li></a>

            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="logout">Logout</button>
                </form>
            </li>



          </ul>
        </div>

        <div class="header">
          <h1
            data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
          >
            Sticker <span>Bun</span>
          </h1>
        </div>
        <div class="content-header">
          <p
            data-aos="fade-right"
            data-aos-offset="250"
            data-aos-easing="ease-in-sine"
          >
            Cari Sticker sebanyak banyaknya yang anda inginkan dan unduh gambar
            agar dipakai kapan saja!.
          </p>
        </div>
        <div class="col-img">
          <img src="assets/smile 1.png" alt="" data-aos="zoom-in-up" />
        </div>
      </div>
    </div>
    <!-- End Tampilan Awal -->

    <!-- Collab -->
    <div class="judul" id="Collab" data-aos="zoom-in-down">
      <h1>Sticker Pack</h1>
    </div>
    <section class="section-card">
      <div class="card card-1" data-aos="flip-left">
        <img src="assets/GOMKIL.png" alt="" class="card__img" height="47%" />
        <div class="card__details">
          <h1><span class="PapaGading">The Gomkil</span></h1>
          <p>
            Sticker emoji Gomkil yang bervariasi berbagai ekspresi senang,
            marah, sedih, tertawa, dan lain lain
          </p>
        </div>
        <a href="paket1.html" class="btn">See Pack</a>
        <a href="assets/kuning.zip" class="btnd">download</a>
      </div>
      <div class="card card-2" data-aos="flip-up">
        <img
          src="assets/BANDAR BOKEP.png"
          alt=""
          class="card__img"
          height="47%"
        />
        <div class="card__details">
          <h1><span class="ayam">The Penguins</span></h1>
          <p>
            Dapatkan Sticker penguins yang lucu lucu sebagai bentuk ekspresi
            teruntuk temanmu yang setia
          </p>
        </div>
        <a
          href="paket2.html" class="btn">See Pack</a>
          <a href="assets/penguin.zip" class="btnd">download</a>
      </div>
      <div class="card card-3" data-aos="flip-right">
        <img
          src="assets/STIKER HOMOK.png"
          alt=""
          class="card__img"
          height="47%"
        />
        <div class="card__details">
          <h1><span class="chicco">The Sungut Lele</span></h1>
          <p>
            Sticker ini cocok untuk mu yang sedang ingin mengungkapkan perasaan
            kasih sayang terhadap temanmu
          </p>
        </div>
        <a
          href="paket3.html"
          class="btn">See Pack</a>
          <a href="assets/homok.zip" class="btnd">download</a>
      </div>
    </section>
    <!-- End Collab -->

    <!-- Shoes -->
    <input type="radio" name="Photos" id="check1" checked class="apasih" />
    <input type="radio" name="Photos" id="check2" class="apasih" />
    <input type="radio" name="Photos" id="check3" class="apasih" />
    <input type="radio" name="Photos" id="check4" class="apasih" />

    <div class="container-gallery" id="Shoes">
      <h1 data-aos="zoom-in-down">Stikernya Bun</h1>
      <div class="top-content" data-aos="zoom-in">
        <h3>All Sticker</h3>
      </div>

      <div class="photo-gallery">
        <a href="assets/sticker17.png" download="tium dlu">
          <div class="pic place">
            <img src="assets/sticker17.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker16.png" download="hati people">
          <div class="pic family">
            <img src="assets/sticker16.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker3.png" download="EA">
          <div class="pic child">
            <img src="assets/sticker3.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker4.png" download="skeleton bunga">
          <div class="pic place">
            <img src="assets/sticker4.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker12.png" download="cat sad">
          <div class="pic family">
            <img src="assets/sticker12.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker6.png" download="dongo">
          <div class="pic child">
            <img src="assets/sticker6.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker18.png" download="petrik ily">
          <div class="pic place">
            <img src="assets/sticker18.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker8.png" download="emote sedih">
          <div class="pic family">
            <img src="assets/sticker8.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker9.png" download="abang saleh gelud">
          <div class="pic child">
            <img src="assets/sticker9.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker5.png" download="kucing bunga">
          <div class="pic place">
            <img src="assets/sticker5.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker7.png" download="kucing sedih">
          <div class="pic family">
            <img src="assets/sticker7.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker10.png" download="ribet">
          <div class="pic child">
            <img src="assets/sticker10.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker19.png" download="bunga untukmu">
          <div class="pic place">
            <img src="assets/sticker19.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker14.png" download="mengsedih">
          <div class="pic family">
            <img src="assets/sticker14.png" alt="" data-aos="zoom-in" />
          </div>
        </a>

        <a href="assets/sticker15.png" download="pura pura fokus">
          <div class="pic child">
            <img src="assets/sticker15.png" alt="" data-aos="zoom-in" />
          </div>

        <a href="assets/stiker 20.jpeg" download="lemon">
            <div class="pic child">
              <img src="assets/stiker 20.jpeg" alt="" data-aos="zoom-in" />
            </div>

        <a href="assets/stiker 21.jpeg" download="untukmu cantik">
              <div class="pic child">
                <img src="assets/stiker 21.jpeg" alt="" data-aos="zoom-in" />
              </div>

        <a href="assets/stiker 22.jpeg" download="Kamu Marah?">
                <div class="pic child">
                  <img src="assets/stiker 22.jpeg" alt="" data-aos="zoom-in" />
                </div>
        <a href="assets/stiker 23.jpeg" download="Ga Trima?">
                  <div class="pic child">
                    <img src="assets/stiker 23.jpeg" alt="" data-aos="zoom-in" />
                  </div>
        <a href="assets/stiker 24.jpeg" download="Dilihat-lihat">
                    <div class="pic child">
                      <img src="assets/stiker 24.jpeg" alt="" data-aos="zoom-in" />
                    </div>
        <a href="assets/stiker 26.jpeg" download="Astagfirullah">
                      <div class="pic child">
                        <img src="assets/stiker 26.jpeg" alt="" data-aos="zoom-in" />
                      </div>
        <a href="assets/stiker 27.jpeg" download="Gue Sih Ga Nanya">
                        <div class="pic child">
                          <img src="assets/stiker 27.jpeg" alt="" data-aos="zoom-in" />
                        </div>
        <a href="assets/stiker 28.jpeg" download="Aku Orangnya Males Tau">
                          <div class="pic child">
                            <img src="assets/stiker 28.jpeg" alt="" data-aos="zoom-in" />
                          </div>
        <a href="assets/stiker29.jpeg" download="Hadir">
                            <div class="pic child">
                              <img src="assets/stiker29.jpeg" alt="" data-aos="zoom-in" />
                            </div>
        <a href="assets/stiker25.jpeg" download="Kanjut">
                              <div class="pic child">
                                <img src="assets/stiker25.jpeg" alt="" data-aos="zoom-in" />
                              </div>
        <a href="assets/stiker30.jpeg" download="Orang Strez">
                            <div class="pic child">
                              <img src="assets/stiker30.jpeg" alt="" data-aos="zoom-in" />
                            </div>
        <a href="assets/stiker31.jpeg" download="Palalo Gue Genjreng">
                          <div class="pic child">
                            <img src="assets/stiker31.jpeg" alt="" data-aos="zoom-in" />
                          </div>
        <a href="assets/stiker32.jpeg" download="Muka Senyum Ingin Mengucap Assalamualaikum">
                          <div class="pic child">
                            <img src="assets/stiker32.jpeg" alt="" data-aos="zoom-in" />
                          </div>
        <a href="assets/stiker33.jpeg" download="Sopan Dikit">
                          <div class="pic child">
                            <img src="assets/stiker33.jpeg" alt="" data-aos="zoom-in" />
                          </div> 
        <a href="assets/stiker34.jpeg" download="UwU">
                        <div class="pic child">
                          <img src="assets/stiker34.jpeg" alt="" data-aos="zoom-in" />
                        </div> 
        <a href="assets/stiker35.jpeg" download="Kumaha Barudak">
                      <div class="pic child">
                        <img src="assets/stiker35.jpeg" alt="" data-aos="zoom-in" />
                      </div> 
        <a href="assets/stiker36.jpeg" download="Kecewa Berat">
                    <div class="pic child">
                      <img src="assets/stiker36.jpeg" alt="" data-aos="zoom-in" />
                    </div>
        <a href="assets/stiker37.jpeg" download="Ah Yang Bener">
                  <div class="pic child">
                    <img src="assets/stiker37.jpeg" alt="" data-aos="zoom-in" />
                  </div>
        <a href="assets/stiker38.jpeg" download="Waduh">
                <div class="pic child">
                  <img src="assets/stiker38.jpeg" alt="" data-aos="zoom-in" />
                </div>
        <a href="assets/stiker39.jpeg" download="Gapeduli Wlee">
              <div class="pic child">
                <img src="assets/stiker39.jpeg" alt="" data-aos="zoom-in" />
              </div>
        <a href="assets/stiker40.jpeg" download="Pukul Berapa">
            <div class="pic child">
              <img src="assets/stiker40.jpeg" alt="" data-aos="zoom-in" />
            </div>
        <a href="assets/stiker41.jpeg" download="Biar Apa?">
          <div class="pic child">
            <img src="assets/stiker41.jpeg" alt="" data-aos="zoom-in" />
          </div> 
        <a href="assets/stiker42.jpeg" download="Maaf Kalau Sok Akrab">
            <div class="pic child">
              <img src="assets/stiker42.jpeg" alt="" data-aos="zoom-in" />
            </div>
        <a href="assets/stiker43.jpeg" download="Sedot Dosa">
              <div class="pic child">
                <img src="assets/stiker43.jpeg" alt="" data-aos="zoom-in" />
              </div>
        <a href="assets/stiker44.jpeg" download="Napa? Gaseneng?">
                <div class="pic child">
                  <img src="assets/stiker44.jpeg" alt="" data-aos="zoom-in" />
                </div>
        <a href="assets/stiker45.jpeg" download="Lah Ngatur">
                  <div class="pic child">
                    <img src="assets/stiker45.jpeg" alt="" data-aos="zoom-in" />
                  </div>
        <a href="assets/stiker46.jpeg" download="Juara 1 Lomba Terganteng Sedunia">
                    <div class="pic child">
                      <img src="assets/stiker46.jpeg" alt="" data-aos="zoom-in" />
                    </div>
        <a href="assets/stiker47.jpeg" download="Pake nanya">
                      <div class="pic child">
                        <img src="assets/stiker47.jpeg" alt="" data-aos="zoom-in" />
                      </div>
        <a href="assets/stiker48.jpeg" download="sondesip">
                        <div class="pic child">
                          <img src="assets/stiker48.jpeg" alt="" data-aos="zoom-in" />
                        </div>  
        </a>
      </div>
    </div>
    <!-- End Shoes -->

    <!-- About -->
    <div class="section-bejir" id="About">
      <div class="container-bejir">
        <div class="content-section">
          <div class="title">
            <h1 data-aos="fade-right">About Us</h1>
          </div>
          <div class="content-apa">
            <h3 data-aos="fade-right">StickerBun</h3>
            <p data-aos="fade-right">
              StickerBun merupakan website sticker finder yang mana user dapat
              mencari sticker dan mendonwloadnya secara gratis. StickerBun ada
              sejak 1978
            </p>
            <div class="button" data-aos="fade-right">
              <a href="landing.html">Read More</a>
            </div>
          </div>
          <div class="social" data-aos="fade-right" data-aos-offset="100">
            <a href=""><i class="fab fa-whatsapp"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="image-section">
          <img src="assets/Abioyr us2.png" alt="" data-aos="zoom-in-up" />
        </div>
      </div>
    </div>
    <!-- End About -->
    <div class="rasya" id="Contact">
      <div class="container-contact" data-aos="zoom-in-up">
        <div class="card-container">
          <div class="left">
            <div class="left-container">
              <h2>Tentang Kami</h2>
              <p>Stiker Bun</p>
              <br />
              <p>Jl. plumpang lurus dikit</p>
              <p>Jakarta - Indonesia</p>
              <p>Phone : +6281574814563</p>
              <p>Fax : +6281574814563</p>
              <p>WhatsApp : 081574814563</p>
            </div>
          </div>
          <div class="right">
            <div class="right-container">
              <form action="">
                <h2 class="lg-view">Hubungi Kami</h2>
                <h2 class="sm-view">Hubungi Kami</h2>
                <input type="text" placeholder="Nama" />
                <input type="email" placeholder="Alamat Email" />
                <input
                  type="text"
                  placeholder="Perusahaan"
                  autocomplete="off"
                />
                <input type="phone" placeholder="Telepone" autocomplete="off" />
                <textarea rows="10" placeholder="Pesan"></textarea>
                <button>Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="index.js"></script>
  </body>
</html>
