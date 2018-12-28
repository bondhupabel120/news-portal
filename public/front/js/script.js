// Row Ajax//

// function emailCheck(email) {
//
//
//     var xmlHttp = new XMLHttpRequest();
//     var serverPage = 'http://127.0.0.1:8000/email-check/'+email;
//     xmlHttp.open('GET', serverPage);
//     xmlHttp.onreadystatechange = function (){
//         if  (xmlHttp.readyState == 4 && xmlHttp.status == 200){
//             document.getElementById('res').innerHTML = xmlHttp.responseText;
//             if  (xmlHttp.responseText == '<span class="text-danger">Email address already exist</span>'){
//                 document.getElementById('resBtn').disabled = true;
//             }   else {
//                 document.getElementById('resBtn').disabled = false;
//             }
//         }
//     }
//     xmlHttp.send();
// }

// Jquary Ajax//

function emailCheck(email) {
    $.ajax({
        url : 'http://127.0.0.1:8000/email-check/'+email,
        method : 'GET',
        data : {email:email},
        dataType : 'JSON',
        success : function(data){
            document.getElementById('res').innerHTML = data;
            if  (xmlHttp.responseText == '<span class="text-danger">Email address already exist</span>'){
                   document.getElementById('resBtn').disabled = true;
               }   else {
                   document.getElementById('resBtn').disabled = false;
               }
           }
    });
}