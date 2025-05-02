
  document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("cards-container");
    const imoveisParceria = JSON.parse(localStorage.getItem("imoveisParceria")) || [];

    imoveisParceria.forEach(imovel => {
      const card = document.createElement("div");
      card.className = "col-xl-4 col-md-6 col-12";
      card.innerHTML = `
        <div class="card h-100">
          <img src="./assets/construtoras/GET ONE.jpg" class="card-img-top" alt="Imagem do imóvel">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">${imovel.residencial}</h5>
            <p style="text-align: start;">
              <i class="bi bi-house-door-fill"></i> ${imovel.quartos} quartos <br>
              <i class="bi bi-cash-stack"></i> Valor: ${imovel.valor} <br>
              <i class="bi bi-geo-alt-fill"></i> Bairro: ${imovel.bairro} <br>
              <i class="bi bi-journal-text"></i> Pretensão: ${imovel.pretencao}
            </p>
            <a href="#" class="btn btn-primary mt-auto" target="_blank">Whatsapp Corretor</a>
          </div>
        </div>
      `;
      container.appendChild(card);
    });
  });

