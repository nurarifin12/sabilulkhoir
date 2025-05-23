<?php
include('db_conn.php');

$query = "SELECT * FROM beranda";
$result = $conn->query($query);

// Ambil data About dari database
$queryAbout = "SELECT * FROM about LIMIT 1";
$resultAbout = $conn->query($queryAbout);

// Cek apakah data tersedia
if ($resultAbout->num_rows > 0) {
    $row = $resultAbout->fetch_assoc();
    $sejarah = $row['sejarah'];
    $visi = $row['visi'];
    $misi = explode("\n", $row['misi']); // Pecah misi menjadi array berdasarkan baris baru
} else {
    $sejarah = "Data belum tersedia.";
    $visi = "Data belum tersedia.";
    $misi = [];
}

// Ambil data About dari database
$queryKegiatan = "SELECT * FROM kegiatan";
$resultKegiatan = $conn->query($queryKegiatan);

$queryGaleri = "SELECT * FROM galeri";
$resultGaleri = mysqli_query($conn, $query);

$queryKontak = "SELECT * FROM kontak LIMIT 1"; // Ambil satu data kontak
$resultKontak = mysqli_query($conn, $queryKontak);
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
                <?= nl2br(htmlspecialchars($sejarah)); ?>
            </p>

            <h4 class="pl-12 font-bold text-black text-2xl mb-2">Visi</h4>
            <p class="pl-12 text-base font-normal text-black">
                <?= nl2br(htmlspecialchars($visi)); ?>
            </p>

            <h4 class="pl-12 font-bold text-black text-2xl mb-2 mt-3">Misi</h4>
            <ol class="pl-8 list-group list-group-numbered">
                <?php foreach ($misi as $point) : ?>
                    <li class="pl-8"><?= htmlspecialchars($point); ?></li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <section id="Kegiatan" class="pt-32 pb-32">
        <div class="container">
            <h3 class="text-4xl font-bold text-center mb-5">Program atau Kegiatan</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                if (mysqli_num_rows($resultKegiatan) > 0) {
                    while ($kegiatan = mysqli_fetch_assoc($resultKegiatan)) {
                        echo '<div class="col">';
                        echo '<div class="card h-100 shadow-lg">';
                        echo '<a href="yasin.php" class="p-2">
                        <img src="img/' . $kegiatan['gambar'] . '" class="card-img-top" alt="' . $kegiatan['judul'] . '">
                        </a>';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title font-bold">' . $kegiatan['judul'] . '</h5>';
                        echo '<p class="card-text text-white text-base">' . $kegiatan['deskripsi'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p class='text-center text-gray-600'>Tidak ada kegiatan yang tersedia</p>";
                }
                ?>
            </div>
        </div>
    </section>


    <!-- galeri -->
    <section id="Galeri-Media" class="pt-32 pb-32">
        <a class="btn btn-primary" href="yasin.php" role="button">Baca Yasin & Tahlil</a>
        <div class="container">
            <h3 class="text-4xl font-bold text-center mb-5">Galeri</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php

                if (mysqli_num_rows($resultGaleri) > 0) {
                    while ($galeri = mysqli_fetch_assoc($resultGaleri)) {
                        echo '
                    <div class="col">
                        <div class="card3">
                            <div class="card-details">
                                <img src="img/' . $galeri['gambar'] . '" alt="' . htmlspecialchars($galeri['judul']) . '">
                            </div>
                            <button class="card-button" data-bs-toggle="modal" data-bs-target="#modal' . $galeri['id'] . '">Selengkapnya</button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="modal' . $galeri['id'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">' . htmlspecialchars($galeri['judul']) . '</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="img/' . $galeri['gambar'] . '" alt="' . htmlspecialchars($galeri['judul']) . '">
                                            <p>' . nl2br(htmlspecialchars($galeri['deskripsi'])) . '</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close Window</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                } else {
                    echo "<p class='text-center'>Belum ada data galeri.</p>";
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </section>



    <section id="Contact" class=" pt-32 pb-32">
        <div class="container">
            <h3 class="text-4xl font-bold text-center mb-5">Kontak</h3>
            <div class="flex flex-wrap">
                <div class="px-4 lg:w-1/2">
                    <img src="./img/logo.jpg" class="img-fluid rounded pl-12 mix-blend-multiply" width="300px"
                        height="300px" alt="logo">
                </div>
                <div class="w-full pl-10 right-0 lg:w-1/2">
                    <h3 class="font-bold text-red text-3xl mb-6 mt-6">Get In Touch</h3>

                    <?php

                    if ($kontak = mysqli_fetch_assoc($resultKontak)) {
                    ?>
                        <div class="d-flex text-danger mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor"
                                class="bi bi-geo" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                            </svg>
                            <div>
                                <h4 class="pl-4 mb-3 font-bold text-slate-600 text-2xl">Address</h4>
                                <address class="pl-4 mb-0 text-secondary"><?= htmlspecialchars($kontak['alamat']); ?>
                                </address>
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
                                <h4 class="pl-4 mb-3 font-bold text-slate-600 text-2xl">Email</h4>
                                <p class="pl-4 mb-0 text-secondary"><?= htmlspecialchars($kontak['email']); ?></p>
                            </div>
                        </div>

                        <div class="d-flex text-danger mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 512 512">
                                <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path fill="#f22121"
                                    d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z" />
                            </svg>
                            <div>
                                <h4 class="pl-4 mb-3 font-bold text-slate-600 text-2xl">Facebook</h4>
                                <p class="pl-4 mb-0 text-secondary">
                                    <a href="<?= htmlspecialchars($kontak['facebook']); ?>" target="_blank"
                                        class="text-slate-600">
                                        <?= htmlspecialchars($kontak['facebook']); ?>
                                    </a>
                                </p>
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
                                <p class="pl-4 mb-0 text-secondary">
                                    <a href="<?= htmlspecialchars($kontak['media_sosial']); ?>" target="_blank"
                                        class="text-slate-600">
                                        <?= htmlspecialchars($kontak['media_sosial']); ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <a href="https://api.whatsapp.com/send?phone=<?= htmlspecialchars($kontak['nomor_telepon']); ?>&text=Halo%20saya%20ingin%20bertanya%20mengenai%20layanan%20Anda"
                            target="_blank">
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

                    <?php
                    } else {
                        echo "<p class='text-gray-600'>Data kontak belum tersedia.</p>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

    <footer class="pt-8 pb-8">
        <h2 class="font-bold text-center text-2xl mb-3">Sabilul <span>Khoir</span></h2>
        <p class="text-center">Organisasi Pemuda Dusun Mertelu Desa Kalisabuk</p>
        <div class="flex items-center justify-content-center py-4 pl-12">
            <!-- instagram -->
            <a href="https://www.instagram.com/sabilulkhoir_mertelu/" target="_blank"
                class="w-9 h-9 rounded-full bg-gray-100 flex justify-center items-center hover:border-yellow-400 hover:bg-red-600 hover:text-white">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <!-- youtube -->
            <a href="https://www.facebook.com/sabilulkhoir.mertelu" target="_blank"
                class="mx-4 w-9 h-9 rounded-full border bg-gray-100 flex justify-center items-center hover:border hover:bg-red-600 hover:text-white">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <!-- tiktok -->
            <a href="sabilulkhoir@gmail.com" target="_blank"
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