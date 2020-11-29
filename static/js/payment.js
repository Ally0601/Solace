const emptyCart = () => {
    localStorage.setItem("cart", [])
}

const orderBooks = () => {
    let orderHistoryObject = JSON.parse(localStorage.getItem("cart"));
    localStorage.setItem("orderHistory", JSON.stringify(orderHistoryObject))
    emptyCart()
    


}