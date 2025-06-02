document.addEventListener("DOMContentLoaded", function() {
    fetch('data.xml')
        .then(response => response.text())
        .then(xmlString => {
            let parser = new DOMParser();
            let xmlDoc = parser.parseFromString(xmlString, "text/xml");
            let cars = xmlDoc.getElementsByTagName("car");
            let carList = document.getElementById("carList");

            for (let car of cars) {
                let name = car.getElementsByTagName("name")[0].textContent;
                let price = car.getElementsByTagName("price")[0].textContent;
                let location = car.getElementsByTagName("location")[0].textContent;
                let image = car.getElementsByTagName("image")[0].textContent;

                let carDiv = document.createElement("div");
                carDiv.innerHTML = `
                    <img src="${image}" alt="${name}" width="250">
                    <strong>${name}</strong> - ${price} (${location})
                `;
                carList.appendChild(carDiv);
            }
        })
        .catch(error => console.error("Error loading XML data:", error));
});