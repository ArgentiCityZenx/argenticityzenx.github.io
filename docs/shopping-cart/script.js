let cart = [];

const addToCart = (product, price) => {
    cart.push({ product, price });
    displayCart();
}

const removeFromCart = (index) => {
    cart.splice(index, 1);
    displayCart();
}

const displayCart = () => {
    const cartItems = document.getElementById('cartItems');
    const cartTotal = document.getElementById('cartTotal');
    cartItems.innerHTML = '';
    if (cart.length === 0) {
        cartItems.innerHTML = '<p>The cart is empty.</p>';
        cartTotal.textContent = 'Total: $0';
    } else {
        let total = 0;
        cart.forEach((item, index) => {
            total += item.price;
            cartItems.innerHTML += `
                <div class="cart-item">
                    <span>${item.product} - $${item.price}</span>
                    <button onclick="removeFromCart(${index})">Remove</button>
                </div>`;
        });
        cartTotal.textContent = `Total: $${total}`;
    }
}

const toggleCart = () => {
    const cartDiv = document.getElementById('cart');
    cartDiv.style.display = (cartDiv.style.display === 'none' || cartDiv.style.display === '') ? 'block' : 'none';
}