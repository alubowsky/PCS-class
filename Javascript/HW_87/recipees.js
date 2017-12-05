/*global $*/
(function() {
    "use strict";
    var recipeDiv = $("#recipeDiv");

    function showRecipe(recipe){
        recipeDiv.empty();

        $("<h2>" + recipe.name + "</h2>" +
        "<img src=" + recipe.url + " alt= 'picture of " + recipe.name +"'>").appendTo(recipeDiv);

        recipe.ingredients.forEach(function(element) {
            $("<h3>" + element + "</h3>").appendTo(recipeDiv);
        });

        recipeDiv.show();
    }


function loadRecipe(recipe){
    $.get("getRecipes.php", function (loadedRecipe) {
        showRecipe(loadedRecipe[recipe]);
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