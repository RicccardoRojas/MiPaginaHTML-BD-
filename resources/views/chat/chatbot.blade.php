<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    
    <div id="chat-container">
        <div id="chat-header" class="bg-dark text-white" onclick="toggleChat()">Hola ¿Como Puedo Ayudarte?</div>
        <div id="chat-body"></div>
        <input type="text" id="chat-input" class="form-control" placeholder="Escribe tu pregunta..." onkeyup="handleKeyPress(event)">
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <script>

        function toggleChat() {
          var chatContainer = document.getElementById("chat-container");
          var chatBody = document.getElementById("chat-body");
      
          if (chatContainer.style.height === "300px") {
            chatContainer.style.height = "60px";
            chatBody.style.display = "none";
          } else {
            chatContainer.style.height = "300px";
            chatBody.style.display = "block";
            chatBody.scrollTop = chatBody.scrollHeight;
          }
        }
      
        function handleKeyPress(event) {
        if (event.key === "Enter") {
          var inputElement = document.getElementById("chat-input");
          var message = inputElement.value;

       if (message.trim() !== "") {
         appendMessage("Tu", message);
         
          enviarPregunta(message);

          inputElement.value = "";
       }
     }
  }
    
function enviarPregunta(pregunta) {

fetch('/muro', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ pregunta: pregunta })
    })
    .then(response => response.text())
    .then(respuesta => {
        appendMessage("Asistente", respuesta);
    })
    .catch(error => {
        console.error('Error al enviar la pregunta:', error);
    });
}
 
        function appendMessage(sender, text) {
          var chatBody = document.getElementById("chat-body");
          var messageElement = document.createElement("div");
          messageElement.className = "message-" + sender;
          messageElement.innerHTML = "<strong>" + sender + ":</strong> " + text;
          chatBody.appendChild(messageElement);
          chatBody.scrollTop = chatBody.scrollHeight;
        }
      </script>

