const addToCartButtons = document.querySelectorAll('.add-to-cart');

addToCartButtons.forEach(button => {
  button.addEventListener('click', addToCart);
});

function addToCart(event) {
  const productId = event.target.getAttribute('data-product-id');
  const product = {
    id: productId,
    name: `Producto ${productId}`,
    price: getProductPrice(productId)
  };

  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.push(product);
  localStorage.setItem('cart', JSON.stringify(cart));
}

function getProductPrice(productId) {
  switch (productId) {
    case '1':
      return 10;
    case '2':
      return 20;
    default:
      return 0;
  }
}
