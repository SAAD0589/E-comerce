<x-app-layout>

<style>
    :root{
--bodyBack: #ffeaed;
--textColor: #1b2741;
--starColor: #f67034;
--sectionBack: #f7f6f9;
}
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 5%;
}
header .logo {
    font-size: 25px;
}
header .logo span {
    color: #93d6d0;
}
header .menu a {
    position: relative;
    margin: 0 10px;
    text-decoration: 0;
    color: #999;
    transition: 0.5s;
}
header .menu a:before {
    position: absolute;
    top: -2px;
    content: "";
    width: 0;
    height: 2px;
    background-color: #93d6d0;
    transition: 0.5s;
}
header .menu a:hover:before {
    width: 100%;
}
header .menu a:hover {
    color: #000;
}
/* home */

.home {
    height: calc(100vh - 55px);
    background: url('images/img1.jpg');
    background-position: center;
    background-size: cover;
    display: flex;
    align-items: flex-end;
    padding-left: 5%;
    padding-bottom: 50px;
}
.home-infos {
    background-color: #fff;
    border-radius: 6px;
    padding: 50px;
    /* animation: anime 2s linear; */
}

/* animation home-infos */

@keyframes anime {
    from{
        transform: translateX(-600px);
    }
}
.home-infos h1 {
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.home-infos p {
    margin-top: 10px;
    margin-bottom: 20px;
}
.home-infos a {
    text-decoration: 0;
    border: 2px solid #93d6d0;
    color: #93d6d0;
    border-radius: 6px;
    padding: 5px 20px;
    margin-top: 5px;
    font-weight: 400;
    text-transform: capitalize;
    transition: 0.5s;
}
.home-infos a:hover {
    background-color: #93d6d0;
    color: #fff;
    letter-spacing: 1px;
}

/* services */

.services {
    padding: 0 10%;
}
.title {
    text-align: center;
    margin-top: 50px;
    font-size: 35px;
    letter-spacing: 1px;
    text-transform: uppercase
}
.sub-title {
    text-align: center;
    color: #93d6d0;
    margin: 20px 0;
}
.list-services {
    display: grid;
    grid-template-columns: repeat(auto-fit,20rem);
    justify-content: center;
    gap: 20px;
    margin-bottom: 50px;
}
.list-services .box {
    padding: 30px;
    background-color: #f3fbfa;
    border-radius: 6px;
    transition: 0.5s;
}
.list-services .box h1 {
    text-transform: uppercase;
    color: #93d6d0;
    margin-bottom: 10px;
    font-size: 18px;
    letter-spacing: 1px;
}
.list-services .box p {
    font-size: 16px;
}
.list-services .box:hover{
    background-color: #93d6d0;
} 
.list-services .box:hover h1 {
    color: #fff;
}
.list-services .box:hover p {
    color: #333;
}

/* banner */
.banner {
    height: 70vh;
    background: url("");
    background-position: center;
    background-size: cover
}
/*Our Goal*/
.our-goal {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15%;
    background-color: #f3fbfa;
    height: 50vh;
}
.our-goal .left {
    width: 45%;
}
.our-goal .right {
    width: 45%;
}
.our-goal .left span {
    font-weight: bold;
    color: #93d6d0;
    text-transform: uppercase;
}
.our-goal .left h1 {
    font-size: 35px;
    padding: 15px 0;
    margin-bottom: 15px;
}
.our-goal .left a {
    background-color: #93d6d0;
    color: #fff;
    text-decoration: 0;
    padding: 10px 25px;
    text-transform: uppercase;
}
.our-goal .right p {
    letter-spacing: 1px;
}
/* footer */
footer{
    padding: 0 15%;
}

footer .title {
    margin-bottom: 20px;
}
.contact {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.contact .class-form {
    width: 45%;
    display: flex;
    flex-direction: column;
    height: 300px;
}
.contact h4 {
    margin-bottom: 20px;
}
.contact form {
    display: flex;
    flex-direction: column;
}
.contact form input , textarea {
    margin: 5px 0;
    padding: 5px;
    border: 1px solid #999;
    resize: none;
    outline: 0;
}
.contact form button {
   width: fit-content;
   padding: 10px 25px;
   background-color: #93d6d0;
   border: 0;
   font-weight: bold;
   color: #000;
   margin-top: 5px;
}

.address {
    width: 50%;
    height: 300px;
}
iframe {
    width: 100%;
    height: 100%;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
.end {
    margin-top: 50px;
    background-color: #333;
    text-align: center;
    font-size: 15px;
    padding: 10px 0;
    color: #fff;
}
.products{
width: 100%;
align-self: center;
height: 70%;
display: flex;
justify-content: center;
flex-wrap: wrap;
gap: 40px;
padding: 250px
}
.product{
position: relative;
background-color: var(--sectionBack);
width: 350px;
height: 100%;
box-shadow: 0 5px 20px rgba(0, 0, 0, .3);
display: flex;
flex-direction: column;
justify-content: space-between;
padding: 20px 20px 40px;
border-radius: 10px;
transition: .3s;
}
.product:hover{
transform: translateY(-15px);
box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
}
.image{
width:100%;
height: 60%;
display: grid;
place-content: center;
}
.image img{
width: 240px;
}
.namePrice{
width: 100%;
display: flex;
justify-content: space-between;
}
.namePrice h3{
font-size: 2em;
text-transform: capitalize;
color: var(--textColor);
}
.namePrice span{
font-size: 1.5em;
color: var(--starColor);
}
.product p{
font-size: 18px;
line-height: 25px;
}
.stars svg{
font-size: 1.3em;
color: var(--starColor);
}
.bay{
position: absolute;
bottom: 20px;
right: 20px;
}
.bay a{
padding: 10px 20px;
border-radius: 7px;
border: none;
background-color: var(--textColor);
color: var(--sectionBack);
font-size: 18px;
text-transform: capitalize;
cursor: pointer;
transition: .5s;
}
.bay a:hover{
transform: scale(1.1);
}
</style>

<section class="home">
    <div class="home-infos">
        <h1>Welcom EcomeShop</h1>
        <p></p>
        <a href="/">Product</a>
    </div>
</section>

<!-- services -->
{{-- Afficahge Trois product --}}
@if (isset($produits))
<div class="products">
    @foreach ($produits as $produit)
    <div class="product">
        <div class="image">
            <img src='{{$produit->imageProduct}}' alt="">
        </div>
        <div class="namePrice">
            <h3>{{$produit->nameProduct}}</h3>
            <span>{{$produit->PrixProduct}} DH</span><br>
        </div>
        <span>Quantite : {{$produit->QuantiteProduct}}</span>
        <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
        </div>
        <div class="bay">
            <a href="{{route('view',$produit->id_Product)}}"> View </a>
        </div>
    </div>
@endforeach
@else
    <h1 class="bg bg-danger">Not Product</h1>
@endif
<!-- banner -->
<section class="banner"></section>
<section class="our-goal">
    <div class="left">
        <span>NOS SERVICES</span>
        <h1>EcomeShop est une entreprise de commerce électronique qui opère en Afrique..</h1>
        <a href="#">BOOK AN APPOINTMENT</a>
    </div>
    <div class="right">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet asperiores enim aut voluptatum commodi fugit natus dicta neque nihil, ipsum eligendi ad et corporis omnis, voluptatibus accusantium ipsam eos magni.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id similique ea nemo sapiente eaque ab, eligendi voluptatum animi rem, temporibus ipsam dolore ipsa nam, tempore quos qui. Velit, quisquam in.</p>
    </div>
</section>

<!-- footer-contact -->

<footer>
    <h1 class="title">let's contact</h1>
    <div class="contact">
        <div class="class-form">
            <h2>GET A FREE CASE EVALUATION TODAY</h2>
            <h4>AVAILLABLE 24 HOURS A DAY !</h4>
            <form action="">
                <input type="text" placeholder="Enter your Name">
                <input type="email" placeholder="Enter a valid mail address">
                <textarea placeholder="Enter your message" cols="30" rows="8"></textarea>
                <button>SUBMIT</button>
            </form>
        </div>
        <div class="address">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.874102365142!2d2.335455315619297!3d48.860611079287644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671d877937b0f%3A0xb975fcfa192f84d4!2sMus%C3%A9e%20du%20Louvre!5e0!3m2!1sfr!2sfr!4v1653640866666!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>  
</footer>
</x-app-layout>
