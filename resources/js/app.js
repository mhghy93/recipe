require("./bootstrap");

let ingredients = document.getElementById("ingredients");
let ingredientsButton = document.getElementById("ingredientsButton");

function addIngredients() {
    let previousValue = ingredients.value;
    ingredients.value = previousValue + ",";
}

ingredientsButton.addEventListener("click", addIngredients);
