setTimeout(() => {
    // Dynamically populate the HTML page with details about the Books from booksData.js
    let container = document.getElementById("bookOrder")
    let template = document.getElementById("orderTemplate").content

    let orderHistoryObject
    if (localStorage.getItem("orderHistory")) {
        orderHistoryObject = JSON.parse(localStorage.getItem("orderHistory"))

        orderHistoryObject.forEach(book => {
            let copyTemplate = document.importNode(template, true)
            copyTemplate.querySelector(".bookImage").src = book.img
            copyTemplate.querySelector(".bookTitle").textContent = book.title

            //Adds the HTML template for the specific book to the DOM
            container.appendChild(copyTemplate)
        });
    }


}, 1);