var cart = {};

const valute = {
    USD: ""
}
 
axios.get("https://www.cbr-xml-daily.ru/daily_json.js")
    .then((res) => {
        valute.USD = res.data.Valute.USD.Value
    })

function init() {
    var hash = window.location.hash.substring(1);
    console.log(hash);
    $.post(
        "core.php",
        {
            "action" : "loadGoods"
        },
        showCart
    );
}

function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        init();
        }
    else {
        $('.main-cart').html('<h2>The basket is empty!</h2><br><br><br><br><br>');
    }
}
var totalsumma = 0.00000000; 
var totalsumma2 = 0.00000000; 

function showCart(data) {   

    if (!isEmpty(cart)) {
        $('.main-cart').html('<h2>The basket is empty!</h2><br><br><br><br><br>');
    }

    else {
    	data = JSON.parse(data);
  		console.log(data);
        var out = '';
        out +='<div class="small-container cart-page"><table><tr><th>Product</th><th>Quantity</th><th>Actions</th></tr>';
            for (var ISBN in cart) {
                        var totalprice = data[ISBN].Price;
                        var lolvo = cart[ISBN];
                        var summa = totalprice*lolvo;
                        
                out += '<tr><td>';
                out += `<div class="cart-info"><img class="imagesss" src="${data[ISBN].Poster}" >`;
                out += `<div class=""><p>${data[ISBN].Title}</p><small>${data[ISBN].Price} $</small><br><small>`
                out += `<form action="perexodnik.php" method="post">`;
                out +=     `<input style="display:none;" type="text" name="isbn" value="${data[ISBN].ISBN}">`;
                out +=     `<input style="background: none; border: none; width: 100px; color: orange;" type="submit" value="view the book">`;
                out +=     `</form>`;
                out += `</small></div>`;
                out += '</div></td>';
                out += `<td><button value="Refresh Page" onClick="window.location.reload();" style ="width: 40px; height: 30px; text-align: center;">${cart[ISBN]}</button><p>Subtotal: ${summa.toFixed(2)}$</p></td> <td><button value="Refresh Page" onClick="window.location.reload();" style ="width: 40px; height: 30px; text-align: center;" class="minus" data-art="${ISBN}">-</button><button value="Refresh Page" onClick="window.location.reload();" style ="width: 40px; height: 30px; text-align: center;" class="plus" data-art="${ISBN}">+</button><button  value="Refresh Page" onClick="window.location.reload();" style ="width: 40px; height: 30px; text-align: center;" class="delete" data-id="${ISBN}">x</button></td>`;
                out += '</tr>';
                totalsumma += summa;

            }

            totalsumma = parseFloat(totalsumma);
            totalsumma2 = totalsumma;
            totalsumma2+=1;
            out += '</table>';
            out += `<div class="total-cart"><table><tr><td>Subtotal</td><td>${totalsumma.toFixed(2)}$</td></tr><tr><td>Tax</td><td>1$</td> </tr> <tr><td>Total</td> <td>${totalsumma2.toFixed(2)}$</td></tr></table></div>`;
            out += `<form style="text-align: right; padding-right: 15px; " method="POST" action="https://money.yandex.ru/quickpay/confirm.xml"><input type="hidden" name="receiver" value="4100116848506619"><input type="hidden" name="formcomment" value="Проект «Трансфлюкатор»: модуль С-24"><input type="hidden" name="short-dest" value=" Проект «Трансфлюкатор»: модуль С-24"><input type="hidden" name="label" value="$order_id"><input type="hidden" name="quickpay-form" value="donate"><input type="hidden" name="targets" value="Buying your books"><input type="hidden" name="sum" value="${totalsumma2.toFixed(2) * valute.USD}" data-type="number" ><input type="hidden" name="need-fio" value="true"> <input type="hidden" name="need-email" value="true" ><input type="hidden" name="need-phone" value="false"><input type="hidden" name="need-address" value="false"><input type="radio" name="paymentType" value="PC">ЮMoney</input><input type="radio" name="paymentType" value="AC">By bank card</input><button type="submit" class="btn btn-warning" name="submit-button" value="Перевести">Transfer</button></form>`;
            $('.main-cart').html(out);
            $('.plus').on('click', plusGoods);
            $('.minus').on('click', minusGoods);
            $('.delete').on('click', deleteGoods);

      
    }

}


function plusGoods() {
        var id = $(this).attr('data-art');
        cart[id]++;
        saveCart(); 
        init();
    }

    function minusGoods() {
        var id = $(this).attr('data-art');
        if (cart[id] > 1) {
            cart[id]--;

        }
        else {
            delete cart[id];
        }

        saveCart();
        init();
    }

    function deleteGoods() {
        var id = $(this).attr('data-id');
        delete cart[id];
        saveCart();
        init();
    }


function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function isEmpty(object) {
    for (var AuthorID in object)
    if (object.hasOwnProperty(AuthorID)) return true;
    return false;
}


$(document).ready(function () {
   loadCart();
});