var AID;
var cart = {};
function initAuthor() {
    var hash = window.location.hash.substring(1);
    console.log(hash);
    $.post(
        "core.php",
        {
            "action" : "initAuthor",
            "ID" : hash
        },
        showAuthor
    );
}

function showAuthor(data) {
    data = JSON.parse(data);
    console.log(data);

    var out ='';
        out += '<div class="row" style="margin: 5% 10%;">';
        out += `<div class="col-4"><img style="height: 570px;" src ="${data.Photo}"></div>`;
        out += '<div style="color: black" class = "product-content col-6">';
        out += `<h2 class = "product-title">${data.Name}</h2>`;
        out += `<div class = "product-rating">Country: <span>${data.Country}</span></div>`;
        out += `<div class = "product-detail"><h2>Biography: </h2><p>${data.Biography}</p>`;
        out += '<div class = "social-links"><p>Share At: </p><a href = "#"><i class = "fab fa-facebook-f"></i></a><a href = "#"><i class = "fab fa-twitter"></i> </a><a href = "#"><i class = "fab fa-instagram"></i></a> <a href = "#"><i class = "fab fa-whatsapp"></i></a><a href = "#"><i class = "fab fa-pinterest"></i></a>';
        out += '</div>';
        out += '</div>';
        out += '</div>';
        out += '</div>';

                $('.author-out').html(out);
AID = data.ID;
  
}




$(document).ready(function () {
   initAuthor();
});




function AuthorBooks() {
    var hash = window.location.hash.substring(1);
    console.log(hash);
    $.post(
        "core.php",
        {
            "action" : "AuthorBooks",
            "ID" : hash
        },
        ShowAllBook
    );
}



function ShowAllBook(data) {
    data = JSON.parse(data);
    console.log(data);
    var out='';
    for (var AuthorID in data) {
            
         out += '<div class = "product col-3">';
         out += `<div class = "product-content"><div class = "product-img"><img style="height: 300px;" src = "${data[AuthorID].Poster}"" alt = ""></div>`;
         out += `<div class = "product-btns">`;
         out += `<button class = "add-to-cart-recssss btn-cart" data-id="${data[AuthorID].ISBN}"> Add to Cart </button>`;
         out += `</div></div>`;
         out += `<div class = "product-info">`;
         out += `<p><form action="perexodnik.php" method="post">`;
         out +=     `<input style="display:none;" type="text" name="isbn" value="${data[AuthorID].ISBN}">`;
         out +=     `<input style="display:none;" type="text" name="pageid" value="${data[AuthorID].ISBN}">`;
         out +=     `<input style="display:none;" type="text" name="bookid" value="${data[AuthorID].ISBN}">`;
         out +=     `<input style="background: none; border: none;" type="submit" value="${data[AuthorID].Title}">`;
         out +=     `</form></p>`;
         out += `<div class = "rating"><p>${Math.floor(data[AuthorID].showrating * 100) / 100}⭐</p></div><p class = "product-price">${data[AuthorID].Price}$</p></div>`;
         out += '</div>';
                          
   }

                       $('.allbooks-out').html(out);
                       $('.add-to-cart-recssss').on('click', addToCart);


}




$(document).ready(function () {
   AuthorBooks();
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