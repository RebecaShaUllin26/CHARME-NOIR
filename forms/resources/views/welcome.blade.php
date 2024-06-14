<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charme Noir cast</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="C:\Users\dti\pwiiib\resources\css\FacaParte.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .form-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 100px;
        }
        .form-section form {
            width: 100%;
            max-width: 800px;
            padding: 40px;
            background-color: #A9A9A9   ;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 20px;
            border: 1px solid #000;
        }
        .form-section form div {
            margin-bottom: 15px;
        }
        .form-section form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 20px;
        }
        .form-section form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #000;
            font-size: 20px;
            border-radius: 5px;
        }
        /* footer */
        .footer .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            gap: 3rem;
            background-color: #222222;
            background-size: 100%;
            width: 100vw;
            padding: 20px 0;
        }
        .footer .box-container .box {
            padding: 1rem;
        }
        .footer .box-container .box h3 {
            font-size: 2.2rem;
            color: rgba(211, 211, 211);
            padding: 1rem 0;
        }
        .footer .box-container .box a {
            font-size: 1.4rem;
            color: rgb(182, 175, 175);
            padding: 1rem 0;
            line-height: 2;
            cursor: pointer;
            display: block;
        }
        .footer .box-container .box a:hover {
            color: var(--blue);
        }
        .footer .box-container .box a i {
            padding-right: .5rem;
            color: rgba(211, 211, 211);
        }
        .footer .credit {
            font-size: 2rem;
            text-align: center;
            border-top: .1rem solid #666;
            padding: 1rem;
            padding-top: 2rem;
            margin-top: 2rem;
            color: #666;
        }
        .footer .credit span {
            color: var(--blue);
        }
        /* end */
    </style>
</head>
<body>
  
    <header class="header">
        <a href="#" class="logo">
            <i><img src="{{ asset('assets/imagem.jpg')}}" width="70" height="75"></i>
            <span class="site-name"> AGÊNCIA</span>
        </a>
        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="index">Home</a>
            <a href="casting">Cast</a>
            <a href="jobs">Jobs</a>
            <a href="QuemSomos">Quem somos</a>
            <a href="Parcerias">Parcerias</a>
            <a href="FacaParte">Faça parte</a>
            <a href="contato">Contato</a>
        </nav>
        <a href="C:\Users\dti\pwiiib\resources\views\login.blade.php" class="btn">Login</a>
    </header>
 
    <section class="form-section">
       
    <!DOCTYPE html>
<html>
<head>
    <title>Formulário de Inscrição para o Cast</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Inscrição para o Cast</title>
    <form action="/enviar-formulario" method="POST">
        @csrf
        <h2>Formulário de Inscrição para o Cast</h2>
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" placeholder="Insira o seu nome" required>
        </div>
        <div>
            <label for="phone">Telefone:</label>
            <input type="tel" id="phone" name="phone" placeholder="(11) 00000-0000" required>
        </div>
        <div>
            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" placeholder="Insira o seu endereço" required>
        </div>
        <div>
            <label for="gender">Sexo:</label>
            <select id="gender" name="gender" required>
                <option value="">Selecione</option>
                <option value="male">Masculino</option>
                <option value="female">Feminino</option>
                <option value="other">Outro</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn">Enviar</button>
        </div>
    </form>

</body>
</html>


    </section>
  
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>informações de Contato</h3>
                <a href="#"><i class="fas fa-phone"></i> +55 11 4002-8922</a>
                <a href="#"><i class="fas fa-envelope"></i> CharmeNoir@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> São Paulo, Brasil</a>
            </div>
            <div class="box">
                <h3>Desfiles</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> São Paulo Fashion Week</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Feira Preta</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Ajorsul Fair Mercoóptica</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Hair Brasil</a>
            </div>
            <div class="box">
                <h3>Serviços</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> Books</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Gerencia</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Desfiles</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Contratos</a>
            </div>
            <div class="box">
                <h3>Sobre as seleções</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> Homens</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Mulheres</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Maior de 18 anos</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Menor de 18 anos</a>
            </div>
        </div>
        <div class="credit">created by <span>RebecaShaUllin26</span> | Uma diva sempre diva</div>
    </section>

</body>
</html>