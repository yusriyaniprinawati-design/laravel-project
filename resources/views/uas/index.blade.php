<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Prestige | Luxury x Prina</title>
    <style>
        /* --- FONTS & DASAR --- */
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background-color: #000; font-family: 'Montserrat', sans-serif; color: #fff; scroll-behavior: smooth; overflow-x: hidden; }

        :root {
            --gold: #D4AF37;
            --gold-light: #f7ef8a;
            --gold-dark: #8a6d3b;
            --gold-glow: rgba(212, 175, 55, 0.4);
            --dark-card: #0d0d0d;
        }

        /* --- HEADER & LOGO --- */
        header { 
            background: #fff; 
            padding: 40px 20px; 
            text-align: center; 
            border-bottom: 1px solid #e0e0e0;
            position: sticky; top: 0; z-index: 1000;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
        }

        .brand-wrapper { display: flex; flex-direction: column; align-items: center; justify-content: center; }

        .brand-logo-circle {
            width: 50px; height: 50px; border: 2px solid var(--gold); border-radius: 50%;
            display: flex; align-items: center; justify-content: center; margin-bottom: 15px;
            animation: goldPulse 3s infinite;
        }

        .brand-logo-circle span { font-family: 'Cinzel', serif; color: #000; font-weight: 700; font-size: 18px; letter-spacing: 2px; }

        @keyframes goldPulse {
            0% { box-shadow: 0 0 0 0px rgba(212, 175, 55, 0.4); }
            70% { box-shadow: 0 0 0 15px rgba(212, 175, 55, 0); }
            100% { box-shadow: 0 0 0 0px rgba(212, 175, 55, 0); }
        }

        .luxury-text {
            font-family: 'Cinzel', serif; font-size: 38px; font-weight: 700; letter-spacing: 12px;
            text-transform: uppercase;
            background: linear-gradient(to right, #000 20%, var(--gold-dark) 40%, var(--gold-light) 50%, var(--gold-dark) 60%, #000 80%);
            background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            animation: shine 4s linear infinite;
        }

        @keyframes shine { to { background-position: 200% center; } }

        .brand-subtitle { font-size: 9px; letter-spacing: 7px; color: #888; margin-top: 10px; text-transform: uppercase; }

        /* --- LAYOUT --- */
        .wrapper { display: flex; min-height: 100vh; }

        nav { 
            width: 260px; background: #050505; border-right: 1px solid #222;
            position: fixed; height: 100%; padding-top: 30px;
        }
        nav a { 
            display: block; padding: 18px 30px; color: #666; text-decoration: none; 
            text-transform: uppercase; font-size: 10px; letter-spacing: 3px;
            transition: 0.4s; border-left: 0px solid var(--gold);
        }
        nav a:hover { color: var(--gold); background: #111; border-left: 5px solid var(--gold); padding-left: 35px; }

        /* --- LOGIKA NAVIGASI --- */
        main { flex: 1; margin-left: 260px; padding: 80px; background: radial-gradient(circle at center, #1a1a1a 0%, #050505 100%); position: relative; }
        
        .page { display: none; opacity: 0; }

        /* Menampilkan halaman yang di-target */
        .page:target { display: block !important; opacity: 1; animation: fadeIn 0.8s ease forwards; }

        /* Munculkan Home secara default jika TIDAK ada target lain yang aktif */
        main:not(:has(section:target)) #home, #home:target { display: block; opacity: 1; }

        @keyframes fadeIn { to { opacity: 1; } }

        /* --- TYPOGRAPHY --- */
        h2 { font-family: 'Cinzel', serif; font-size: 50px; color: var(--gold); margin-bottom: 10px; letter-spacing: 2px; }
        .sub-title { font-size: 12px; text-transform: uppercase; letter-spacing: 8px; color: #888; margin-bottom: 30px; display: block; }

        /* --- KATALOG STYLING --- */
        .product-focus { display: flex; align-items: center; gap: 60px; background: var(--dark-card); padding: 50px; border: 1px solid #222; margin-bottom: 30px; position: relative; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.5); }
        
        .product-focus::before {
            content: ""; position: absolute; top: 0; left: -100%; width: 50%; height: 100%;
            background: linear-gradient(to right, transparent, rgba(212, 175, 55, 0.1), transparent);
            transform: skewX(-25deg); transition: 0.8s;
        }
        .product-focus:hover::before { left: 150%; }

        .product-img { width: 380px; height: 500px; border-radius: 2px; object-fit: cover; border: 1px solid #333; filter: grayscale(20%); transition: 0.5s; }
        .product-focus:hover .product-img { filter: grayscale(0%); border-color: var(--gold); }

        .product-info h3 { font-family: 'Cinzel', serif; font-size: 30px; margin-bottom: 15px; color: #fff; border-bottom: 1px solid var(--gold); display: inline-block; padding-bottom: 5px; }
        .price { font-size: 26px; color: var(--gold); font-weight: 300; margin-bottom: 25px; display: block; font-family: 'Cinzel', serif; }
        .description { line-height: 2; color: #999; margin-bottom: 35px; font-weight: 300; font-size: 15px; text-align: justify; }
        
        .btn-buy { padding: 18px 45px; border: 1px solid var(--gold); color: var(--gold); text-decoration: none; text-transform: uppercase; font-size: 11px; letter-spacing: 3px; transition: 0.5s; background: transparent; display: inline-block; cursor: pointer;}
        .btn-buy:hover { background: var(--gold); color: #000; box-shadow: 0 0 25px var(--gold-glow); }

        /* --- INTEGRASI ADAPTASI FORMULIR MODUL 3 --- */
        .form-container {
            width: 100%; max-width: 750px; margin: 30px auto; background-color: #0d0d0d;
            padding: 35px; border-radius: 8px; border: 1px solid #222; box-shadow: 0 0 20px rgba(212,175,55,0.1);
        }
        .form-container table { width: 100%; border-collapse: collapse; }
        .form-container td { padding: 12px 10px; color: #ccc; font-size: 14px; vertical-align: middle; }
        .form-container input[type=text],
        .form-container input[type=date],
        .form-container textarea,
        .form-container select {
            width: 100%; padding: 10px; background: #151515; border: 1px solid #333;
            border-radius: 4px; color: #fff; font-family: 'Montserrat', sans-serif; box-sizing: border-box;
        }
        .form-container input:focus, .form-container textarea:focus, .form-container select:focus {
            border-color: var(--gold); outline: none; box-shadow: 0 0 5px var(--gold-glow);
        }
        .form-container textarea { resize: none; }
        .form-container .radio { width: auto; margin-right: 5px; margin-left: 10px; accent-color: var(--gold); }
        .form-btn { padding: 12px 28px; border: 1px solid var(--gold); border-radius: 4px; cursor: pointer; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; font-size: 12px; transition: 0.3s; }
        .form-submit { background-color: var(--gold); color: #000; margin-right: 10px; }
        .form-submit:hover { background-color: #fff; border-color: #fff; }
        .form-reset { background-color: transparent; color: var(--gold); }
        .form-reset:hover { background-color: #dc3545; color: #fff; border-color: #dc3545; }

        /* --- STYLING REGISTRY LEDGER (TABEL DATABASE ASLI) --- */
        .ledger-container {
            width: 100%; max-width: 850px; background-color: #0d0d0d;
            padding: 40px; border-radius: 8px; border: 1px solid #222; box-shadow: 0 15px 40px rgba(0,0,0,0.6);
        }
        .luxury-table {
            width: 100%; border-collapse: collapse; margin-top: 25px; font-size: 13px; letter-spacing: 0.5px;
        }
        .luxury-table th {
            background-color: #111; color: var(--gold); font-family: 'Cinzel', serif;
            font-weight: 700; text-transform: uppercase; padding: 16px 12px;
            border-bottom: 2px solid var(--gold); border-top: 1px solid #222; text-align: left;
        }
        .luxury-table td {
            padding: 16px 12px; text-align: left; border-bottom: 1px solid #1c1c1c; color: #ddd; font-weight: 300;
        }
        .luxury-table tr:hover {
            background-color: rgba(212, 175, 55, 0.02);
        }
        .action-btn {
            text-decoration: none; font-weight: 600; font-size: 11px; text-transform: uppercase;
            letter-spacing: 1px; padding: 6px 14px; border-radius: 4px; transition: 0.3s; display: inline-block;
        }
        .action-edit {
            color: var(--gold); border: 1px solid var(--gold); margin-right: 8px;
        }
        .action-edit:hover {
            background-color: var(--gold); color: #000;
        }
        .action-delete {
            color: #dc3545; border: 1px solid #dc3545;
        }
        .action-delete:hover {
            background-color: #dc3545; color: #fff;
        }

        footer { text-align: center; padding: 50px; background: #000; color: #333; font-size: 10px; letter-spacing: 3px; border-top: 1px solid #111; }
    </style>
</head>
<body>

<header>
    <div class="brand-wrapper">
        <div class="brand-logo-circle"><span>LP</span></div>
        <div class="logo-text-container">
            <h1 class="luxury-text">LUXURY x PRINA</h1>
        </div>
        <div class="brand-subtitle">The Pinnacle of Excellence</div>
    </div>
</header>

<div class="wrapper">
    <!-- MENU DI NAVIGASI KIRI -->
    <nav>
        <a href="#home">Main Hall</a>
        <a href="#profil">The Legacy</a>
        <a href="#buku">Literary Arts</a>
        <a href="#fashion">Fashion Atelier</a>
        <a href="#gaming">Gaming Throne</a>
        <a href="#contact">Concierge & Form</a>
        <!-- Menu Baru Khusus Modul 7 -->
        <a href="#ledger" style="color: var(--gold); font-weight: 600;">Registry Ledger</a>
    </nav>

    <main>
        <!-- SEKSI HOME -->
        <section id="home" class="page">
            <span class="sub-title">Where Luxury Meets Soul</span>
            <h2>The Art of Living</h2>
            <div style="max-width: 800px; margin-top: 30px; border-top: 1px solid rgba(212, 175, 55, 0.2); padding-top: 30px;">
                <p style="font-size: 22px; line-height: 2; color: #ddd; font-weight: 300; font-style: italic; border-left: 3px solid var(--gold); padding-left: 20px;">
                    "Keanggunan bukanlah tentang menonjol, melainkan tentang diingat."
                </p>
                <p style="font-size: 16px; line-height: 2.2; color: #888; margin-top: 30px; text-align: justify; letter-spacing: 0.5px;">
                    Selamat datang di <b>The Prestige Hall</b> oleh Luxury x Prina. Kami bukan sekadar toko; kami adalah kurator mimpi. Di sini, setiap objek dipilih dengan filosofi bahwa keindahan sejati terletak pada detail yang tak terlihat. 
                </p>
                <p style="font-size: 16px; line-height: 2.2; color: #888; margin-top: 20px; text-align: justify; letter-spacing: 0.5px;">
                    Eksplorasi koleksi kami yang melampaui waktu—di mana pengetahuan dari <b>Literary Arts</b>, estetika dari <b>Fashion Atelier</b>, dan teknologi dari <b>Gaming Throne</b> bersatu dalam harmoni yang sempurna.
                </p>
                <div style="margin-top: 40px;">
                    <a href="#profil" class="btn-buy" style="font-size: 10px; padding: 12px 30px; letter-spacing: 3px;">Explore Legacy</a>
                </div>
            </div>
        </section>

        <!-- SEKSI LEGACY -->
        <section id="profil" class="page">
            <span class="sub-title">Our Story</span>
            <h2>The Legacy</h2>
            <div style="background: rgba(255,255,255,0.02); padding: 50px; border: 1px solid #111; line-height: 2.2; color: #aaa; font-weight: 300;">
                <h3 style="color: var(--gold); font-family: 'Cinzel', serif; margin-bottom: 20px;">Filosofi Kami</h3>
                <p>Didirikan dengan visi untuk membawa standar kemewahan global ke dalam genggaman Anda, <b>Luxury x Prina</b> telah berkembang menjadi simbol prestise dan kepercayaan.</p>
                <p style="margin-top: 20px;">Kami percaya bahwa setiap individu layak mendapatkan kualitas tanpa kompromi. Perjalanan kami dimulai dari keyakinan sederhana bahwa barang yang kita miliki adalah cerminan dari jiwa kita.</p>
            </div>
        </section>

        <!-- SEKSI LITERARY ARTS -->
        <section id="buku" class="page">
            <span class="sub-title">The Collection</span>
            <h2>Literary Arts</h2>
            <div class="product-focus">
                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=800" class="product-img" alt="Book">
                <div class="product-info">
                    <h3>Golden Wisdom Edition</h3>
                    <span class="price">Rp 1.250.000</span>
                    <p class="description">Edisi kolektor dijilid dengan kulit premium hand-finished dan dihiasi dengan cetakan foil emas 24 karat.</p>
                    <a href="#contact" class="btn-buy">Acquire Piece</a>
                </div>
            </div>
        </section>

        <!-- SEKSI FASHION ATELIER -->
        <section id="fashion" class="page">
            <span class="sub-title">The Collection</span>
            <h2>Fashion Atelier</h2>
            <div class="product-focus">
                <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?q=80&w=800" class="product-img" alt="Gown">
                <div class="product-info">
                    <h3>Obsidian Velvet Gown</h3>
                    <span class="price">Rp 4.700.000</span>
                    <p class="description">Detail kerah sutra dan aksen emas murni menjadikannya mahakarya fashion modern.</p>
                    <a href="#contact" class="btn-buy">Reserve Atelier</a>
                </div>
            </div>
        </section>

        <!-- SEKSI GAMING THRONE -->
        <section id="gaming" class="page">
            <span class="sub-title">The Collection</span>
            <h2>Gaming Throne</h2>
            <div class="product-focus">
                <img src="https://images.unsplash.com/photo-1612287230202-1ff1d85d1bdf?q=80&w=800" class="product-img" alt="Keyboard">
                <div class="product-info">
                    <h3>Aureum Mechanical Keyboard</h3>
                    <span class="price">Rp 8.900.000</span>
                    <p class="description">Sasis aluminium dilapisi emas 18K dengan switch tercanggih.</p>
                    <a href="#contact" class="btn-buy">Claim Throne</a>
                </div>
            </div>
        </section>

        <!-- SEKSI CONCIERGE & FORMULIR PENDAFTARAN UNIROW -->
        <section id="contact" class="page">
            <span class="sub-title">Personal Service</span>
            <h2>Concierge</h2>
            <div style="background: #0d0d0d; padding: 40px; border-top: 1px solid var(--gold); border-bottom: 1px solid var(--gold); text-align: center; margin-bottom: 40px;">
                <p style="margin-bottom: 20px; letter-spacing: 2px; color: #888;">Layanan eksklusif kami hadir untuk memenuhi keinginan spesifik Anda.</p>
                <p style="color: var(--gold); font-size: 24px; font-family: 'Cinzel', serif; margin-bottom: 10px;">WhatsApp VIP: +62 811 1234 5678</p>
                <p style="font-size: 12px; color: #666; letter-spacing: 1px;">Atau isi formulir registrasi mitra akademik di bawah ini:</p>
            </div>

            <!-- FORMULIR PENDAFTARAN -->
            <div class="form-container">
                <h3 style="font-family: 'Cinzel', serif; text-align: center; color: var(--gold); margin-bottom: 25px; letter-spacing: 2px;">Formulir Pendaftaran UNIROW</h3>
                
                <form action="/simpan" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td width="30%">Nama Lengkap</td>
                            <td width="5%">:</td>
                            <td><input type="text" name="nama" required></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td><input type="text" name="tempat_lahir" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal_lahir" required></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <input class="radio" type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                                <input class="radio" type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Rumah</td>
                            <td>:</td>
                            <td><textarea name="alamat_rumah" rows="3" required></textarea></td>
                        </tr>
                        <tr>
                            <td>Sekolah Asal</td>
                            <td>:</td>
                            <td>
                                <input class="radio" type="radio" name="sekolah_asal" value="SMA" required> SMA
                                <input class="radio" type="radio" name="sekolah_asal" value="MA"> MA
                                <input class="radio" type="radio" name="sekolah_asal" value="SMK"> SMK
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" style="padding-top: 20px;"><b style="color: var(--gold); font-family: 'Cinzel', serif;">Nilai UAN</b></td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>:</td>
                            <td><input type="number" step="0.01" name="nilai_matematika" required></td>
                        </tr>
                        <tr>
                            <td>Bahasa Inggris</td>
                            <td>:</td>
                            <td><input type="number" step="0.01" name="nilai_bahasa_inggris" required></td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>:</td>
                            <td><input type="number" step="0.01" name="nilai_bahasa_indonesia" required></td>
                        </tr>
                        <tr>
                            <td colspan="3" style="padding-top: 20px;"><b style="color: var(--gold); font-family: 'Cinzel', serif;">Jurusan Dipilih</b></td>
                        </tr>
                        <tr>
                            <td>Pilihan 1</td>
                            <td>:</td>
                            <td>
                                <select name="pilihan_1" required>
                                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                    <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pilihan 2</td>
                            <td>:</td>
                            <td>
                                <select name="pilihan_2" required>
                                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                                    <option value="SISTEM INFORMASI">SISTEM INFORMASI</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alasan Masuk</td>
                            <td>:</td>
                            <td><textarea name="alasan_masuk" rows="5" required></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="padding-top: 25px; text-align: right;">
                                <input type="submit" value="Daftar" class="form-btn form-submit">
                                <input type="reset" value="Cancel" class="form-btn form-reset">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>

        <!-- MENU BARU: SEKSI REGISTRY LEDGER (UNTUK MODUL 7 - READ & DELETE) -->
        <section id="ledger" class="page">
            <span class="sub-title">Database Records</span>
            <h2>Registry Ledger</h2>
            
            <div class="ledger-container">
                <h3 style="font-family: 'Cinzel', serif; text-align: center; color: var(--gold); margin-bottom: 5px; letter-spacing: 2px;">Data Master Terregistrasi</h3>
                <div style="text-align:right; margin-bottom:20px;">
                    <a href="/create" class="action-btn action-edit"> + Tambah Mahasiswa </a>
                </div>
                <p style="text-align: center; color: #666; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 25px;">Modul 7 — Integrasi CRUD Database System</p>
                
                <table class="luxury-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>Pilihan 1</th>
                            <th>Pilihan 2</th>
                            <th>Opsi Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>#{{ $row->id }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->pilihan_1 }}</td>
                            <td>{{ $row->pilihan_2 }}</td>
                            <td>
                                <a href="/edit?id={{ $row->id }}" class="action-btn action-edit">
                                    Ubah
                                </a>

                                <a href="/hapus?id={{ $row->id }}"
                                class="action-btn action-delete"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</div>

<footer>
    &copy; 2026 THE PRESTIGE GALLERY | BY LUXURY x PRINA | AN EXCLUSIVE EXPERIENCE
</footer>

</body>
</html>