const { remove } = require("lodash")

$("document").ready(function(){
    setTimeout(function(){
        $("div.alerrt").remove();
    },3000);
})