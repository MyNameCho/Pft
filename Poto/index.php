<?php

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <title>Portofolio Afdhal Fauzan</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
</head>

<body>
  <model-viewer  src="Images/fnaf.glb" style="width: 100%; height: 100%;" camera-controls></model-viewer>
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">Portofolio</a></div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="login.html">logout</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="mailto:akunhacker681@gmail.com"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/mynamedhal/?hl=en"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </nav>

  <!-- Home Section Start -->
  <section class="home" id="home">
    <div class="home-content">
      <div class="text">
        <div class="text-one">YoooHooo,</div>
        <div class="text-two">I'm Afdhal Fauzan </div>
        <div class="text-three">Hanya Orang Gabut</div>
        <div class="text-four">Dari Kebumen</div>
      </div>
      <div class="button">
        <button>Pekerjaan Saya</button>
      </div>
    </div>
  </section>

  <!-- About Section Start -->
  <section class="about" id="about">
    <div class="content">
      <div class="title"><span>Tentang Saya</span></div>
      <div class="about-details">
        <div class="left">
          <img src="images/diri.jpg" alt="" />
        </div>
        <div class="right">
          <div class="topic">Tentang Diri Saya</div>
          <p>
            Nama saya adalah Afdhal Fauzan, asal saya dari Kebumen, Jawa Tengah. Saya adalah orang yang sangat gabut dan
            suka ngoding. Saya sekarang sedang belajar di Universitas Ma'arif Nahdlatul Ulama Kebumen. Sekian dan Terima Gaji.
          </p>
          <div class="button" onclick="unduhFilee()">
            <button >Download CV</button>
            <script>
              /*************  ✨ Codeium Command ⭐  *************/
/**
 * Creates a downloadable Word document (docx) containing a brief introduction
 * about Afdhal Fauzan and triggers a download of the file named "CV Afdhal Fauzan.docx".
 */

/******  91d66903-ea7f-4753-b8d3-bd017b6456f9  *******/
              function unduhFilee() {
                var file = new Blob(["Nama saya adalah Afdhal Fauzan, asal saya dari Kebumen, Jawa Tengah. Saya adalah orang yang sangat gabut dan suka ngoding. Saya sekarang sedang belajar di Universitas Ma'arif Nahdlatul Ulama Kebumen. Sekian dan Terima Gaji."], { type: "application/docx" });
                var link = document.createElement("a");
                link.href = URL.createObjectURL(file);
                link.download = "CV Afdhal Fauzan.docx";
                link.click();
                }
            </script>
          </div>
          <div class="button" onclick="unduhFile()">
            <button >Download Gambar</button>
            <script>
/*************  ✨ Codeium Command ⭐  *************/
/**
 * Creates a downloadable Word document (jpg) containing a brief introduction
 * about Afdhal Fauzan and triggers a download of the file named "CV Afdhal Fauzan.jpg".
 */

/******  91d66903-ea7f-4753-b8d3-bd017b6456f9  *******/
              function unduhFile() {
                var link = document.createElement("a");
                link.href = "images/saya.jpg";
                link.download = "CV Afdhal Fauzan.jpg";
                link.click();
                }
            </script>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- My Skill Section Start -->
  <!-- Section Tag and Other Div will same where we need to put same CSS -->
  <section class="skills" id="skills">
    <div class="content">
      <div class="title"><span>My Skills</span></div>
      <div class="skills-details">
        <div class="text">
          <div class="topic">Keahlian</div>
          <p>Keahlian saya seperti di samping kanan, dimana untuk setiap skill yang saya bisa hanya beberapa persentase. tetapi saya juga akan belajar untuk meningkatkan kemampuan saya</p>
          <div class="experience">
            <div class="num">2</div>
            <div class="exp">
              Tahun <br />
              Pembelajaran
            </div>
          </div>
        </div>
        <div class="boxes">
          <div class="box">
            <div class="topic">HTML</div>
            <div class="bar">
              <div class="fill" style="width: 70%;"></div>
            </div>
            <div class="per">70%</div>
          </div>
          <div class="box">
            <div class="topic">CSS</div>
            <div class="bar">
              <div class="fill" style="width: 50%;"></div>
            </div>
            <div class="per">50%</div>
          </div>
          <div class="box">
            <div class="topic">Java</div>
            <div class="bar">
              <div class="fill" style="width: 65%;"></div>
            </div>
            <div class="per">65%</div>
          </div>
          <div class="box">
            <div class="topic">PHP</div>
            <div class="bar">
              <div class="fill" style="width: 30%;"></div>
            </div>
            <div class="per">30%</div>
          </div>
          <div class="box">
            <div class="topic">C++</div>
            <div class="bar">
              <div class="fill" style="width: 60%;"></div>
            </div>
            <div class="per">60%</div>
          </div>
          <div class="box">
            <div class="topic">Kotlin</div>
            <div class="bar">
              <div class="fill" style="width: 40%;"></div>
            </div>
            <div class="per">40%</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <style>
    .box {
      margin-bottom: 20px;
    }
  
    .bar {
      width: 100%;
      height: 10px;
      background-color: #e0e0e0;
      border-radius: 5px;
    }
  
    .fill {
      height: 100%;
      background-color: #4caf50;
      border-radius: 5px;
    }
  
    .per {
      text-align: right;
      font-weight: bold;
      margin-top: 5px;
    }
  </style>
  



  <!-- My Services Section Start -->
  <section class="services" id="services">
    <div class="content">
      <div class="title"><span>Layanan Saya</span></div>
      <div class="boxes">
        <div class="box">
          <div class="icon">
            <i class="fas fa-desktop"></i>
          </div>
          <div class="topic">Web Development</div>
          <p>Portofolio Tentang Diri Sendiri</p>
        </div>
        <div class="box"><a href="galeri.php">
          <div class="icon">
            <i class="fas fa-paint-brush"></i>
          </div>
          <div class="topic">Galeri</div>
          <p>Lihat Sendiri</p>
        </div></a>
        <div class="box"><a href="digital marketing.html">
          <div class="icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <div class="topic" >Digital Marketing</div>
          <p>3 Postingan</p>
        </div></a>
        <div class="box">
          <div class="icon">
            <i class="fab fa-android"></i>
          </div>
          <div class="topic">Icon Design</div>
          <p>Belum Ada</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-camera-retro"></i>
          </div>
          <div class="topic"><a href="https://www.instagram.com/mynamedhal/?hl=en">Photography</div></a>
          <p>Belum Ada</p>
        </div>
        <div class="box">
          <div class="icon">
            <i class="fas fa-tablet-alt"></i>
          </div>
          <div class="topic">Apps Development</div>
          <p>Apk Game QUIZZ berupa game quiz yang dapat di download di playstore</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Me section Start -->
  <section class="contact" id="contact">
    <div class="content">
      <div class="title"><span>Contact Me</span></div>
      <div class="title" ><span>+62-819-4673-0549</span></div>
      <div class="text">
        <div class="topic">Ingin Membuat Project?</div>
        <p color="Green">Ingin Memesan Project? Hubungi No di atas </p>
        <p color="Green">atau bisa klik link di bawah ini </p>
        <div class="button">
          <button><a href="https://wa.me/6281946730549" target="_blank" >Silahkan Menghubungi</button></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section Start -->
  <footer>
    <div class="text">
      <span>Created By <a href="#">AfCode</a> | &#169; 2025 All Rights Reserved</span>
    </div>
  </footer>
  <script src="script.js"></script>
</body>

</html>