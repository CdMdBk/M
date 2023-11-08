fetch('../../backend/admin/list-records.php')
    .then(response => {
    return response.json();
}).then(data => {
    console.log(data);

    recordContainer.innerHTML = record;
    for (let iterator = 0; iterator < data.length; iterator++) {
        record = `
            <div class="orders-data__order">
                <p class="orders-data__cell orders-data__cell_font">
                    ${data[iterator]['id']}
                </p>
        
                <p class="orders-data__cell orders-data__cell_font">
                    ${data[iterator]['status']}
                </p>
                
                <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                        id="">
                    <option value="">
                        ${data[iterator]['status']}
                    </option>
                    
                    <option value="">
                        ${data[iterator]['other_status']}
                    </option>
                </select>
        
                <p class="orders-data__cell orders-data__cell_font">
                    ${data[iterator]['client']}
                </p>
        
                <p class="orders-data__cell orders-data__cell_font">
                    ${data[iterator]['style']}
                </p>
        
                <p class="orders-data__cell orders-data__cell_font">
                    ${data[iterator]['date']}
                </p>
        
                <p class="orders-data__cell orders-data__cell_font">
                    ${data[iterator]['amount']}
                </p>
            </div>
        `;
        recordContainer.innerHTML += record;
    }
});