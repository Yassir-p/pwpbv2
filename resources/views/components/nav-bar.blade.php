<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<nav class="px-6 py-4 backdrop-blur-md bg-white/10 fixed w-full">
    <div class="flex items-center justify-between w-[92%] mx-auto">
        <div>
            <img src="/storage/assets/Wahyepp.png" alt="logo" class="w-32 h-32" />
        </div>
        <div class="nav-links backdrop-blur-md md:static duration-300 absolute md:min-h-fit min-h-[60vh] left-0 top-[-300%] md:w-auto w-full flex md:justify-center md:items-center px-5">
            <ul id="nav-menu" class="w-full md:w-auto flex md:justify-center md:items-center md:flex-row flex-col md:gap-[4vw] gap-7 mx-auto">
                <li><a href="/" class="hover:text-[#075B5E] duration-300">Beranda</a></li>
                <li><a href="/tentang" class="hover:text-[#075B5E] duration-300">Layanan</a></li>
                <li><a href="/hubungi" class="hover:text-[#075B5E] duration-300">Kontak</a></li>
                <li><a href="/produk" class="hover:text-[#075B5E] duration-300">Produk</a></li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <ion-icon onclick="onToogleMenu(this)" name="menu-outline" class="text-3xl cursor-pointer md:hidden"></ion-icon>
        </div>
    </div>
</nav>

<script>
    const navLinks = document.querySelector('.nav-links');

    function onToogleMenu(e) {
        e.name = e.name === 'menu-outline' ? 'close-outline' : 'menu-outline';
        navLinks.classList.toggle('top-[9%]');
    }
</script>