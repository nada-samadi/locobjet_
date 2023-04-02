@extends('master.layout')
@section('title')
    LOCOBJET
@endsection
@section('style')
    <style>

        .intro {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 520px;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("././images/img2.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .intro h1 {
            font-family: sans-serif;
            font-size: 60px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            margin: 0;
        }

        .intro p {
            font-size: 20px;
            color: #d1d1d1;
            text-transform: uppercase;
            margin: 20px 0;
        }

        .intro a {
            text-decoration: none;
            background-color: #FF4B2BFF;
            color: #FFFFFF;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
        }

        .achievements {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 40px 80px;
        }

        .achievements .work {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 40px;
        }

        .achievements .work i {
            width: fit-content;
            font-size: 50px;
            color: #333333;
            border-radius: 50%;
            border: 2px solid #333333;
            padding: 12px;
        }

        .achievements .work .work-heading {
            font-size: 20px;
            color: #333333;
            text-transform: uppercase;
            margin: 10px 0;
        }

        .achievements .work .work-text {
            font-size: 15px;
            color: #585858;
            margin: 10px 0;
        }

        .about-me {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 80px;
            border-top: 2px solid #eeeeee;
        }

        .about-me img {
            width: 500px;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .about-me-text h2 {
            font-size: 30px;
            color: #333333;
            text-transform: uppercase;
            margin: 0;
        }

        .about-me-text p {
            font-size: 15px;
            color: #585858;
            margin: 10px 0;
        }

        /* CSS for footer */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FF4B2BFF;
            padding: 40px 80px;
        }

        .footer .copy {
            color: #fff;
        }

        .bottom-links {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 40px 0;
        }

        .bottom-links .links {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0 40px;
        }

        .bottom-links .links span {
            font-size: 20px;
            color: #fff;
            text-transform: uppercase;
            margin: 10px 0;
        }

        .bottom-links .links a {
            text-decoration: none;
            color: #a1a1a1;
            padding: 10px 20px;
        }
    </style>
@endsection
@include('master.navbar')
@section('content')
    <div class="cont">
        <main>
            <div class="intro">
                <h1>Location des objects</h1>
                <p>le premier site web de location des objets</p>
                <a href="/register">Rejoignez-nous</a>
            </div>
            <div class="achievements">
                <div class="work">
                    <i class="fas fa-atom"></i>
                    <p class="work-heading">Securité</p>
                    <p class="work-text">la sécurité est notre priorité</p>
                </div>
                <div class="work">
                    <i class="fas fa-skiing"></i>
                    <p class="work-heading">Diversité</p>
                    <p class="work-text">différent objet en location.</p>
                </div>
                <div class="work">
                    <i class="fas fa-ethernet"></i>
                    <p class="work-heading">Communauté</p>
                    <p class="work-text">Une geande communauté</p>
                </div>
            </div>
            <div class="Annonce">

            </div>
            <div class="about-me">
                <div class="about-me-text">
                    <h2>Apropos locobjet</h2>
                    <p>La premiere application au maroc de location des objets, vous pouvez deposer des anonces qui concernent les objets que vous voulez louer ou bien se connecter pour louer un objet que vous souhaitez </p>
                </div>
                <img src="{{ asset('images/img1.jpg')}}" alt="me">
            </div>
        </main>
        <footer class="footer">
            <div class="copy"></div>
            <div class="bottom-links">
                <div class="links">
                    <span>More Info</span>
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </div>
                <div class="links">
                    <span>Social Links</span>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </footer>
    </div>

@endsection

