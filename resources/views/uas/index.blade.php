<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Prestige | Luxury x Prina</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');
        
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background-color: #000; font-family: 'Montserrat', sans-serif; color: #fff; overflow-x: hidden; }

        :root {
            --gold: #D4AF37;
            --gold-light: #f7ef8a;
            --gold-dark: #8a6d3b;
            --dark-card: #0d0d0d;
        }

        header { 
            background: #fff; 
            padding: 20px 15px; 
            text-align: center; 
            border-bottom: 1px solid #e0e0e0;
            position: relative; z-index: 1000;
        }

        .brand-wrapper { display: flex; flex-direction: column; align-items: center; justify-content: center; }

        .brand-logo-circle {
            width: 40px; height: 40px; border: 2px solid var(--gold); border-radius: 50%;
            display: flex; align-items: center; justify-content: center; margin-bottom: 8px;
        }

        .brand-logo-circle span { font-family: 'Cinzel', serif; color: #000; font-weight: 700; font-size: 14px; letter-spacing: 2px; }

        .luxury-text {
            font-family: 'Cinzel', serif; font-size: 20px; font-weight: 700; letter-spacing: 3px;
            text-transform: uppercase;
            background: linear-gradient(to right, #000 20%, var(--gold-dark) 40%, var(--gold-light) 50%, var(--gold-dark) 60%, #000 80%);
            background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            animation: shine 4s linear infinite;
        }
        @keyframes shine { to { background-position: 200% center; } }

        .brand-subtitle { font-size: 7px; letter-spacing: 3px; color: #888; margin-top: 3px; text-transform: uppercase; }

        .wrapper { display: flex; flex-direction: column; min-height: 100vh; }
        @media(min-width: 768px) { .wrapper { flex-direction: row; } }

        /* Navigasi / Sidebar Responsive HP */
        nav { 
            width: 100%; background: #050505; border-bottom: 1px solid #222;
            display: flex; overflow-x: auto; padding: 10px; white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        @media(min-width: 768px) { 
            nav { width: 260px; border-right: 1px solid #222; border-bottom: none; display: block; position: fixed; height: 100%; padding-top: 30px; overflow-x: visible; white-space: normal; } 
        }

        nav a { 
            display: inline-block; padding: 8px 15px; color: #888; text-decoration: none; 
            text-transform: uppercase; font-size: 10px; letter-spacing: 1px;
            transition: 0.3s;
        }
        @media(min-width: 768px) { nav a { display: block; padding: 18px 30px; letter-spacing: 2px; } }
        nav a:hover { color: var(--gold); background: #111; }

        main { flex: 1; padding: 20px 15px; background: radial-gradient(circle at center, #1a1a1a 0%, #050505 100%); width: 100%; }
        @media(min-width: 768px) { main { margin-left: 260px; padding: 60px; } }
        
        .page { display: none; opacity: 0; }
        .page:target { display: block !important; opacity: 1; animation: fadeIn 0.5s ease forwards; }
        main:not(:has(section:target)) #home, #home:target { display: block; opacity: 1; }

        @keyframes fadeIn { to { opacity: 1; } }

        h2 { font-family: 'Cinzel', serif; font-size: 26px; color: var(--gold); margin-bottom: 8px; letter-spacing: 1px; }
        @media(min-width: 768px) { h2 { font-size: 50px; letter-spacing: 2px; } }
        .sub-title { font-size: 9px; text-transform: uppercase; letter-spacing: 4px; color: #888; margin-bottom: 15px; display: block; }

        .product-focus { display: flex; flex-direction: column; gap: 20px; background: var(--dark-card); padding: 20px; border: 1px solid #222; margin-bottom: 20px; }
        @media(min-width: 768px) { .product-focus { flex-direction: row; gap: 60px; padding: 50px; } }

        .product-img { width: 100%; height: 250px; object-fit: cover; border: 1px solid #333; }
        @media(min-width: 768px) { .product-img { width: 380px; height: 500px; } }

        .product-info h3 { font-family: 'Cinzel', serif; font-size: 20px; margin-bottom: 10px; color: #fff; border-bottom: 1px solid var(--gold); display: inline-block; padding-bottom: 4px; }
        .price { font-size: 18px; color: var(--gold); margin-bottom: 15px; display: block; font-family: 'Cinzel', serif; }
        .description { line-height: 1.6; color: #999; margin-bottom: 20px; font-size: 13px; text-align: justify; }
        
        .btn-buy { padding: 12px 24px; border: 1px solid var(--gold); color: var(--gold); text-decoration: none; text-transform: uppercase; font-size: 10px; letter-spacing: 2px; background: transparent; display: inline-block; }
        .btn-buy:hover { background: var(--gold); color: #000; }

        .form-container, .ledger-container {
            width: 100%; max-width: 850px; margin: 0 auto; background-color: #0d0d0d;
            padding: 15px; border-radius: 8px; border: 1px solid #222;
        }
        @media(min-width: 768px) { .form-container, .ledger-container { padding: 40px; } }

        .form-container table { width: 100%; border-collapse: collapse; }
        .form-container tr { display: flex; flex-direction: column; margin-bottom: 12px; }
        @media(min-width: 768px) { 
            .form-container tr { display: table-row; margin-bottom: 0; }
            .form-container td { padding: 12px 10px; font-size: 14px; color: #ccc; }
            .form-container td:nth-child(1) { width: 30%; }
            .form-container td:nth-child(2) { width: 5%; display: table-cell; }
            .form-container td:nth-child(3) { width: 65%; display: table-cell; }
        }
        .form-container td { padding: 2px 0; font-size: 13px; color: #ccc; }
        .form-container td:nth-child(2) { display: none; } /* Sembunyikan titik dua di HP agar lebih rapi */
        @media(min-width: 768px) { .form-container td:nth-child(2) { display: table-cell; } }

        .form-container input[type=text],
        .form-container input[type=date],
        .form-container input[type=number],
        .form-container textarea,
        .form-container select {
            width: 100%; padding: 10px; background: #151515; border: 1px solid #333;
            border-radius: 4px; color: #fff; font-family: 'Montserrat', sans-serif; font-size: 14px;
        }
        .form-container .radio { width: auto; margin-right: 5px; margin-left: 5px; accent-color: var(--gold); }
        
        .form-btn { padding: 12px 20px; border: 1px solid var(--gold); border-radius: 4px; cursor: pointer; font-weight: 600; text-transform: uppercase; font-size: 11px; width: 100%; margin-top: 5px; }
        @media(min-width: 768px) { .form-btn { width: auto; } }
        .form-submit { background-color: var(--gold); color: #000; }
        .form-reset { background-color: transparent; color: var(--gold); }

        .luxury-table { width: 100%; border-collapse: collapse; margin-top: 15px; font-size: 11px; min-width: 500px; }
        @media(min-width: 768px) { .luxury-table { font-size: 13px; min-width: 100%; } }
        .luxury-table th { background-color: #111; color: var(--gold); font-family: 'Cinzel', serif; padding: 10px 6px; border-bottom: 2px solid var(--gold); text-align: left; }
        .luxury-table td { padding: 10px 6px; border-bottom: 1px solid #1c1c1c; color: #ddd; }
        
        .action-btn { text-decoration: none; font-weight: 600; font-size: 9px; padding: 4px 8px; border-radius: 4px; display: inline-block; margin-bottom: 2px; }
        .action-edit { color: var(--gold); border: 1px solid var(--gold); }
        .action-delete { color: #dc3545; border: 1px solid #dc3545; }

        footer { text-align: center; padding: 20px; background: #000; color: #333; font-size: 8px; letter-spacing: 2px; border-top: 1px solid #111; }
    </style>
</head>
<body>

<header>
    <div class="brand-wrapper">
        <div class="brand-logo-circle"><span>LP</span></div>
        <h1 class="luxury-text">LUXURY x PRINA</h1>
        <div class="brand-subtitle">The Pinnacle of Excellence</div>
    </div>
</header>

<div class="wrapper">
    <nav>
        <a href="#home">Main Hall</a>
        <a href="#profil">The Legacy</a>
        <a href="#buku">Literary Arts</a>
        <a href="#fashion">Fashion Atelier</a>
        <a href="#gaming">Gaming Throne</a>
        <a href="#contact">Concierge & Form</a>
        <a href="#ledger" style="color: var(--gold); font-weight: 600;">Registry Ledger</a>
    </nav>

    <main>
        <section id="home" class="page">
            <span class="sub-title">Where Luxury Meets Soul</span>
            <h2>The Art of Living</h2>
            <div style="max-width: 800px; margin-top: 15px; border-top: 1px solid rgba(212, 175, 55, 0.2); padding-top: 15px;">
                <p style="font-size: 15px; line-height: 1.7; color: #ddd; font-style: italic; border-left: 3px solid var(--gold); padding-left: 12px;">
                    "Keanggunan bukanlah tentang menonjol, melainkan tentang diingat."
                </p>
                <p style="font-size: 13px; line-height: 1.8; color: #888; margin-top: 15px; text-align: justify;">
                    Selamat datang di <b>The Prestige Hall</b> oleh Luxury x Prina. Kami adalah kurator mimpi di mana setiap objek dipilih dengan filosofi detail yang tak terlihat.
                </p>
                <div style="margin-top: 25px;">
                    <a href="#profil" class="btn-buy">Explore Legacy</a>
                </div>
            </div>
        </section>

        <section id="profil" class="page">
            <span class="sub-title">Our Story</span>
            <h2>The Legacy</h2>
            <div style="background: rgba(255,255,255,0.02); padding: 20px; border: 1px solid #111; line-height: 1.8; color: #aaa; font-size: 13px;">
                <h3 style="color: var(--gold); font-family: 'Cinzel', serif; margin-bottom: 10px;">Filosofi Kami</h3>
                <p>Didirikan dengan visi membawa standar kemewahan global ke dalam genggaman Anda, <b>Luxury x Prina</b> menjadi simbol prestise dan kepercayaan.</p>
            </div>
        </section>

        <section id="buku" class="page">
            <span class="sub-title">The Collection</span>
            <h2>Literary Arts</h2>
            <div class="product-focus">
                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=800" class="product-img" alt="Book">
                <div class="product-info">
                    <h3>Golden Wisdom Edition</h3>
                    <span class="price">Rp 1.250.000</span>
                    <p class="description">Edisi kolektor dijilid kulit premium hand-finished dengan cetakan foil emas 24 karat.</p>
                    <a href="#contact" class="btn-buy">Acquire Piece</a>
                </div>
            </div>
        </section>

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

        <section id="contact" class="page">
            <span class="sub-title">Personal Service</span>
            <h2>Concierge</h2>
            <div style="background: #0d0d0d; padding: 20px; border-top: 1px solid var(--gold); border-bottom: 1px solid var(--gold); text-align: center; margin-bottom: 20px;">
                <p style="margin-bottom: 10px; font-size: 12px; color: #888;">Layanan eksklusif memenuhi keinginan spesifik Anda.</p>
                <p style="color: var(--gold); font-size: 15px; font-family: 'Cinzel', serif;">WhatsApp VIP: +62 811 1234 5678</p>
            </div>

            <div class="form-container">
                <h3 style="font-family: 'Cinzel', serif; text-align: center; color: var(--gold); margin-bottom: 15px; font-size: 18px;">Formulir Pendaftaran UNIROW</h3>
                <form action="/simpan" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
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
                            <td colspan="3" style="padding-top: 12px;"><b style="color: var(--gold);">Nilai UAN</b></td>
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
                            <td colspan="3" style="padding-top: 12px;"><b style="color: var(--gold);">Jurusan Dipilih</b></td>
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
                            <td><textarea name="alasan_masuk" rows="3" required></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="3" style="padding-top: 15px; text-align: right;">
                                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                                    <input type="submit" value="Daftar" class="form-btn form-submit">
                                    <input type="reset" value="Cancel" class="form-btn form-reset">
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>

        <section id="ledger" class="page">
            <span class="sub-title">Database Records</span>
            <h2>Registry Ledger</h2>
            
            <div class="ledger-container">
                <h3 style="font-family: 'Cinzel', serif; text-align: center; color: var(--gold); margin-bottom: 5px; font-size: 16px;">Data Master Terregistrasi</h3>
                <div style="text-align:right; margin-bottom:10px;">
                    <a href="/create" class="action-btn action-edit">+ Tambah Mahasiswa</a>
                </div>
                
                <div style="overflow-x: auto;">
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
                                    <a href="/edit?id={{ $row->id }}" class="action-btn action-edit">Ubah</a>
                                    <a href="/hapus?id={{ $row->id }}" class="action-btn action-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</div>

<footer>
    &copy; 2026 THE PRESTIGE GALLERY | BY LUXURY x PRINA | AN EXCLUSIVE EXPERIENCE
</footer>

</body>
</html>