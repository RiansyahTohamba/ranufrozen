// products.js
var products = [
    {
        price: 'Rp 30.000',
        photoPath: 'breakfast_item.jpg',
        name: 'Nugget Asam Manis',
        stock: 4,
        desc: 'Rasa asam manis nya bikin nyam nyam',
    },
    {
        price: 'Rp 50.000',
        photoPath: 'lunch_item.jpg',
        name: 'Nugget Karage',
        stock: 0,
        desc: 'Enak sekali loh coba saja beli nyam nyam',
    },
    {
        price: 'Rp 25.000',
        photoPath: 'dinner_item.jpg',
        name: 'Sayap Ayam',
        stock: 1,
        desc: 'Sayap sayap patah',
    },
];
products.forEach(function(pro){
    let item = $("<div>", {"class": "item col-md-12","style":"padding-bottom: 20px"});
    let food = $("<div>", {"class": "food-item"});
    let foodImg = $("<img>", {"src": "img/"+pro.photoPath});
    let foodPrice = $("<div>", {"class": "price"}).append(pro.price);
    let textContent = $("<div>", {"class": "text-content"});
    let urlWa = "https://wa.me/6281295957942?text=Stock "+pro.name+" nya ready Mba?";
    let btnOrder = $("<a>", {"href": urlWa,"class":"btn btn-primary"}).text('Beli');
    
    if (pro.stock == 0) {
        let urlWa = "https://wa.me/6281295957942?text=Saya ingin pre-order untuk "+pro.name+" Mba.";
        let btnOrder = $("<a>", {"href": urlWa,"class":"btn btn-danger"}).text('Pre-Order');
    } 

    $("#products").append(item);
    item.append(food);
    food.append(foodImg);
    food.append(foodPrice);
    food.append(textContent);
    textContent.append("<h4>"+pro.name+"</h4><p>"+pro.desc+"</p>");
    textContent.append(btnOrder);
});
