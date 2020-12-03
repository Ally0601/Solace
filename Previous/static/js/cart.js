//It will load the function after 1ms (It wasn't loading properly using DOMContentLoaded, )
setTimeout(() => {
    // Dynamically populate the HTML page with details about the Books from booksData.js
    let container = document.getElementById("bookCart")
    let template = document.getElementById("cartTemplate").content

    let cartObject
    if (localStorage.getItem("cart")) {
        cartObject = JSON.parse(localStorage.getItem("cart"))
        document.getElementById("bookQty").textContent = cartObject.length

        cartObject.forEach(book => {
            let copyTemplate = document.importNode(template, true)
            copyTemplate.querySelector(".bookImage").src = book.img
            copyTemplate.querySelector(".bookTitle").textContent = book.title
            copyTemplate.querySelector(".bookCategory").textContent = book.category
    
            //Adds event listener on each button and passes that specific book's ID to the handler function
            copyTemplate.querySelector(".removeItem").addEventListener("click", () => handleRemoveItem(book.bookId))
            copyTemplate.querySelector(".addToWish").addEventListener("click", () => handleAddToWish(book.bookId))
    
            //Adds the HTML template for the specific book to the DOM
            container.appendChild(copyTemplate)
        });
    } else {
        document.getElementById("bookQty").textContent = "0" //If cart is empty
    }
    
    //Store details of each book in the browser's Local Storage
    localStorage.setItem("booksData", JSON.stringify(listOfBooks) ) //listOfBooks is from booksData.js

}, 1);

const emptyCart = () => {
    localStorage.setItem("cart", [])
}

const orderBooks = () => {
    let orderHistoryObject = JSON.parse(localStorage.getItem("cart"));
    localStorage.setItem("orderHistory", JSON.stringify(orderHistoryObject))
    emptyCart()
    location.reload()

}


const handleRemoveItem = bookId =>  {
    let cartObj = JSON.parse(localStorage.getItem("cart"))
    for (let i = 0; i < cartObj.length; i++) {
        if (cartObj[i].bookId == bookId) {
            cartObj.splice(i, 1)
            break
        }
    }

    //Update the cart in local storage
    localStorage.setItem("cart", JSON.stringify(cartObj))

    location.reload()
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
    
    //Update the wish list in local storage
    localStorage.setItem("wish", JSON.stringify(wish))

    //Call the remove function
    handleRemoveItem(bookId)

}