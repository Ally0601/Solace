//It will load the function after 1ms (It wasn't loading properly using DOMContentLoaded, so jugad )
setTimeout(() => {
    // Dynamically populate the HTML page with details about the Books from booksData.js
    let container = document.getElementById("bookWish")
    let template = document.getElementById("wishTemplate").content

    let wishObject
    if (localStorage.getItem("wish")) {
        wishObject = JSON.parse(localStorage.getItem("wish"))    

        wishObject.forEach(book => {
            let copyTemplate = document.importNode(template, true)
            copyTemplate.querySelector(".bookImage").src = book.img
            copyTemplate.querySelector(".bookTitle").textContent = book.title
            copyTemplate.querySelector(".bookCategory").textContent = book.category
    
            //Adds event listener on each button and passes that specific book's ID to the handler function
            copyTemplate.querySelector(".removeItem").addEventListener("click", () => handleRemoveItem(book.bookId))
            copyTemplate.querySelector(".addToCart").addEventListener("click", () => handleAddToCart(book.bookId))
    
            //Adds the HTML template for the specific book to the DOM
            container.appendChild(copyTemplate)
        });
    }
    
    //Store details of each book in the browser's Local Storage
    localStorage.setItem("booksData", JSON.stringify(listOfBooks) ) //listOfBooks is from booksData.js

}, 1);


const handleRemoveItem = bookId =>  {
    let wishObj = JSON.parse(localStorage.getItem("wish"))
    for (let i = 0; i < wishObj.length; i++) {
        if (wishObj[i].bookId == bookId) {
            wishObj.splice(i, 1)
            break
        }
    }

    //Update the cart in local storage
    localStorage.setItem("wish", JSON.stringify(wishObj))

    location.reload()
}


const handleAddToCart = bookId => {

    if (cart.length<6)
    {
    let newBook
    listOfBooks.forEach(book => {
        if(book.bookId == bookId){  //checks book id
            newBook=book    //Assigns the book object containing book details to the newBook variable
        }
    })

    let cart = []
    if (localStorage.getItem("cart")) { //Checks if a cart list already exists in the local storage
        cart = JSON.parse(localStorage.getItem("cart"))
    }
    
    
    cart.push(newBook)
    
    //Update the cart list in local storage
    localStorage.setItem("cart", JSON.stringify(cart))
    

    //Call the remove function
    handleRemoveItem(bookId)
   }

}