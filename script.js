const cartCount=0
function addToCart(price){
    cartCount++;
    document.getElementById('art-count').innerText=cartCount;
    alert("Added to cart! Price: $"=price)
}