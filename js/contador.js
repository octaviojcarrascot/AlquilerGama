const array =[420,419,357,547]

let text = "";
for (let i = 0; i < array.length; i++){
    text +="<ul>"+array[i]+"</ul>"
    
}
document.getElementById('tablaCocherasdisponible').innerHTML = text

