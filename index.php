<?php
include('db_conn.php');

$query = "SELECT * FROM beranda";
$result = $conn->query($query);
?>

<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SABILUL KHOIR</title>

    <!-- icon web -->
    <link rel="icon" href="./img/logo.jpg" type="image/jpg">

    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- bootraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- tailwinds -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                    },
                },
            },
        };
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            animation: fadeIn 1s ease-in;
            background-color: #f9f9f9;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <nav class="fixed left-0 rigth-0 py-2 w-full z-10 shadow-lg">
        <h2 class="font-bold tex-xl text-black">SABILUL<span class="text-red-600">KHOIR</span></h2>
        <ul class="inline pt-2">
            <li><a href="#Beranda" class="menu text-black">Beranda</a></li>
            <li><a href="#About" class="menu text-black">Tentang Kami</a></li>
            <li><a href="#Kegiatan" class="menu text-black">Kegiatan</a></li>
            <li><a href="#Galeri-Media" class="menu text-black">Galeri</a></li>
            <li><a href="#Contact" class="menu text-black">Kontak</a></li>
            <a href="./login.php">
                <button
                    class="cursor-pointer bg-gradient-to-b from-indigo-500 to-indigo-600 shadow-[0px_4px_32px_0_rgba(99,102,241,.70)] px-6 py-2 rounded-xl border-[1px] border-slate-500 text-white font-medium group">
                    <div class="relative overflow-hidden">
                        <p class="group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                            Login
                        </p>
                        <p
                            class="absolute top-7 left-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                            Login
                        </p>
                    </div>
                </button>
            </a>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <section id="Beranda" class="mt-31" style="height: 100vh;">
        <!-- Mengatur tinggi section -->
        <div class="container-fluid p-0">
            <!-- Menggunakan container-fluid dan menghapus padding -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="height: 100vh;">
                <!-- Mengatur tinggi carousel -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="height: 100vh;">
                    <!-- Mengatur tinggi carousel-inner -->
                    <div class="carousel-inner" style="height: 100vh;">
                        <?php
                        $active = "active";
                        while ($row = $result->fetch_assoc()) { ?>
                            <div class="carousel-item <?= $active ?>" style="height: 100vh;">
                                <img src="img/<?= $row['gambar'] ?>" class="d-block w-100 h-100" alt="<?= $row['judul'] ?>"
                                    style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-3xl font-weight-bold"><?= $row['judul'] ?></h5>
                                    <p><?= $row['deskripsi'] ?></p>
                                </div>
                            </div>
                        <?php
                            $active = ""; // Hilangkan "active" setelah item pertama
                        } ?>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="About" class="pt-32 pb-32">
        <div class="container">
            <h3 class="pl-12 font-bold text-white text-4xl mb-6 text-center">Tentang Kami</h3>
            <h4 class="pl-12 font-bold text-black text-2xl mb-2">Sejarah</h4>
            <p class="pl-12 text-base font-normal text-black mb-2" style="text-align: justify;">
                Pemuda merupakan aset berharga bagi kemajuan suatu daerah. Mereka memiliki energi, kreativitas, dan
                semangat yang tinggi untuk membawa perubahan positif dalam masyarakat. Namun, sering kali pemuda
                dihadapkan pada tantangan seperti kurangnya wadah untuk menyalurkan potensi, minimnya kegiatan yang
                membangun, serta terbatasnya ruang untuk berkontribusi dalam kehidupan sosial dan keagamaan.

                Dusun Mertelu, Desa Kalisabuk, memiliki banyak pemuda dengan beragam potensi yang belum terorganisir
                dengan baik. Melihat kebutuhan akan sebuah wadah yang dapat menjadi tempat berkumpul, berdiskusi, serta
                berkontribusi dalam pembangunan masyarakat, maka dibentuklah Organisasi Pemuda Sabilul Khoir.

                Sabilul Khoir, yang berarti "Jalan Kebaikan", diharapkan menjadi sarana bagi para pemuda untuk berperan
                aktif dalam kegiatan sosial, keagamaan, serta pengembangan diri. Organisasi ini bertujuan untuk
                menciptakan pemuda yang berakhlak, berdaya saing, serta memiliki kepedulian terhadap lingkungan sekitar.
                Dengan adanya organisasi ini, diharapkan lahir berbagai program dan kegiatan yang mampu meningkatkan
                kualitas pemuda dan memberikan manfaat bagi masyarakat Dusun Mertelu secara keseluruhan.
            </p>
            <h4 class="pl-12 font-bold text-black text-2xl mb-2">Visi</h4>
            <p class="pl-12 text-base font-normal text-black">Mewujudkan masyarakat Dusun Mertelu yang berakhlak
                mulia, harmonis, dan mandiri melalui nilai-nilai kebersamaan, kepedulian, dan pengabdian.
            </p>
            <h4 class="pl-12 font-bold text-black text-2xl mb-2 mt-3">Misi</h4>
            <ol class="pl-8 list-group list-group-numbered">
                <li class="pl-8">Memperkuat ukhuwah dan gotong royong di antara warga untuk menciptakan
                    lingkungan yang
                    harmonis dan sejahtera.
                </li>
                <li class="pl-8">
                    Mengembangkan kegiatan keagamaan dan sosial untuk meningkatkan kualitas spiritual dan kepedulian
                    masyarakat.
                </li>
                <li class="pl-8">
                    Mendorong pemberdayaan masyarakat melalui pelatihan dan program yang mendukung kemandirian ekonomi.
                </li>
                <li class="pl-8">
                    Melestarikan budaya lokal dan nilai-nilai luhur sebagai identitas masyarakat Dusun Mertelu.
                </li>
            </ol>
        </div>
    </section>

    <section id="Kegiatan" class="pt-32 pb-32">
        <div class="container">
            <h3 class="text-4xl font-bold text-center mb-5">Program atau Kegiatan</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <span class="glass"></span>
                        <img src="./img/bersih.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Kebersihan Lingkungan</h5>
                            <p class="card-text text-white text-base">Gerakan Kebersihan Lingkungan adalah program rutin
                                yang diselenggarakan oleh Shobilul Khoir untuk menciptakan lingkungan dusun yang bersih,
                                sehat, dan nyaman. Kegiatan ini melibatkan seluruh warga Dusun Mertelu, Desa Kalisabuk,
                                dalam semangat gotong royong untuk menjaga kelestarian dan kebersihan lingkungan. Selain
                                membersihkan lingkungan, program ini juga berfokus pada penghijauan melalui penanaman
                                pohon di area yang gersang.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-white"><a href="https://simpati.unugha.ac.id" target="_blank">Learn
                                    More</a></small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="./img/ngaji2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Pengajian Rutin</h5>
                            <p class="card-text text-white text-base">Pengajian Rutin Shobilul Khoir adalah program
                                mingguan/bulanan yang diselenggarakan untuk memperkuat keimanan dan memperdalam
                                pemahaman agama Islam di tengah masyarakat Dusun Mertelu, Desa Kalisabuk. Kegiatan ini
                                terbuka untuk semua kalangan, baik anak-anak, remaja, hingga orang tua, sebagai sarana
                                mempererat ukhuwah Islamiyah dan berbagi ilmu.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-white"><a href="https://simpati.unugha.ac.id" target="_blank">Learn
                                    More</a></small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="./img/haribesar.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Peringatan Hari Besar Islam</h5>
                            <p class="card-text text-white text-base">Program Peringatan Hari Besar Islam merupakan
                                kegiatan istimewa yang diadakan oleh Shobilul Khoir untuk memperingati momen-momen
                                penting dalam sejarah Islam, seperti Maulid Nabi Muhammad SAW, Isra’ Mi’raj, Idul Fitri,
                                dan Idul Adha. Kegiatan ini bertujuan untuk menghidupkan syiar Islam, menanamkan
                                nilai-nilai keagamaan, dan mempererat hubungan antarwarga di Dusun Mertelu, Desa
                                Kalisabuk.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-white"><a href="https://simpati.unugha.ac.id" target="_blank">Learn
                                    More</a></small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-lg">
                        <img src="./img/sosial.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-bold">Bakti Sosial</h5>
                            <p class="card-text text-white text-base">Program Bakti Sosial Shobilul Khoir adalah wujud
                                nyata kepedulian kepada masyarakat Dusun Mertelu, Desa Kalisabuk. Kegiatan ini bertujuan
                                membantu meringankan beban warga yang membutuhkan, mempererat kebersamaan, dan membangun
                                budaya gotong royong. Dengan semangat berbagi, program ini menjadi sarana untuk
                                menciptakan masyarakat yang lebih harmonis dan sejahtera.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-white"><a href="https://simpati.unugha.ac.id" target="_blank">Learn
                                    More</a></small>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <section id="Galeri-Media" class="pt-32 pb-32">
        <div class="container">
            <h3 class="text-4xl font-bold text-center mb-5">Galeri</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card3">
                        <div class="card-details">
                            <img src="./img/karnaval.jpg" alt="">
                        </div>
                        <button class="card-button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Selengkapnya</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Karnaval</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="./img/karnaval.jpg" alt="">
                                        <p>Karnaval hari kemerdekaan Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. In commodi saepe autem eligendi ea praesentium modi facere rerum
                                            debitis eum.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close
                                            Window</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card3">
                        <div class="card-details">
                            <img src="profil.JPG" alt="">
                        </div>
                        <button class="card-button" data-bs-toggle="modal"
                            data-bs-target="#sholawatModal">Selengkapnya</button>
                        <!-- Modal -->
                        <div class="modal fade" id="sholawatModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sholawat HARLAH Sabilul Khoir
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="profil.jpg" alt="">
                                        <p>Sholawat dalam rangka HARLAH Sabilul Khoir Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. In commodi saepe autem eligendi ea praesentium
                                            modi facere rerum debitis eum.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close
                                            Window</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card3">
                        <div class="card-details">
                            <img src="./img/ngaji2.jpeg" alt="">
                        </div>
                        <button class="card-button" data-bs-toggle="modal"
                            data-bs-target="#ngajiModal">Selengkapnya</button>
                        <!-- Modal -->
                        <div class="modal fade" id="ngajiModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ngaji Rutinan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="./img/ngaji2.jpeg" alt="">
                                        <p>Ngaji rutinan Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                                            commodi saepe autem eligendi ea praesentium modi facere rerum debitis eum.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close
                                            Window</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card3">
                        <div class="card-details">
                            <img src="./img/ngaji2.jpeg" alt="">
                        </div>
                        <button class="card-button" data-bs-toggle="modal"
                            data-bs-target="#ngajiModal">Selengkapnya</button>
                        <!-- Modal -->
                        <div class="modal fade" id="ngajiModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ngaji Rutinan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="./img/ngaji2.jpeg" alt="">
                                        <p>Ngaji rutinan Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                                            commodi saepe autem eligendi ea praesentium modi facere rerum debitis eum.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close
                                            Window</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card3">
                        <div class="card-details">
                            <img src="./img/ngaji2.jpeg" alt="">
                        </div>
                        <button class="card-button" data-bs-toggle="modal"
                            data-bs-target="#ngajiModal">Selengkapnya</button>
                        <!-- Modal -->
                        <div class="modal fade" id="ngajiModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ngaji Rutinan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="./img/ngaji2.jpeg" alt="">
                                        <p>Ngaji rutinan Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                                            commodi saepe autem eligendi ea praesentium modi facere rerum debitis eum.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close
                                            Window</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card3">
                        <div class="card-details">
                            <img src="./img/ngaji2.jpeg" alt="">
                        </div>
                        <button class="card-button" data-bs-toggle="modal"
                            data-bs-target="#ngajiModal">Selengkapnya</button>
                        <!-- Modal -->
                        <div class="modal fade" id="ngajiModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ngaji Rutinan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="./img/ngaji2.jpeg" alt="">
                                        <p>Ngaji rutinan Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                                            commodi saepe autem eligendi ea praesentium modi facere rerum debitis eum.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close
                                            Window</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="Contact" class=" pt-32 pb-32">
        <div class="container">
            <h3 class="text-4xl font-bold text-center mb-5">Kontak</h3>
            <div class="flex flex-wrap">
                <div class="px-4 lg:w-1/2">
                    <img src="./img/logo.jpg" class="img-fluid rounded pl-12 mix-blend-multiply" width="300px"
                        height="300px" alt="rifin">
                </div>
                <div class="w-full pl-10 right-0 lg:w-1/2">
                    <h3 class="font-bold text-red text-3xl mb-6 mt-6">Get In Touch</h3>
                    <div class="d-flex text-danger mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor"
                            class="bi bi-geo" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                        </svg>
                        <div>
                            <h4 class="pl-4 mb-3 font-bold text-slate-600 text-2xl">Address</h4>
                            <address class="pl-4 mb-0 text-secondary">Mertelu, Desa Kalisabuk</address>
                        </div>
                    </div>
                    <div class="d-flex text-danger mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 448 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path fill="#f21c1c"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                        <div>
                            <h4 class="pl-4 mb-3 font-bold text-slate-600 text-2xl">Instagram</h4>
                            <a class="text-slate-600"
                                href="https://www.instagram.com/sabilulkhoir_mertelu?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">sabilulkhoir_mertelu</a>
                        </div>
                    </div>
                    <div class="d-flex text-danger mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor"
                            class="bi bi-envelope-at" viewBox="0 0 16 16">
                            <path
                                d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                            <path
                                d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                        </svg>
                        <div>
                            <h4 class="pl-4 mb-3 font-bold text-slate-600 text-2xl">E-mail</h4>
                            <address class="pl-4 mb-0 text-secondary">sabilulkhoir@gmail.com</address>
                        </div>
                    </div>
                    <a href="./login.php">
                        <button
                            class="btn cursor-pointer bg-gradient-to-b from-indigo-500 to-indigo-600 shadow-[0px_4px_32px_0_rgba(99,102,241,.70)] px-6 py-2 rounded-xl border-[1px] border-slate-500 text-white font-medium group">
                            <div class="relative overflow-hidden">
                                <p
                                    class="group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                    Hubungi Kami
                                </p>
                                <p
                                    class="absolute top-7 left-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                    Hubungi Kami
                                </p>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="pt-8 pb-8">
        <h2 class="font-bold text-center text-2xl mb-3">Sabilul <span>Khoir</span></h2>
        <p class="text-center">Organisasi Pemuda Dusun Mertelu Desa Kalisabuk</p>
        <div class="flex items-center justify-content-center py-4 pl-12">
            <!-- instagram -->
            <a href="https://www.instagram.com/nurrifin07/" target="_blank"
                class="w-9 h-9 rounded-full bg-gray-100 flex justify-center items-center hover:border-yellow-400 hover:bg-red-600 hover:text-white">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <!-- youtube -->
            <a href="https://www.youtube.com/channel/UCL01kjrxcNWmVRbSfN98dvA" target="_blank"
                class="mx-4 w-9 h-9 rounded-full border bg-gray-100 flex justify-center items-center hover:border hover:bg-red-600 hover:text-white">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <!-- tiktok -->
            <a href="https://www.tiktok.com/@nrifin7" target="_blank"
                class="w-9 h-9 rounded-full border bg-gray-100 flex justify-center items-center hover:border hover:bg-red-600 hover:text-white">
                <i class="fa-solid fa-envelope"></i>
            </a>
        </div>
    </footer>

    <script>
        const menuToggle = document.querySelector(".menu-toggle input");
        const nav = document.querySelector("nav ul");

        menuToggle.addEventListener("click", function() {
            nav.classList.toggle("slide");
        });
    </script>

    <script src="menu.js"></script>
</body>

</html>