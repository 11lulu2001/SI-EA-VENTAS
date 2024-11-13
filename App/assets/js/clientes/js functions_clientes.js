document.addEventListener("DOMContentLoaded", () => {
    loadtable();
})
function loadtable() {
    let table = document.getElementById("table-body");
    let url = base_url + "logic/clientes/read.php";
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error("ocurrio un error inesperado: " + response.status);

            }
            return response.json();
        })
        .then((data) => {
            if (data.status) {
                const arrData = data.data
                let row = "";
                arrData.forEach((Element) => {
                    row += `<tr>
                        <td>${Element.idCustomer}</td>
                        <td>${Element.c_name}</td>
                        <td>${Element.c_lastName}</td>
                        <td>${Element.c_dni}</td>
                        <td>${Element.c_nationality}</td>
                        <td>${Element.c_dateBirth}</td>
                        <td>${Element.c_numberphone}</td>
                        <td>${Element.c_email}</td>
                        <td>${Element.u_idUser}</td>
                        <td>Botones</td>
                     </tr>`;
                });
                table.innerHTML = row;
            }
        })
        .catch((error) => {
            console.log(error);
        });


}
