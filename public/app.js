const baseurl = 'http://127.0.0.1:8080/';
const config = {
    headers: {
        'Content-Type': 'application/json; charset=UTF-8',
        'Access-Control-Allow-Methods': 'GET, OPTIONS',
        'Access-Control-Allow-Headers': 'Content-Type, Content-Length, Accept-Encoding',
    }
}

document.addEventListener("DOMContentLoaded", () => {
    readAll();
});

const readAll = async () => {
    await axios.get(baseurl  + 'read/', config)
        .then((response) => {
            console.log(response.data);
        })
        .catch((error) => {
            console.log(error);
        });
}