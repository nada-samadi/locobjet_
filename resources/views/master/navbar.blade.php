<header class="header">
    <a href="/" class="logo"><span class="logo-first">LOC</span>OBJET</a>
    <nav class="nav-items">
        <a href="#">Annonces</a>
        <a href="/login">Se connecter</a>
        <a href="/register">S'inscrire</a>
        <button class="custom-btn btn-5"><span>Ajouter annonce</span></button>
    </nav>
</header>
<style>

    .header {

        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f5f5f5;
    }

    .custom-btn {
        width: 130px;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 25px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
        7px 7px 20px 0px rgba(0,0,0,.1),
        4px 4px 5px 0px rgba(0,0,0,.1);
        outline: none;
    }
    .btn-5 {
        width: 130px;
        height: 40px;
        line-height: 42px;
        padding: 0;
        border: none;
        background: rgb(255,27,0);
        background: linear-gradient(0deg, rgba(255,27,0,1) 0%, rgba(251,75,2,1) 100%);
    }
    .btn-5:hover {
        color:rgb(255,27,0);
        background: transparent;
        box-shadow:none;
    }
    .btn-5:before,
    .btn-5:after{
        content:'';
        position:absolute;
        top:0;
        right:0;
        height:2px;
        width:0;
        background:rgb(255,27,0);
        box-shadow:
            -1px -1px 5px 0px #fff,
            7px 7px 20px 0px #0003,
            4px 4px 5px 0px #0002;
        transition:400ms ease all;
    }
    .btn-5:after{
        right:inherit;
        top:inherit;
        left:0;
        bottom:0;
    }
    .btn-5:hover:before,
    .btn-5:hover:after{
        width:100%;
        transition:800ms ease all;
    }

    .header .logo {
        font-size: 15px;
        font-family: "Sriracha", cursive;
        color: #FF416CFF;
        text-decoration: none;
        margin-left: 30px;
    }
    .header .logo-first{
        color: #FF4B2BFF;
        font-size: 25px;
    }

    .nav-items {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #f5f5f5;
        margin-right: 20px;
    }

    .nav-items a {
        text-decoration: none;
        color: #000;
        padding: 35px 20px;
    }
</style>