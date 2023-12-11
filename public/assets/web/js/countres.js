fetch('assets/web/js/countries.json')
    .then((res) => res.json())
    .then((json)=>{
        let html = '';
        json['countries'].forEach((el)=>{
            html += `<option value="${el.code}"> ${el.name}</option>`
        });
        document.getElementById('country').innerHTML = html;
    });
