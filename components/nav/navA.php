<?php
session_start();

include  "config/config.php";

?>


<section>
    <div class='content-wrapper'>
        <div class='navmenu'>
            <span id='menu'>
                <img src='ressources/min-menu.png'/>
            </span>
            <nav id='navbar'>
                <ul class='navbar'>
                    <li><a href='index.php'title='Accueil'><span>Accueil</span></a></li>
                    <li><a href='profilA.php'title='Profil'><span>Profil</span></a></li>
                    <li><a href='rules.php'title='Reglement'><span>Réglement</span></a></li>
                    <li id='sub-menu'>
                    <span>Admin</span>
                        <ul class="sub-menu">
                            <li><a href='adminsong.php'title='Chanson'><span>Validation Chanson</span></a></li>
                            <li><a href='adminuser.php'title='Candidature'><span>Validation Candidature</span></a></li>
                            <li><a href='adminmod.php'title='Email'><span>Modification Mot de passe</span></a></li>
                        </ul>
                    </li>
                    <li><a href='contact.php'title='Contact'><span>Contact</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div style='clear: both;'/>
</section>

<style>
.navmenu 
    {
	width: 100%;
    background: #303030;
	display: inline-block
    }
#menu 
    {
	color: #fff;
	font-size: 18px;
	position: relative;
    top: 5px;
	font-weight: 500;
    cursor: pointer;
	padding-left: 10px;
    }
#menu a { text-decoration: none }
nav { display: none }     
nav ul 
    {
    list-style-type: none;
    padding-left: 0;
    font-size: 0;
    background-color: #303030
    }     
nav li 
    {
    display: block;
    font-size: 22px;
    color: white;
    margin: 0 5px;
    }
ul.navbar>li>a { color: #fff }     
nav a 
    {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: inherit
    }
.sub-menu li 
    {
    list-style-type: none;
    display: inline-block;
    }    
.sub-menu li span
    {
    list-style-type: none;
    display: inline-block;
    width: max-content;

    }    
ul.navbar li ul.sub-menu 
    {
    display: none;
    position: absolute;
    }  
ul.navbar li { position: relative;}
ul.navbar li:hover ul.sub-menu { display: block}
.sub-menu li {margin-left: 0!important} 
ul.sub-menu>li>a {color: #fff;}
ul.navbar>li>a:hover,ul.sub-menu>li>a:hover {color: #66a992;}
@media only screen and (max-width:720px) 
    {
    nav ul {width: 100%!important}
    #sub-menu {display: none}
    nav a {padding: 5px 10px}
    .navmenu {padding: 5px;}
    #navbar
        {
        display: none;
        height: 24px;
        line-height: 24px;
        }
    }
@media only screen and (min-width:720px) 
    {
    #menu {display: none}
    nav {display: block!important}
    nav li {display: inline-block}
    #navbar
        {
        height: 50px;
        line-height: 50px;
        }
    }
</style>