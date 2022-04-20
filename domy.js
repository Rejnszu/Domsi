const houses = [
    {
      Dom: "Dom nr 1",
      "Powierzchnia Całkowita": "230m<sup>2<sup>",
      "Powierzchnia Użytkowa": "200m<sup>2<sup>",
      "Powierzchnia Garażu": "50m<sup>2<sup>",
      "Powierzchnia Działki": "500m<sup>2<sup>",
      "Liczba Pokoi": "6",
      "Liczba Miejsc w Garażu": "2",
      Cena: "100000zł",
      Status: "Zajęty",
      "Rzuty Domów": "<a href=''>rzut ></a>",
    },
    {
      Dom: "Dom nr 2",
      "Powierzchnia Całkowita": "230m<sup>2<sup>",
      "Powierzchnia Użytkowa": "200m<sup>2<sup>",
      "Powierzchnia Garażu": "50m<sup>2<sup>",
      "Powierzchnia Działki": "500m<sup>2<sup>",
      "Liczba Pokoi": "6",
      "Liczba Miejsc w Garażu": "2",
      Cena: "100000zł",
      Status: "dostępny",
      "Rzuty Domów": "<a href=''>rzut ></a>",
    },
    {
      Dom: "Dom nr 3",
      "Powierzchnia Całkowita": "230m<sup>2<sup>",
      "Powierzchnia Użytkowa": "200m<sup>2<sup>",
      "Powierzchnia Garażu": "50m<sup>2<sup>",
      "Powierzchnia Działki": "500m<sup>2<sup>",
      "Liczba Pokoi": "6",
      "Liczba Miejsc w Garażu": "2",
      Cena: "100000zł",
      Status: "dostępny",
      "Rzuty Domów": "<a href=''>rzut ></a>",
    },
    {
      Dom: "Dom nr 4",
      "Powierzchnia Całkowita": "230m<sup>2<sup>",
      "Powierzchnia Użytkowa": "200m<sup>2<sup>",
      "Powierzchnia Garażu": "50m<sup>2<sup>",
      "Powierzchnia Działki": "500m<sup>2<sup>",
      "Liczba Pokoi": "6",
      "Liczba Miejsc w Garażu": "2",
      Cena: "100000zł",
      Status: "dostępny",
      "Rzuty Domów": "<a href=''>rzut ></a>",
    },
    {
      Dom: "Dom nr 5",
      "Powierzchnia Całkowita": "230m<sup>2<sup>",
      "Powierzchnia Użytkowa": "200m<sup>2<sup>",
      "Powierzchnia Garażu": "50m<sup>2<sup>",
      "Powierzchnia Działki": "500m<sup>2<sup>",
      "Liczba Pokoi": "6",
      "Liczba Miejsc w Garażu": "2",
      Cena: "100000zł",
      Status: "dostępny",
      "Rzuty Domów": "<a href=''>rzut ></a>",
    },
    {
      Dom: "Dom nr 1",
      "Powierzchnia Całkowita": "230m<sup>2<sup>",
      "Powierzchnia Użytkowa": "200m<sup>2<sup>",
      "Powierzchnia Garażu": "50m<sup>2<sup>",
      "Powierzchnia Działki": "500m<sup>2<sup>",
      "Liczba Pokoi": "6",
      "Liczba Miejsc w Garażu": "2",
      Cena: "100000zł",
      Status: "dostępny",
      "Rzuty Domów": "<a href=''>rzut ></a>",
    },
    {
      Dom: "Dom nr 1",
      "Powierzchnia Całkowita": "230m<sup>2<sup>",
      "Powierzchnia Użytkowa": "200m<sup>2<sup>",
      "Powierzchnia Garażu": "50m<sup>2<sup>",
      "Powierzchnia Działki": "500m<sup>2<sup>",
      "Liczba Pokoi": "6",
      "Liczba Miejsc w Garażu": "2",
      Cena: "100000zł",
      Status: "dostępny",
      "Rzuty Domów": "<a href=''>rzut ></a>",
    },
  ];
  // TABELA DEKSTOPOWA
  let table = document.querySelector("[data-table]");
  (function () {
    let tr = document.createElement("tr");
    tr.className = "main-tr";
    Object.keys(houses[0]).forEach(function (house) {
      let th = document.createElement("th");
      th.className = "table-th";
      th.textContent = house;
      tr.append(th);
    });
    table.append(tr);
  })();

  houses.forEach(function (house) {
    let tr = document.createElement("tr");
    tr.className = "table-tr";
    Object.values(house).forEach(function (house) {
      let td = document.createElement("td");
      td.className = "table-td";
      td.innerHTML = house;
      tr.append(td);
    });

    table.append(tr);
  });

  let allTr = document.querySelectorAll(".table-tr");
  Array.from(allTr).forEach((tr, i) =>
    i % 2 == 0 ? tr.classList.add("even") : false
  );

  // TABELA MOBILNE

  let dataHouseTemplate = document.querySelector("[data-house-template]");
  let tableMobile = document.querySelector(".table-mobile");

  houses.forEach(function (house, i) {
    let houseCard = dataHouseTemplate.content.cloneNode(true).children[0];
    let dataHouseTitle = houseCard.querySelector("[data-house-title]");
    let dataHouseUl = houseCard.querySelector("[data-house-ul");

    houses.forEach(function (house) {
      delete house.Dom;
    });
    for (let [key, value] of Object.entries(house)) {
      let li = document.createElement("li");
      let span1 = document.createElement("span");
      let span2 = document.createElement("span");
      span1.innerHTML = key;
      span2.innerHTML = " : " + value;
      li.append(span1);
      li.append(span2);
      dataHouseUl.append(li);
    }

    dataHouseTitle.innerHTML = `Dom nr  ${i + 1}`;
    tableMobile.append(houseCard);
  });
  let offerTitle = document.querySelectorAll(".house-title");
  let houseOffer = document.querySelectorAll(".house-offer");
  houseOffer[0].classList.add("active");
  offerTitle[0].classList.add("active");
  offerTitle.forEach(function (offer) {
    offer.addEventListener("click", function () {
      this.classList.toggle("active");
      this.nextElementSibling.classList.toggle("active");
    });
  });