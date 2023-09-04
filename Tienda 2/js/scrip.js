const addToCartButtons = document.querySelectorAll('.btn');

addToCartButtons.forEach(button => {
  button.addEventListener('click', addToCart);
});

function addToCart(event) {
  const productId = event.target.getAttribute('data-product-id');
  const product = {
    id: productId,
    name: `Producto ${productId}`,
    price: 10
  };

  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.push(product);
  localStorage.setItem('cart', JSON.stringify(cart));
}