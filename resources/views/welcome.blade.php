<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Laravel UTS UAS</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#111;
}

.sidebar{
    width:230px;
    height:100vh;
    position:fixed;
    background:#0d0d0d;
    color:white;
    border-right:2px solid #d4af37;
}

.sidebar h2{
    text-align:center;
    padding:25px 0;
    color:#d4af37;
    font-family:"Times New Roman",serif;
    letter-spacing:2px;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:18px 25px;
    transition:.3s;
}

.sidebar a:hover{
    background:#1d1d1d;
    color:#d4af37;
}

.main{
    margin-left:230px;
    padding:30px;
}

.profile{
    background:white;
    border-radius:18px;
    padding:40px;
    margin-bottom:30px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.3);
    animation:fadeIn 1s ease;

    /* Tambahkan ini */
    position:relative;
    overflow:hidden;
}


.profile img{
    width:200px;
    height:200px;
    border-radius:50%;
    object-fit:cover;
    border:5px solid #d4af37;
    margin-bottom:20px;
    position:relative;
    z-index:2;
    animation:float 3s ease-in-out infinite,
              goldGlow 2.5s ease-in-out infinite;
}

.profile::before{
    z-index : 1 ;
    content:"";
    position:absolute;
    width:230px;
    height:230px;
    border-radius:50%;
    top:25px;
    left:50%;
    transform:translateX(-50%);
    background:conic-gradient(
        transparent,
        rgba(255,215,0,.9),
        transparent,
        rgba(212,175,55,.8),
        transparent
    );
    filter:blur(3px);
    opacity:.9;
    animation:spin 8s linear infinite;
}

@keyframes spin{
    from{
        transform:translateX(-50%) rotate(0deg);
    }
    to{
        transform:translateX(-50%) rotate(360deg);
    }
}

.profile h2{
    font-size:34px;
    font-family:"Times New Roman",serif;
    margin-bottom:10px;
}

.profile h4{
    color:#777;
    margin-bottom:20px;
    font-weight:normal;
}

.profile p{
    margin:8px 0;
    font-size:18px;
}

.container{
    display:flex;
    gap:25px;
}

.card{
    flex:1;
    background:linear-gradient(145deg,#181818,#252525);
    color:white;
    padding:35px;
    border-radius:18px;
    border:1px solid #d4af37;
    text-align:center;
    box-shadow:0 10px 20px rgba(0,0,0,.4);
    transition:.4s;
}

.card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 30px rgba(212,175,55,.3);
}


.card h3{
    color:#d4af37;
    font-size:30px;
    margin-bottom:15px;
    font-family:"Times New Roman",serif;
}

.card p{
    color:#ddd;
}

.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 35px;
    background:#d4af37;
    color:#111;
    text-decoration:none;
    border-radius:30px;
    font-weight:bold;
    transition:.3s;
}

.btn:hover{
    background:white;
    color:#111;
}

@keyframes float{
    0%{transform:translateY(0);}
    50%{transform:translateY(-10px);}
    100%{transform:translateY(0);}
}

@keyframes goldGlow{

    0%{
        box-shadow:
        0 0 10px #d4af37,
        0 0 20px #d4af37,
        0 0 30px rgba(212,175,55,.5);
    }

    50%{
        box-shadow:
        0 0 20px #ffd700,
        0 0 40px #ffd700,
        0 0 70px rgba(255,215,0,.9);
    }

    100%{
        box-shadow:
        0 0 10px #d4af37,
        0 0 20px #d4af37,
        0 0 30px rgba(212,175,55,.5);
    }

}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(30px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.gold-line{
    width:180px;
    height:3px;
    border:none;
    background:#d4af37;
    margin:25px auto 0;
    border-radius:50px;
    box-shadow:0 0 15px #d4af37;
}

</style>

</head>

<body>

<div class="sidebar">

    <h2>Dashboard</h2>

    <a href="/uts">📘 UTS</a>
    <a href="/uas">📗 UAS</a>

</div>

<div class="main">

    <div class="profile">

        <img src="{{ asset('images/profil.jpg') }}" alt="Foto Profil">

        <h2>Yusri Yani Prinawati</h2>

        <h4>Mahasiswa Informatika</h4>

        <p><b>Nama :</b> Yusri Yani Prinawati</p>

        <p><b>NPM :</b> 1412240093</p>

        <p><b>Kelas :</b> B</p>

        <p><b>Angkatan :</b> 2024</p>

        <hr class="gold-line">

    </div>
    <div class="container">
 
        <div class="card">

            <h3>UTS</h3>

            <p>Halaman Project UTS</p>

            <a href="/uts" class="btn">Buka</a>

        </div>

        <div class="card">

            <h3>UAS</h3>

            <p>Halaman Project UAS</p>

            <a href="/uas" class="btn">Buka</a>

        </div>

    </div>

</div>

</body>
</html>