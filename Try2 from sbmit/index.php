<!DOCTYPE hmtl5>
 <html> 
<title>S&M reqest form</title>
<head>
	<meta charset="UTF-8">
	</head>
<body>
		
<form method="POST" action="/newRequest.php" class="js-form">
    имя<br>
    <input type="text" name="name" value=""><br>
    коментарий<br>
    <textarea name="text"></textarea><br>
    <input type="submit" value="отправить">
</form>
<div class="request js-request"></div>

<script>

// отдельные классы с префиксом js- позволяют не зависеть от вёрстки
// на них не надо вешать никаких стилей (можно использовать id,
// но часто класс удобнее, так как позволяет создавать более одного элемента
// с таким именем на странице)

var inputName = document.querySelectorAll('input[name="name"]')[0];
var textareaText = document.querySelectorAll('textarea[name="text"]')[0];
var formEl = document.querySelectorAll('.js-form')[0]; // форма
var formMethod = formEl.getAttribute('method');
var formUrl = formEl.getAttribute('action');
var questionEl = document.querySelectorAll('.js-request')[0]; // вывод вопросов

formEl.addEventListener('submit', function(event) {
    event.preventDefault(); // отменяем стандартную отправку, будем отправлять сами
    sendquestion(function() {
        loadquestion();
    });
});

sendquestion(); // при загрузке сразу подтягиваем имеющиеся комментарии

function sendquestion(onSend) {
    var xhr = new XMLHttpRequest();
    var postquestion = 'name=' + inputName.value + '&' + 'text=' + textareaText.value;
    xhr.open(formMethod, formUrl + '?' + postquestion, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 201) {
                if (onSend) {
                    onSend();
                }
            } else {
                alert('Что-то пошло не так1!');
            }
        }
    };
    xhr.send();
}

function loadquestion() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', "/request.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                questionEl.innerHTML = xhr.responseText;
            } else {
                alert('Что-то пошло не так2!');
            }
        }
    };
    xhr.send();
}

</script> 
</body>
</html>
