<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AutoToken</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <style>
        @font-face {
    font-family: "fuente";
    src: url("./fuente/Jura/Jura-VariableFont_wght.ttf");
}

body {
    background-image: url("imagenes/utilidades/fondo4.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: #000000;
    height: 100vh;
    user-select: none;
}
.bg-blanco{
    background-color: #f3ede6;
}
.bg-negro{
    background-color: #232323;
}
.bg-verde{
    background-color: #25af4f;
}
.img_dapps{
    height: 20vh;
}
P{
    font-family: "fuente";
    color: #ebf2f7;
    font-size: 25px;
}
h1{
    font-family: "fuente";
    color: #497c9e;
}
.efecto{
    animation-duration: 3s;
    color: rgba(255, 255, 255, 0);
    animation-name: slidein;
    animation-iteration-count: infinite;
    color:#74afd6 ;
    margin-left: auto; 
    margin-right: auto;
    width: 1vw;
}
@keyframes slidein {  
        0% { margin-right: 20vw;}
        25% {margin-right: 45vw; }
        50% {margin-right: 20vw; }
        75% {margin-right: 45vw; }
        100% {margin-right: 20vw; }
  }
.inicio{
    opacity:100%;
    animation-duration: 2s;
    animation-name: slidein2;
}
@keyframes slidein2 {  
    
    from {
        opacity:0%;

    }
    to {
        opacity:100%;
    }
}
h2{
    font-family: "fuente";
    font-size: 45px!important;
    color: #c6ddec;
    box-shadow:0px 7px 2px -5px #497c9e4b;
    padding-bottom: 5vh;
}
h5{
    font-family: "fuente";
    color: #dae7f0;
}
a{
    font-family: "fuente";
    font-weight: 600;
}
.textox{
    color:#f3f5f7;
    font-family: "fuente";
    font-weight: 600;
}
.navegador{
    font-family: "fuente";
    position: sticky; 
    top:0px; 
    z-index: 10;
}
.footer{
    position: sticky; 
    bottom:0px; 
    z-index: 10;
}
    .botones{
        text-decoration: none;
        color:#f3f5f7;
        border-radius: 3px;
        transition-duration: 0.2s;
        
    }
    
    .botones:hover{
        color:#f3f5f7;
        box-shadow:0px 7px 2px -5px #497c9e;
        border-radius: 50px;
    }
    .botones2{
        text-decoration: none;
        color:#f3f5f7;
        border-radius: 3px;
        transition-duration: 0.2s;
        background-color:#5eb5f031;
        border-radius: 6px;
    }
    .botones2:hover{
        color:#f3f5f7;
        box-shadow:0px 0px 2px 2px #497c9e;
        background-color: #282f3533;
        
    }
.img_redes{
    height: 10vh!important;
    border-radius: 6px;
    width: 100%;
}
.bordes{
    /*box-shadow:inset 0px 0px 10px -2px #497c9e;
    background-color: #497c9e15;*/
    box-shadow:inset 7px -7px 2px -5px #497c9e4b;
    border-radius: 6px;
    margin-bottom: 5vh;
    transition-duration: 1s;
}
.bordes:hover{
    /*box-shadow:inset 0px 0px 10px -2px #497c9e;
    background-color: #497c9e15;*/
    box-shadow:inset 7px -7px 2px -5px #497c9e4b;
    background-color: rgba(0, 0, 0, 0.459);
}
.bordes_redes{
    box-shadow: 0px 4px 2px 2px #497c9e4b;
    border-radius: 6px;
    margin-bottom: 5vh;
    transition-duration: 1s;
    background-color: #497c9e15;
}
.margenbot{
    margin-bottom: 20vh;
}

.fadeTop {
    opacity: 0; 
    transform: translate(0, 10vh);
    transition: all 1s;
  }
.visible {
    opacity: 1;
    transform: translate(0, 0);
  }
  .imgs_redes{
    border-radius:100px; 
    box-shadow: 0px 0px 2px 2px #000000ea; 
    height: 3vh;
    margin-bottom: 1vh;
    -webkit-filter: invert(100%); 
    background-color:rgba(255, 255, 255, 0.103);
    filter: invert(100%);
  }
  .resaltar{
    color: #6ca8cf;
    font-weight: 600;
    text-shadow: 0px 0px 1px #6ca8cf, 0px 0px 1px #6ca8cf, 0px 0px 1px #6ca8cf;
  }
  .volver{
    filter: invert(100%);
    -webkit-filter: invert(100%); 
    height: 2.5vh;
  }
  .input_text{
    font-family: "fuente";
    color:#f3f5f7;
    outline: none;
    padding-left: 4px;
    border-radius: 6px;
    transition-duration: 0.2s;
    background-color:#5eb5f031;
    border: none;
  }
  .input_text::placeholder{
    color:#f3f5f7;
    text-align: center;
  }
    </style>
    <div class="container-fluid">
        <div class="navegador row py-3 px-2">
            <div class="col-2 p-0">
                <img class="img-fluid" style="height: 6vh; border-radius: 6px;" src="./imagenes/utilidades/logo2.jpg" alt="">
            </div>
            <div class="col-10 p-0" style="text-align:right">
                <a href="#" class="p-2 m-1 botones">Home</a>
                <a onclick="alert('Coming soon...')" href="" class="p-2 m-1 botones">Buy Now</a>
                <a onclick="alert('Coming soon...')" href="" class="p-2 m-1 botones">Staking $ATK</a>
                <a href="./dao.php" class="p-2 m-1 botones">DAO</a>
                <a href="https://app.gitbook.com/s/MoEs8cUtDr5DHFeHvj9H/" class="p-2 m-1 botones">Whitepaper</a>
                <a onclick="Connect()" class="p-2 m-1 botones2"name="meta" id="meta">Log in</a>
            </div>
        </div>
        <div class="row" style="margin-top: 37vh;">
            <div class="col-2"></div>
            <div class="col-8 text-center text-light"><!--Inicio Contenido-->

            <section class="inicio">
                <h1 style="margin-bottom: 2vh;">AutoToken Ecosystem</h1>
                <hr class="efecto">
                <h5 style="margin-bottom: 36vh;">We are a blockchain ecosystem with strong and innovative<br>fundamentals. Our main objective is to grant the<br>highest possible utility to the<br>$ATK token.</h5>
            </section>

            <section id="scroll-content" class="fadeTop">
                <h2 class="mb-5">How to be part of the AutoToken</h2>
                <div class="row margenbot"><!--ICO-->

                    <div class="col bordes py-4 px-3">
                        <p>Participate in the first <span class="resaltar">Airdrop</span> where you can get $ATK!</p>
                        <a href="https://twitter.com/auto_token/status/1466706425250463747" target="blank_" class="p-2 my-4 botones2">Take part</a>
                    </div>

                    <div class="col-1"></div>

                    <div class="col bordes py-4 px-3">
                        <section id="w1" style="display:block;">
                            <p>Enter the <span class="resaltar">Whitelist</span> to participate in the pre-sale of $ATK</p>
                            <a onclick="whitelist()" class="p-2 my-4 botones2">Get in</a>
                        </section>

                        <section id="w2" style="display: none;">
                            <div class="row">
                                <div class="col-12">
                                    <p>To access the Pre-sale whitelist<br>maximum <span class="resaltar">5 BNB</span> per addresses <p>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 2vh;">
                                
                                    <div class="col">
                                        <p>Free</p>
                                        <h5 class="mb-4">$ATK price: <span class="resaltar">0,0005$</span></h5>
                                        <form name="wallet_free" action="./phps/walletfree.php" method="post">
                                            <input id="wallet_free" name="wallet_free" placeholder="Your wallet" class="input_text" type="text" value="">
                                            <input type="submit" value="Go" class="botones2 my-3" style=" border: none;">
                                        </form>
                                    </div>
                                    <div class="col">
                                        <p>0.035 BNB</p>
                                        <h5 class="mb-4">$ATK price: <span class="resaltar">0,0001$</span></h5>
                                        <form name="wallet_pago" action="./phps/walletpago.php" method="post">
                                            <input id="wallet_pago" name="wallet_pago" placeholder="Your wallet" class="input_text" type="text" value="">
                                            <input onclick="pagarBNB()" type="button" value="Buy" class="botones2 my-3" style=" border: none;">
                                        </form>
                                    </div>

                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <a onclick="cerrar_whitelist()" class="py-1 px-2 botones2" style="margin-top: 2vh;"><span class="textox">Back</span></a>
                                </div>
                                <div class="col-6">
                                    
                                </div>
                                <div class="col-3">
                                    <a class="py-1 px-2 botones2" style="margin-top: 2vh;"><span class="textox">Info</span></a>
                                </div>
                            </div>
                        </section>
                                
                    </div>
                </div>
            </section>

                <section id="scroll-content4" class="fadeTop">
                    <div class="row"><!--DAPPS-->
                        <h2>Our Dapps</h2>
                        <p class="my-5">The $ ATK token provides liquidity and is burned<br> by the Dapps of the ecosystem.</p>
                        <div class="col pb-5">
                            <p>AutoCash</p>
                            <h5>DeFi</h5>
                            <img class="img_dapps my-4" src="./imagenes/utilidades/safe-box.png" alt="">
                            <div class="col"><a href="" class="p-2 my-4 botones2">17/12/2021</a></div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col pb-5">
                            <p>AutoMarket</p>
                            <h5>PWC</h5>
                            <img class="img_dapps my-4" src="./imagenes/utilidades/transaction.png" alt="">
                            <div class="col"><a href="" class="p-2 my-4 botones2">Q4 2021</a></div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col pb-5">
                            <p>AutoTurf</p>
                            <h5>S2E</h5>
                            <img class="img_dapps my-4" src="./imagenes/utilidades/searching.png" alt="">
                            <div class="col"><a href="" class="p-2 my-4 botones2">Coming soon...</a></div>
                        </div>
                    </div>
                    <div class="row margenbot">
                        <div class="col pb-5">
                            <p>AutoSocial</p>
                            <h5>Metaverse</h5>
                            <img class="img_dapps my-4" src="./imagenes/utilidades/credit-card.png" alt="">
                            <div class="col"><a href="" class="p-2 my-4 botones2">Coming soon...</a></div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col pb-5">
                            <p>Autohoot</p>
                            <h5>P2E</h5>
                            <img class="img_dapps my-4" src="./imagenes/utilidades/check.png" alt="">
                            <div class="col"><a href="" class="p-2 my-4 botones2">Coming soon...</a></div>
                        </div>
                        <div class="col-1"></div>
                        <div class="col pb-5">
                            <p>Industry AutoMation</p>
                            <h5>P2E</h5>
                            <img class="img_dapps my-4" src="./imagenes/utilidades/balance.png" alt="">
                            <div class="col"><a href="" class="p-2 my-4 botones2">Coming soon...</a></div>
                        </div>
                    </div>
                </section>

                <section id="scroll-content3" class="fadeTop">
                    <div class="row bordes margenbot"><!--ROADMAP-->
                        <h2>Coming soon...</h2>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </section>
    

                <section id="scroll-content5" class="fadeTop">
                    <div class="row bordes margenbot"><!--ROADMAP-->
                        <h2>Coming soon...</h2>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </section>

                <section id="scroll-content6" class="fadeTop">
                    <div class="row bordes margenbot"><!--TOKENOMICS-->
                        <h2>Coming soon...</h2>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </section>

                <section id="scroll-content7" class="fadeTop">
                    <div class="row bordes margenbot"><!--ROADMAP-->
                        <h2>Coming soon...</h2>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </section>

                <section id="scroll-content8" class="fadeTop">
                    <div class="row margenbot"><!--RRSS-->
                        <div class="col"></div>
                        <div class="col">
                            <div class="row">
                                <div class="col"></div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="scroll-content9" class="fadeTop">
                    <div class="row bordes margenbot"><!--ROADMAP-->
                        <h2>Coming soon...</h2>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </section>

            </div><!--Fin Contenido-->
            <div class="col-2"></div>
        </div>

    </div>

   

    <div class="container-fluid row footer">
        <div class="col-3 p-0">
            <img src="./imagenes/utilidades/bnb.png" class="mx-2" style="height: 3vh;" alt="">
            <!--<img src="./imagenes/utilidades/ether.png" class="mx-2" style="height: 3vh;" alt="">
            <img src="./imagenes/utilidades/solana_.png" class="mx-2" style="height: 3vh;" alt="">-->
        </div>
        <div class="col-8"></div>
        <div class="col-1" style="text-align:right;">
            <div class="row">
                <div class="col" style="margin-bottom: 1vh;"><a href="https://twitter.com/auto_token"><img src="./imagenes/utilidades/twitter_.png" class="imgs_redes" alt=""></a></div>
                <div class="col" style="margin-bottom: 1vh;"><a href="https://t.me/autotoken_group"><img src="./imagenes/utilidades/telegram_.png" class="imgs_redes"  alt=""></a></div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script>
    <script>
    
    
        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });

        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content3');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });

        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content4');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });
        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content5');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });

        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content6');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });
        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content7');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });

        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content8');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });

        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content9');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });

        window.addEventListener('scroll', function()  {
        let element = document.getElementById('scroll-content10');
        let screenSize = window.innerHeight;
        
            if(element.getBoundingClientRect().top < screenSize) {
                element.classList.add('visible');
            } else {
                element.classList.remove('visible');
            }
        });

        function whitelist(){
            document.getElementById('w1').style = "display:none;";
            document.getElementById('w2').style = "display:block;";
        }
        function cerrar_whitelist(){
            document.getElementById('w2').style = "display:none;";
            document.getElementById('w1').style = "display:block;";
        }
//------------------------------------------Web3


window.addEventListener('load', function() {
    document.wallet_free.wallet_free.value = ethereum.selectedAddress;
    document.wallet_pago.wallet_pago.value = ethereum.selectedAddress;
    if(ethereum.selectedAddress){
        document.getElementById("meta").innerHTML = ethereum.selectedAddress;   
    }
    
})
async function Connect(){
    
    if(window.ethereum.chainId=='0x38'){
        if(ethereum.selectedAddress){
            document.getElementById("meta").innerHTML = ethereum.selectedAddress.substr(0,5);
            document.wallet_free.wallet_free.value = ethereum.selectedAddress;
            document.wallet_pago.wallet_pago.value = ethereum.selectedAddress;
        }else{
            await window.ethereum.enable();
            web3 = new Web3(window.ethereum);
            document.getElementById("meta").innerHTML = ethereum.selectedAddress.substr(0,5);
            document.wallet_free.wallet_free.value = ethereum.selectedAddress;
            document.wallet_pago.wallet_pago.value = ethereum.selectedAddress;
        }
    }else if(window.ethereum.chainId){
        document.getElementById("meta").innerHTML = "Wrong network";
        document.wallet_free.wallet_free.value = "Wrong network";
        document.wallet_pago.wallet_pago.value = "Wrong network";
        alert('We currently only support binance smart chain, make sure you choose the correct network');
    }else{
        document.getElementById("meta").innerHTML = "Need Metamask";
        alert("you don't have metamask installed")
    }
}
async function pagarBNB(){
    web3 = new Web3(window.ethereum);
    cantidadQueManda = 35000000000000000;
    web3.eth.sendTransaction({from: ethereum.selectedAddress, to: '0xeDe2E77b8DbA16769BAcA9F53e01d97ba30FC0E8', value: cantidadQueManda.toString()})

    //minimo bnb 10000000000000000 = 0.01 BNB
    //minimo bnb 35000000000000000 = 0.035 BNB
    //maximo bnb 5000000000000000000 = 5 BNB
}


      
    </script>
 
    
</body>
</html>

