<?php
include('db_conn.php');


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
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
        padding-top: 50px;
    }

    strong {
        font-weight: bold;
        font-size: 2rem;
    }

    section h2 {
        text-align: center;
    }
    </style>
</head>

<body>
    <nav class="fixed left-0 rigth-0 py-2 w-full z-10 shadow-lg">
        <a href="index.php#Kegiatan" class="btn btn-primary">Kembali ke Kegiatan</a>
        <ul class="inline pt-2 text-justify">
            <li><a href="#yasin" class="menu text-black">Yasin</a></li>
            <li><a href="#tahlil" class="menu text-black">Tahlil</a></li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <main class="container mt-5 pt-20">
        <h1 class="text-center text-3xl font-bold mb-4">Bacaan Yasin & Tahlil</h1>

        <!-- Tambahkan Bacaan Surat Yasin -->
        <section id="yasin" class="mb-5">
            <h2 class="text-2xl font-semibold mb-3">Surat Yasin</h2>
            <p class="text-right leading-relaxed">
                <strong>بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</strong><br>
                Bismillāhir-raḥmānir-raḥīm<br><br>

                <strong>يٰسۤۚ ۝١
                </strong><br>
                Yā Sīn<br><br>

                <strong>وَالْقُرْاٰنِ الْحَكِيْمِۙ ۝٢</strong><br>
                Wal-qur'ānil-ḥakīm<br><br>

                <strong>اِنَّكَ لَمِنَ الْمُرْسَلِيْنَۙ ۝٣
                </strong><br>
                Innaka laminal-mursalīn<br><br>

                <strong>عَلٰى صِرَاطٍ مُّسْتَقِيْمٍۗ ۝٤
                </strong><br>
                'Alā ṣirāṭim mustaqīm<br><br>

                <strong>تَنْزِيْلَ الْعَزِيْزِ الرَّحِيْمِۙ ۝٥
                </strong><br>
                Tanzīlal-'azīzir-raḥīm<br><br>

                <strong>لِتُنْذِرَ قَوْمًا مَّآ اُنْذِرَ اٰبَاۤؤُهُمْ فَهُمْ غٰفِلُوْنَ ۝٦
                </strong><br>
                litundzira qaumam mâ undzira âbâ'uhum fa hum ghâfilûn
                <br><br>

                <strong>لَقَدْ حَقَّ الْقَوْلُ عَلٰٓى اَكْثَرِهِمْ فَهُمْ لَا يُؤْمِنُوْنَ ۝٧
                </strong><br>
                laqad ḫaqqal-qaulu ‘alâ aktsarihim fa hum lâ yu'minûn
                <br><br>
                <strong>اِنَّا جَعَلْنَا فِيْٓ اَعْنَاقِهِمْ اَغْلٰلًا فَهِيَ اِلَى الْاَذْقَانِ فَهُمْ مُّقْمَحُوْنَ ۝٨
                </strong><br>
                innâ ja‘alnâ fî a‘nâqihim aghlâlan fa hiya ilal-adzqâni fa hum muqmaḫûn
                <br><br>

                <strong>وَجَعَلْنَا مِنْۢ بَيْنِ اَيْدِيْهِمْ سَدًّا وَّمِنْ خَلْفِهِمْ سَدًّا فَاَغْشَيْنٰهُمْ فَهُمْ
                    لَا يُبْصِرُوْنَ ۝٩
                </strong><br>
                wa ja‘alnâ mim baini aidîhim saddaw wa min khalfihim saddan fa aghsyainâhum fa hum lâ yubshirûn
                <br><br>

                <strong>وَسَوَاۤءٌ عَلَيْهِمْ ءَاَنْذَرْتَهُمْ اَمْ لَمْ تُنْذِرْهُمْ لَا يُؤْمِنُوْنَ ۝١٠
                </strong><br>
                wa sawâ'un ‘alaihim a andzartahum am lam tundzir-hum lâ yu'minûn
                <br><br>

                <strong>اِنَّمَا تُنْذِرُ مَنِ اتَّبَعَ الذِّكْرَ وَخَشِيَ الرَّحْمٰنَ بِالْغَيْبِۚ فَبَشِّرْهُ
                    بِمَغْفِرَةٍ وَّاَجْرٍ كَرِيْمٍ ۝١١
                </strong><br>
                innamâ tundziru manittaba‘adz-dzikra wa khasyiyar-raḫmâna bil-ghaîb, fa basysyir-hu bimaghfiratiw wa
                ajring karîm
                <br><br>

                <strong>اِنَّا نَحْنُ نُحْيِ الْمَوْتٰى وَنَكْتُبُ مَا قَدَّمُوْا وَاٰثَارَهُمْۗ وَكُلَّ شَيْءٍ
                    اَحْصَيْنٰهُ فِيْٓ اِمَامٍ مُّبِيْنٍࣖ ۝١٢
                </strong><br>
                innâ naḫnu nuḫyil-mautâ wa naktubu mâ qaddamû wa âtsârahum, wa kulla syai'in aḫshainâhu fî imâmim mubîn
                <br><br>

                <strong>وَاضْرِبْ لَهُمْ مَّثَلًا اَصْحٰبَ الْقَرْيَةِۘ اِذْ جَاۤءَهَا الْمُرْسَلُوْنَۚ ۝١٣
                </strong><br>
                wadlrib lahum matsalan ash-ḫâbal-qaryah, idz jâ'ahal-mursalûn
                <br><br>

                <strong>اِذْ اَرْسَلْنَآ اِلَيْهِمُ اثْنَيْنِ فَكَذَّبُوْهُمَا فَعَزَّزْنَا بِثَالِثٍ فَقَالُوْٓا
                    اِنَّآ اِلَيْكُمْ مُّرْسَلُوْنَ ۝١٤
                </strong><br>
                idz arsalnâ ilaihimutsnaini fa kadzdzabûhumâ fa ‘azzaznâ bitsâlitsin fa qâlû innâ ilaikum mursalûn
                <br><br>

                <strong>قَالُوْا مَآ اَنْتُمْ اِلَّا بَشَرٌ مِّثْلُنَاۙ وَمَآ اَنْزَلَ الرَّحْمٰنُ مِنْ شَيْءٍۙ اِنْ
                    اَنْتُمْ اِلَّا تَكْذِبُوْنَ ۝١٥
                </strong><br>
                qâlû mâ antum illâ basyarum mitslunâ wa mâ anzalar-raḫmânu min syai'in in antum illâ takdzibûn
                <br><br>

                <strong>قَالُوْا رَبُّنَا يَعْلَمُ اِنَّآ اِلَيْكُمْ لَمُرْسَلُوْنَ ۝١٦
                </strong><br>
                qâlû rabbunâ ya‘lamu innâ ilaikum lamursalûn<br><br>

                <strong>وَمَا عَلَيْنَآ اِلَّا الْبَلٰغُ الْمُبِيْنُ ۝١٧
                </strong><br>
                wa mâ ‘alainâ illal-balâghul-mubîn<br><br>

                <strong>قَالُوْٓا اِنَّا تَطَيَّرْنَا بِكُمْۚ لَىِٕنْ لَّمْ تَنْتَهُوْا لَنَرْجُمَنَّكُمْ
                    وَلَيَمَسَّنَّكُمْ مِّنَّا عَذَابٌ اَلِيْمٌ ۝١٨
                </strong><br>
                qâlû innâ tathayyarnâ bikum, la'il lam tantahû lanarjumannakum wa layamassannakum minnâ ‘adzâbun alîm
                <br><br>

                <strong>قَالُوْا طَاۤىِٕرُكُمْ مَّعَكُمْۗ اَىِٕنْ ذُكِّرْتُمْۗ بَلْ اَنْتُمْ قَوْمٌ مُّسْرِفُوْنَ ۝١٩
                </strong><br>
                qâlû thâ'irukum ma‘akum, a in dzukkirtum, bal antum qaumum musrifûn
                <br><br>

                <strong>وَجَاۤءَ مِنْ اَقْصَا الْمَدِيْنَةِ رَجُلٌ يَّسْعٰى قَالَ يٰقَوْمِ اتَّبِعُوا الْمُرْسَلِيْنَۙ
                    ۝٢٠
                </strong><br>
                wa jâ'a min aqshal-madînati rajuluy yas‘â qâla yâ qaumittabi‘ul-mursalîn
                <br><br>

                <strong>اتَّبِعُوْا مَنْ لَّا يَسْـَٔلُكُمْ اَجْرًا وَّهُمْ مُّهْتَدُوْنَ ۝٢١
                </strong><br>
                ittabi‘û mal lâ yas'alukum ajraw wa hum muhtadûn
                <br><br>

                <strong>وَمَا لِيَ لَآ اَعْبُدُ الَّذِيْ فَطَرَنِيْ وَاِلَيْهِ تُرْجَعُوْنَ ۝٢٢
                </strong><br>
                wa mâ liya lâ a‘budulladzî fatharanî wa ilaihi turja‘ûn
                <br><br>

                <strong>ءَاَتَّخِذُ مِنْ دُوْنِهٖٓ اٰلِهَةً اِنْ يُّرِدْنِ الرَّحْمٰنُ بِضُرٍّ لَّا تُغْنِ عَنِّيْ
                    شَفَاعَتُهُمْ شَيْـًٔا وَّلَا يُنْقِذُوْنِۚ ۝٢٣
                </strong><br>
                a attakhidzu min dûnihî âlihatan iy yuridnir-raḫmânu bidlurril lâ tughni ‘annî syafâ‘atuhum syai'aw wa
                lâ yungqidzûn
                <br><br>

                <strong>اِنِّيْٓ اِذًا لَّفِيْ ضَلٰلٍ مُّبِيْنٍ ۝٢٤</strong><br>
                innî idzal lafî dlalâlim mubîn<br><br>

                <strong>اِنِّيْٓ اٰمَنْتُ بِرَبِّكُمْ فَاسْمَعُوْنِۗ ۝٢٥
                </strong><br>
                innî âmantu birabbikum fasma‘ûn
                <br><br>

                <strong>قِيْلَ ادْخُلِ الْجَنَّةَۗ قَالَ يٰلَيْتَ قَوْمِيْ يَعْلَمُوْنَۙ ۝٢٦
                </strong><br>
                qîladkhulil-jannah, qâla yâ laita qaumî ya‘lamûn
                <br><br>

                <strong>بِمَا غَفَرَ لِيْ رَبِّيْ وَجَعَلَنِيْ مِنَ الْمُكْرَمِيْنَ ۝٢٧
                </strong><br>
                bimâ ghafara lî rabbî wa ja‘alanî minal-mukramîn
                <br><br>

                <strong>۞ وَمَآ اَنْزَلْنَا عَلٰى قَوْمِهٖ مِنْۢ بَعْدِهٖ مِنْ جُنْدٍ مِّنَ السَّمَاۤءِ وَمَا كُنَّا
                    مُنْزِلِيْنَ ۝٢٨
                </strong><br>
                wa mâ anzalnâ ‘alâ qaumihî mim ba‘dihî min jundim minas-samâ'i wa mâ kunnâ munzilîn
                <br><br>

                <strong>اِنْ كَانَتْ اِلَّا صَيْحَةً وَّاحِدَةً فَاِذَا هُمْ خٰمِدُوْنَ ۝٢٩
                </strong><br>
                ing kânat illâ shaiḫataw wâḫidatan fa idzâ hum khâmidûn
                <br><br>

                <strong>يٰحَسْرَةً عَلَى الْعِبَادِۚ مَا يَأْتِيْهِمْ مِّنْ رَّسُوْلٍ اِلَّا كَانُوْا بِهٖ
                    يَسْتَهْزِءُوْنَ ۝٣٠
                </strong><br>
                yâ ḫasratan ‘alal-‘ibâd, mâ ya'tîhim mir rasûlin illâ kânû bihî yastahzi'ûn
                <br><br>

                <strong>اَلَمْ يَرَوْا كَمْ اَهْلَكْنَا قَبْلَهُمْ مِّنَ الْقُرُوْنِ اَنَّهُمْ اِلَيْهِمْ لَا
                    يَرْجِعُوْنَ ۝٣١
                </strong><br>
                a lam yarau kam ahlaknâ qablahum minal-qurûni annahum ilaihim lâ yarji‘ûn
                <br><br>

                <strong>وَاِنْ كُلٌّ لَّمَّا جَمِيْعٌ لَّدَيْنَا مُحْضَرُوْنَࣖ ۝٣٢
                </strong><br>
                wa ing kullul lammâ jamî‘ul ladainâ muḫdlarûn
                <br><br>

                <strong>وَاٰيَةٌ لَّهُمُ الْاَرْضُ الْمَيْتَةُۖ اَحْيَيْنٰهَا وَاَخْرَجْنَا مِنْهَا حَبًّا فَمِنْهُ
                    يَأْكُلُوْنَ ۝٣٣
                </strong><br>
                wa âyatul lahumul-ardlul-maitatu aḫyainâhâ wa akhrajnâ min-hâ ḫabban fa min-hu ya'kulûn
                <br><br>

                <strong>وَجَعَلْنَا فِيْهَا جَنّٰتٍ مِّنْ نَّخِيْلٍ وَّاَعْنَابٍ وَّفَجَّرْنَا فِيْهَا مِنَ الْعُيُوْنِۙ
                    ۝٣٤
                </strong><br>
                wa ja‘alnâ fîhâ jannâtim min nakhîliw wa a‘nâbiw wa fajjarnâ fîhâ minal-‘uyûn
                <br><br>

                <strong>لِيَأْكُلُوْا مِنْ ثَمَرِهٖۙ وَمَا عَمِلَتْهُ اَيْدِيْهِمْۗ اَفَلَا يَشْكُرُوْنَ ۝٣٥
                </strong><br>
                liya'kulû min tsamarihî wa mâ ‘amilat-hu aidîhim, a fa lâ yasykurûn
                <br><br>

                <strong>سُبْحٰنَ الَّذِيْ خَلَقَ الْاَزْوَاجَ كُلَّهَا مِمَّا تُنْۢبِتُ الْاَرْضُ وَمِنْ اَنْفُسِهِمْ
                    وَمِمَّا لَا يَعْلَمُوْنَ ۝٣٦
                </strong><br>
                sub-ḫânalladzî khalaqal-azwâja kullahâ mimmâ tumbitul-ardlu wa min anfusihim wa mimmâ lâ ya‘lamûn
                <br><br>

                <strong>وَاٰيَةٌ لَّهُمُ الَّيْلُۖ نَسْلَخُ مِنْهُ النَّهَارَ فَاِذَا هُمْ مُّظْلِمُوْنَۙ ۝٣٧
                </strong><br>
                wa âyatul lahumul-lailu naslakhu min-hun-nahâra fa idzâ hum mudhlimûn
                <br><br>

                <strong>وَالشَّمْسُ تَجْرِيْ لِمُسْتَقَرٍّ لَّهَاۗ ذٰلِكَ تَقْدِيْرُ الْعَزِيْزِ الْعَلِيْمِۗ ۝٣٨
                </strong><br>
                wasy-syamsu tajrî limustaqarril lahâ, dzâlika taqdîrul-‘azîzil-‘alîm
                <br><br>

                <strong>وَالْقَمَرَ قَدَّرْنٰهُ مَنَازِلَ حَتّٰى عَادَ كَالْعُرْجُوْنِ الْقَدِيْمِ ۝٣٩
                </strong><br>
                wal-qamara qaddarnâhu manâzila ḫattâ ‘âda kal-‘urjûnil-qadîm
                <br><br>

                <strong>لَا الشَّمْسُ يَنْۢبَغِيْ لَهَآ اَنْ تُدْرِكَ الْقَمَرَ وَلَا الَّيْلُ سَابِقُ النَّهَارِۗ
                    وَكُلٌّ فِيْ فَلَكٍ يَّسْبَحُوْنَ ۝٤٠
                </strong><br>
                lasy-syamsu yambaghî lahâ an tudrikal-qamara wa lal-lailu sâbiqun-nahâr, wa kullun fî falakiy yasbaḫûn
                <br><br>

                <strong>وَاٰيَةٌ لَّهُمْ اَنَّا حَمَلْنَا ذُرِّيَّتَهُمْ فِى الْفُلْكِ الْمَشْحُوْنِۙ ۝٤١
                </strong><br>
                wa âyatul lahum annâ ḫamalnâ dzurriyyatahum fil-fulkil-masy-ḫûn
                <br><br>

                <strong>وَخَلَقْنَا لَهُمْ مِّنْ مِّثْلِهٖ مَا يَرْكَبُوْنَ ۝٤٢
                </strong><br>
                wa khalaqnâ lahum mim mitslihî mâ yarkabûn
                <br><br>

                <strong>وَاِنْ نَّشَأْ نُغْرِقْهُمْ فَلَا صَرِيْخَ لَهُمْ وَلَاهُمْ يُنْقَذُوْنَۙ ۝٤٣
                </strong><br>
                wa in nasya' nughriq-hum fa lâ sharîkha lahum wa lâ hum yungqadzûn
                <br><br>

                <strong>اِلَّا رَحْمَةً مِّنَّا وَمَتَاعًا اِلٰى حِيْنٍ ۝٤٤
                </strong><br>
                illâ raḫmatam minnâ wa matâ‘an ilâ ḫîn
                <br><br>

                <strong>وَاِذَا قِيْلَ لَهُمُ اتَّقُوْا مَا بَيْنَ اَيْدِيْكُمْ وَمَا خَلْفَكُمْ لَعَلَّكُمْ
                    تُرْحَمُوْنَ ۝٤٥
                </strong><br>
                wa idzâ qîla lahumuttaqû mâ baina aidîkum wa mâ khalfakum la‘allakum tur-ḫamûn
                <br><br>

                <strong>وَمَا تَأْتِيْهِمْ مِّنْ اٰيَةٍ مِّنْ اٰيٰتِ رَبِّهِمْ اِلَّا كَانُوْا عَنْهَا مُعْرِضِيْنَ ۝٤٦
                </strong><br>
                wa mâ ta'tîhim min âyatim min âyâti rabbihim illâ kânû ‘an-hâ mu‘ridlîn
                <br><br>

                <strong>وَاِذَا قِيْلَ لَهُمْ اَنْفِقُوْا مِمَّا رَزَقَكُمُ اللّٰهُۙ قَالَ الَّذِيْنَ كَفَرُوْا
                    لِلَّذِيْنَ اٰمَنُوْٓا اَنُطْعِمُ مَنْ لَّوْ يَشَاۤءُ اللّٰهُ اَطْعَمَهٗٓۖ اِنْ اَنْتُمْ اِلَّا فِيْ
                    ضَلٰلٍ مُّبِيْنٍ ۝٤٧
                </strong><br>
                wa idzâ qîla lahum anfiqû mimmâ razaqakumullâhu qâlalladzîna kafarû lilladzîna âmanû a nuth‘imu mal lau
                yasyâ'ullâhu ath‘amahû in antum illâ fî dlalâlim mubîn
                <br><br>

                <strong>وَيَقُوْلُوْنَ مَتٰى هٰذَا الْوَعْدُ اِنْ كُنْتُمْ صٰدِقِيْنَ ۝٤٨
                </strong><br>
                wa yaqûlûna matâ hâdzal-wa‘du ing kuntum shâdiqîn
                <br><br>

                <strong>مَا يَنْظُرُوْنَ اِلَّا صَيْحَةً وَّاحِدَةً تَأْخُذُهُمْ وَهُمْ يَخِصِّمُوْنَ ۝٤٩
                </strong><br>
                mâ yandhurûna illâ shaiḫataw wâḫidatan ta'khudzuhum wa hum yakhishshimûn
                <br><br>

                <strong>فَلَا يَسْتَطِيْعُوْنَ تَوْصِيَةً وَّلَآ اِلٰٓى اَهْلِهِمْ يَرْجِعُوْنَࣖ ۝٥٠
                </strong><br>
                fa lâ yastathî‘ûna taushiyataw wa lâ ilâ ahlihim yarji‘ûn
                <br><br>

                <strong>وَنُفِخَ فِى الصُّوْرِ فَاِذَا هُمْ مِّنَ الْاَجْدَاثِ اِلٰى رَبِّهِمْ يَنْسِلُوْنَ ۝٥١
                </strong><br>
                wa nufikha fish-shûri fa idzâ hum minal-ajdâtsi ilâ rabbihim yansilûn
                <br><br>

                <strong>قَالُوْا يٰوَيْلَنَا مَنْۢ بَعَثَنَا مِنْ مَّرْقَدِنَاࣝ هٰذَا مَا وَعَدَ الرَّحْمٰنُ وَصَدَقَ
                    الْمُرْسَلُوْنَ ۝٥٢
                </strong><br>
                qâlû yâ wailanâ mam ba‘atsanâ mim marqadinâ hâdzâ mâ wa‘adar-raḫmânu wa shadaqal-mursalûn
                <br><br>

                <strong>اِنْ كَانَتْ اِلَّا صَيْحَةً وَّاحِدَةً فَاِذَا هُمْ جَمِيْعٌ لَّدَيْنَا مُحْضَرُوْنَ ۝٥٣
                </strong><br>
                ing kânat illâ shaiḫataw wâḫidatan fa idzâ hum jamî‘ul ladainâ muḫdlarûn
                <br><br>

                <strong>فَالْيَوْمَ لَا تُظْلَمُ نَفْسٌ شَيْـًٔا وَّلَا تُجْزَوْنَ اِلَّا مَا كُنْتُمْ تَعْمَلُوْنَ ۝٥٤
                </strong><br>
                fal-yauma lâ tudhlamu nafsun syai'aw wa lâ tujzauna illâ mâ kuntum ta‘malûn
                <br><br>

                <strong>اِنَّ اَصْحٰبَ الْجَنَّةِ الْيَوْمَ فِيْ شُغُلٍ فٰكِهُوْنَۚ ۝٥٥
                </strong><br>
                inna ash-ḫâbal-jannatil-yauma fî syughulin fâkihûn
                <br><br>

                <strong>هُمْ وَاَزْوَاجُهُمْ فِيْ ظِلٰلٍ عَلَى الْاَرَاۤىِٕكِ مُتَّكِــُٔوْنَۚ ۝٥٦
                </strong><br>
                hum wa azwâjuhum fî dhilâlin ‘alal-arâ'iki muttaki'ûn
                <br><br>

                <strong>لَهُمْ فِيْهَا فَاكِهَةٌ وَّلَهُمْ مَّا يَدَّعُوْنَۚ ۝٥٧
                </strong><br>
                lahum fîhâ fâkihatuw wa lahum mâ yadda‘ûn
                <br><br>

                <strong>سَلٰمٌۗ قَوْلًا مِّنْ رَّبٍّ رَّحِيْمٍ ۝٥٨
                </strong><br>
                salâm, qaulam mir rabbir raḫîm
                <br><br>

                <strong>وَامْتَازُوا الْيَوْمَ اَيُّهَا الْمُجْرِمُوْنَ ۝٥٩
                </strong><br>
                wamtâzul-yauma ayyuhal-mujrimûn
                <br><br>

                <strong>اَلَمْ اَعْهَدْ اِلَيْكُمْ يٰبَنِيْٓ اٰدَمَ اَنْ لَّا تَعْبُدُوا الشَّيْطٰنَۚ اِنَّهٗ لَكُمْ
                    عَدُوٌّ مُّبِيْنٌ ۝٦٠
                </strong><br>
                a lam a‘had ilaikum yâ banî âdama al lâ ta‘budusy-syaithân, innahû lakum ‘aduwwum mubîn
                <br><br>

                <strong>وَاَنِ اعْبُدُوْنِيْۗ هٰذَا صِرَاطٌ مُّسْتَقِيْمٌ ۝٦١
                </strong><br>
                wa ani‘budûnî, hâdzâ shirâthum mustaqîm
                <br><br>

                <strong>وَلَقَدْ اَضَلَّ مِنْكُمْ جِبِلًّا كَثِيْرًاۗ اَفَلَمْ تَكُوْنُوْا تَعْقِلُوْنَ ۝٦٢
                </strong><br>
                wa laqad adlalla mingkum jibillang katsîrâ, a fa lam takûnû ta‘qilûn
                <br><br>

                <strong>هٰذِهٖ جَهَنَّمُ الَّتِيْ كُنْتُمْ تُوْعَدُوْنَ ۝٦٣
                </strong><br>
                hâdzihî jahannamullatî kuntum tû‘adûn
                <br><br>

                <strong>اِصْلَوْهَا الْيَوْمَ بِمَا كُنْتُمْ تَكْفُرُوْنَ ۝٦٤
                </strong><br>
                ishlauhal-yauma bimâ kuntum takfurûn
                <br><br>

                <strong>اَلْيَوْمَ نَخْتِمُ عَلٰٓى اَفْوَاهِهِمْ وَتُكَلِّمُنَآ اَيْدِيْهِمْ وَتَشْهَدُ اَرْجُلُهُمْ
                    بِمَا كَانُوْا يَكْسِبُوْنَ ۝٦٥
                </strong><br>
                al-yauma nakhtimu ‘alâ afwâhihim wa tukallimunâ aidîhim wa tasy-hadu arjuluhum bimâ kânû yaksibûn
                <br><br>

                <strong>وَلَوْ نَشَاۤءُ لَطَمَسْنَا عَلٰٓى اَعْيُنِهِمْ فَاسْتَبَقُوا الصِّرَاطَ فَاَنّٰى يُبْصِرُوْنَ
                    ۝٦٦
                </strong><br>
                walau nasyâ'u lathamasnâ ‘alâ a‘yunihim fastabaqush-shirâtha fa annâ yubshirûn
                <br><br>

                <strong>وَلَوْ نَشَاۤءُ لَمَسَخْنٰهُمْ عَلٰى مَكَانَتِهِمْ فَمَا اسْتَطَاعُوْا مُضِيًّا وَّلَا
                    يَرْجِعُوْنَࣖ ۝٦٧
                </strong><br>
                walau nasyâ'u lamasakhnâhum ‘alâ makânatihim famastathâ‘û mudliyyaw wa lâ yarji‘ûn
                <br><br>

                <strong>وَمَنْ نُّعَمِّرْهُ نُنَكِّسْهُ فِى الْخَلْقِۗ اَفَلَا يَعْقِلُوْنَ ۝٦٨
                </strong><br>
                wa man nu‘ammir-hu nunakkis-hu fil-khalq, a fa lâ ya‘qilûn
                <br><br>

                <strong>وَمَا عَلَّمْنٰهُ الشِّعْرَ وَمَا يَنْۢبَغِيْ لَهٗۗ اِنْ هُوَ اِلَّا ذِكْرٌ وَّقُرْاٰنٌ
                    مُّبِيْنٌۙ ۝٦٩
                </strong><br>
                wa mâ ‘allamnâhusy-syi‘ra wa mâ yambaghî lah, in huwa illâ dzikruw wa qur'ânum mubîn
                <br><br>

                <strong>لِّيُنْذِرَ مَنْ كَانَ حَيًّا وَّيَحِقَّ الْقَوْلُ عَلَى الْكٰفِرِيْنَ ۝٧٠
                </strong><br>
                liyundzira mang kâna ḫayyaw wa yaḫiqqal-qaulu ‘alal-kâfirîn
                <br><br>

                <strong>اَوَلَمْ يَرَوْا اَنَّا خَلَقْنَا لَهُمْ مِّمَّا عَمِلَتْ اَيْدِيْنَآ اَنْعَامًا فَهُمْ لَهَا
                    مٰلِكُوْنَ ۝٧١
                </strong><br>
                a wa lam yarau annâ khalaqnâ lahum mimmâ ‘amilat aidînâ an‘âman fa hum lahâ mâlikûn
                <br><br>

                <strong>وَذَلَّلْنٰهَا لَهُمْ فَمِنْهَا رَكُوْبُهُمْ وَمِنْهَا يَأْكُلُوْنَ ۝٧٢
                </strong><br>
                wa dzallalnâhâ lahum fa min-hâ rakûbuhum wa min-hâ ya'kulûn
                <br><br>

                <strong>وَلَهُمْ فِيْهَا مَنَافِعُ وَمَشَارِبُۗ اَفَلَا يَشْكُرُوْنَ ۝٧٣
                </strong><br>
                wa lahum fîhâ manâfi‘u wa masyârib, a fa lâ yasykurûn
                <br><br>

                <strong>وَاتَّخَذُوْا مِنْ دُوْنِ اللّٰهِ اٰلِهَةً لَّعَلَّهُمْ يُنْصَرُوْنَۗ ۝٧٤
                </strong><br>
                wattakhadzû min dûnillâhi âlihatal la‘allahum yunsharûn
                <br><br>

                <strong>لَا يَسْتَطِيْعُوْنَ نَصْرَهُمْۙ وَهُمْ لَهُمْ جُنْدٌ مُّحْضَرُوْنَ ۝٧٥
                </strong><br>
                lâ yastathî‘ûna nashrahum wa hum lahum jundum muḫdlarûn
                <br><br>

                <strong>فَلَا يَحْزُنْكَ قَوْلُهُمْۘ اِنَّا نَعْلَمُ مَا يُسِرُّوْنَ وَمَا يُعْلِنُوْنَ ۝٧٦
                </strong><br>
                fa lâ yaḫzungka qauluhum, innâ na‘lamu mâ yusirrûna wa mâ yu‘linûn
                <br><br>

                <strong>اَوَلَمْ يَرَ الْاِنْسَانُ اَنَّا خَلَقْنٰهُ مِنْ نُّطْفَةٍ فَاِذَا هُوَ خَصِيْمٌ مُّبِيْنٌ ۝٧٧
                </strong><br>
                a wa lam yaral-insânu annâ khalaqnâhu min nuthfatin fa idzâ huwa khashîmum mubîn
                <br><br>

                <strong>وَضَرَبَ لَنَا مَثَلًا وَّنَسِيَ خَلْقَهٗۗ قَالَ مَنْ يُّحْيِ الْعِظَامَ وَهِيَ رَمِيْمٌ ۝٧٨
                </strong><br>
                wa dlaraba lanâ matsalaw wa nasiya khalqah, qâla may yuḫyil-‘idhâma wa hiya ramîm
                <br><br>

                <strong>قُلْ يُحْيِيْهَا الَّذِيْٓ اَنْشَاَهَآ اَوَّلَ مَرَّةٍۗ وَهُوَ بِكُلِّ خَلْقٍ عَلِيْمٌۙ ۝٧٩
                </strong><br>
                qul yuḫyîhalladzî ansya'ahâ awwala marrah, wa huwa bikulli khalqin ‘alîm
                <br><br>

                <strong>ࣙالَّذِيْ جَعَلَ لَكُمْ مِّنَ الشَّجَرِ الْاَخْضَرِ نَارًاۙ فَاِذَآ اَنْتُمْ مِّنْهُ
                    تُوْقِدُوْنَ ۝٨٠
                </strong><br>
                alladzî ja‘ala lakum minasy-syajaril-akhdlari nâran fa idzâ antum min-hu tûqidûn
                <br><br>

                <strong>اَوَلَيْسَ الَّذِيْ خَلَقَ السَّمٰوٰتِ وَالْاَرْضَ بِقٰدِرٍ عَلٰٓى اَنْ يَّخْلُقَ مِثْلَهُمْۗ
                    بَلٰى وَهُوَ الْخَلّٰقُ الْعَلِيْمُ ۝٨١
                </strong><br>
                a wa laisalladzî khalaqas-samâwâti wal-ardla biqâdirin ‘alâ ay yakhluqa mitslahum, balâ wa
                huwal-khallâqul-‘alîm
                <br><br>

                <strong>اِنَّمَآ اَمْرُهٗٓ اِذَآ اَرَادَ شَيْـًٔاۖ اَنْ يَّقُوْلَ لَهٗ كُنْ فَيَكُوْنُ ۝٨٢
                </strong><br>
                innamâ amruhû idzâ arâda syai'an ay yaqûla lahû kun fa yakûn
                <br><br>

                <strong>فَسُبْحٰنَ الَّذِيْ بِيَدِهٖ مَلَكُوْتُ كُلِّ شَيْءٍ وَّاِلَيْهِ تُرْجَعُوْنَࣖ ۝٨٣
                </strong><br>
                fa sub-ḫânalladzî biyadihî malakûtu kulli syai'iw wa ilaihi turja‘ûn
                <br><br>


            </p>
        </section>

        <!-- Tambahkan Bacaan Tahlil -->
        <section id="tahlil" class="mb-5 pt-20">
            <h2 class="text-2xl font-semibold mb-3">Bacaan Tahlil</h2>
            <p class="text-right leading-relaxed">
                <!-- Masukkan bacaan tahlil -->

                <strong>إِلَى حَضْرَةِ النَّبِيِّ الْمُصْطَفَى سَيِّدِنَا مُحمَّدٍ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ
                    وَاٰلِهِ وَأَزْوَاجِهِ وَأَوْلَادِهِ وَذُرِّيَّاتِهِ الْفَــاتِحَةُ
                </strong><br>
                Ila ḫadlratin-nabiyyil-musthafâ sayyidinâ Muḫammadin shallallahu ‘alaihi wa sallama wa âlihi wa azwâjihi
                wa awlâdihi wa dzurriyyâtihi al-fâtiḫah
                <br><br>

                <strong>ثُمَّ إِلَى حَضْرَةِ إِخْوَانِهِ مِنَ الْأَنْبِيَاءِ وَالْمُرْسَلِيْنَ وَالْأَوْلِيَاءِ
                    وَالشُّهَدَاءِ وَالصَّالِحِيْنَ وَالصَّحَابَةِ وَالتَّابِعِيْنَ وَالْعُلَمَاءِ الْعَامِلِيْنَ
                    وَالْمُصَنِّفِيْنَ الْمُخْلِصِيْنَ وَجَمِيْعِ الْمَلَائِكَةِ الْمُقَرَّبِيْنَ، خُصُوْصًا إِلَى
                    سَيِّدِنَا الشَّيْخِ عَبْدِ الْقَادِرِ الْجِيْلَانِي وَخُصُوْصًا إِلَى مُؤَسِّسِيْ جَمْعِيَّةِ
                    نَهْضَةِ الْعُلَمَاءِ الْفَــاتِحَةُ
                </strong><br>
                Tsumma ilâ ḫadlrati ikhwânihi minal-anbiya’i wal-mursalîn wal-auliya’i wasy-syuhadâ’i wash-shâlihîn
                wash-shaḫâbati wat tâbi‘în wal-‘ulamâ’il-‘âmilîn wal-mushannifînal-mukhlishîn wa
                jamî‘il-malâikatil-muqarrabîn, khusûshan ilâ sayyidinâsy-syaikh ‘abdil qâdir al-jîlânî wa khushûshan ilâ
                muassisî jam‘iyyah Nahdlatil Ulama, al-fâtiḫah
                <br><br>

                <strong>ثُمَّ إِلَى جَمِيْعِ أَهْلِ الْقُبُوْرِ مِنَ الْمُسْلِمِيْنَ وَالْمُسْلِمَاتِ وَالْمُؤْمِنِيْنَ
                    وَالْمُؤْمِنَاتِ مِنْ مَشَارِقِ الْأَرْضِ إِلَى مَغَارِبِهَا بَرِّهَا وَبَحْرِهَا خُصُوْصًا إِلَى
                    اٰبَائِنَا وَأُمَّهَاتِنَا وَأَجْدَادِنَا وَجَدَّاتِنَا وَمَشَايِخِنَا وَمَشَايِخِ مَشَايِخِنَا
                    وَأَسَاتِذَةِ أَسَاتِذَتِنَا وَلِمَنْ أَحْسَنَ إِلَيْنَا وَلِمَنِ اجْتَمَعْنَا هٰهُنَا بِسَبَبِهِ
                    الْفَاتِحَةُ
                </strong><br>
                Tsumma ilâ jamî‘i ahlil-qubûri minal-muslimîna wal-muslimâti wal-mu’minîna wal-mu’minâti min
                masyâriqil-ardli ilâ maghâribihâ barrihâ wa baḫrihâ khushushan ilâ abâ’inâ wa ummahâtinâ wa ajdâdinâ wa
                jaddâtina wa masyâkhinâ wa masyâyikhi masyâyikhinâ wa asâtidzati asâtidzatinâ wa liman aḫsana ilainâ wa
                liman ijtama‘nâ hâhunâ bisababihi, al-fâtiḫah
                <br><br>

                <strong>ثُمَّ إِلَى جَمِيْعِ أهْلِ الْقُبُوْرِ مِمَّنْ ذُكِرَتْ أَسْمَاؤُهُ فِيْ هٰذِهِ الرِّسَالَةِ
                    حَضْرَةِ رُوْحِ … وَحَضْرَةِ رُوْحِ … وَحَضْرَةِ رُوْحِ … رَحِمَهُمُ اللهُ وَغَفَرَهُمْ،
                    الْفَاتِحَةُ
                </strong><br>
                Tsumma ilâ jamî‘i ahlil-qubûri mimman dzukirot asmâ’uhu fi hâdzihir risâlati, ḫadlrati rûhi…, wa
                ḫadlrati rûhi…, wa ḫadlrati rûhi…, roḫimahumullâhu wa ghafarahum, al-fâtiḫah
                <br><br>

                <strong>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ قُلْ هُوَ اللّٰهُ اَحَدٌۚ، اَللّٰهُ الصَّمَدُۚ، لَمْ
                    يَلِدْ وَلَمْ يُوْلَدْۙ، وَلَمْ يَكُنْ لَّهٗ كُفُوًا اَحَـــــدٌ ×٣
                </strong><br>
                Bismillâhir-raḫmânir-raḫîm(i), Qul huwallâhu aḫad, Allâhush-shamad, lam yalid wa lam yûlad, wa lam yakul
                lahû kufuwan aḫad 3x
                <br><br>

                <strong>لَا إِلٰهَ إِلَّا اللهُ وَاللهُ أَكْبَرُ
                </strong><br>
                Lâ ilâha illâllâhu wallâhu akbar
                <br><br>

                <strong>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ قُلْ اَعُوْذُ بِرَبِّ الْفَلَقِۙ، مِنْ شَرِّ مَـــا
                    خَلَقَۙ، وَمِنْ شَرِّ غَاسِقٍ اِذَا وَقَبَۙ، وَمِنْ شَرِّ النَّفّٰثٰتِ فِى الْعُقَدِۙ، وَمِنْ شَرِّ
                    حَاسِدٍ اِذَا حَسَدَ
                </strong><br>
                Bismillâhir-raḫmânir-raḫîm(i), Qul a‘udzu bi rabbil-falaq, min syarri mâ khalaq, wa min syarri ghâsiqin
                idzâ waqab, wa min syarrin-naffâtsâti fîl-‘uqad, wa min syarri ḫâsidin idzâ ḫasad
                <br><br>

                <strong>لَا إِلٰهَ إِلَّا اللهُ وَاللهُ أَكْبَرُ
                </strong><br>
                Lâ ilâha illâllâhu wallâhu akbar
                <br><br>

                <strong>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ قُلْ اَعُوْذُ بِرَبِّ النَّاسِۙ، مَلِكِ النَّـــاسِۙ،
                    اِلٰهِ النَّاسِۙ، مِنْ شَرِّ الْوَسْوَاسِ ەۙ الْخَنَّاسِۖ، الَّذِيْ يُوَسْوِسُ فِيْ صُدُوْرِ
                    النَّاسِۙ، مِنَ الْجِنَّةِ وَالنَّــاسِ
                </strong><br>
                Bismillâhir-raḫmânir-raḫîm(i), Qul a‘udzû bi rabbin-nâs, malikin-nâs, ilahin-nâs, min syarril-waswâsil
                khannâs, alladzi yuwaswisu fî shudûrin-nâs, minal-jinnati wan-nâs.
                <br><br>

                <strong>لَا إِلٰهَ إِلَّا اللهُ وَاللهُ أَكْبَرُ
                </strong><br>
                Lâ ilâha illâllâhu wallâhu akbar
                <br><br>

                <strong>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ، اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ، الرَّحْمٰنِ
                    الرَّحِيْمِۙ، مٰلِكِ يَوْمِ الدِّيْنِۗ، اِيَّاكَ نَعْبُدُ وَاِيَّاكَ نَسْتَعِيْنُۗ، اِهْدِنَا
                    الصِّرَاطَ الْمُسْتَقِيْمَۙ، صِرَاطَ الَّذِيْنَ اَنْعَمْتَ عَلَيْهِمْ ەۙ غَيْرِ الْمَغْضُوْبِ
                    عَلَيْهِمْ وَلَا الضَّاۤلِّيْنَ
                </strong><br>
                Bismillâhir-raḫmânir-raḫîm(i), al-ḫamdu lillâhi rabbil-‘âlamîn, Ar-raḫmânir-raḫîm, mâliki yaumid-dîn,
                iyyâka na‘budu wa iyyâka nasta‘în, ihdinâsh-shirâthal-mustaqîm, shirâtal ladzîna an‘amta ‘alaihim
                ghairil-maghdlûbi ‘alaihim wa lâdl-dlâllîn. Âmîn
                <br><br>

                <strong>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ، الۤــــــمّۤۚ، ذٰلِكَ الْكِتٰبُ لَا رَيْبَۛ فِيْهِۛ
                    هُدًى لِّلْمُتَّقِيْنَۙ، الَّذِيْنَ يُؤْمِنُوْنَ بِالْغَيْبِ وَيُقِيْمُوْنَ الصَّلٰوةَ وَمِمَّا
                    رَزَقْنٰهُمْ يُنْفِقُوْنَۙ، وَالَّذِيْنَ يُؤْمِنُوْنَ بِمَآ اُنْزِلَ اِلَيْكَ وَمَآ اُنْزِلَ مِنْ
                    قَبْلِكَ ۚ وَبِالْاٰخِرَةِ هُمْ يُوْقِنُوْنَۗ، اُولٰۤىِٕكَ عَلٰى هُدًى مِّنْ رَّبِّهِمْۙ
                    وَاُولٰۤىِٕكَ هُمُ الْمُفْلِحُوْنَ
                </strong><br>
                Bismillâhir-rahmânir-rahîm(i), Alif Lâm Mîm, dzâlikal-kitâbu lâ raiba fîhi, hudal-lilmuttaqîn,
                al-ladzîna yu’minûna bil-ghaibi wa yuqîmûnash-shalâta wa mimmâ razaqnâhum yunfiqûn, wal-ladzîna
                yu’minûna bimâ unzila ilaika wa mâ unzila min qablika, wa bil-âkhirati hum yûqinûn, ulâ’ika ‘alâ hudam
                mir rabbihim wa ulâ’ika humul-mufliḫûn.
                <br><br>

                <strong>وَإِلٰهُكُمْ إِلٰهٌ وَّاحِدٌ لَا إِلٰهَ إِلَّا هُوَ الرَّحْمٰنُ الرَّحِيمُ
                </strong><br>
                Wa ilâhukum ilâhuw wâḫidul lâ ilâha illa Huwar-raḫmânur-raḫîm.
                <br><br>

                <strong>اَللّٰهُ لَآ اِلٰهَ اِلَّا هُوَۚ اَلْحَيُّ الْقَيُّوْمُ ەۚ لَا تَأْخُذُهٗ سِنَةٌ وَّلَا نَوْمٌۗ
                    لَهٗ مَا فِى السَّمٰوٰتِ وَمَا فِى الْاَرْضِۗ مَنْ ذَا الَّذِيْ يَشْفَعُ عِنْدَهٗٓ اِلَّا
                    بِاِذْنِهٖۗ يَعْلَمُ مَا بَيْنَ اَيْدِيْهِمْ وَمَا خَلْفَهُمْۚ وَلَا يُحِيْطُوْنَ بِشَيْءٍ مِّنْ
                    عِلْمِهٖٓ اِلَّا بِمَا شَاۤءَۚ وَسِعَ كُرْسِيُّهُ السَّمٰوٰتِ وَالْاَرْضَۚ وَلَا يَـُٔوْدُهٗ
                    حِفْظُهُمَاۚ وَهُوَ الْعَلِيُّ الْعَظِيْمُ
                </strong><br>
                Allahu lâ ilâha illa huwal-ḫayyul-qayyûm(u). Lâ ta’khudzuhû sinatuw wa lâ naûm(u). Lahû mâ fis-samâwâti
                wa mâ fil-ardl. Man dzal ladzî yasyfa’u ‘indahû illâ bi idznih(i). Ya’lamu mâ baina aidîhim wa mâ
                khalfahum. Wa lâ yuḫithûna bi syai’in min ‘ilmihî illâ bimâ syâ’a wasi’a kursiyyuhus-samawâti wal-ardl.
                Wa lâ ya’ûduhu ḫifdhuhumâ wahuwal-‘aliyyul-adhîm.
                <br><br>

                <strong>اَللّٰهُ لَآ اِلٰهَ اِلَّا هُوَۚ اَلْحَيُّ الْقَيُّوْمُ ەۚ لَا تَأْخُذُهٗ سِنَةٌ وَّلَا نَوْمٌۗ
                    لَهٗ مَا فِى السَّمٰوٰتِ وَمَا فِى الْاَرْضِۗ مَنْ ذَا الَّذِيْ يَشْفَعُ عِنْدَهٗٓ اِلَّا
                    بِاِذْنِهٖۗ يَعْلَمُ مَا بَيْنَ اَيْدِيْهِمْ وَمَا خَلْفَهُمْۚ وَلَا يُحِيْطُوْنَ بِشَيْءٍ مِّنْ
                    عِلْمِهٖٓ اِلَّا بِمَا شَاۤءَۚ وَسِعَ كُرْسِيُّهُ السَّمٰوٰتِ وَالْاَرْضَۚ وَلَا يَـُٔوْدُهٗ
                    حِفْظُهُمَاۚ وَهُوَ الْعَلِيُّ الْعَظِيْمُ
                </strong><br>
                Allahu lâ ilâha illa huwal-ḫayyul-qayyûm(u). Lâ ta’khudzuhû sinatuw wa lâ naûm(u). Lahû mâ fis-samâwâti
                wa mâ fil-ardl. Man dzal ladzî yasyfa’u ‘indahû illâ bi idznih(i). Ya’lamu mâ baina aidîhim wa mâ
                khalfahum. Wa lâ yuḫithûna bi syai’in min ‘ilmihî illâ bimâ syâ’a wasi’a kursiyyuhus-samawâti wal-ardl.
                Wa lâ ya’ûduhu ḫifdhuhumâ wahuwal-‘aliyyul-adhîm.
                <br><br>

                <strong>لِلّٰهِ مَا فِى السَّمٰوٰتِ وَمَا فِى الْاَرْضِۗ وَاِنْ تُبْدُوْا مَا فِيْٓ اَنْفُسِكُمْ اَوْ
                    تُخْفُوْهُ يُحَاسِبْكُمْ بِهِ اللّٰهُۗ فَيَغْفِرُ لِمَنْ يَّشَاۤءُ وَيُعَذِّبُ مَنْ يَّشَاۤءُۗ
                    وَاللّٰهُ عَلٰى كُلِّ شَيْءٍ قَدِيْرٌ، اٰمَنَ الرَّسُوْلُ بِمَآ اُنْزِلَ اِلَيْهِ مِنْ رَّبِّهٖ
                    وَالْمُؤْمِنُوْنَۗ كُلٌّ اٰمَنَ بِاللّٰهِ وَمَلٰۤىِٕكَتِهٖ وَكُتُبِهٖ وَرُسُلِهٖۗ لَا نُفَرِّقُ
                    بَيْنَ اَحَدٍ مِّنْ رُّسُلِهٖۗ وَقَالُوْا سَمِعْنَا وَاَطَعْنَا غُفْرَانَكَ رَبَّنَا وَاِلَيْكَ
                    الْمَصِيْرُ، لَا يُكَلِّفُ اللّٰهُ نَفْسًا اِلَّا وُسْعَهَاۗ لَهَا مَا كَسَبَتْ وَعَلَيْهَا مَا
                    اكْتَسَبَتْۗ رَبَّنَا لَا تُؤَاخِذْنَآ اِنْ نَّسِيْنَآ اَوْ اَخْطَأْنَاۚ رَبَّنَا وَلَا تَحْمِلْ
                    عَلَيْنَآ اِصْرًا كَمَا حَمَلْتَهٗ عَلَى الَّذِيْنَ مِنْ قَبْلِنَاۚ رَبَّنَا وَلَا تُحَمِّلْنَا مَا
                    لَا طَاقَةَ لَنَا بِهٖۚ وَاعْفُ عَنَّا وَاغْفِرْ لَنَا وَارْحَمْنَا ×٧ أَنْتَ مَوْلَانَا
                    فَانْصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ
                </strong><br>
                Lillâhi mâ fis-samawâti wa mâ fil-ardli, wa in tubdû mâ fî anfusikum au tukhfûhu yuḫâsibkum bihillah.
                Fayaghfiru limay yasyâ’u wa yu‘adzdzibu may yasyâ’u. Wallahu ‘alâ kulli syai’in qadîr. Âmanar-rasûlu
                bimâ unzila ilaihi mir rabbihi wal-mu’minûn(a), kullun âmana billâhi wa malâ’ikatihi wa kutubihi wa
                rusulih(i). Lâ nufarriqu baina aḫadim mir-rusulihi wa qâlû sami‘nâ wa atha‘nâ gufrânaka rabbanâ wa
                ilaikal-mashîr. La yukallifullâhu nafsan illâ wus‘ahâ lahâ mâ kasabat wa ‘alaihâ mâk tasabat. Rabbanâ la
                tu’akhidhnâ in nasînâ au akhtha’na rabbanâ walâ taḫmil alainâ ishran kamâ ḫamaltahu ‘alal-ladzinâ min
                qablinâ rabbanâ wa lâ tuḫammilnâ mâ lâ thâqata lanâ bihi wa‘fu ‘annâ waghfir lanâ warḫamnâ 7x Anta
                maulânâ fanshurnâ ‘alal qaumil kâfirîn.
                <br><br>

                <strong>ارْحَمْنَا، يَا أَرْحَمَ الرَّاحِمِيْنَ ×٧
                </strong><br>
                Irḫamnâ yâ arḫamar-râḫimîn 7x
                <br><br>

                <strong>رَحْمَةُ اللهِ وَبَرَكَاتُهُ عَلَيْكُمْ أَهْلَ الْبَيْتِ إِنَّهُ حَمِيْدٌ مَّجِيْدٌ
                </strong><br>
                Raḫmatul-lâhi wa barakâtuhu ‘alaikum ahlal-baiti innahu ḫamîdun majîd
                <br><br>

                <strong>إِنَّمَا يُريِدُ اللهُ لِيُذْهِبَ عَنْكُمُ الرِّجْسَ أَهْلَ الْبَيْتِ وَيُطَهِّرَكُمْ
                    تَطْهِيْرًا
                </strong><br>
                Innamâ yurîdullâhu liyudzhiba ‘ankumur-rijsa ahlal-baiti wa yuthahhira kum tathhîra
                <br><br>

                <strong>إِنَّ اللهَ وَمَلَائِكَتَهُ يُصَلُّونَ عَلَى النَّبِيِّ، يَا أَيُّهَا الَّذِيْنَ أٰمَنُوْا
                    صَلُّوْا عَلَيْهِ وَسَلِّمُوْا تَسْلِيْمًا
                </strong><br>
                Innallâha wa malâ’ikatahu yushallûna ‘alan-nabiyyi yâ ayyuhal-ladzina âmanû shallû ‘alaihi wa sallimû
                taslîmâ
                <br><br>

                <strong>اَللّٰهُمَّ صَلِّ أَفْضَلَ الصَّلَاةِ عَلَى أَسْعَدِ مَخْلُوْقَاتِكَ نُوْرِ الْهُدَى سَيِّدِنَا
                    مُحَمَّدٍ وَعَلَى اٰلِهِ وَصَحْبِهِ وَسَلِّمْ، عَدَدَ مَعْلُوْمَاتِكَ وَمِدَادَ كَلِمَاتِكَ كُلَّمَا
                    ذَكَرَكَ الذَّاكِرُوْنَ وَغَفَلَ عَنْ ذِكْرِكَ الْغَافِلُوْنَ
                </strong><br>
                Allâhumma shalli afdlalash-shalâti ‘alâ as‘adi makhlûqôtika nûril-hudâ sayyidinâ Muḫammadin wa ‘alâ
                âlihi wa shaḫbihi wa sallim, ‘adada ma‘lûmâtika wa midâda kalimâtika kullamâ dzakaradz dzâkirûna wa
                ghafala ‘an dzikrikal ghâfilûn
                <br><br>

                <strong>اَللّٰهُمَّ صَلِّ أَفْضَلَ الصَّلَاةِ عَلَى أَسْعَدِ مَخْلُوْقَاتِكَ شَمْسِ الضُّحَى سَيِّدِنَا
                    مُحَمَّدٍ وَعَلَى اٰلِهِ وَصَحْبِهِ وَسَلِّمْ، عَدَدَ مَعْلُوْمَاتِكَ وَمِدَادَ كَلِمَاتِكَ كُلَّمَا
                    ذَكَرَكَ الذَّاكِرُوْنَ وَغَفَلَ عَنْ ذِكْرِكَ الْغَافِلُوْنَ
                </strong><br>
                Allâhumma shalli afdlalash shalati ‘alâ as‘adi makhlûqôtika syamsidl dluḫâ sayyidinâ Muḫammadin wa ‘alâ
                âlihi wa shaḫbihi wa sallim, ‘adada ma‘lûmâtika wa midâda kalimâtika kullamâ dzakaradz dzâkirûna wa
                ghafala ‘an dzikrikal ghâfilûn
                <br><br>

                <strong>اَللّٰهُمَّ صَلِّ أَفْضَلَ الصَّلَاةِ عَلَى أَسْعَدِ مَخْلُوْقَاتِكَ شَمْسِ الضُّحَى سَيِّدِنَا
                    مُحَمَّدٍ وَعَلَى اٰلِهِ وَصَحْبِهِ وَسَلِّمْ، عَدَدَ مَعْلُوْمَاتِكَ وَمِدَادَ كَلِمَاتِكَ كُلَّمَا
                    ذَكَرَكَ الذَّاكِرُوْنَ وَغَفَلَ عَنْ ذِكْرِكَ الْغَافِلُوْنَ
                </strong><br>
                Allâhumma shalli afdlalash shalati ‘alâ as‘adi makhlûqôtika syamsidl dluḫâ sayyidinâ Muḫammadin wa ‘alâ
                âlihi wa shaḫbihi wa sallim, ‘adada ma‘lûmâtika wa midâda kalimâtika kullamâ dzakaradz dzâkirûna wa
                ghafala ‘an dzikrikal ghâfilûn
                <br><br>

                <strong>وَسَلِّمْ وَرَضِيَ اللهُ تَعَالَى عَنْ سَادَاتِنَا أَصْحَابِ رَسُوْلِ اللهِ أَجْمَعِيْنَ
                </strong><br>
                Wa sallim wa radliyallahu ta‘âla ‘an sâdâtinâ ash-ḫabi rasulillah ajma‘în
                <br><br>

                <strong>حَسْبُنَا اللهُ وَنِعْمَ الْوَكِيْلُ، نِعْمَ الْمَوْلَى وَنِعْمَ النَّصِيْرُ
                </strong><br>
                Ḫasbunâllâhu wa ni‘mal wakîl, ni‘mal maula w ani‘man nashîr
                <br><br>

                <strong>وَلَاحَوْلَ وَلَا قُوَّةَ إِلَّا بِاللهِ العَلِيِّ الْعَظِيْمِ
                </strong><br>
                Wa lâ ḫaula wa lâ quwwata illâ billâhil ‘aliyyil-‘adhim
                <br><br>

                <strong>أَسْتَغْفِرُ اللهَ الْعَـــظِيْمَ ×٣
                </strong><br>
                Astaghfirullâhal-‘adhîm 3 x
                <br><br>

                <strong>أَفْضَلُ الذِّكْرِ فَاعْلَمْ أَنَّهُ لَا إِلٰهَ إِلَّا اللهُ، حَيٌّ مَوْجُوْدٌ
                </strong><br>
                Afdlaludz dzikri fa‘lam annahu lâ ilâha illallâhu ḫayyun maujûd(un)
                <br><br>

                <strong>لَا إِلٰهَ إِلَّا اللهُ، حَيٌّ مَعْبُوْدٌ
                </strong><br>
                La ilâha illâllâhu ḫayyun ma‘bûd
                <br><br>

                <strong>لَاَ إِلٰهَ إِلَّا اللهُ، حَيٌّ بَاقٍ
                </strong><br>
                La ilâha illâllâhu ḫayyun bâq
                <br><br>

                <strong>لَا إِلٰهَ إِلَّا اللهُ ×١٠٠
                </strong><br>
                La ilâha illâllâh 100x
                <br><br>

                <strong>اَللّٰهُمَّ صَلِّ عَلَى سَيِّدِنَا مُحَمَّدٍ اَللّٰهُمَّ صَلِّ عَلَيْهِ وَسَلِّمْ ×٢
                </strong><br>
                Allâhumma shalli ‘alâ sayyidinâ Muḫammadin, Allâhumma shalli ‘alaihi wa sallim
                <br><br>

                <strong>سُبْحَــانَ اللهِ عَدَدَ مَـــا خَلَقَ اللهُ ×٧
                </strong><br>
                Subḫânallâhi ‘adada mâ khalaqallâhu
                <br><br>

                <strong>سُبحَانَ اللهِ وَبِحَمْدِهِ سُبْحَانَ اللهِ الْعَظِيْمِ ×٣٣
                </strong><br>
                Subḫânallâhi wa biḫamdihi subḫânallâhil ‘adhîm
                <br><br>

                <strong>اَللّٰهُمَّ صَلِّ عَلَى حَبِيْبِكَ سَيِّدِنَا مُحَمَّدٍ وَعَلَى اٰلِهِ وَصَحْبِهِ وَسَلِّمْ ×٢
                </strong><br>
                Allâhumma shalli ‘alâ ḫabîbika sayyidinâ Muḫammadin wa âlihi wa shaḫbihi wa sallim 2x
                <br><br>

                <strong>اَللّٰهُمَّ صَلِّ عَلَى حَبِيْبِكَ سَيِّدِنَا مُحَمَّدٍ وَعَلَى اٰلِهِ وَصَحْبِهِ وَبَارِكْ
                    وَسَلِّمْ أَجْمَعِيْنَ
                </strong><br>
                Allâhumma shalli ‘alâ ḫabîbika sayyidinâ Muḫammadin wa ‘alâ âlihi wa shaḫbihi wa bârik wa sallim ajma‘în
                <br><br>

                <strong>﴿الدعاء﴾ أَعُوْذُ بِاللهِ مِنَ الشَّيْطَانِ الرَّجِيْمِ، بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ،
                    الْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَ، حَمْدَ الشَّاكِرِيْنَ حَمْدَ النَّاعِمِيْنَ، حَمْدًا
                    يُّوَافِي نِعَمَهُ وَيُكَافِئُ مَزِيْدَهُ، يَا رَبَّنَا لَكَ الْحَمْدُ كَمَا يَنْبَغِيْ لِجَلَالِ
                    وَجْهِكَ وَعَظِيْمِ سُلْطَانِكَ، اللّٰهُمَّ صَلِّ عَلَى سَيِّدِنَا مُحَمَّدٍ وَّعَلَى اٰلِ
                    سَيِّدِنَا مُحِمَّدٍ
                </strong><br>
                A‘ûdzubillâhi minasy-syaithâr-rajîm, bismillâhir-raḫmânir-raḫîm, al-ḫamdulillâhi rabbil-‘alamîn, ḫamdasy
                syâkirin, ḫamdan nâ‘imîn, ḫamdan yuwâfî ni‘amahu wa yukâfî’u mazîdah(u), yâ rabbanâ lakal-ḫamdu kamâ
                yanbaghî lijalâli wajhika wa ‘adhîmi sulthânika, allâhumma shalli ‘alâ sayyidinâ Muḫammadin wa ‘alâ âli
                sayyidinâ Muḫammadin.
                <br><br>

                <strong>اَللّٰهُمَّ تَقَبَّلْ وَأَوْصِلْ ثَوَابَ مَا قَرَاْنَاهُ مِنَ الْقُرْآنِ الْعَظِيْمِ وَمَا
                    هَلَّلْنَا وَمَا سَبَّحْنَا وَمَا اسْتَغْفَرْنَا وَمَا صَلَّيْنَا عَلَى سَيِّدِنَا مُحَمَّدٍ صَلَّى
                    اللهُ عَلَيْهِ وَسَلَّمَ هَدِيَّةً وَاصِلَةً وَرَحْمَةً نَازِلَةً وَبَرَكَةً شَامِلَةً إِلَى
                    حَضَرَةِ حَبِيْبِنَا وَشَفِيْعِنَا وَقُرَّةِ أَعْيُنِنَا سَيِّدِنَا وَمَوْلَانَا مُحَمَّدٍ صَلَّى
                    اللهُ عَلَيْهِ وَسَلَّمَ، وَإِلَى جَمِيْعِ إِخْوَانِهِ مِنَ الْأَنْبِيَاءِ وَالْمُرْسَلِيْنَ
                    وَالْأَوْلِيَاءِ وَالشُّهَدَاءِ وَالصَّالِحِيْنَ وَالصَّحَابَةِ وَالتَّابِعِيْنَ وَالْعُلَمَاءِ
                    الْعَامِلِيْنَ وَالْمُصَنِّفِيْنَ الْمُخْلِصِيْنَ وَجَمِيْعِ الْمُجَاهِدِيْنَ فِي سَبِيْلِ اللهِ
                    رَبِّ الْعَلَمِيْنَ وَالْمَلَائِكَةِ الْمُقَرَّبِيْن، خُصُوْصًا إِلَى سَيِّدِنَا الشَّيْخِ عَبْدِ
                    الْقَادِرِ الْجِيْلَانِيّ، ثُمَّ إِلَى أَرْوَاحِ جَمِيْعِ أَهْلِ الْقُبُوْرِ مِنَ الْمُسْلِمِيْنَ
                    وَالْمُسْلِمَاتِ وَالْمُؤْمِنِيْنَ وَالْمُؤْمِنَاتِ مِنْ مَشَارِقِ الْأَرْضِ وَمَغَارِبِهَا بَرِّهَا
                    وَبَحْرِهَا خُصُوْصًا إِلَى آبَائِنَا وَاُمَّهَاتِنَا وَأَجْدَادِنَا وَجَدَّاتِنَا، وَنَخَصُّ
                    خَصُوْصًا إِلَى مَنِ اجْتَمَعْنَا هٰهُنَا بِسَبَبِهِ وَلِأَجْلِهِ
                </strong><br>
                Allâhumma taqabbal wa aushil tsawâba mâ qara’nâhu minal-qur’anil-‘adhîmi wa mâ hallalnâ wamâ sabbaḫnâ
                wamâstaghfarnâ wamâ shallainâ ‘alâ sayyidinâ Muḫammadin shallallâhu ‘alaihi wa sallamâ hadiyyatan
                wâshilatan wa raḫmatan nâzilatan wa barakatan syâmilatan ilâ ḫadlrati ḫabîbinâ wa syafî‘nâ wa qurrati
                a‘yuninâ sayyidinâ wa maulana Muḫammadin shallallâhu ‘alaihi wa sallamâ, wa ilâ jamî‘i ikhwânihi
                minal-anbiyâ’i wal mursalîna wal-auliyâ’i wasy-syuhadâ’i wash-shaliḫina wash-shaḫâbati wat-tâbi‘înâ
                wal-‘ulamâ’il-‘âmilîna wal-mushannifînal-mukhlashîna wa jamî‘il-mujâhidînâ fî sabîlillâhi
                rabbil-‘âlamîna wal-malâ’ikatil-muqarrabîna, khusûshan ilâ sayyidinâsy-Syaikhi Abdil Qâdir al-Jîlâni,
                tsumma ilâ arwâhi jami‘i ahlil-qubûri minal-muslimînâ wal-muslimâti wal-mu’minînâ wal-mu’minâti min
                masyâriqil-ardli wa maghâribihâ barrihâ wa baḫrihâ khusushan ilâ âbâ’inâ wa ummahâtinâ wa ajdâdinâ wa
                jaddâtinâ, wa nakhushshu khusûshan ilâ man ijtama‘nâ hahunâ bisababihi wa liajlihi.
                <br><br>

                <strong>اَللّٰهُمَّ اغْفِرْ لَهُمْ وَارْحَمْهُمْ وَعَافِهِمْ وَاعْفُ عَنْهُمْ، اَللّٰهُمَّ أَنْزِلِ
                    الرَّحْمَةَ وَالْمَغْفِرَةَ عَلَى أَهْلِ الْقُبُوْرِ مِنْ أَهْلِ لَا إِلٰهَ إِلَّا اللهُ مُحَمَّدٌ
                    رَّسُوْلُ اللهِ
                </strong><br>
                Allâhummaghfirlahum warḫamhum wa ‘âfihim wa‘fu ‘anhum, allâhumma anzilir-raḫmata wal-maghfirata ‘alâ
                ahlil-qubûri min ahli lâ ilâha illallâhu muḫammadur-rasûlullahi
                <br><br>

                <strong>رَبَّنَا أَرِنَا الْحَقَّ حَقًّا وَّارْزُقْنَا اتِّبَاعَهُ، وَأَرِنَا الْبَاطِلَ بَاطِلًا
                    وَّارْزُقْنَا اجْتِنَابَهُ، رَبَّنَا اٰتِنَا فِي الدُّنْيَا حَسَنَةً وَّفِي الْآخِرَةِ حَسَنَةً
                    وَّقِنَا عَذَابَ النَّارِ، سُبْحَانَ رَبِّكَ رَبِّ الْعِزَّةِ عَمَّا يَصِفُوْنَ وَسَلَامٌ عَلَى
                    الْمُرْسَلِيْنَ وَالْحَمْدُ لِلّٰهِ رَبِّ الْعَلَمِيْنَ، اَلْفَاتِحَة
                </strong><br>
                Rabbanâ arinâl-ḫaqqa ḫaqqan warzuqnât-tibâ‘ah, wa arinâl-bâthila bâthilan warzuqnâj tinâbah. Rabbanâ
                âtinâ fid-dunyâ ḫasanatan wa fil-âkhirati ḫasanatan wa qinâ ‘adzaban-nâr. Subḫâna rabbika rabbil-‘izzati
                ‘ammâ yashifun, wa salamun ‘alal-mursalîn, wal-ḫamdulillâhi rabbil-‘âlamîn. Al-fâtiḫah..
                <br><br>

            </p>
        </section>

    </main>

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