@include('navigation.nav-bar')
    <section class="intro-info">
        <div class="info">
            <h1>ELEVATE YOUR GAME</h1>
            <br>
            <p>Unlock peak performance with our cutting-edge <br> 
                sportswear collection. Be the best version of yourself
            </p> <br>
            <button type="button" class="btn btn-light"> <a href="{{ route('products') }}">VIEW PRODUCTS</a></button>
        </div>
    </section>
    
    <div class="image-intro"></div>


    <section class="scroll-products">
        <h2>SKINNY FIT</h2>
            <div class="scroll" id="skinnyFitSlideshow">
                <div class="product-scroll"> <img src="../Images/1.jpg" alt="green set of two"> </div>
                <div class="product-scroll"> <img src="../Images/2.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/3.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/4.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/5.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/6.jpg" alt="blue set of two"> </div>
            </div>

        <h2>SIZE PLUS FIT</h2>
            <div class="scroll" id="sizePlusFitSlideshow">
                <div class="product-scroll"> <img src="../Images/p1.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/p2.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/p3.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/8.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/p4.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/p5.jpg" alt="blue set of two"> </div>
            </div>
        
        <h2>NEW IN</h2>
            <div class="scroll" id="newInSlideshow">
                <div class="product-scroll"> <img src="../Images/n1.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/n2.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/n3.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/n4.jpg" alt="blue set of two"> </div>
                <div class="product-scroll"> <img src="../Images/n5.jpg" alt="blue set of two"> </div>
            </div>
     
    </section>
       
@include('navigation.footer')