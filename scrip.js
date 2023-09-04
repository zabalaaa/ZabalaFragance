const addToCartButtons = document.querySelectorAll('.btn');

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
      return 12000;
    case '2':
      return 2500;      
    case '3':
      return 7199;
    case '4':
      return 8999;
    case '5':
      return 9999;
    case '6':
      return 8000;

      default:
      return 0;
  }
}



