var chatMessagesContainer = document.querySelector(".messages-container");
var inputContainer = document.querySelector("#message-input");
var usernameInput = document.querySelector("#username-input");

inputContainer.addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        sendMessage();
    }
});

var messages = [];
function getMessageId() {
    return messages.length === 0 ? 0 : messages[messages.length - 1].id;
}

function getMessage() {
    $.ajax({
        type: "post",
        data: { messageId: getMessageId() },
        url: "php/get-message.php"
    })
    .done(function(response) {
        if (response !== "") {
            let m = JSON.parse(response);

            for (let i = 0; i < m.length; i++)
                messages.push(m[i]);

            for (let i = 0; i < m.length; i++) {
                let mess = document.createElement("div");
                let pMessage = document.createElement("p");
                let pNickname = document.createElement("p");

                pMessage.innerText = m[i].message;
                pNickname.innerText = m[i].username;
                pNickname.classList.add("username");

                mess.classList.add("message");

                if(usernameInput.value == m[i].username){
                    mess.classList.add("user");
                    pNickname.innerText = "you";
                }

                mess.append(pMessage);
                mess.append(pNickname);

                chatMessagesContainer.appendChild(mess);
            }
            
            chatMessagesContainer.scrollTo(0, chatMessagesContainer.scrollHeight + 100);
        }
    });
}

function sendMessage() {
    var text = document.querySelector("#message-input");
    var textValue = text.value;

    if(textValue !== "") {
        console.log(textValue);
        $.ajax({
            type: "post",
            data: { message: textValue },
            url: "php/send-message.php"
        });
    }

    text.value = "";
}

getMessage();
setInterval(getMessage, 500);
