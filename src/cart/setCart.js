// import
import {
  getStorageItem,
  setStorageItem,
  formatPrice,
  getElement,
} from '../utils.js'
import { openCart } from './toggleCart.js'
import { findProduct } from '../ecycle-store.js'
import addToCartDOM from './addToCartDOM.js'
// set items

const cartItemCountDOM = getElement('.cart-item-count')
const cartItemsDOM = getElement('.cart-items')
const cartTotalDOM = getElement('.cart-total')

// intialize cart
let cart = getStorageItem('cart')

export const addToCart = (id) => {
  let item = cart.find((cartItem) => cartItem.id === id)

  if (!item) {
    let product = findProduct(id)
    // add item to the the
    product = { ...product, amount: 1 }
    cart = [...cart, product]
    // add item to the DOM;
    addToCartDOM(product)
  } else {
    // update values
    const amount = increaseAmount(id)
    const items = [...cartItemsDOM.querySelectorAll('.cart-item-amount')]
    const newAmount = items.find((value) => value.dataset.id === id)
    newAmount.textContent = amount
  }
  // add one to the item count
  displayCartItemCount()
  // display cart totals
  displayCartTotal()
  // set cart in local storage

  setStorageItem('cart', cart)
  //more stuff coming up
  openCart()
}

// displays item count
function displayCartItemCount() {
  const amount = cart.reduce((total, cartItem) => {
    return (total += cartItem.amount)
  }, 0)
  cartItemCountDOM.textContent = amount
}
//total cart
function displayCartTotal() {
  let total = cart.reduce((total, cartItem) => {
    return (total += cartItem.price * cartItem.amount)
  }, 0)
  cartTotalDOM.textContent = `Total : ${formatPrice(total)} `
}
function displayCartItemsDOM() {
  cart.forEach((cartItem) => {
    addToCartDOM(cartItem)
  })
}
// removeItem
function removeItem(id) {
  cart = cart.filter((cartItem) => cartItem.id !== id)
}
// increase totalamount
function increaseAmount(id) {
  let newAmount
  cart = cart.map((cartItem) => {
    if (cartItem.id === id) {
      newAmount = cartItem.amount + 1
      cartItem = { ...cartItem, amount: newAmount }
    }
    return cartItem
  })
  return newAmount
}
// decrease amount
function decreaseAmount(id) {
  let newAmount
  cart = cart.map((cartItem) => {
    if (cartItem.id === id) {
      newAmount = cartItem.amount - 1
      cartItem = { ...cartItem, amount: newAmount }
    }
    return cartItem
  })
  return newAmount
}

function setCartFunctionality() {
  cartItemsDOM.addEventListener('click', function (e) {
    const element = e.target
    const parent = e.target.parentElement
    const id = e.target.dataset.id
    const parentID = e.target.parentElement.dataset.id

    // remove
    if (element.classList.contains('cart-item-remove-btn')) {
      removeItem(id)
      // parent.parentElement.remove();
      element.parentElement.parentElement.remove()
    }
    // increase
    if (parent.classList.contains('cart-item-increase-btn')) {
      const newAmount = increaseAmount(parentID)
      parent.nextElementSibling.textContent = newAmount
    }
    // decrease
    if (parent.classList.contains('cart-item-decrease-btn')) {
      const newAmount = decreaseAmount(parentID)
      if (newAmount === 0) {
        removeItem(parentID)
        parent.parentElement.parentElement.remove()
      } else {
        parent.previousElementSibling.textContent = newAmount
      }
    }

    displayCartItemCount()
    displayCartTotal()
    setStorageItem('cart', cart)
  })
}
function setRemoveItemFromCart(cart, id, btn) {
  // remove
  btn.addEventListener(click, () => {
    removeItem(id)
    cartItemsDOM.target.parentElement.parentElement.remove()
  })
  setStorageItem('cart', cart)
  displayCartItemCount()
  displayCartTotal()
}
const init = () => {
  // display amount of cart items
  displayCartItemCount()
  // display total
  displayCartTotal()
  // add all cart items to the dom
  displayCartItemsDOM()
  // setup cart functionality
  setCartFunctionality()
}
init()

// named exports
export { displayCartTotal }
