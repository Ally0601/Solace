
document.addEventListener("DOMContentLoaded", function(){

    // Dynamically populate the HTML page with details about the Books from booksData.js
    let container = document.getElementById("books")
    let template = document.getElementById("bookTemplate").content
    listOfBooks.forEach(book => {
        let copyTemplate = document.importNode(template, true)
        copyTemplate.querySelector(".bookImage").src = book.img
        copyTemplate.querySelector(".bookTitle").textContent = book.title
        copyTemplate.querySelector(".bookCategory").textContent = book.category
        copyTemplate.querySelector(".bookDescription").textContent = book.description

        //Adds event listener on each button and passes that specific book's ID to the handler function
        copyTemplate.querySelector(".addToCart").addEventListener("click", () => handleAddToCart(book.bookId))
        copyTemplate.querySelector(".addToWish").addEventListener("click", () => handleAddToWish(book.bookId))

        //Adds the HTML template for the specific book to the DOM
        container.appendChild(copyTemplate)
    });

    //Store details of each book in the browser's Local Storage
    localStorage.setItem("booksData", JSON.stringify(listOfBooks) ) //listOfBooks is from booksData.js

}, false)


function handleAddToCart (bookId) {

    let newBook
    listOfBooks.forEach(book => {
        if(book.bookId == bookId){  //checks book id
            newBook=book    //Assigns the book object containing book details to the newBook variable
        }
    })

    let cart = []
    if (localStorage.getItem("cart")) { //Checks if a cart already exists in the local storage
        cart = JSON.parse(localStorage.getItem("cart"))
    }
    if (cart.length < 6)
    {
        cart.push(newBook)
    
        localStorage.setItem("cart", JSON.stringify(cart))
    }

}

const handleAddToWish = bookId => {

    let newBook
    listOfBooks.forEach(book => {
        if(book.bookId == bookId){  //checks book id
            newBook=book    //Assigns the book object containing book details to the newBook variable
        }
    })

    let wish = []
    if (localStorage.getItem("wish")) { //Checks if a wish list already exists in the local storage
        wish = JSON.parse(localStorage.getItem("wish"))
    }
    wish.push(newBook)
    
    localStorage.setItem("wish", JSON.stringify(wish))

}