
    <?php 
    require_once 'include/header.php';

    require_once 'include/navbar.php';
    ?>



                <!-- start slider -->
                
                <section id="slider">
                    <div class="slideshow-container">
                            <div class="mySlides fade">
                                    <img src="assets/img/slid3.jpg" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                    <img src="assets/img/slid4.jpg" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                    <img src="assets/img/slid5.jpg" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                    <img src="assets/img/slid1.webp" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                    <img src="assets/img/slid2.webp" style="width:100%">
                            </div>
                            <div class="mySlides fade">
                                    <img src="assets/img/slid3.jpg" style="width:100%">
                            </div>
                
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                
                            <div style="text-align:center">
                                    <span class="dot" onclick="currentSlide(1)"></span> 
                                    <span class="dot" onclick="currentSlide(2)"></span> 
                                    <span class="dot" onclick="currentSlide(3)"></span>
                                    <span class="dot" onclick="currentSlide(4)"></span>  
                                    <span class="dot" onclick="currentSlide(5)"></span> 
                                    <span class="dot" onclick="currentSlide(6)"></span> 
                                </div>
                    </div>
                </section>
                
                
                <!-- end slider -->
                <!-- start pop up -->
                        <div class="container" id="model-container">
                        
                                <form action="" id="form">
                                        <button type="button" class="cancel" onclick="closeForm()">X</button>
                                    <h4>?????????? ????????????</h4>
        
                                    <div class="input-control">
                                        <input id="email" name="email" type="text" placeholder="???????????? ?????????????????? ???? ?????? ????????????">
                                
                                    </div>
                                    <div class="input-control">
                                        <input id="password"name="password" type="password" placeholder="???????? ????????????" >
                                        <span><a href="">??????????</a></span>
                                
                                    </div>
                                    <button type="submit">?????????? ????????????</button>
                                    <p>?????? ???????? ????????</p>
                                    <button type="submit" class="log-in" id="signup">?????????? ???????? ????????</button>
                            
                                </form>
                        </div>
            
            
                    
                    <div class="container" id="model-container2">
                            
                            <form action="" id="form">
                                    <button type="button" class="cancel" onclick="closeForm()">X</button>
                                <h4>?????????? ????????</h4>
                    
                                <div class="input-control">
                                    <div class="phone-no">
                                            <input id="phone" name="phone" type="text" placeholder="?????? ????????????">
                                            <select id="no." name="no.">
                                                    <option value="volvo">+9667</option>
                                                    <option value="saab">+9667</option>
                                                    <option value="fiat">+9667</option>
                                                    <option value="audi">+9667</option>
                                            </select>
                                    </div>
                            
                                        <p>?????? ???????? ???? ?????? ???????????? ???? ???????? ?????????? ????????</p>
                                </div>
                                <div class="input-control">
                                    <input  type="button" placeholder="?????????? ?????? ????????????">
                                </div>
                    

                    
                                <div class="input-control">
                                        <input id="username" name="username" type="text" placeholder="?????????? ??????????">
                                
                                    </div>
                    
                                    <div class="input-control">
                                            <input id="username" name="username" type="text" placeholder="?????? ??????????????">
                                    
                                    </div>
                    
                                    <div class="input-control">
                                                <input id="email" name="email" type="text" placeholder="???????????? ????????????????????"> 
                                        
                                    </div> 
                    
                                    <div class="input-control">
                                                <input id="email" name="email" type="text" placeholder="?????????? ???????????? ????????????????????">
                                        
                                    </div>
                                    <div class="input-control">
                                            <input id="password"name="password" type="password" placeholder="???????? ????????????">
                                    
                                    </div>
                            
                                        <div class="checkbox">
                                            <input type="checkbox" id="accept">
                                            <label> ?????????? ?????? ???????????? ????????????????</label>
                    
                                    </div>
                                    <div class="checkbox">
                                        
                                        <input type="checkbox" id="reg" >
                                        <label> ?????????????? ???????????????? ???????????? ????????????</label>
                                
                    
                                    </div>
                            
                                
                                    <div class="input-control">
                                    
                        
                                        <input type="button" placeholder="?????????? ????????" >
                                    </div>
                                
                                <p>
                                    ???????? ?????????? <a href="#" id="sign-in" >?????????? ????????????</a>
                                </p>
                        
                            </form>
                        </div>
                    
                    
                    <!-- end pop up -->
                
                <!-- start explore -->
                
                <div class="exlpore_container">
                    <h2>???????? ?????? ?????????? </h2>
                    <div class="explore_content">
                        <div class="explore_card">
                            <div class="icon">
                                    <a href=""> <i class="fa fa-cart-plus" id="i1"></i></a>
                            </div>
                            <h3>
                                ??????
                            </h3>
                        </div>
                        <div class="explore_card">
                                <div class="icon">
                                        <a href=""> <i class="fa fa-book" id="i2"></i></a>
                                </div>
                                <h3>
                                    ??????????
                                </h3>
                            </div>
                        <div class="explore_card">
                                    <div class="icon">
                                            <a href=""> <i class="fa fa-pen" id="i3"></i></a>
                                    </div>
                                    <h3>
                                        ??????????
                                    </h3>
                        </div>
                        <div class="explore_card">
                                        <div class="icon">
                                                <a href=""> <i class="fa fa-car" id="i4"></i></a>
                                        </div>
                                        <h3>
                                            ????????????
                                        </h3>
                        </div>
                        <div class="explore_card">
                                            <div class="icon">
                                                    <a href=""> <i class="fa fa-bus" id="i5"></i></a>
                                            </div>
                                            <h3>
                                                ??????????
                                            </h3>
                        </div>
                        <div class="explore_card">
                                <div class="icon">
                                        <a href=""> <i class="fa fa-heart" id="i6"></i></a>
                                </div>
                                <h3>
                                    ??????
                                </h3>
                        </div>
                        <div class="explore_card">
                                <div class="icon">
                                        <a href=""> <i class="fa fa-star" id="i7"></i></a>
                                </div>
                                <h3>
                                    ????????????
                                </h3>
                        </div>
                        <div class="explore_card">
                                <div class="icon">
                                        <a href=""> <i class="fa fa-cart-plus" id="i8"></i></a>
                                </div>
                                <h3>
                                    ??????????
                                </h3>
                        </div>
                        
                
                    </div>
                </div>
                
                
                <!-- end explore -->
                <!-- start orders -->
                
                
                    <!-- first row -->
                
                <div class="order_container">
                    <div class="order_header">
                            <h2> ???????????? ??????????????</h2>
                            <a href="category.html">?????? ????????</a>
                
                    </div>
                    
                    <div class="order_content">
                        <a href="details.html">
                                <div class="product_card">
                                        <div class="remain_timer">
                                                <span id="days"></span>
                                                days/<span id="hours"></span>
                                                h:<span id="minutes"></span>
                                                m:<span id="seconds"></span>s
                                        </div>
                                    <img src="img/book.jpg" alt="Denim Jeans">
                                    <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                                                        <p class="price">$19.99</p>
                                    <h6>???????? ??????????????</h6>
                                    <h5>?????? ????????:?????? ????????????</h5>
                                    <div class="product_icons">
                                        <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                        <a href="#" id="add" onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                        <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                
                        
                                    </div>
                        
                        
                        
                                </div>
                        </a>
                        <a href="details.html"> 
                        <div class="product_card">
                                <div class="remain_timer">
                                        <span id="days1"></span>
                                        days/<span id="hours1"></span>
                                        h:<span id="minutes1"></span>
                                        m:<span id="seconds1"></span>s
                                </div>
                            <img src="img/book.jpg" alt="Denim Jeans">
                            <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                            
                            <p class="price">$19.99</p>
                            <h6>???????? ??????????????</h6>
                            <h5>?????? ????????:?????? ????????????</h5>
                            <div class="product_icons">
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                
                
                            </div>
                
                
                
                        </div>
                        </a>
                
                
                        <a href="details.html">
                            <div class="product_card">
                                    <div class="remain_timer">
                                            <span id="days2"></span>
                                            days/<span id="hours2"></span>
                                            h:<span id="minutes2"></span>
                                            m:<span id="seconds2"></span>s
                                    </div>
                                <img src="img/book.jpg" alt="Denim Jeans">
                                <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                                
                                <p class="price">$19.99</p>
                                <h6>???????? ??????????????</h6>
                                <h5>?????? ????????:?????? ????????????</h5>
                                <div class="product_icons">
                                    <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                    <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                    <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                
                
                                </div>
                
                
                
                            </div>
                </a>
                
                <a href="details.html">
                    <div class="product_card">
                            <div class="remain_timer">
                                    <span id="days3"></span>
                                    days/<span id="hours3"></span>
                                    h:<span id="minutes3"></span>
                                    m:<span id="seconds3"></span>s
                            </div>
                        <img src="img/book.jpg" alt="Denim Jeans">
                        <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                        
                        <p class="price">$19.99</p>
                        <h6>???????? ??????????????</h6>
                        <h5>?????? ????????:?????? ????????????</h5>
                        <div class="product_icons">
                            <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                            <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                            <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                
                
                        </div>
                
                
                
                    </div>
                </a>
                
                    
                
                </div>
                
                
                </div>
                
                <!-- second row -->
                <div class="order">
                
                </div>
                <div class="order_container">
                        <div class="order_header">
                                <h2>?????????? ??????????????</h2>
                                <a href="category.html">?????? ????????</a>
                    
                        </div>
                        
                        <div class="order_content">
                                <a href="details.html">
                                    <div class="product_card">
                                        <img src="img/book.jpg" alt="Denim Jeans">
                                        <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                                        
                                        <p class="price">$19.99</p>
                                        <h6>???????? ??????????????</h6>
                                        <h5>?????? ????????:?????? ????????????</h5>
                                        <div class="product_icons">
                                            <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                            <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                            <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                    
                            
                                        </div>
                            
                            
                            
                                    </div>
                    
                    </a>
                    <a href="details.html">
                            <div class="product_card">
                                <img src="img/book.jpg" alt="Denim Jeans">
                                <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                                
                                <p class="price">$19.99</p>
                                <h6>???????? ??????????????</h6>
                                <h5>?????? ????????:?????? ????????????</h5>
                                <div class="product_icons">
                                    <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                    <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                    <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                    
                    
                                </div>
                    
                    
                    
                            </div>
                    
                    
                    </a>
                    <a href="details.html">
                        <div class="product_card">
                            <img src="img/book.jpg" alt="Denim Jeans">
                            <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                            
                            <p class="price">$19.99</p>
                            <h6>???????? ??????????????</h6>
                            <h5>?????? ????????:?????? ????????????</h5>
                            <div class="product_icons">
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                    
                    
                            </div>
                    
                    
                    
                        </div>
                    
                    
                    </a>
                    <a href="details.html">
                        <div class="product_card">
                            <img src="img/book.jpg" alt="Denim Jeans">
                            <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                            
                            <p class="price">$19.99</p>
                            <h6>???????? ??????????????</h6>
                            <h5>?????? ????????:?????? ????????????</h5>
                            <div class="product_icons">
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                    
                    
                            </div>
                    
                    
                    
                        </div>
                    
                    </a>
                        
                    
                    </div>
                    
                    
                    </div>
                
                
                <!-- third row -->
                <div class="order_container">
                        <div class="order_header">
                                <h2>?????????? ????????????????????</h2>
                                <a href="category.html">?????? ????????</a>
                    
                        </div>
                        
                        <div class="order_content">
                                <a href="details.html">
                                    <div class="product_card">
                                        <img src="img/book.jpg" alt="Denim Jeans">
                                    
                                        <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                                        
                                        <p class="price">$19.99</p>
                                        <h6>???????? ??????????????</h6>
                                        <h5>?????? ????????:?????? ????????????</h5>
                                        <div class="product_icons">
                                            <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                            <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                            <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                    
                            
                                        </div>
                            
                            
                            
                                    </div>
                                </a>
                                <a href="details.html">
                    
                                        <div class="product_card">
                                            <img src="img/book.jpg" alt="Denim Jeans">
                                            <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                                            
                                            <p class="price">$19.99</p>
                                            <h6>???????? ??????????????</h6>
                                            <h5>?????? ????????:?????? ????????????</h5>
                                            <div class="product_icons">
                                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                                <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                
                                
                                            </div>
                                
                                
                                
                                        </div>
                                </a>
                                <a href="details.html">
                    
                        <div class="product_card">
                            <img src="img/book.jpg" alt="Denim Jeans">
                            <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                            
                            <p class="price">$19.99</p>
                            <h6>???????? ??????????????</h6>
                            <h5>?????? ????????:?????? ????????????</h5>
                            <div class="product_icons">
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                    
                    
                            </div>
                    
                    
                    
                        </div>
                    
                    
                    </a>
                    <a href="details.html">
                        <div class="product_card">
                            <img src="img/book.jpg" alt="Denim Jeans">
                            <h3>???????? ????????????????<i class="fa fa-book-reader"></i></h3>
                            
                            <p class="price">$19.99</p>
                            <h6>???????? ??????????????</h6>
                            <h5>?????? ????????:?????? ????????????</h5>
                            <div class="product_icons">
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                                <a href=""  onclick="clickCounter()" ><img src="img/svg/svgexport-21.svg" alt=""></a>
                                <a href=""><img src="img/svg/svgexport-55.svg" alt=""></a>
                    
                    
                            </div>
                    
                    
                    
                        </div>
                    
                    
                    </a>
                    
                    </div>
                    
                    
                    </div>


    <?php 
    require_once 'include/footer.php';
    ?>
                

</body>
</html>