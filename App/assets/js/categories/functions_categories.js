document.addEventListener("DOMContentLoaded", () => {
    loadtable();
    sendData();
});
function loadtable() {
    let table = document.getElementById("table-body");
    let url = base_url + "logic/categories/read.php";
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
                            <td>${Element.idCategories}</td>
                            <td>${Element.c_name}</td>
                            <td>${Element.c_descripcion}</td>
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
function sendData() {
    let dataFormsend = document.getElementById("formSend");
    dataFormsend.addEventListener("submit", (e) => {
        e.preventDefault();
        const data = new FormData(dataFormsend);
        const encabezados = new Headers();
        const config = {
            method: "POST",
            headers: encabezados,
            node: "cors",
            cache: "no-cache",
            body: data,
        };
        const url = base_url + "logic/categories/create.php";
        fetch(url, config)
            .then((result) => {
                if (!result.ok) {
                    throw new Error("ocurrio un error inesperado:" + result.status);
                }
                return result.json();
            })
            .then((resData) => {
                if (resData.status) {
                    loadtable();
                    dataFormsend.reset();
                    alert(resData.msg);
                } else {
                    alert(resData.msg);
                }
            })
            .catch((error) => {
                console.log(error);
            });
    });
}
