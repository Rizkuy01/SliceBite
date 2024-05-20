document.addEventListener('DOMContentLoaded', function () {
    const cartItems = [];
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    let total = 0;
    
        addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            const productName = this.parentElement.previousElementSibling.querySelector('h3').innerText;
            const productPrice = parseFloat(this.getAttribute('data-price').replace('.', ''));
    
            cartItems.push({ name: productName, price: productPrice });
    
            const li = document.createElement('li');
            li.classList.add('list-group-item');
            li.innerText = `${productName} - Rp${productPrice}`;
            cartItemsList.appendChild(li);
    
            total += productPrice;
            cartTotal.innerText = total;
    
            // Save cart items to localStorage
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            localStorage.setItem('cartTotal', total);
        });
        });
    });

    // Setelah menambahkan produk ke keranjang
document.querySelector('.checkout').addEventListener('click', function() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems'));
    const cartTotal = localStorage.getItem('cartTotal');
    window.location.href = `transaction-form.php?cartItems=${encodeURIComponent(JSON.stringify(cartItems))}&cartTotal=${cartTotal}`;
});
    