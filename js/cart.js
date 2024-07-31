/* 
function addToCart(name, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    const existingItem = cart.find(item => item.name === name);
    if (existingItem) {
        existingItem.quantity++;
        cart.push({ name, price: parseFloat(existingItem.price), quantity:  existingItem.quantity });
    } else {
        cart.push({ name, price: parseFloat(price), quantity: 1 });
    }

    updateLocalStorage(cart);
}

function updateLocalStorage(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
} */

function addToCart(name, price) {
debugger
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    const existingItem = cart.find(item => item.name === name);

    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ name, price: parseFloat(price), quantity: 1 });
    }

    updateLocalStorage(cart);
}

function updateLocalStorage(cart) {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function displayCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    console.log(cart);
}


function updateCart() {
    const cartElement = document.getElementById('cart-items');
    cartElement.innerHTML = '';

    let totalPrice = 0;
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    cart.forEach(item => {
        const li = document.createElement('li');
        li.innerHTML = `${item.name} - ${item.price.toFixed(2)} TND x ${item.quantity} 
            <button class="remove" data-name="${item.name}">Remove</button>`;
        cartElement.appendChild(li);
        totalPrice += item.price * item.quantity;
    });

    const totalPriceElement = document.getElementById('total-price');
    totalPriceElement.innerText = `Total: ${totalPrice.toFixed(2)} TND`;
}

function removeFromCart(name) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(item => item.name !== name);
    updateLocalStorage(cart);
    updateCart();
}

function clearCart() {
    localStorage.removeItem('cart');
    updateCart();
}

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.add button')) {
        document.querySelectorAll('.add button').forEach(button => {
            button.addEventListener('click', function() {
                const name = this.getAttribute('data-name');
                const price = this.getAttribute('data-price');
                addToCart(name, price);
            });
        });
    }

    if (document.querySelector('#cart-items')) {
        updateCart();
        document.getElementById('clear-cart').addEventListener('click', () => {
            clearCart();
        });

        document.getElementById('cart-items').addEventListener('click', function(event) {
            if (event.target.classList.contains('remove')) {
                const name = event.target.getAttribute('data-name');
                removeFromCart(name);
            }
        });
    }
});
