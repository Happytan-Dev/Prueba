const tableBody = document.querySelector('#infoT tbody');

fetch('https://jsonplaceholder.typicode.com/posts')
  .then(response => response.json())
  .then(data => {
    data.forEach(data => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${data.id}</td>
        <td>${data.title}</td>
        <td>
            <a onclick="Click(${data.id})" class="btn btn-small btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-eye"></i></a>
        </td>
      `;
      tableBody.appendChild(row);
    });
  })
  .catch(error => console.error('Error:', error));


    function Click(id) {
        fetch(`backend.php?id=${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById("exampleModalLabel").textContent = data.title;
                document.getElementById("body").textContent = data.body;
            })
        .catch(error => console.error("Error al obtener detalles:", error));
    }