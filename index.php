<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="java.js" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-content">
            <div class="logo">
                <img src="assets/logo.png" alt="Logo PT Montana Cendrawasih Group" style="height: 90px; margin-right: 10px; vertical-align: middle;">
                PT Montana Cendrawasih Group
            </div>
            <div class="menu-toggle">
                <!-- <i class="fas fa-bars"></i> -->
            </div>
            <div class="nav-links">
                <a href="#home">Beranda</a>
                <a href="#about">Tentang Kami</a>
                <a href="#products">Produk</a>
                <a href="#gallery">Galeri</a>
                <a href="#contact">Hubungi Kami</a>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-slider">
            <div class="slide" style="background-image: url('assets/produk-1.jpg');"></div>
            <div class="slide" style="background-image: url('assets/produk-6.jpg');"></div>
            <div class="slide" style="background-image: url('assets/produk-3.jpg');"></div>
            <div class="slide" style="background-image: url('assets/produk-4.jpg');"></div>
            <div class="slide" style="background-image: url('assets/produk-5.jpg');"></div>
        </div>
        <div class="hero-content">
            <h1>Selamat Datang di PT Montana Cendrawasih Group</h1>
            <p>Kami menyediakan Pinang Kualitas Terbaik</p>
            <button class="cta-button"><a href="#contact">Hubungi Kami</a></button>
        </div>
    </section>



    <!-- About Section -->
    <section id="about" class="section">
        <div class="section-content">
            <h2>Tentang Kami</h2>
            <div class="about-grid">
                <div class="about-image">
                    <img src="assets/produk-7.jpg" alt="About Us">
                </div>
                <div class="about-text">
                    <p>PT. Montana Cendrawasih Group adalah perusahaan yang bergerak di bidang pertanian dan perdagangan hasil bumi, khususnya tanaman biofarmaka dan rempah-rempah berkualitas tinggi. Dengan pengalaman dan dedikasi dalam industri ini, kami berkomitmen untuk menyediakan produk terbaik yang berasal langsung dari sumber alam yang berkelanjutan.</p>
                    <br>
                    <p>Sebagai perusahaan yang fokus pada hasil pertanian berkualitas, kami menyediakan berbagai jenis buah pinang, yang diproses dengan standar tinggi untuk memastikan kesegaran dan kemurnian produk. Produk kami meliputi:</p>
                    <br>
                    <p>✅ Pinang kering dan basah</p>
                    <br>
                    <p>✅ Pinang super premium</p>
                    <br>
                    <p>✅ Pinang belah dan bulat</p>
                    <br>
                    <p>✅ Pinang mentah untuk industri.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="section" style="background: #f8fafc;">
        <div class="section-content">
            <h2>Produk Kami</h2>
            <div class="products-grid">
                <div class="product-card">
                    <img src="assets/produk-8.jpg" alt="Product 1">
                    <div class="product-info">
                        <h3>Produk 1 - Pinang Segar & Setengah Kering</h3>
                        <p>Pinang pilihan dalam kondisi segar dan setengah kering, cocok untuk berbagai keperluan industri dan konsumsi.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="assets/produk-9.jpg" alt="Product 2">
                    <div class="product-info">
                        <h3>Produk 2 - Pinang Kering Berkualitas</h3>
                        <p>Pinang kering dengan kualitas premium, diproses secara higienis untuk memastikan mutu terbaik bagi pelanggan.</p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="assets/produk-10.jpg" alt="Product 3">
                    <div class="product-info">
                        <h3>Produk 3 - Pinang Belah Super Premium</h3>
                        <p>Pinang belah pilihan dengan tekstur dan kualitas terbaik, siap memenuhi kebutuhan pasar lokal maupun ekspor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section">
        <div class="section-content">
            <h2>Galeri</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="assets/produk-3.jpg" alt="Gallery 1">
                </div>
                <div class="gallery-item">
                    <img src="assets/produk-12.jpg" alt="Gallery 2">
                </div>
                <div class="gallery-item">
                    <img src="assets/produk-13.jpg" alt="Gallery 3">
                </div>
                <div class="gallery-item">
                    <img src="assets/produk-1.jpg" alt="Gallery 4">
                </div>
                <div class="gallery-item">
                    <img src="assets/produk-2.jpg" alt="Gallery 5">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section" style="background: #f8fafc;">
        <div class="section-content">
            <h2>Hubungi Kami</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Alamat: PERUM GRAND DOYO BARU, JAYAPURA, Papua 01286-Pertanian Tanaman Obat atau Biofarmaka Non Rimpang</span>
                    </div>
                    <div>
                        <i class="fas fa-phone"></i>
                        <span>Telepon: +6281247763302</span>
                    </div>
                    <div>
                        <i class="fas fa-envelope"></i>
                        <span>Email: montanacendrawasihgroup@gmail.com</span>
                    </div>
                </div>
                <div class="form-group">
                    <form id="whatsappForm">
                        <input type="text" id="name" placeholder="Masukkan nama Anda" required autocomplete="off">
                        <input type="email" id="email" placeholder="Masukkan email Anda" required autocomplete="off">
                        <textarea id="message" placeholder="Tulis pesan Anda" rows="5" required autocomplete="off"></textarea>
                        <button type="submit">Kirim Pesan</button>
                    </form>
                </div>

                <script>
                    document.getElementById("whatsappForm").addEventListener("submit", function(event) {
                        event.preventDefault();

                        var name = document.getElementById("name").value.trim();
                        var email = document.getElementById("email").value.trim();
                        var message = document.getElementById("message").value.trim();
                        var phoneNumber = "6281247763302"; // Ganti dengan nomor tujuan

                        // Validasi: Pastikan semua input terisi
                        if (!name || !email || !message) {
                            alert("Harap isi semua kolom terlebih dahulu.");
                            return;
                        }

                        // Format pesan dengan newline (\n) untuk tampilan yang lebih baik
                        var text = `Halo, ada pesan dari website!\n\nNama: ${name}\nEmail: ${email}\nPesan:\n${message}`;

                        // Encode teks agar karakter khusus tidak bermasalah
                        var encodedText = encodeURIComponent(text).replace(/%0A/g, "%0D%0A");

                        // Buat URL WhatsApp
                        var whatsappUrl = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodedText}`;

                        console.log("URL WhatsApp:", whatsappUrl); // Debugging: Lihat apakah URL terbentuk dengan benar

                        // Redirect ke WhatsApp di tab yang sama (paling aman)
                        window.location.href = whatsappUrl;
                    });
                </script>





            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 oleh PT Montana Cendrawasih Group.</p>
        <div class="social-links">
            <a href="https://www.facebook.com/share/15qikEM2F2/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="mailto:montanacendrawasihgroup@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            <a href="https://www.instagram.com/mcgroup.papua/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/6281247763302?text=Halo%20saya%20ingin%20bertanya!" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>

    <script>
        // Slider functionality
        class Slider {
            constructor() {
                this.currentSlide = 0;
                this.slides = document.querySelectorAll('.slide');
                this.totalSlides = this.slides.length;
                this.intervalId = null;

                this.init();
            }

            init() {
                this.showSlide(this.currentSlide);
                this.startAutoSlide();
            }

            showSlide(index) {
                this.slides.forEach((slide, i) => {
                    slide.style.transform = `translateX(${(i - index) * 100}%)`;
                });
            }

            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                this.showSlide(this.currentSlide);
            }

            startAutoSlide() {
                this.intervalId = setInterval(() => this.nextSlide(), 4000);
            }

            stopAutoSlide() {
                if (this.intervalId) {
                    clearInterval(this.intervalId);
                }
            }
        }

        // Navbar functionality
        class Navbar {
            constructor() {
                this.navbar = document.querySelector('.navbar');
                this.lastScrollTop = 0;
                this.menuToggle = document.querySelector('.menu-toggle');
                this.navLinks = document.querySelector('.nav-links');

                this.init();
            }

            init() {
                this.setupScrollHandler();
                this.setupMenuToggle();
            }

            setupScrollHandler() {
                window.addEventListener('scroll', () => {
                    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                    if (currentScroll > this.lastScrollTop) {
                        // Scrolling down
                        this.navbar.style.transform = 'translateY(-100%)';
                        this.navbar.classList.add('hidden');
                    } else {
                        // Scrolling up
                        this.navbar.style.transform = 'translateY(0)';
                        this.navbar.classList.remove('hidden');
                    }

                    this.lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
                });
            }

            setupMenuToggle() {
                if (this.menuToggle && this.navLinks) {
                    this.menuToggle.addEventListener('click', () => {
                        this.navLinks.classList.toggle('active');
                    });
                }
            }
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            const slider = new Slider();
            const navbar = new Navbar();
        });

        /* Add this JavaScript to handle the navbar scroll effect */
        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>