/*var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function(){
    if(xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
    }
}

xhr.open("GET","msj.txt",true);
xhr.send();
*/

const btn = document.querySelector("#buton");

btn.addEventListener('click',function(){
    const xhr= new XMLHttpRequest();
    xhr.open("GET","bilgi.json",true);

    xhr.onload = function(){
        if(this.status === 200) {
            let bilgiler =JSON.parse(this.responseText)

            let html=""; 
            bilgiler.forEach(bilgi => {
                html+=`
                <tr>
                    <td>${bilgi.ad}</td>
                    <td>${bilgi.soyad}</td>
                    <td>${bilgi.yas}</td>
                    <td>${bilgi.giriscikistarih}</td>
                </tr>
                `;
            });

            document.querySelector("#tbodybilgi").innerHTML=html;


        }
    }
    xhr.send();
});

/*function jsonfunctation(){
        const xhr= new XMLHttpRequest();
    xhr.open("GET","bilgi.json",true);

    xhr.onload = function(){
        if(this.status === 200) {
            console.log(this.responseText);
        }
    }
    xhr.send();
}*/
