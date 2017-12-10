/*global $*/
(function() {
    "use strict";
    var recipeDiv = $("#recipeDiv");

    function showRecipe(recipe){
        recipeDiv.empty();

        $("<h2>" + recipe.name + "</h2>" +
        "<img src=" + recipe.url + " alt= 'picture of " + recipe.name +"'>").appendTo(recipeDiv);

        /*recipe.ingredients.forEach(function(element) {
            $("<h3>" + element + "</h3>").appendTo(recipeDiv);
        });*/

        recipeDiv.show();
    }


function loadRecipe(recipe){
    $.get("getRecipes.php", function (loadedRecipeData) {
        var loadedRecipe = JSON.parse(loadedRecipeData);
        loadedRecipe.find(function (element) {
            if ((element.name.replace(/\s+/g,'').trim().toLowerCase()) === (recipe.replace(/\s+/g,'').trim().toLowerCase())) {
                showRecipe(element);
                return element;
            }
          });
    });
}
        $('input:radio').each(function(){
            var that = this.value;
            $("#" + that).click(function(){
                loadRecipe(that);
            });
        });
    
}
());