<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <nav>
            <h2 class="logo">DISKOPINDAG MALANG</h2>
            <ul>
                <li><a href="">Tentang Kami</a></li>
                <li><a href="">Bantuan</a></li>        
            </ul>
        </nav>
    <div class="hero">
        <div class="login container">
            <div class="masuk">
                 <form action="#">
                    <h2>Masuk</h2>
                        <div class="input1">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="div">
                                <p>Alamat Email <span>*</span></p>
                                <input class="input" type="text">
                            </div>
                        </div>
                        <div class="input1">
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                            <p>Kata Sandi <span>*</span></p>
                                <input class="input" type="password">
                            </div>
                        </div>
                        <input type="submit" class="btn" value="Masuk">
                        <p class="a">Belum memiliki akun? <a href="#">Daftar</a></p>
                </form>
            </div>
            <div>
            <img src="{{ ('images/Group 1508.svg') }}">
            </div>
        </div>
    </div>
    </header>
    <footer>
        <img src="{{ ('images/Group 1506.svg') }}">
    </footer>
</body>
</html>