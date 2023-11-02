@include('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
*{
    margin: 0;padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

.heading{
    text-align: center;
    font-size: 4rem;
    color: #333;
    padding: 1rem;
    margin: 2rem;
    background: rgba(255, 51, 153, .05);
}

.heading span{
    color: #FFFDD0;
}

:root{
    --pink:#e84393
}

html{
    font-size: 90.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}

section {
    padding: 2rem 9%;
}

.home{
    display: flex;
    align-items: center;
    min-height: 100vh;
    background-color: white;
    /* background:url(https://img.freepik.com/free-photo/light-gray-concrete-wall_53876-89532.jpg) no-repeat; */
    background-size: cover;
    background-position: center;
}

.home .content{
    max-width: 50rem;
}

.home .content h3{
    font-size: 6rem;
    color: antiquewhite;
}

.home .content span{
    font-size: 3.5rem;
    color:var(--antiquewhite);
    padding: 1rem 0;
    line-height: 1.5
}

.home .content p{
    font-size: 1.5rem;
    color:var(--antiquewhite);
}

.btn {
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background: #333;
    color: #fff;
    padding:.9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;
}
.btn:hover {
    background:var(--antiquewhite)
}



@media(max-width: 991px){
    html{
    font-size: 85%;

}
}

@media(max-width: 450px){
    html{
    font-size: 60%;

    .heading{
        font-size: 3rem;
    }
}
}


.product .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.product .box-container .box{
    flex:1 1 20rem;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    position: relative;
}

.product .box-container .box .discount{
    position:  absolute;
    top: 1rem; left: 1rem;
    padding: .7rem 1rem;
    font-size: 2rem;
    color:var(--pink);
    background: rgba(255, 51, 153, .05);
    z-index: 1;
    border-radius: .5rem;
}

.product .box-container .box .image{
    position: relative;
    text-align: center;
    padding-top: 2rem;
    /* padding-left: 1rem; */
    overflow: hidden;
    max-width: 100%;

}

.product .box-container .box .image img{
    height: 25rem;
    width: 100%;
}
.product .box-container .box:hover .image img{
    transform: scale(1.1);
}

.product .box-container .box .image .icons{
    position: absolute;
    bottom:0; left: 0; right: 0;
    display: flex;
}
.product .box-container .box .image .icons a{
    height: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    width: 50%;
    background:var(--white);
    color: #fff;
}

.product .box-container .box .image .icons .cart-btn{
    border-left: 1rem solid #fff7;
    border-right: 1rem solid #fff7;
    width: 100%
}

.product .box-container .box .image .icons a:hover{
    background: #333;
}

.product .box-container .box .content{
    padding: 2rem;
    text-align: center;
}

.product .box-container .box .content h3{
    font-size: 2.5rem;
    color: #333;
}

.product .box-container .box .content .price{
    font-size: 2.5rem;
    color: #333;
    font-weight: bolder;
    padding-top: 1rem;
}

.product .box-container .box .content .price span{
    font-size: 1.5rem;
    color: #999999;
    font-weight: lighter;
    text-decoration: line-through;
}

    </style>
</head>
<body>
    <section class="product" id="product">
            <h1 class="heading">latest <span>product</span></h1>

            <div class="box-container">

            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img src="https://id-live.slatic.net/p/f18a2567983a809773c0ceec2b62288b.jpg" alt="" />
                    <div class="icons">
                         <a href="" class="fas fa-heart"></a>
                         <a href="" class="cart-btn">add to cart</a>
                         <a href="" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Cloth 1</h3>
                    <div class="price"> Rp500.000,00 <span>Rp550.000,00</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img src="https://i.pinimg.com/originals/43/8b/59/438b5946ed50d930c507cc323f412c8a.jpg" alt="" />
                    <div class="icons">
                         <a href="" class="fas fa-heart"></a>
                         <a href="" class="cart-btn">add to cart</a>
                         <a href="" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Cloth 2</h3>
                    <div class="price"> Rp500.000,00 <span>Rp550.000,00</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img src="https://i.pinimg.com/originals/43/8b/59/438b5946ed50d930c507cc323f412c8a.jpg" alt="" />
                    <div class="icons">
                         <a href="" class="fas fa-heart"></a>
                         <a href="" class="cart-btn">add to cart</a>
                         <a href="" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Cloth 3</h3>
                    <div class="price"> Rp500.000,00 <span>Rp550.000,00</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img src="https://i.pinimg.com/originals/43/8b/59/438b5946ed50d930c507cc323f412c8a.jpg" alt="" />
                    <div class="icons">
                         <a href="" class="fas fa-heart"></a>
                         <a href="" class="cart-btn">add to cart</a>
                         <a href="" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>Cloth 4</h3>
                    <div class="price"> Rp500.000,00 <span>Rp550.000,00</span></div>
                </div>
            </div>
    </section>

</body>
</html>
@include('layouts.footer')