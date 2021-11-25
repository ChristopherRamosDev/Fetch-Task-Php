let form = document.querySelector('#formSend');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    let nameTask = document.querySelector('#nameTask');
    let type = document.querySelector('#type');
    let desc = document.querySelector('#desc');
    let data = new FormData(form);
    fetch('register.php', {
        method: 'POST',
        body: data
    }).then(data => data.json())
        .then(data => { 
            Swal.fire(
                'Buen trabajo',
                'Registro exitoso',
                'success'
              )
            let task = document.querySelector('#task')
            const newTask = document.createElement('tr')
            newTask.innerHTML = `
                <td>${data[0].id}</td>
                <td>${data[0].name}</td>
                <td>${data[0].type}</td>
                <td>${data[0].description}</td>
            `;          
            task.appendChild(newTask)
        })
    type.value = ""
    nameTask.value = ""
    desc.value = ""
})