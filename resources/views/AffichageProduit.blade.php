<x-app-layout>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;900&family=Raleway:wght@100;300;500;700&display=swap');

:root{
--bodyBack: #ffeaed;
--textColor: #1b2741;
--starColor: #f67034;
--sectionBack: #f7f6f9;
}
*{
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: 'Raleway', sans-serif;

}
body{
background-color: var(--sectionBack);
min-height: 100vh;
display: grid;
place-content: center;
}
.container{
width: 80vw;
height:80vh;
display: flex;
flex-direction: column;
justify-content: space-around;
}
.header{
width: 100%;
text-align: center;
}
.header h1{
font-size: 4em;
text-transform: uppercase;
color: var(--textColor);
}
.products{
width: 100%;
align-self: center;
height: 70%;
display: flex;
justify-content: center;
flex-wrap: wrap;
gap: 40px;
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
#pagination {
 bottom: 0;
 margin-top: 300px;
 margin-left: 550px
}
</style>
<div>
</div>
<div class="container">
    <div class="header">
        <h1>products</h1>
    </div>
    <div class="products">
        {{-- afficher tous les produits --}}
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
        <div class="position-absolute top-100 start-50 translate-middle" id="pagination">{{$produits->links()}}</div>    
</body>
</x-app-layout>
