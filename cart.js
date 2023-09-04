const cartList = document.getElementById('cart-list');
const cartTotal = document.getElementById('cart-total');

function updateCart() {
  cartList.innerHTML = '';
  
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  let total = 0;

  cart.forEach((product, index) => {
    const listItem = document.createElement('li');
    listItem.innerText = `${product.name} - $${product.price}`;

    const removeButton = document.createElement('button');
    removeButton.innerText = 'Eliminar';
    removeButton.setAttribute('class', 'remove-from-cart');
    removeButton.setAttribute('data-product-index', index);

    removeButton.addEventListener('click', removeFromCart);
    
    listItem.appendChild(removeButton);
    cartList.appendChild(listItem);
    total += product.price;
  });

  cartTotal.innerText = `$${total}`;
}

function removeFromCart(event) {
  const productIndex = parseInt(event.target.getAttribute('data-product-index'));

  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.splice(productIndex, 1);
  localStorage.setItem('cart', JSON.stringify(cart));

  updateCart(); // Actualiza la visualización del carrito
}

updateCart();