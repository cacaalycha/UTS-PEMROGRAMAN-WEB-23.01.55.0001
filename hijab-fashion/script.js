// Initialize cart as an empty array
let cart = [];

// Function to add an item to the cart
function addToCart(productName, price) {
    const item = {
        name: productName,
        price: price,
        quantity: 1
    };

    // Check if item is already in the cart
    const existingItem = cart.find(cartItem => cartItem.name === item.name);

    if (existingItem) {
        // Increase quantity if item exists
        existingItem.quantity += 1;
    } else {
        // Add new item if it doesn't exist in the cart
        cart.push(item);
    }

    alert(`${productName} telah ditambahkan ke keranjang!`);
    updateCartSummary();
}

// Function to update the cart summary in checkout
function updateCartSummary() {
    const cartSummary = document.getElementById("cart-summary");
    if (!cartSummary) return;

    cartSummary.innerHTML = "";

    cart.forEach(item => {
        const itemEl = document.createElement("div");
        itemEl.className = "cart-item";
        itemEl.innerHTML = `${item.name} (x${item.quantity}) - Rp${item.price * item.quantity}`;
        cartSummary.appendChild(itemEl);
    });

    const totalAmount = cart.reduce((total, item) => total + item.price * item.quantity, 0);
    const totalEl = document.createElement("div");
    totalEl.className = "cart-total";
    totalEl.innerHTML = `<strong>Total: Rp${totalAmount}</strong>`;
    cartSummary.appendChild(totalEl);
}

// Function to validate checkout form
function validateCheckoutForm() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const address = document.getElementById("address").value;
    const paymentMethod = document.getElementById("payment-method").value;

    if (!name || !email || !phone || !address || !paymentMethod) {
        alert("Mohon isi semua field.");
        return false;
    }

    alert("Pesanan Anda berhasil diproses!");
    return true;
}

// Event listeners for 'Tambah ke Keranjang' buttons
document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll(".btn-success");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function() {
            const productName = this.parentNode.querySelector("h3").textContent;
            const price = parseInt(this.parentNode.querySelector("p").textContent.replace("Rp", "").replace(".", ""));
            addToCart(productName, price);
        });
    });

    // Form submission event for checkout
    const checkoutForm = document.querySelector("form");
    if (checkoutForm) {
        checkoutForm.addEventListener("submit", function(event) {
            event.preventDefault();
            if (validateCheckoutForm()) {
                // Reset cart and form if order is successful
                cart = [];
                updateCartSummary();
                checkoutForm.reset();
            }
        });
    }
});
