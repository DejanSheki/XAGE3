const table = document.querySelector('#table');

async function fetchData() {
    const dataFetch = await fetch('./script/getTable.php');
    const data = await dataFetch.json();
    createTable(data);
}

fetchData();

function createTable(data) {
    data.forEach(dat => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <th>${dat.ID}</th>
            <th>${dat.email}</th>
            <th>${dat.date}</th>
        `;
        table.appendChild(tr);
    });
}