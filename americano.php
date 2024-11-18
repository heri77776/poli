<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Americano.css">
    <script src="siiu.js" async></script>
    <title>americano</title>
</head>
<body>
    <header>
        <h1>INFORMACION DE CONTACTO</h1>
    </header>
    <section class="contenedor">
    
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Parasetamol</span>
               <img src="parasetamol.png" alt="" class="img-item">
                <span class="precio-item">$1500<br>El paracetamol, también conocido como acetaminofén o acetaminofeno o p-Acetilaminofenol, es un fármaco con propiedades analgésicas</span>
                 <button class="boton-item">Agregar al carrito</button>
     </div>
     <div class="item">
                 <span class="titulo-item">ASPIRINA</span>
                <img src="sisi.png" alt="" class="img-item">
                <span class="precio-item">$900<br>El ácido acetilsalicílico o AAS, conocido popularmente como aspirina, nombre de una marca que pasó al uso común</span>
                <button class="boton-item">Agregar al carrito</button>
     </div>
     <div class="item">
                <span class="titulo-item">anaglesicos</span>
                <img src="see.png" alt="" class="img-item">
                <span class="precio-item">$1000<br>Un medicamento es uno o más fármacos integrados en una forma farmacéutica, presentado para expendio</span>
                <button class="boton-item">Agregar al carrito</button>
     </div>
     <div class="item">
                 <span class="titulo-item">balon</span>
                <img src="aa.png" alt="" class="img-item">
                <span class="precio-item">$500  <br> El omeprazol es un inhibidor de la bomba de protones, que actúa sobre las células de la mucosa gástrica, inhibiendo hasta un 80%</span>
                <button class="boton-item">Agregar al carrito</button>
       </div>
       <div class="item">
                <span class="titulo-item">Salbutamol</span>
                <img src="pwe.png" alt="" class="img-item">
                <span class="precio-item">$78 </span>
                <button class="boton-item">Agregar al carrito</button>
           </div>
           <div class="item">
               <span class="titulo-item">hombreras</span>
               <img src="hombreras.png" alt="" class="img-item">
               <span class="precio-item">$2000</span>
               <button class="boton-item">Agregar al carrito</button>
           </div>
           <div class="item">
               <span class="titulo-item">Proteccion</span>
               <img src="proteccion.png" alt="" class="img-item">
               <span class="precio-item">$800</span>
               <button class="boton-item">Agregar al carrito</button>
           </div>
           <div class="item">
               <span class="titulo-item">bocal</span>
               <img src="bocal.png" alt="" class="img-item">
               <span class="precio-item">$250</span>
               <button class="boton-item">Agregar al carrito</button>
           </div>

           <div class="item">
               <span class="titulo-item">Cinta</span>
               <img src="cinta.png" alt="" class="img-item">
               <span class="precio-item">$200</span>
               <button class="boton-item">Agregar al carrito</button>
           </div>
           <div class="item">
               <span class="titulo-item">Rodilleras</span>
               <img src="rodilleras.png" alt="" class="img-item">
               <span class="precio-item">$800</span>
               <button class="boton-item">Agregar al carrito</button>
           </div>

   </div>                  
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
</body>
</html>