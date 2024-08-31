<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--     
    primary meta tags 
-->


     <meta name="description" content="Cineaste is a popular movie app made by Damar."> <!--untuk menampilkan ringkasan halaman di hasil pencarian -->

 
 

    <link rel="shortcut icon" href="./assets//favicon.ico" >

 
    

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">




<link rel="stylesheet" href="./css/style.css">




 <script src="./js/global.js" defer></script> <!--Menunda eksekusi skrip hingga halaman selesai diuraikan, memastikan bahwa skrip dijalankan setelah semua elemen HTML dimuat -->
<script src="./js/detail.js" type="module"></script> <!-- Mengindikasikan bahwa skrip adalah modul ES6, yang mendukung impor dan ekspor antar file, serta dieksekusi dalam mode ketat. Modul dieksekusi setelah halaman selesai diuraikan, dan tidak secara otomatis menjadi bagian dari cakupan global. -->

</head>

<body>

    



    <header class="header">

        <a href="index" class="logo">
            <img src="./assets//logocineaste.png" width="125" height="32" alt="Cineaste home">
        </a>

        <div class="search-box" search-box>
            <div class="search-wrapper" search-wrapper>
                <input type="text" name="search" aria-label="search movies" placeholder="Search any movies..." class="search-field" autocomplete="off" search-field>


                <img src="./assets//search.png" width="24" height="24" alt="search" class="leading-icon">
            </div>

            <button class="search-btn" search-toggler>
                 <img src="./assets//close.png" width="24" height="24" alt="close search box">
            </button>
        </div>

        <button class="search-btn" search-toggler menu-close>
            <img src="./assets//search.png" width="24" height="24" alt="open search box">
        </button>

        <button class="menu-btn" menu-btn menu-toggler>
            <img src="./assets//menu.png" width="24" height="24" alt="open menu" class="menu">
            <img src="./assets//menu-close.png" width="24" height="24" alt="close menu" class="close">
        </button>

    </header> 




<main>




    <nav class="sidebar" sidebar></nav>
    <div class="overlay" overlay menu-toggler></div>


    


    <article class="container" page-content></article>
</main>

</body>

</html>