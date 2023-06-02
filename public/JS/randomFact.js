// let popup = document.getElementById('myPopup');

// const { range } = require("lodash");

// popup.innerHTML = factText;
// var popup = document.getElementById("myPopup");
// popup.classList.toggle("show");
// function submitForm() {
// }
function testResults(form) {
    let fact = ''
    let result = form.inputbox.value;
    if (result === 'randomFact') {
        fact = 'random';
    } else if(result === 'factOfTheDay') {
        fact = 'today';
    }
    change_message(fact)
}
function change_message(type) {
    fetch(`https://uselessfacts.jsph.pl/api/v2/facts/${type}`, {
        headers: {
            Accept: "application/json; charset=utf-8",
            "Content-Type": "application/json; charset=utf-8",
        }
    })
        .then(function (response) {
            // Parse response as JSON
            return response.json();
        })
        .then(function (data) {
            // Extract text from the JSON data
            const factText = data.text;

            // Log the fact text to the console
            console.log(factText);

            // You can now use the fact text to update your HTML or perform any other operations
            let popup = document.getElementById('myPopup');
            popup.innerHTML = factText;
            popup.classList.toggle("show");
        })
        .catch(function (error) {
            // Handle error
            console.log(error);
        });
}
