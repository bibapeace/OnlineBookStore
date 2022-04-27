var genre;
var genree;
var title;
var number;
var cart = {};
var ISBN;

function init() {
    var hash = window.location.hash.substring(1);
    console.log(hash);
    $.post(
        "core.php",
        {
            "action" : "loadSingleTovar",
            "ISBN" : hash
        },
        showOneTovar
    );
}

function showOneTovar(data) {
    data = JSON.parse(data);
    console.log(data);

    var out='';
        out += '<div class="row" style="margin: 5% 10%;">';
        out += `<div class="col-6"><img style="height: 835px;" src ="${data.Poster}"></div>`;
        out += '<div style="color: black" class = "product-content col-6">';
        out += `<h2 class = "product-title">${data.Title}</h2>`;
        out += `<div class = "product-rating">Rating: <span>${Math.floor(data.showrating * 100) / 100}⭐</span></div>`;
        out += `<div class = "product-price">Price: <span>${data.Price}$</span></div>`;
        out += `<div class = "product-detail"><h2>about this item: </h2><p>${data.Description}</p><ul><li>Language: <span>${data.Language}</span></li><li>Publisher: <span>${data.Publisher}</span></li><li>Genre: <span>${data.genre1}, ${data.genre2}, ${data.genre3}</span></li><li>Available: <span>In Stock</span></li><li>Shipping Fee: <span>Free</span></li></ul></div>`;
        out += `<div class = "purchase-info"><button class = "add-to-cart btn" data-id="${data.ISBN}">  Add to Cart </button></div>`;
        out += '<div class = "social-links"><p>Share At: </p><a href = "#"><i class = "fab fa-facebook-f"></i></a><a href = "#"><i class = "fab fa-twitter"></i> </a><a href = "#"><i class = "fab fa-instagram"></i></a> <a href = "#"><i class = "fab fa-whatsapp"></i></a><a href = "#"><i class = "fab fa-pinterest"></i></a>';
        out += '</div>';
        out += '</div>';
        out += '</div>';
        out += '</div>';

    genree = data.genre2;
    genre = data.genre1;
    title = data.Title;
    ISBN = data.ISBN;


    $('.goods-out').html(out);
    $('.add-to-cart').on('click', addToCart);

        var outs='';
        outs += `<input style="display: none;" type = "text" name = "isbn" value ="${data.ISBN}">`;
        $('.input-out').html(outs); 



   



        
}




$(document).ready(function () {
   init();
   loadCart();
});




function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
number = getRandomInt(1, 25);


function init2() {
    var hash = window.location.hash.substring(1);
    console.log(hash);
    $.post(
        "core.php",
        {
            "action" : "init2"
        },
        rec
    );
}

var c = 0;


function rec(data) {
    data = JSON.parse(data);
    console.log(data);
    var out='';
    for (var genre1 in data) {
            if(genre==data[genre1].genre1 || genree==data[genre1].genre2 || genree==data[genre1].genre1 || genre==data[genre1].genre2){
                if (title==data[genre1].Title){
                    continue;
                } 
                out += '<div class = "product col-3">';
                out += `<div class = "product-content"><div class = "product-img"><img style="height: 300px;" src = "${data[genre1].Poster}"" alt = ""></div>`;
                out += `<div class = "product-btns">`;
                out += `<button class = "add-to-cart-rec btn-cart" data-id="${data[genre1].ISBN}">  Add to Cart </button>`;
                out += `</div></div>`;
                out += `<div class = "product-info">`;
                out += `<p><form action="perexodnik.php" method="post">`;
                out +=     `<input style="display:none;" type="text" name="isbn" value="${data[genre1].ISBN}">`;
                out +=     `<input style="background: none; border: none;" type="submit" value="${data[genre1].Title}">`;
                out +=     `</form></p>`;
                out += `<div class = "rating"><p>${Math.floor(data[genre1].showrating * 100) / 100}⭐</p></div><p class = "product-price">${data[genre1].Price}$</p></div>`;
                out += '</div>';
                

              c++;
               if (c==4) {
                  break;
                } else {
                    '<p>Sorry but there are no books with a similar genre</p>'
                }
             
        }

        
       
   }

        $('.recommendation').html(out);
                       $('.add-to-cart-rec').on('click', addToCart);


}




$(document).ready(function () {
   init2();
   loadCart();
});



function addToCart(){
    var id = $(this).attr('data-id');
 

    if(cart[id]==undefined){
        cart[id]=1;
    }
    else{
        cart[id]++;
    }
    saveCart();
}

function saveCart(){
    localStorage.setItem('cart', JSON.stringify(cart));
}

function loadCart(){
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
    }
}