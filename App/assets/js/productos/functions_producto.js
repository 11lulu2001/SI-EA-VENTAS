document.addEventListener("DOMContentLoaded", () => {
    loadtable();
})
function loadtable() {
    let table = document.getElementById("table-body");
    let url = base_url + "logic/producto/read.php";
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
                     <td>${Element.idProducts}</td>
                     <td>${Element.p_name}</td>
                     <td>${Element.p_descripction}</td>
                     <td>${Element.c_idCategories}</td>
                     <td>${Element.p_dueDate}</td>
                     <td>${Element.p_costprice}</td>
                     <td>${Element.p_salePrice}</td>
                     <td>${Element.p_discount}</td>
                     <td>${Element.p_stock}</td> 
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
